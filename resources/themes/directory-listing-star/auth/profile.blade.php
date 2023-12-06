@extends('layouts.master')
@section('title', $title)
@section('content')
    <main id="listar-main" class="listar-main listar-haslayout">
        <div id="listar-content" class="listar-content">
            {!! CoralsForm::openForm($user = user(), ['url' => url('profile'), 'method'=>'PUT','class'=>'listar-formtheme listar-formaddlisting ajax-form','files'=>true]) !!}
            <fieldset>
                <div class="listar-boxtitle">
                    <h3>@lang('corals-directory-listing-star::auth.profile')</h3>
                </div>
                <div class="listar-dashboardmyprofile">
                    <figure class="listare-profilepic">
                        <img id="image_source" src="{{ user()->picture }}" alt="image description"
                             style="max-width: 250px">
                        {{ CoralsForm::hidden('profile_image') }}
                        <figcaption><a class="listar-btnuploadimg" href="javascript:void(0);"><i
                                        class="icon-upload2"></i>@lang('corals-directory-listing-star::auth.click_pic_update')
                            </a>
                        </figcaption>
                    </figure>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group listar-dashboardfield m-0">
                                {!! CoralsForm::text('name','User::attributes.user.name',true) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group listar-dashboardfield m-0">
                                {!! CoralsForm::text('last_name','User::attributes.user.last_name',true) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group listar-dashboardfield m-0">
                                {!! CoralsForm::email('email','User::attributes.user.email',true) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group listar-dashboardfield m-0">
                                {!! CoralsForm::text('phone_country_code','User::attributes.user.phone_country_code',false,null,['id'=>'authy-countries']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group listar-dashboardfield m-0">
                                {!! CoralsForm::text('phone_number','User::attributes.user.phone_number',false,null,['id'=>'authy-cellphone']) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group listar-dashboardfield m-0">
                                {!! CoralsForm::password('password','User::attributes.user.password') !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group listar-dashboardfield">
                                {!! CoralsForm::password('password_confirmation','User::attributes.user.password_confirmation') !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group listar-dashboardfield m-0">
                                @if(\TwoFactorAuth::isActive())
                                    {!! CoralsForm::checkbox('two_factor_auth_enabled','User::attributes.user.two_factor_auth_enabled',\TwoFactorAuth::isEnabled($user)) !!}

                                    @if(!empty(\TwoFactorAuth::getSupportedChannels()))
                                        {!! CoralsForm::radio('channel','User::attributes.user.channel', false,\TwoFactorAuth::getSupportedChannels(),\Arr::get($user->getTwoFactorAuthProviderOptions(),'channel', null)) !!}
                                    @endif
                                @endif
                                {!! CoralsForm::text('job_title','User::attributes.user.job_title') !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group listar-dashboardfield m-0">
                                {!! CoralsForm::textarea('properties[about]', 'User::attributes.user.about' , false, null,[
                          'class'=>'limited-text',
                          'maxlength'=>250,
                          'help_text'=>'<span class="limit-counter">0</span>/250']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                {!! CoralsForm::formButtons(trans('corals-directory-listing-star::auth.save',['title' => $title_singular]),[],['href'=>url('dashboard')]) !!}
            </fieldset>
        </div>
        {!! CoralsForm::closeForm() !!}
    @include('User::users.profile.cropper_modal')

@endsection
@section('js')
    @include('User::users.profile.scripts')
@endsection
