@extends('backend.master')
@section('title',trans('language.email_settings') )
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
                        @lang('language.email_settings') 
                    </h2>
                </div>
                <div class="col-auto ml-auto d-print-none">
                    <div class="d-flex">
                        <a href="{{url('/setting/email-settings')}}">
                            @lang('language.settings')
                        </a>
                        <a href="javascript:;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><polyline points="9 6 15 12 9 18"></polyline></svg>
                        </a>
                        <a> @lang('language.email_settings') </a>
                    </div>
                </div>
            </div>

        </div>
        </div>
    <div class="row row-deck row-cards">
        <div class="col-md-12">
            <div class="card">
                {{Form::open (['route' => ['email_setting.update'] ,'class' => 'card', 'id' => 'email-form', 'files' => 'true', 'method' => 'POST'] )}}  
                <div class="row p-5">
                    <div class="col-md-3"></div>
                    <div class="col-md-6" id="suppliedhow">
                            <div class="mb-3">
                                {{Form::label('mail_driver',trans('language.mail_driver'), ['class' => 'form-label'])}}
                                {{Form::text('mail_driver',@$data['edit'] ? @$data['edit']->mail_driver :null, ['class' => 'form-control'])}}
                            </div> 
                            <div class="mb-3">
                                {{Form::label('from_name',trans('language.from_name'), ['class' => 'form-label'])}}
                                {{Form::text('from_name',@$data['edit'] ? @$data['edit']->from_name :null, ['class' => 'form-control'])}}
                            </div> 
                            <div class="mb-3">
                                {{Form::label('from_email',trans('language.from_email'), ['class' => 'form-label'])}}
                                {{Form::text('from_email',@$data['edit'] ? @$data['edit']->from_email :null, ['class' => 'form-control'])}}
                            </div> 
                       
                            <div class="mb-3">
                                {{Form::label('mail_host',trans('language.mail_host'), ['class' => 'form-label'])}}
                                {{Form::text('mail_host',@$data['edit'] ? @$data['edit']->mail_host :null, ['class' => 'form-control'])}}
                            </div> 
                            <div class="mb-3">
                                {{Form::label('mail_port',trans('language.mail_port'), ['class' => 'form-label'])}}
                                {{Form::text('mail_port',@$data['edit'] ? @$data['edit']->mail_port :null, ['class' => 'form-control'])}}
                            </div> 
                            <div class="mb-3">
                                {{Form::label('mail_username',trans('language.mail_username'), ['class' => 'form-label'])}}
                                {{Form::text('mail_username',@$data['edit'] ? @$data['edit']->mail_username :null, ['class' => 'form-control'])}}
                            </div> 
                            <div class="mb-3">
                                {{Form::label('mail_password',trans('language.mail_password'), ['class' => 'form-label'])}}
                                {{Form::text('mail_password',@$data['edit'] ? @$data['edit']->mail_password :null, ['class' => 'form-control'])}}
                            </div> 
                            <div class="mb-3">
                                {{Form::label('mail_encryption',trans('language.mail_encryption'), ['class' => 'form-label'])}}
                                {{Form::text('mail_encryption',@$data['edit'] ? @$data['edit']->mail_encryption :null, ['class' => 'form-control'])}}
                            </div> 
                    </div> 
                    <div class="col-md-3"></div>
                </div>  
                <div class="card-footer text-right">
                    <div class="d-flex">
                        <a href="{{url('/setting/email-settings')}}" class="btn btn-link">Back</a>
                        <button type="submit" class="btn btn-primary ml-auto">{{trans('language.update')}}</button>
                    </div>
                </div>  
                {{Form::close()}}            
            </div>
        </div>
    </div>
</div>

@endsection