@extends('backend.master')
@section('title', @$data['edit'] ? 'Edit Page' : 'Create New Page')
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
                        @lang('language.page')
                    </h2>
                </div>
                <div class="col-auto ml-auto d-print-none">
                    <div class="d-flex">
                        <a href="{{url('/admin/frontend-setting/about/page')}}">
                            @lang('language.page')  @lang('language.manage')
                        </a>
                        <a href="javascript:;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><polyline points="9 6 15 12 9 18"></polyline></svg>
                        </a>
                        <a> @if (@$data['edit'])
                            @lang('language.edit')            
                          @else
                            @lang('language.add')                                 
                          @endif
                          @lang('language.page')
                        </a>
                    </div>
                </div>
            </div>

        </div>
        </div>

        <div class="row">
            <div class="col-12">
                @if (@$data['edit'])
                   {{Form::open (['route' => ['admin.about'] ,'class' => 'card', 'id' => 'add_pages', 'files' => 'true', 'method' => 'POST'] )}}                    
                @endif
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="row">
                                    <div class="col-md-6 col-xl-12"> 
                                        <div class="mb-3">
                                            {{Form::label('name' , trans('language.title'), ['class' => 'form-label required'])}}
                                            {{Form::text('title',@$data['edit'] ?@$data['edit']->title : null,['class' => 'form-control', 'placeholder' => trans('language.name')])}}
                                        </div>                   
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="row">
                                    <div class="col-md-6 col-xl-12">                                                                            
                                        <div class="mb-3">
                                            <label for="file" class="form-label required">  @lang('language.attach_file')
                                                <a href="javascript:;" class="text-reset" data-toggle-icon="help" data-toggle="tooltip" title="@lang('language.icon_help')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><circle cx="12" cy="12" r="9" /><line x1="12" y1="17" x2="12" y2="17.01" /><path d="M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4" /></svg>
                                                </a>
                                            </label>
                                            <div class="form-file">
                                                <input type="file" class="form-file-input" id="customFile" name="document">
                                                <label class="form-file-label" for="customFile">
                                                <span class="form-file-text">@lang('products.choose_file')...</span>
                                                <span class="form-file-button">@lang('products.browser')</span>
                                                </label>
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    {{Form::label('description',trans('language.description'), ['class' => 'form-label required'])}}
                                    {{Form::textarea('description',@$data['edit'] ? @$data['edit']->description : null,['class' => 'form-control' ,'id' => 'textarea', 'placeholder' => trans('language.content'), 'Description'])}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <div class="d-flex">
                            <a href="{{url('/admin/frontend-setting/about/page')}}" class="btn btn-link">Back</a>
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
    CKEDITOR.replace('textarea');
    CKEDITOR.replace('side');
});
</script>
@endpush