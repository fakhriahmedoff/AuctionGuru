@extends('backend.layout.master')

@section('title', 'Configurations')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <form action="{{route('admin.configs.update',$config->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary card-outline card-tabs">
                            <div class="card-header p-0 pt-1 border-bottom-0">
                                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-three-home-tab" data-toggle="pill"
                                           href="#custom-tabs-three-home" role="tab"
                                           aria-controls="custom-tabs-three-home"
                                           aria-selected="false">Site configurations</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-three-profile-tab" data-toggle="pill"
                                           href="#custom-tabs-three-profile" role="tab"
                                           aria-controls="custom-tabs-three-profile" aria-selected="true">Homepage
                                            (SEO)</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill"
                                           href="#custom-tabs-three-messages" role="tab"
                                           aria-controls="custom-tabs-three-messages" aria-selected="false">Order page
                                            (SEO)</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-three-tabContent">
                                    <div class="tab-pane fade" id="custom-tabs-three-home" role="tabpanel"
                                         aria-labelledby="custom-tabs-three-home-tab">
                                        <div class="row">
                                            <div class="col-6 col-xs-12">
                                                <div class="form-group">
                                                    {!! html()->input('logo', $config->logo ,[
                                                   'class' => 'form-control ',
                                                   'label' => 'Logo',
                                                   'errorLabel' => $errors->first('logo')
                                                   ],'file') !!}
                                                </div>
                                                <img src="{{asset($config->logo)}}" width="150px" alt="">
                                            </div>
                                            <div class="col-6 col-xs-12">
                                                <div class="form-group">
                                                    {!! html()->input('logo_mobile', $config->logo_mobile ,[
                                                   'class' => 'form-control ',
                                                   'label' => 'Mobile logo',
                                                   'errorLabel' => $errors->first('logo_mobile')
                                                   ],'file') !!}
                                                </div>
                                                <img src="{{asset($config->logo_mobile)}}" width="150px" alt="">
                                            </div>

                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        Contact details
                                                    </div>
                                                    <div class="card-body pb-5">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div>
                                                                    <label for="">Email</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text"><i class="fas fa-at"></i></div>
                                                                        </div>
                                                                        {!! html()->input('email', $config->email ,[
                                                                           'class' => 'form-control ',
                                                                           'label' => '',
                                                                           'errorLabel' => $errors->first('email'),
                                                                           'maxlength' => 128,
                                                                           'placeholder' => 'Enter your email'
                                                                           ],'email') !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div>
                                                                    <label for="">Phone</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text"><i class="fas fa-phone"></i></div>
                                                                        </div>
                                                                        {!! html()->input('phone', $config->phone ,[
                                                                           'class' => 'form-control ',
                                                                           'label' => '',
                                                                           'errorLabel' => $errors->first('phone'),
                                                                           'maxlength' => 128,
                                                                           'placeholder' => 'Enter your phone number'
                                                                           ]) !!}
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <label for="">Phone 2</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text"><i class="fas fa-phone"></i></div>
                                                                        </div>
                                                                        {!! html()->input('phone2', $config->phone2 ,[
                                                                           'class' => 'form-control ',
                                                                           'label' => '',
                                                                           'errorLabel' => $errors->first('phone2'),
                                                                           'maxlength' => 128,
                                                                           'placeholder' => 'Enter your additional phone number'
                                                                           ]) !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @php
                                        $config->social_links = json_decode($config->social_links);
                                        @endphp
                                        <div class="row mt-2">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        Social links
                                                    </div>
                                                    <div class="card-body pb-5">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text"><i class="fab fa-facebook"></i></div>
                                                                        </div>
                                                                        {!! html()->input('social_links[facebook]', $config->social_links?->facebook ,[
                                                                           'class' => 'form-control ',
                                                                           'label' => '',
                                                                           'errorLabel' => $errors->first('social_links.facebook'),
                                                                           'placeholder' => ''
                                                                           ]) !!}
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text"><i class="fab fa-twitter"></i></div>
                                                                        </div>
                                                                        {!! html()->input('social_links[twitter]', $config->social_links?->twitter ,[
                                                                           'class' => 'form-control ',
                                                                           'label' => '',
                                                                           'errorLabel' => $errors->first('social_links.twitter'),
                                                                           'placeholder' => ''
                                                                           ]) !!}
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text"><i class="fab fa-linkedin"></i></div>
                                                                        </div>
                                                                        {!! html()->input('social_links[linkedin]', $config->social_links?->linkedin ,[
                                                                           'class' => 'form-control ',
                                                                           'label' => '',
                                                                           'errorLabel' => $errors->first('social_links.linkedin'),
                                                                           'placeholder' => ''
                                                                           ]) !!}
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text"><i class="fab fa-youtube"></i></div>
                                                                        </div>
                                                                        {!! html()->input('social_links[youtube]', $config->social_links?->youtube ,[
                                                                           'class' => 'form-control ',
                                                                           'label' => '',
                                                                           'errorLabel' => $errors->first('social_links.youtube'),
                                                                           'placeholder' => ''
                                                                           ]) !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text"><i class="fab fa-instagram"></i></div>
                                                                        </div>
                                                                        {!! html()->input('social_links[instagram]', $config->social_links?->instagram ,[
                                                                           'class' => 'form-control ',
                                                                           'label' => '',
                                                                           'errorLabel' => $errors->first('social_links.instagram'),
                                                                           'placeholder' => ''
                                                                           ]) !!}
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text"><i class="fab fa-whatsapp"></i></div>
                                                                        </div>
                                                                        {!! html()->input('social_links[whatsapp]', $config->social_links?->whatsapp ,[
                                                                           'class' => 'form-control ',
                                                                           'label' => '',
                                                                           'errorLabel' => $errors->first('social_links.whatsapp'),
                                                                           'placeholder' => ''
                                                                           ]) !!}
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text"><i class="fab fa-telegram"></i></div>
                                                                        </div>
                                                                        {!! html()->input('social_links[telegram]', $config->social_links?->telegram ,[
                                                                           'class' => 'form-control ',
                                                                           'label' => '',
                                                                           'errorLabel' => $errors->first('social_links.telegram'),
                                                                           'placeholder' => ''
                                                                           ]) !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade active show" id="custom-tabs-three-profile"
                                         role="tabpanel"
                                         aria-labelledby="custom-tabs-three-profile-tab">
                                        <div class="row">
                                            <div class="col-6 col-xs-12">
                                                <div class="form-group">
                                                    {!! html()->input('homepage_title', $config->homepage_title ,[
                                                   'class' => 'form-control ',
                                                   'label' => 'Homepage (Title)',
                                                   'errorLabel' => $errors->first('homepage_title'),
                                                   'maxlength' => 55,
                                                   ]) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! html()->input('homepage_meta_desc', $config->homepage_meta_desc ,[
                                                   'class' => 'form-control ',
                                                   'label' => 'Homepage (Meta description)',
                                                   'errorLabel' => $errors->first('homepage_meta_desc'),
                                                   'maxlength' => 155,
                                                   ]) !!}
                                                </div>
                                            </div>
                                            <div class="col-6 col-xs-12">
                                                <div class="form-group">
                                                    {!! html()->input('homepage_image_alt_tags', $config->homepage_image_alt_tags ,[
                                                   'class' => 'form-control ',
                                                   'label' => 'Alt tags for images',
                                                   'errorLabel' => $errors->first('homepage_image_alt_tags')
                                                   ]) !!}
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel"
                                         aria-labelledby="custom-tabs-three-messages-tab">
                                        <div class="row">
                                            <div class="col-6 col-xs-12">
                                                <div class="form-group">
                                                    {!! html()->input('order_title', $config->order_title ,[
                                                   'class' => 'form-control ',
                                                   'label' => 'Order page (Title)',
                                                   'errorLabel' => $errors->first('order_title'),
                                                     'maxlength' => 55,
                                                   ]) !!}
                                                </div>

                                            </div>
                                            <div class="col-6 col-xs-12">
                                                <div class="form-group">
                                                    {!! html()->input('order_meta_desc', $config->order_meta_desc ,[
                                                   'class' => 'form-control ',
                                                   'label' => 'Order page (Meta description)',
                                                   'errorLabel' => $errors->first('order_meta_desc'),
                                                     'maxlength' => 155,
                                                   ]) !!}
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-center mt-3">
                                    <input type="submit" value="{{trans('admin.save')}}" class="btn btn-success btn-lg">
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </section>

@endsection

