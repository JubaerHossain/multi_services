@extends('backend.master')
@section('title', trans('language.sale'))
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
                      @lang('language.sale')  @lang('language.lists')
                    </h2>
                </div>
                <div class="col-auto ml-auto d-print-none">
                    <div class="d-flex">
                        <a href="{{ url('admin/guest/sale')}}">
                          @lang('language.sale')
                        </a>
                        <a href="javascript:;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><polyline points="9 6 15 12 9 18"></polyline></svg>
                        </a>
                        <a>@lang('language.sale')  @lang('language.lists')</a>
                    </div>
                </div>
            </div>

        </div>
        </div>
    <div class="row row-deck row-cards">
        <div class="col-lg-12">
                  <table class="table card-table table-vcenter text-nowrap datatable" id="table" style="width: 100%">
                        <thead>
                           <tr>
                              <th>ID</th>
                              <th>@lang('language.customer')</th>
                              <th>@lang('language.email')</th>
                              <th>@lang('language.phone')</th>
                              <th>@lang('language.address')</th>
                              <th>@lang('language.grand_total')</th>
                              <th>@lang('language.created_at')</th>
                              <th class="text-right">@lang('language.action')</th>
                           </tr>
                        </thead>
                     </table>
        </div>
    </div>
</div>  

@endsection

@push('js')
@include('backend.partials.data_table')
<script>
   
    $(document).ready( function () {    
    $('#table').DataTable({
          processing: true,
          serverSide: true,
           sDom : '<"top">rt<"bottom"flp><"clear">',
           responsive:true,
           ajax: '{{ route('sample.data') }}',
           pageLength: 10,
           searching: true,
           info: true,
           columns: [
            { data: 'id', name: 'id', 'visible': false},
              { data: 'customer', name: 'customer' },
              { data: 'email', name: 'email' },
              { data: 'phone', name: 'phone' },
              { data: 'address', name: 'address' },
              { data: 'grand_total', name: 'grand_total' },
              { data: 'date', name: 'date' },
              { data: 'action', name: 'action', orderable: false},
            ],
      
    });
    });
    </script>

@endpush