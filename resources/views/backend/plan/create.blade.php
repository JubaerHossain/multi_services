@extends('backend.master')
@section('title', @$data['edit'] ?  trans('language.edit') :  trans('language.plan'))
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
                        @lang('language.plan')                          
                    </h2>
                </div>
                <div class="col-auto ml-auto d-print-none">
                    <div class="d-flex">
                        <a href="{{url('/admin/plan')}}">
                            @lang('language.plan') @lang('language.manage')
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
                            @lang('language.plan')                            
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
                    {{Form::open (['route' => ['plan.update', @$data['edit']->id] ,'class' => 'card', 'id' => 'plan-form', 'files' => 'true', 'method' => 'PUT'] )}}                    
                    @else                    
                        {!! Form::open(['route' => 'plan.store', 'enctype' => 'multipart/form-data','method' => 'post', 'languages' => true, 'id' => 'plan-form']) !!}
                    @endif               
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    {{Form::label('title','Title', ['class' => 'form-label required'])}}
                                    {{Form::text('title',@$data['edit'] ? @$data['edit']->title :null, ['class' => 'form-control'])}}
                                </div>  
                                <div class="mb-3">
                                    {{Form::label('price','Price', ['class' => 'form-label required'])}}
                                    {{Form::number('price',@$data['edit'] ? @$data['edit']->price :null, ['class' => 'form-control'])}}
                                </div>  
                            
                            </div>
                            <div class="col-xl-6">
                             
                                <div class="mb-3">
                                    {{Form::label('status','Status', ['class' => 'form-label required'])}}
                                    {{Form::select('status', [1 => 'Active',0 => 'Deactive'], @$data['edit'] ? @$data['edit']->status: null,  ['class' => 'form-control select'])}}

                                </div>   
                                <div class="mb-3">
                                    {{Form::label('type','type', ['class' => 'form-label required'])}}
                                    {{Form::select('type', [0 => 'Monthly',1 => 'Yearly'], @$data['edit'] ? @$data['edit']->type: null,  ['class' => 'form-control select'])}}

                                </div>   
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    {{Form::label('features',trans('products.desc'), ['class' => 'form-label required'])}}
                                    {{Form::textarea('features',@$data['edit'] ? @$data['edit']->features : null,['class' => 'form-control' ,'id' => 'textarea', 'placeholder' => trans('products.desc'), 'features'])}}
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="card-footer text-right">
                            <div class="d-flex">
                                <a href="{{url('/admin/plan')}}" class="btn btn-link">Back</a>
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