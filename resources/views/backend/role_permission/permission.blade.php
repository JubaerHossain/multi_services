@extends('backend.master')
@section('title', 'Permission')
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
                        @lang('language.permission') @lang('supplied.show')
                    </h2>
                </div>
                <div class="col-auto ml-auto d-print-none">
                    <div class="d-flex">
                        <a href="{{url('/setting/roles')}}">
                            @lang('language.roles') @lang('language.manage')
                        </a>
                        <a href="javascript:;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><polyline points="9 6 15 12 9 18"></polyline></svg>
                        </a>
                        <a> @lang('language.permission') @lang('supplied.show') </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-deck row-cards">
        <div class="col-md-12">
            <div class="card">
                {{Form::open (['route' => ['role.setPermission', $data['role']->id] ,'class' => 'card', 'method' => 'POST'] )}}  
                <div class="row p-5">
                    <div class="col-md-12" id="suppliedhow">
                        <h1 class="text-center mb-5">Module Name</h1>
                        <div class="accordion" id="accordionExample">
                            @foreach ($data['module'] as $key => $item)                                
                            <div class="card">
                              <div class="card-header" id="headingOne">
                                <h2 class="mb-0 text-center btn-link" type="button" data-toggle="collapse" data-target="#ch{{$key}}" aria-expanded="true" aria-controls="ch{{$key}}">
                                    {{ $item->name}}
                                </h2>
                              </div>
                          
                              <div id="ch{{$key}}" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                                 @foreach ($item->sub_module as $val)
                                      <div class="card-body">
                                            <div class="list list-row">
                                                <div class="list-item">
                                                    <div><h3>{{ @$val->name }}</h3></div>
                                                    @foreach ($val->module_action as $link)
                                                        <div class="">                                                            
                                                            <label class="form-check form-switch">                                                             
                                                                <input type="checkbox" name="permissions[]" value="{{ $link->module_permission->id }}" class="form-check-input" {{ permision_check($data['role']->id,$link->module_permission->id)}}> 
                                                                <span class="form-check-label"> {{ $link->module_permission->name }}</span>
                                                            </label>
                                                        </div>
                                                    @endforeach                                                    
                                                </div>
                                            </div>  
                                      </div>  
                                  @endforeach
                              </div>
                            </div>
                            @endforeach

                          </div>
                    </div> 
                </div>  
                <div class="card-footer text-right">
                    <div class="d-flex">
                        <a href="{{url('/setting/roles')}}" class="btn btn-link">Back</a>
                        <button type="submit" class="btn btn-primary ml-auto">{{trans('language.submit')}}</button>
                    </div>
                </div> 
                {{Form::close()}}             
            </div>
        </div>
    </div>
</div>
@endsection
