@extends('backend.master')
@section('title', 'Roles')
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
                      <a>  @lang('language.roles') @lang('language.lists')</a> 
                    </h2>
                </div>
                <div class="col-auto ml-auto d-print-none">
                    <div class="d-flex">
                        <a href="{{ url('/service/type')}}">
                          @lang('language.roles') 
                        </a>
                        <a href="javascript:;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><polyline points="9 6 15 12 9 18"></polyline></svg>
                        </a>
                        <a>  @lang('language.roles') @lang('language.lists')</a>
                    </div>
                </div>
            </div>

        </div>
        </div>

    <div class="row row-deck row-cards">
      <div class="row flex-fill">
        <div class="col-auto ml-auto d-print-none">
            <div class="d-flex">
            <a href="javascript:;" class="btn btn-purple" id="add_new_roles">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                @lang('language.add')</a>
            </a>
            </div>
        </div>
    </div>
        <div class="col-lg-12">
                  <table class="table card-table table-vcenter text-nowrap datatable w-100 mt-2" id="table">
                        <thead>
                           <tr>
                              <th>ID</th>
                              <th  width="50%"> @lang('language.name')</a></th>
                              <th  width="25%"> @lang('language.date')</a></th>
                              <th class="text-right"  width="25%"> @lang('language.action')</a></th>
                           </tr>
                        </thead>
                     </table>
        </div>
    </div>
</div>
  <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal_title"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><line x1="18" y1="6" x2="6" y2="18" /><line x1="6" y1="6" x2="18" y2="18" /></svg>
          </button>
        </div>
        <form action="{{ url('finance/income-head/store') }}" method="POST" id="add_role">
          @csrf
          <div class="modal-body">
                  <div class="form-group mb-3 ">
                    <label class="form-label"> @lang('language.name')</a></label>
                    <div>
                      <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter name">
                    </div>
                  </div>

          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-link link-secondary" data-dismiss="modal">
              @lang('language.cancel')</a>
            </a>
            <button class="btn btn-primary ml-auto" id="_nebtn" type="submit">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
              @lang('language.add')</a>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <input type="text" hidden id="_view" value="@lang('language.roles')">
  <input type="text" hidden id="add_new" value="@lang('language.add')">
  <input type="text" hidden id="add_title" value="@lang('language.add') @lang('language.roles')">
  <input type="text" hidden id="edit" value="@lang('language.edit') ">
  <input type="text" hidden id="edit_title" value="@lang('language.edit') @lang('language.roles')">

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
           ajax: '{{ route('role.data') }}',
           pageLength: 10,
           searching: true,
           info: true,
           columns: [
                    { data: 'id', name: 'id', 'visible': false},
                    { data: 'name', name: 'name' },
                    { data: 'time', name: 'time' },
                    { data: 'action', name: 'action', orderable: false},
                 ],
      
    });
    });
    </script>
    
@endpush