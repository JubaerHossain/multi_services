@extends('backend.master')
@section('title', @$data['edit'] ? trans('customers.editprov')  : trans('customers.addprov')   )
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
                          @lang('customers.editprov')                            
                        @else
                          @lang('customers.addprov')                            
                        @endif
                    </h2>
                </div>
                <div class="col-auto ml-auto d-print-none">
                    <div class="d-flex">
                        <a href="{{url('/supplier')}}">
                            @lang('customers.title')
                        </a>
                        <a href="javascript:;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><polyline points="9 6 15 12 9 18"></polyline></svg>
                        </a>
                        <a> @if (@$data['edit'])
                            @lang('customers.editprov')                            
                          @else
                            @lang('customers.addprov')                            
                          @endif
                        </a>
                    </div>
                </div>
            </div>

        </div>
        </div>

        <div class="row">
            <div class="col-12">
                @if (@$data['edit'])
                   {{Form::open (['route' => ['customer.update', @$data['edit']->id] ,'class' => 'card', 'id' => 'add_supplier', 'files' => 'true', 'method' => 'POST'] )}}                    
                @else                    
                   {{Form::open (['url' => 'customer/store' ,'class' => 'card', 'id' => 'add_supplier', 'enctype' => 'multipart/form-data'] )}}
                @endif
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="row">
                                    <div class="col-md-6 col-xl-12"> 

                                        <div class="mb-3">
                                            {{Form::label('name' , trans('customers.name'), ['class' => 'form-label required'])}}
                                            {{Form::text('name',@$data['edit'] ?@$data['edit']->name : null,['class' => 'form-control', 'placeholder' => trans('customers.name')])}}
                                        </div>
                                        <input type="text" hidden name="company" value="0">
                                        <div class="mb-3">
                                            {{Form::label('country' , trans('customers.country'), ['class' => 'form-label required'])}}
                                            {{Form::select('country', $data['country'], @$data['edit']? @$data['edit']->country_id : null,  ['class' => 'form-control select'])}}
                                        </div>
                                        <div class="mb-3">
                                            {{Form::label('info',trans('customers.info'), ['class' => 'form-label'])}}
                                            {{Form::textarea('info', @$data['edit']->info ? @$data['edit']->info :null, ['class' => 'form-control' ,'id' => 'side',  'placeholder' => trans('customers.info')])}}
                                        </div>                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="row">
                                    <div class="col-md-6 col-xl-12">                                  
                                        <div class="mb-3">
                                            {{Form::label('phone',trans('customers.phone'), ['class'=> 'form-label required'])}}
                                            {{Form::text('phone', @$data['edit'] ? @$data['edit']->phone :null, ['class' => 'form-control', 'placeholder' => trans('customers.phone')])}}
                                        </div>                                    
                                        <div class="mb-3">
                                            {{Form::label('fax',trans('customers.fax'), ['class' => 'form-label required'])}}
                                            {{Form::text('fax', @$data['edit'] ? @$data['edit']->fax :null, ['class' => 'form-control', 'placeholder' => trans('customers.fax')])}}
                                        </div>                                    
                                        <div class="mb-3">
                                            {{Form::label('address',trans('customers.address'), ['class' => 'form-label required'])}}
                                            {{Form::textarea('address', @$data['edit']->address ? @$data['edit']->address :null, ['class' => 'form-control' ,'placeholder' => trans('customers.address')])}}
                                        </div>   
                                        <div class="mb-3">
                                            {{Form::label('status' , trans('customers.status'), ['class' => 'form-label required'])}}
                                            {{Form::select('status', ['Inactive','Active'], @$data['edit']? @$data['edit']->status : 1,  ['class' => 'form-control select'])}}
                                        </div>                                 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <div class="d-flex">
                            <a href="{{url('/product')}}" class="btn btn-link">Back</a>
                            <button type="submit" class="btn btn-primary ml-auto">{{ @$data['edit'] ? 'Update' : 'Create' }} data</button>
                        </div>
                    </div>
                {{Form::close()}}
            </div>
        </div>
</div>

@endsection
@push('js')
<script>
$(document).ready(function () {
    CKEDITOR.replace('side');
});
</script>
@endpush