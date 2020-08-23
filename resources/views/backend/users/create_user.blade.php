@extends('backend.master')
@section('title', @$data['edit'] ?  trans('language.edit') :  trans('language.service'))
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
                        @lang('language.service')                          
                    </h2>
                </div>
                <div class="col-auto ml-auto d-print-none">
                    <div class="d-flex">
                        <a href="{{url('/finance/service')}}">
                            @lang('language.service') @lang('language.manage')
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
                            @lang('language.service')                            
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
                    {{Form::open (['route' => ['user.update', @$data['edit']->id] ,'class' => 'card', 'id' => 'user-form', 'files' => 'true', 'method' => 'PUT'] )}}                    
                    @else                    
                        {!! Form::open(['route' => 'user.store', 'enctype' => 'multipart/form-data','method' => 'post', 'languages' => true, 'id' => 'user-form']) !!}
                    @endif               
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6"> 
                                <div class="mb-3">
                                    {{Form::label('role',trans('language.role'), ['class' => 'form-label required'])}}
                                    {{Form::select('role', $data['roles'], @$data['edit'] ? @$data['edit']->role_id: null,  ['class' => 'form-control select'])}}
                                </div> 
                               

                                <div class="mb-3">
                                    {{Form::label('name',trans('language.name'), ['class' => 'form-label required'])}}
                                    {{Form::text('name',@$data['edit'] ? @$data['edit']->name : null, ['class' => 'form-control'])}}
                                </div> 
                                <div class="mb-3">
                                    {{Form::label('email',trans('language.email'), ['class' => 'form-label required'])}}
                                    {{Form::email('email',@$data['edit'] ? @$data['edit']->email : null, ['class' => 'form-control'])}}
                                </div> 
                                <div class="mb-3">
                                    {{Form::label('password',trans('language.password'), ['class' => 'form-label required'])}}
                                    {{Form::input('password','password',@$data['edit'] ? @$data['edit']->password : null, ['class' => 'form-control'])}}
                                </div> 
                                <div class="mb-3">
                                    {{Form::label('phone',trans('language.phone'), ['class' => 'form-label required'])}}
                                    {{Form::text('phone',@$data['edit'] ? @$data['edit']->phone_number : null, ['class' => 'form-control'])}}
                                </div> 
                                
                            </div>
                            <div class="col-xl-6">
                                 
                                 
                                <div class="mb-3">
                                    {{Form::label('date',trans('language.date_of_birth'), ['class' => 'form-label required'])}}
                                    {{Form::text('date',  @$data['edit'] ? @$data['edit']->date_of_birth : \Carbon\Carbon::now()->format("Y-m-d"), ['class' => 'datepicker form-control date' ])}}  
                                </div> 
                                
                                <div class="mb-3">
                                    <label>{{trans('language.company')}}</label>
                                    {{Form::text('company',@$data['edit'] ? @$data['edit']->company : null, ['class' => 'form-control'])}}
                                </div>
                                <div class="mb-3">
                                    {{Form::label('date',trans('language.gender'), ['class' => 'form-label required'])}}
                                    {{Form::select('gender', ['Male','Female','Others'], @$data['edit'] ? @$data['edit']->gender: null,  ['class' => 'form-control select'])}}
                                </div>
                                <div class="mb-3">
                                    <label>{{trans('language.address')}}</label>
                                    <textarea rows="6" class="form-control" name="address">{{ @$data['edit'] ? @$data['edit']->address :null}}</textarea>
                                </div>
                               
                                
                            </div>
                        </div>
                    </div>
                        <div class="card-footer text-right">
                            <div class="d-flex">
                                <a href="{{url('/user')}}" class="btn btn-link">Back</a>
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