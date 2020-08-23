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
                        @lang('language.page') @lang('supplied.show')
                    </h2>
                </div>
                <div class="col-auto ml-auto d-print-none">
                    <div class="d-flex">
                        <a href="{{url('/admin/page')}}">
                            @lang('language.page')
                        </a>
                        <a href="javascript:;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><polyline points="9 6 15 12 9 18"></polyline></svg>
                        </a>
                        <a> @lang('language.page') @lang('supplied.show') </a>
                    </div>
                </div>
            </div>

        </div>
        </div>
    <div class="row row-deck row-cards">
        <div class="col-md-12">
            <div class="card">
                <div class="row p-5">
                    <div class="col-lg-4 text-center"><h2>{{@$data['show']->title}}</h2> </div>
                    <div class="col-lg-4 text-center">
                        <h3>Status</h3>
                        @if (@$data['show']->status == 1)
                            Active
                        @else
                          Deactive
                        @endif
                    </div>
                    <div class="col-lg-4 text-center"><h3>@lang('language.created_at')</h3>
                        {{ date('d-M-y', strtotime( @$data['show']->created_at ))}}</div>
                   <div class="col-lg-12"><hr></div>
                    <div class="col-lg-12">
                        <h3>Content</h3>
                          {!! @$data['show']->content !!}
                    </div>

                </div>  
                <div class="card-footer text-right">
                    <div class="d-flex">
                        <a href="{{url('/admin/page')}}" class="btn btn-primary ml-auto">Back</a>
                    </div>
                </div>              
            </div>
        </div>
    </div>
</div>

@endsection