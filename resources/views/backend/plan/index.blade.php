@extends('backend.master')
@section('title', 'PricePlan')
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
                      <a>PricePlan @lang('language.manage')</a>
                    </h2>
                </div>
                <div class="col-auto ml-auto d-print-none">
                    <div class="d-flex">
                        <a href="{{ url('admin/plan')}}">
                          PricePlan 
                        </a>
                        <a href="javascript:;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><polyline points="9 6 15 12 9 18"></polyline></svg>
                        </a>
                        <a>  PricePlan @lang('language.manage')</a>
                    </div>
                </div>
            </div>

        </div>
        </div>

    <div class="row row-deck row-cards">
      <div class="row flex-fill">
        <div class="col-auto ml-auto d-print-none">
            <div class="d-flex">
            <a href="{{ route('plan.create')}}" class="btn btn-purple">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                @lang('language.add') Plan</a>
            </a>
            </div>
        </div>
    </div>
        <div class="col-lg-12">
                  <table class="table card-table table-vcenter text-nowrap datatable w-100 mt-2" id="table">
                        <thead>
                           <tr>
                              <th>ID</th>
                              <th width='20%'> @lang('language.title')</a></th>
                              <th width='20%'> @lang('language.sale_price')</a></th>
                              <th width='15%'>Type </th>
                              <th width='15%'>@lang('language.status') </th>
                              <th class="text-right" width='15%'> @lang('language.action')</th>
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
           ajax: '{{ route('plan.data') }}',
           pageLength: 10,
           searching: true,
           info: true,
           columns: [
                    { data: 'id', name: 'id', 'visible': false},
                    { data: 'title', name: 'title' },
                    { data: 'price', name: 'price' },
                    { data: 'type', name: 'type' },
                    { data: 'status', name: 'status' },
                    { data: 'action', name: 'action', orderable: false},
                 ],
      
    });
    });
    </script>
    
@endpush