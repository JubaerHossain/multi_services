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
                        @lang('language.menu')                          
                    </h2>
                </div>
                <div class="col-auto ml-auto d-print-none">
                    <div class="d-flex">
                        <a href="{{url('/admin/menu')}}">
                            @lang('language.menu') @lang('language.manage')
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
                            @lang('language.menu')                            
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
                    {{Form::open (['route' => ['menu.update', @$data['edit']->id] ,'class' => 'card', 'id' => 'menu-form', 'files' => 'true', 'method' => 'PUT'] )}}                    
                    @else                    
                        {!! Form::open(['route' => 'menu.store', 'enctype' => 'multipart/form-data','method' => 'post', 'languages' => true, 'id' => 'menu-form']) !!}
                    @endif               
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    {{Form::label('title','Title', ['class' => 'form-label required'])}}
                                    {{Form::text('title',@$data['edit'] ? @$data['edit']->name :null, ['class' => 'form-control'])}}
                                </div> 
                                <div class="mb-3" id="_service">
                                    {{Form::label('service' , trans('products.service'), ['class' => 'form-label required'])}}
                                    {{Form::select('service_id', $data['service'], @$data['edit'] ? @$data['edit']->service_id: null,  ['class' => 'form-control select'])}}
                                </div>
                                <div class="mb-3" id="_pages">
                                    {{Form::label('page' , 'Pages', ['class' => 'form-label required'])}}
                                    {{Form::select('page_id', $data['page'], @$data['edit'] ? @$data['edit']->page_id: null,  ['class' => 'form-control select'])}}
                                </div>
                                <div class="mb-3" id="_url">
                                    {{Form::label('url' , 'URL', ['class' => 'form-label required'])}}
                                    {{Form::text('url', @$data['edit'] ? @$data['edit']->url: null,  ['class' => 'form-control'])}}
                                </div>
                               
                            </div>
                            <div class="col-xl-6">
                                
                                <div class="mb-3">
                                    {{Form::label('type','Menu Type', ['class' => 'form-label required'])}}
                                    {{Form::select('type', [1 => 'Flat',2 => 'Service',3 => 'Blog', 4 => 'Others'], @$data['edit'] ? @$data['edit']->type: null,  ['class' => 'form-control select'])}}

                                </div> 
                                {{-- <div class="mb-3">
                                    {{Form::label('position','Position', ['class' => 'form-label required'])}}
                                    {{Form::number('position',@$data['edit'] ? @$data['edit']->position :null, ['class' => 'form-control'])}}

                                </div> --}}
                                <div class="mb-3">
                                    {{Form::label('status','Status', ['class' => 'form-label required'])}}
                                    {{Form::select('status', [1 => 'Active',0 => 'Deactive'], @$data['edit'] ? @$data['edit']->status: null,  ['class' => 'form-control select'])}}

                                </div>
                                @if (@$data['edit']->sub_menu)                                    
                                <div class="mb-3" id="_sub_check">
                                    {{Form::label('sub','Sub Menu', ['class' => 'form-label required'])}}
                                    @foreach (@$data['edit']->sub_menu as $key => $item)                                        
                                        <div class="_sub_menu">
                                            <div class="row custom_add_sub mb-3 d{{ $key }}">
                                                <div class="col-10"><input type="text" name="sub_menu[]" value="{{ $item->name }}"  class="form-control"></div>
                                                <div class="col-2"><a  href="javascript:;" onclick="deleteSub({{$key}})" class="btn btn-danger remove_field"><i class="fa fa-trash"></i></a></div>
                                            </div>
                                        </div>
                                    @endforeach

                                    <div class="_sub_menu">
                                        <div class="row custom_add_sub mb-3">
                                            <div class="col-10"><input name="sub_menu[]" type="text" class="form-control"></div>
                                            <div class="col-2"></div>
                                        </div>
                                    </div>

                                    <div class="col-12 text-center">
                                        <button   class="btn btn-purple add_field_button">
                                           <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div> 
                                @else
                                <div class="mb-3" id="_sub_check">
                                    {{Form::label('sub','Sub Menu', ['class' => 'form-label required'])}}
                                    <div class="_sub_menu">
                                        <div class="row custom_add_sub mb-3">
                                            <div class="col-10"><input name="sub_menu[]" type="text" class="form-control"></div>
                                            <div class="col-2"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button   class="btn btn-purple add_field_button">
                                           <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                @endif 
                              

                            </div>
                        </div>
                    </div>
                        <div class="card-footer text-right">
                            <div class="d-flex">
                                <a href="{{url('/admin/menu')}}" class="btn btn-link">Back</a>
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