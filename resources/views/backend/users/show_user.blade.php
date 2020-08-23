@extends('backend.master')
@section('title', 'Service view')
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
                            @lang('language.service') @lang('supplied.show')
                        </h2>
                    </div>
                    <div class="col-auto ml-auto d-print-none">
                        <div class="d-flex">
                            <a href="{{url('/service')}}">
                                @lang('language.service') @lang('language.manage')
                            </a>
                            <a href="javascript:;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><polyline points="9 6 15 12 9 18"></polyline></svg>
                            </a>
                            <a> @lang('language.service') @lang('supplied.show') </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    <div class="row row-deck row-cards">
        <div class="col-md-12">
            <div class="card">
                <div class="row p-5">
                    <div class="col-md-3"></div>
                    <div class="col-md-6" id="suppliedhow">
                            <h2>{{@$data['show']->service_type->name}}</h2>                           
                            <hr>
                            <h3>@lang('language.amount')</h3>
                                {{currency_symbol() }}  {{  @$data['show']->amount}}
                            <hr>
                            <h3>@lang('language.Tax') @lang('language.rate')</h3>
                               {{  @$data['show']->tax->rate}}%
                            <hr>
                            <h3>@lang('language.Tax')</h3>
                                {{currency_symbol() }}  {{  @$data['show']->total_tax}}
                            <hr>
                            <h3>@lang('language.Note')</h3>
                               {{  @$data['show']->note}}
                            <hr>
                            <h3>@lang('language.date')</h3>
                            {{ date('d-M-y', strtotime( @$data['show']->date ))}}
                            <hr>
                    </div> 
                    <div class="col-md-3"></div>
                </div>  
                <div class="card-footer text-right">
                    <div class="d-flex">
                        <a href="{{url('/service')}}" class="btn btn-primary ml-auto">Back</a>
                    </div>
                </div>              
            </div>
        </div>
    </div>
</div>

@endsection