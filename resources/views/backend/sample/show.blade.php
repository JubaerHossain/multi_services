@extends('backend.master')
@section('title', 'View')
@push('css')

@endpush
 @section('content') 
  <div class="container-xl mb-5">
    <!-- Page title -->
    <div class="page-header">
        <div class="card p-2">

            <div class="row flex-fill">
                <div class="col-auto">
                    <h2 class="page-title">
                        Sample sale @lang('supplied.show')
                    </h2>
                </div>
                <div class="col-auto ml-auto d-print-none">
                    <div class="d-flex">
                        <a href="{{url('/admin/sample/sale')}}">
                            Sample sale
                        </a>
                        <a href="javascript:;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><polyline points="9 6 15 12 9 18"></polyline></svg>
                        </a>
                        <a> Sample sale @lang('supplied.show') </a>
                    </div>
                </div>
            </div>

        </div>
        </div>
    <div class="row row-deck row-cards">
        <div class="col-md-12">
            <div class="card">
                <div class="row p-5">
                    <div class="col-md-8" id="suppliedhow">
                            <h2>{{@$data['show']->name}}</h2>                           
                            <hr>
                            <h3>Email</h3>
                            <h2>{{@$data['show']->email}}</h2>                           
                            <hr>
                            <h3>Mobile</h3>
                            <h2>{{@$data['show']->mobile}}</h2>                           
                            <hr>
                            <h3>Address</h3>
                            <h2>{{@$data['show']->address}}</h2>                           
                            <hr>
                            <h3>Company</h3>
                            <h2>{{@$data['show']->company}}</h2>                           
                            <hr>
                            <h3>Product</h3>
                            <h2>{{@$data['show']->product->title}}</h2>                           
                            <hr>
                            <h3>Service</h3>
                                 {{  @$data['show']->product->service->title}}
                            <hr>
                            <h3>Price</h3>
                                 Tk.{{  @$data['show']->product->price}}
                            <hr>
                            <h3>Quantity</h3>
                                 {{  @$data['show']->product->quantity}}
                            <hr>
                            <h3>Description</h3>
                                 {!!  @$data['show']->product->desc !!}
                            <hr>
                            <h3>Summary</h3>
                                 {!!  @$data['show']->product->summary !!}
                            <hr>
                           
                            
                            <h3>@lang('language.created_at')</h3>
                            {{ date('d-M-y', strtotime( @$data['show']->created_at ))}}
                            <hr>
                    </div> 
                    <div class="col-md-4 text-center">
                        <h3>@lang('language.attach_file')</h3>
                          <img src="{{ asset($data['show']->product->image) }}" width="400" alt="">
                    </div>

                </div>  
                <div class="card-footer text-right">
                    <div class="d-flex">
                        <a href="{{url('/admin/sample/sale')}}" class="btn btn-primary ml-auto">Back</a>
                    </div>
                </div>              
            </div>
        </div>
    </div>
</div>

@endsection