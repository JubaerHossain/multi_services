@extends('backend.master')
@section('title', @$data['edit'] ?  trans('language.edit') :  'Create')
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
                        @if (@$data['edit'])
                           @lang('language.edit')                     
                        @else
                           @lang('language.add')                          
                        @endif
                        Social Network                          
                    </h2>
                </div>
                <div class="col-auto ml-auto d-print-none">
                    <div class="d-flex">
                        <a href="{{url('/admin/frontend-setting/social-icon')}}">
                            Social Network @lang('language.manage')
                        </a>
                        <a href="javascript:;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><polyline points="9 6 15 12 9 18"></polyline></svg>
                        </a>
                        <a> 
                            @if (@$data['edit'])
                               @lang('language.edit')                     
                            @else
                                @lang('language.add')                          
                            @endif
                            Social Network                            
                        </a>
                    </div>
                </div>
            </div>

        </div>
        </div>
        <div class="row">
            <div class="col-12">  
                <div class="card">   
                    @if (@$data['edit'])
                    {{Form::open (['route' => ['social-icon.update', @$data['edit']->id] ,'class' => 'card', 'id' => 'social-icon-form', 'files' => 'true', 'method' => 'PUT'] )}}                    
                    @else                    
                        {!! Form::open(['route' => 'social-icon.store', 'enctype' => 'multipart/form-data','method' => 'post', 'languages' => true, 'id' => 'social-icon-form']) !!}
                    @endif               
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    {{Form::label('name','Name', ['class' => 'form-label required'])}}
                                    {{Form::text('name',@$data['edit'] ? @$data['edit']->name :null, ['class' => 'form-control'])}}
                                </div> 
                                <div class="mb-3">
                                    {{Form::label('icon','Icon', ['class' => 'form-label required'])}}
                                    {{Form::text('icon',@$data['edit'] ? @$data['edit']->icon :null, ['class' => 'form-control'])}}
                                </div> 
                               
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    {{Form::label('url','URL', ['class' => 'form-label required'])}}
                                    {{Form::text('url',@$data['edit'] ? @$data['edit']->url :null, ['class' => 'form-control'])}}
                                </div>
                                <div class="mb-3">
                                    {{Form::label('dues','Status', ['class' => 'form-label required'])}}
                                    {{Form::select('status', [1 => 'Active',0 => 'Deactive'], @$data['edit'] ? @$data['edit']->status: null,  ['class' => 'form-control select'])}}

                                </div> 
                            </div>
                        </div>
                    </div>
                        <div class="card-footer text-right">
                            <div class="d-flex">
                                <a href="{{url('/admin/frontend-setting/social-icon')}}" class="btn btn-link">Back</a>
                                <button type="submit" class="btn btn-primary ml-auto">{{trans('language.submit')}}</button>
                            </div>
                        </div>
                    {{Form::close()}}
                    
                </div>
            </div>
        </div>
</div>

@endsection
@push('js')
@endpush