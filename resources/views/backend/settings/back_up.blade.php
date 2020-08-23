@extends('backend.master')
@section('title',  trans('language.database_bakeup') )
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
                        @lang('language.database_bakeup')
                    </h2>
                </div>
                <div class="col-auto ml-auto d-print-none">
                    <div class="d-flex">
                        <a href="{{url('/setting/databasse-backup')}}">
                            @lang('language.database_bakeup')
                        </a>
                        <a href="javascript:;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><polyline points="9 6 15 12 9 18"></polyline></svg>
                        </a>
                        <a> @lang('language.database_bakeup') </a>
                    </div>
                </div>
            </div>

        </div>
        </div>

        <div class="row row-deck row-cards">
            <div class="row flex-fill">
              <div class="col-auto ml-auto d-print-none">
                  <div class="d-flex">
                  <a href="{{ route('database_store')}}" class="btn btn-purple">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                      @lang('language.database_bakeup')</a>
                  </a>
                  </div>
              </div>
          </div>
              <div class="col-lg-12">
                    <table class="table card-table table-vcenter text-nowrap datatable w-100 mt-2" id="table">
                        <thead>
                            <tr>
                            <th>@lang('language.name')</th>
                            <th>@lang('language.back_by')</th>
                            <th>@lang('language.created_at')</th>
                            <th>@lang('language.action')</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($dbs as $item)
                                <tr>
                                    <td>{{ @$item->file_name }}</td>
                                    <td>{{ @$item->user->name }}</td>
                                    <td>{{ date('d-M-Y',strtotime(@$item->updated_at)) }}</td>
                                    <td>
                                        <div class="text-right flex-nowrap">
                                            <div class="dropdown">
                                                <button class="btn btn-white dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="{{ route('db.download',$item->id) }}">
                                                        @lang('language.download')
                                                    </a>
                                                    <a class="dropdown-item" onclick="GlobaldeleteId({{$item->id}},'setting/database-backup/delete/');">
                                                        @lang('language.delete')
                                                    </a>
                                                </div>
                                            </div>
                                            </div>
                                    </td>
                                </tr>
                                @endforeach                                  

                        </tbody>
                    </table>
              </div>
          </div>
</div>

@endsection
@push('js')
@include('backend.partials.data_table')
<script>
      $('#table').DataTable({

      })
</script>
@endpush