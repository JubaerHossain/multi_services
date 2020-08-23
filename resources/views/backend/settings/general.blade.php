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
                    {{Form::open (['route' => ['setting.store'] ,'class' => 'card', 'id' => 'service-form', 'files' => 'true', 'method' => 'POST'] )}}                    
                               
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12"> 
                                <div class="mb-3">
                                    {{Form::label('site_name',trans('language.site_name'), ['class' => 'form-label'])}}
                                    {{Form::text('site_name',@$data['edit'] ? @$data['edit']->site_name :null, ['class' => 'form-control'])}}
                                </div> 
                                <div class="mb-3">
                                    {{Form::label('site_title',trans('language.site_title'), ['class' => 'form-label'])}}
                                    {{Form::text('site_title',@$data['edit'] ? @$data['edit']->site_title :null, ['class' => 'form-control'])}}
                                </div> 

                                <div class="mb-3">
                                    {{Form::label('address',trans('language.address'), ['class' => 'form-label'])}}
                                    {{Form::text('address',@$data['edit'] ? @$data['edit']->address :null, ['class' => 'form-control'])}}
                                </div>
                                <div class="mb-3">
                                    {{Form::label('phone',trans('language.phone'), ['class' => 'form-label'])}}
                                    {{Form::text('phone',@$data['edit'] ? @$data['edit']->phone :null, ['class' => 'form-control'])}}
                                </div>
                                <div class="mb-3">
                                    {{Form::label('email',trans('language.email'), ['class' => 'form-label'])}}
                                    {{Form::email('email',@$data['edit'] ? @$data['edit']->email :null, ['class' => 'form-control'])}}
                                </div>

                                <div class="mb-3">
                                    {{Form::label('currency',trans('language.currency'), ['class' => 'form-label'])}}
                                    {{Form::select('currency', $data['currency'], @$data['edit'] ? @$data['edit']->currency: null,  ['class' => 'form-control select'])}}
                                </div> 
                                
                            </div>
                            <div class="col-xl-12">                                 
                                <div class="mb-3">
                                    {{Form::label('copyright_text',trans('language.copyright_text'), ['class' => 'form-label'])}}
                                    {{Form::text('copyright_text',  @$data['edit'] ? @$data['edit']->copyright_text : null, ['class' => 'form-control' ])}}  
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="file" class="form-label">  @lang('language.logo')
                                            <a href="javascript:;" class="text-reset" data-toggle-icon="help" data-toggle="tooltip" title="@lang('language.logo_help')">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><circle cx="12" cy="12" r="9" /><line x1="12" y1="17" x2="12" y2="17.01" /><path d="M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4" /></svg>
                                            </a>
                                        </label>
                                        <div class="row mt-2">
                                            @if (file_exists($data['edit']->logo))
                                            <div class="col-lg-12 spartan_item_wrapper wow" data-spartanindexrow="6"  style="margin-bottom : 20px; ">
                                                <div style="position: relative;">
                                                    <div class="spartan_item_loader" data-spartanindexloader="6" style=" position: absolute; width: 100%; height: 200px; background: rgba(255,255,255, 0.7); z-index: 22; text-align: center; align-items: center; margin: auto; justify-content: center; flex-direction: column; display : none; font-size : 1.7em; color: #CECECE">
                                                        <i class="fas fa-sync fa-spin"></i>
                                                    </div>
                                                        <label class="file_upload" style="width: 100%; height: 200px; border: 2px dashed #ddd; border-radius: 3px; cursor: pointer; text-align: center; overflow: hidden; padding: 5px; margin-top: 5px; margin-bottom : 5px; position : relative; display: flex; align-items: center; margin: auto; justify-content: center; flex-direction: column;">
                                                                <a href="javascript:void(0)" data-spartanindexremove="6" style="right: 3px; top: 3px; background: rgb(237, 60, 32); border-radius: 3px; width: 30px; height: 30px; line-height: 30px; text-align: center; text-decoration: none; color: rgb(255, 255, 255); position: absolute !important;" class="">
                                                                    <i class="fa fa-times"></i>
                                                                </a>
                                                            <img style="width: 64px; margin: 0px auto; vertical-align: middle; display: none;" data-spartanindexi="6" src="" class="spartan_image_placeholder">
                                                             <p data-spartanlbldropfile="6" style="color : #5FAAE1; display: none; width : auto; ">Drop Here</p><img style="width: 100%; vertical-align: middle;" class="img_" data-spartanindeximage="6" src="{{ asset($data['edit']->logo) }}">
                                                        </label> 
                                                </div>
                                            </div>
                                            @endif
                                            <div class="main_image"></div>
                                        </div>
                                        <label id="file-error" class="error" for="name"></label>
                                    </div> 
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="favicon" class="form-label">  @lang('language.favicon')
                                            <a href="javascript:;" class="text-reset" data-toggle-icon="help" data-toggle="tooltip" title="@lang('language.favicon_help')">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><circle cx="12" cy="12" r="9" /><line x1="12" y1="17" x2="12" y2="17.01" /><path d="M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4" /></svg>
                                            </a>
                                        </label>
                                        <div class="row">
                                            @if (file_exists($data['edit']->favicon))
                                            <div class="col-lg-12 spartan_item_wrapper wow" data-spartanindexrow="30" style="margin-bottom : 20px; ">
                                                <div style="position: relative;">
                                                    <div class="spartan_item_loader" data-spartanindexloader="30" style=" position: absolute; width: 100%; height: 200px; background: rgba(255,255,255, 0.7); z-index: 22; text-align: center; align-items: center; margin: auto; justify-content: center; flex-direction: column; display : none; font-size : 1.7em; color: #CECECE">
                                                        <i class="fas fa-sync fa-spin"></i>
                                                    </div>
                                                        <label class="file_upload" style="width: 100%; height: 200px; border: 2px dashed #ddd; border-radius: 3px; cursor: pointer; text-align: center; overflow: hidden; padding: 5px; margin-top: 5px; margin-bottom : 5px; position : relative; display: flex; align-items: center; margin: auto; justify-content: center; flex-direction: column;">
                                                                <a href="javascript:void(0)" data-spartanindexremove="30" style="right: 3px; top: 3px; background: rgb(237, 60, 32); border-radius: 3px; width: 30px; height: 30px; line-height: 30px; text-align: center; text-decoration: none; color: rgb(255, 255, 255); position: absolute !important;" class="">
                                                                    <i class="fa fa-times"></i>
                                                                </a>
                                                            <img style="width: 64px; margin: 0px auto; vertical-align: middle; display: none;" data-spartanindexi="30" src="" class="spartan_image_placeholder">
                                                             <p data-spartanlbldropfile="30" style="color : #5FAAE1; display: none; width : auto; ">Drop Here</p><img style="width: 100%; vertical-align: middle;" class="img_" data-spartanindeximage="30" src="{{ asset($data['edit']->favicon) }}">
                                                        </label> 
                                                </div>
                                            </div>
                                            @endif
                                            <div class="icon_image"></div>
                                        </div>
                                        <label id="file-error" class="error" for="name"></label>
                                    </div>
                                </div>
                            </div>

                                
                                
                            </div>
                        </div>
                    </div>
                        <div class="card-footer text-right">
                            <div class="d-flex">
                                <a href="{{url('/')}}" class="btn btn-link">Back</a>
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