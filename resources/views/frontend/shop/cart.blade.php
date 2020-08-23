@extends('frontend.layout.master')
@section('title','Shop Cart')
@push('css')
@endpush
@section('content')
    

<section id="subheader" data-speed="8" data-type="background">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Cart Details</h1>
                <ul class="crumb">
                    <li><a href="{{ url('/')}}">Home</a></li>
                    <li class="sep">/</li>
                    <li>Cart Details</li>
                    @if (@$data['service'])                                    
                        <li class="sep">/</li>
                        <li>{{@$data['service']}}</li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</section>

<div id="content mt-5 mb-5">
    <div class="container bg-white mt-5 mb-5">
        <div class="row">
                <div class="col-lg-12 mt-5 mb-5">
                    @if (@count(Cart::content()) > 0 )
                    <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th class="">Product Name</th>
                              <th class="text-center">Product Image</th>
                              <th>Price</th>
                              <th class="text-center">Quantity</th>
                              <th class="text-center">Total SFT</th>
                              <th class="text-center">Total Price</th>
                              <th class="text-right">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                             @foreach (Cart::content() as $key => $item)                             
                                <tr>
                                    <td>
    
                                        <div class="text-muted">{{ @$item->name }}</div>
                                    </td>
                                    <td class="text-center">
                                        <img src="{{ asset(@$item->options['image']) }}" class="fluid-img" width="80" height="80" alt="">
                                    </td>
                                    <td>
                                        <div class="text-muted">Tk.{{ @$item->options['price'] }}</div>
                                    </td>
                                    <td class="text-center"> {{ @$item->qty }} </td>
                                    <td class="text-center"> {{ @$item->options['qty_sft'] ? $item->options['qty_sft']: 20 }}</td>
                                    <td class="text-center"> Tk.{{ @$item->price }}</td>
                                    <td class="text-right"> <button onclick="GlobaldeleteId(`{{$item->rowId}}`,`product-cart/delete/`);" class="btn btn-danger"> <i class="fa fa-trash"></i> </button></td>
                                </tr>
                              @endforeach
                          <tr>
                            <td colspan="5" class="strong text-right">@lang('language.grand_total')</td>
                            <td class="text-right">Tk.{{Cart::subtotal() }}</td>
                          </tr>
                          </tr>
                         </tbody>
                        </table>
                    </div>
                    @endif
                 <div class="modal-footer">
                    <a href="{{url('/')}}" class="btn btn-secondary">Continue Shopping</a>
                    <a href="{{ route('cart.information')}}" class="btn btn-primary ml-auto">Checkout</a>
                </div>
                </div>
        </div>
    </div>
</div>

@endsection