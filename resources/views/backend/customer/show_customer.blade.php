@extends('backend.master')
@section('title', 'Customer view')
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
                        @lang('customers.title') @lang('customers.show')
                    </h2>
                </div>
                <div class="col-auto ml-auto d-print-none">
                    <div class="d-flex">
                        <a href="{{url('/supplier')}}">
                            @lang('customers.title')
                        </a>
                        <a href="javascript:;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><polyline points="9 6 15 12 9 18"></polyline></svg>
                        </a>
                        <a> @lang('customers.title') @lang('customers.show') </a>
                    </div>
                </div>
            </div>

        </div>
        </div>
    <div class="row row-deck row-cards">
        <div class="col-md-12">
            <div class="card">
                <div class="row p-5">
                    <div class="col-md-12" id="customershow">
                        <h2>{{@$data['show']->name}}</h2>
                           
                            <hr>
                            <h3>@lang('customers.phone')</h3>
                             {{  @$data['show']->phone }}
                            <hr>
                            <h3>@lang('customers.fax')</h3>
                             {{  @$data['show']->fax }}
                            <hr>
                            <h3>@lang('customers.address')</h3>
                             {{  @$data['show']->address }}
                            <hr>
                            <h3>@lang('customers.info')</h3>
                            <p>{!! @$data['show']->info !!}</p>
                            <hr>
                            <h3>@lang('customers.status')</h3>
                            @if ($data['show']->status == 1 )
                               Active 
                            @else
                                Inactive
                            @endif
                    </div> 

                </div>  
                <div class="card-footer text-right">
                    <div class="d-flex">
                        <a href="{{url('/supplier')}}" class="btn btn-primary ml-auto">Back</a>
                    </div>
                </div>              
            </div>
        </div>
    </div>
</div>

@endsection