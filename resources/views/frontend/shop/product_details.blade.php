@extends('frontendlayout.master')
@section('title','Shop')
@push('css')
@endpush
@section('content')
<section id="subheader" data-speed="8" data-type="background">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Product Details</h1>
                <ul class="crumb">
                    <li><a href="{{ url('/')}}">Home</a></li>
                    <li class="sep">/</li>
                    <li>Product Details</li>
                    @if (@$data['service'])                                    
                        <li class="sep">/</li>
                        <li>{{@$data['service']}}</li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</section>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="product-details-image">
                        <img src="{{ asset($data['shop']->image) }}" class="img-fluid" alt="image">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="product-details-desc">
                        <h3>{{ $data['shop']->title }}</h3>

                        <div class="price">
                        <span class="new-price">Tk {{ $data['shop']->price }}</span>
                        </div>
                        <input type="text" hidden id="_id" value="{{ $data['shop']->id }}">
                        <input type="text" hidden id="price" value="{{ $data['shop']->price }}">
                        <p>{{ @$data['shop']->summary}}</p>

                        <div class="product-add-to-cart">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for=""><b class="primary_color">Length</b> in inch</label>
                                    <input type='number' name='length' id='length' class="form-control" placeholder="Enter length">
                                    <label class="error_custom" id="label_length"></label>
                                </div>
                                <div class="col-lg-6">
                                    <label for=""><b class="primary_color">Height</b> in inch</label>
                                    <input type='number' name='heigth' id='heigth' class="form-control" placeholder="Enter heigth">
                                    <label class="error_custom" id="label_heigth"></label>
                                </div>
                                <div class="col-lg-12 mt-2">
                                    <button class="btn custom_btn w-100" id="cal_pri_de">Get instance price!</button>
                                </div>
                            </div>
                        </div>
                        <p class="delivery pt-4 ">Delivery in 24 hours in Dhaka (Installation With All Accessories)</p>
                        <button class="btn custom_btn w-100" data-toggle="modal" data-target="#get_sampe_modal">Get free sample!</button>
                        <div class="product-add-to-cart mt-5">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="input-counter">
                                        <span class="minus-btn"><i class="fa fa-minus"></i></span>
                                        <input type="text"  min="1" value="1" id="show_qty">
                                        <span class="plus-btn"><i class="fa fa-plus"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <button class="btn custom_btn w-100" onclick="addToCart()" >Buy now!</button>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 pt-5 mt">
                    <h3>Description</h3>
                    <div class="products-details-tab-content">
                        <p> {{ $data['shop']->desc }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<form id="option-choice-form">
    <input type="text" hidden name="id" id="main_id" value="{{ $data['shop']->id }}">
    <input type="text" hidden name="price" id="_main_price" value="{{ $data['shop']->price }}">
    <input type="text" hidden name="qty" id="main_qty" value="1">
    <input type="text" hidden name="qty_sft" id="main_qty_sft" value="1">
    <input type="text" hidden name="main_length" id="main_length" value="1">
    <input type="text" hidden name="main_heigth" id="main_heigth" value="1">
    <input type="text" hidden name="user_id" value="{{ @Auth::id() }}">
    <input type="text" hidden name="user_name" value="{{ @Auth::user()->name }}">
</form>


  <div class="modal fade text-dark" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">          
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Product price Per Sqft Tk.<b class="_total_price_head"></b></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                            <th></th>
                          <th class="text-center" style="width: 25%">Length</th>
                          <th class="text-center" style="width: 20%">Height</th>
                          <th class="text-center" style="width: 35%">Total SFT</th>
                          <th class="text-center" style="width: 20%">Price</th>
                        </tr>
                      </thead>
                      <tbody>
                            <tr>
                                <td></td>
                                <td class="text-center" style="width: 25%"> <span id="_length"></span> </td>
                                <td class="text-center" style="width: 20%"> <span id="_heigth"></span></td>
                                <td class="text-center" style="width: 35%"><span id="_total_sft"></span></td>
                                <td class="text-center" style="width: 20%">Tk.<span id="_price"></span></td>
                            </tr>
                      <tr>
                        <td colspan="4" class="strong text-right">Grand Total</td>
                        <td class="text-center">Tk.<span id="_pric_grand"></span></td>
                      </tr>
                    </tbody>
                </table>
                  </div>
                <div class="col-lg-12"><span><b>NB:</b> Minimum 20 sft will be count.</span></div>
            </div>
        </div>
        <div class="modal-footer">
            <button onclick="addToCart()" class="btn btn-primary">Buy now!</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade text-dark" id="get_sampe_modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
            <form action="{{ route('front.product_get_sample') }}" method="POST" id="get_sample_free">
                @csrf
                <div class="modal-header">
                <input type="text" hidden name="_id" value="{{ $data['shop']->id  }}">
                <h5 class="modal-title" id="staticBackdropLabel">{{ $data['shop']->title }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                <label for="mobile">Mobile</label>
                                <input type="text" name="mobile" class="form-control" id="mobile" aria-describedby="emailHelp" placeholder="Enter mobile">
                                </div>
                                <div class="form-group">
                                <label for="company">Compnay</label>
                                <input type="text" name="company" class="form-control" id="company" aria-describedby="emailHelp" placeholder="Enter company">
                                </div>
                                <div class="form-group">
                                <label for="address">Adress</label>
                                <input type="text" name="address" class="form-control" id="address" aria-describedby="emailHelp" placeholder="Enter address">
                                </div>
                                <div class="form-group">
                                <label for="note">Note</label>
                                <textarea name="note" name="note" class="form-control" cols="10" rows="5" id="note"></textarea>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Send Request!</button>
                </div>
            </form>
      </div>
    </div>
  </div>
@endsection
@push('js')
 <script>
  $('.minus-btn').on('click',function () {
    if ($("#show_qty").val() > 1) {
        price(-1);
     }
  })
  $('.plus-btn').on('click',function () {
    price(1);
  })

  price = (val) => {   
        $('#_main_price').val('');   
        $('#main_qty_sft').val('');   
        $('#main_qty').val('');   
        $('#main_length').val('');   
        $('#main_heigth').val('');        
        var show_qty = parseInt($("#show_qty").val()) + parseInt(val)
        $("#main_qty").val(show_qty)
        $("#main_qty_sft").val(show_qty*20)
        $("#_main_price").val(parseFloat(parseFloat($('#price').val()) * show_qty))
        $("#show_qty").val(show_qty)
  }
 </script>
@endpush