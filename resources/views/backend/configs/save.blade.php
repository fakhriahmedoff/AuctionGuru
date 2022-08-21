@extends('backend.layout.master')

@section('title', 'Konfiqurasiyalar')

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
                                           href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home"
                                           aria-selected="false">Sayt konfiqurasiyaları</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-three-profile-tab" data-toggle="pill"
                                           href="#custom-tabs-three-profile" role="tab"
                                           aria-controls="custom-tabs-three-profile" aria-selected="true">Əsas səhifə (SEO)</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill"
                                           href="#custom-tabs-three-messages" role="tab"
                                           aria-controls="custom-tabs-three-messages" aria-selected="false">Ödəniş səhifəsi (SEO)</a>
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
                                                   'label' => 'Mobil logo',
                                                   'errorLabel' => $errors->first('logo_mobile')
                                                   ],'file') !!}
                                                </div>
                                                <img src="{{asset($config->logo_mobile)}}" width="150px" alt="">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade active show" id="custom-tabs-three-profile" role="tabpanel"
                                         aria-labelledby="custom-tabs-three-profile-tab">
                                        <div class="row">
                                            <div class="col-6 col-xs-12">
                                                <div class="form-group">
                                                    {!! html()->input('homepage_title', $config->homepage_title ,[
                                                   'class' => 'form-control ',
                                                   'label' => 'Əsas səhifə (Title)',
                                                   'errorLabel' => $errors->first('homepage_title')
                                                   ]) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! html()->input('homepage_meta_desc', $config->homepage_meta_desc ,[
                                                   'class' => 'form-control ',
                                                   'label' => 'Əsas səhifə (Meta description)',
                                                   'errorLabel' => $errors->first('homepage_meta_desc')
                                                   ]) !!}
                                                </div>
                                            </div>
                                            <div class="col-6 col-xs-12">
                                                <div class="form-group">
                                                    {!! html()->input('homepage_image_alt_tags', $config->homepage_image_alt_tags ,[
                                                   'class' => 'form-control ',
                                                   'label' => 'Əsas səhifə şəkillərin alt teqi',
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
                                                   'label' => 'Sifariş səhifəsi (Title)',
                                                   'errorLabel' => $errors->first('order_title')
                                                   ]) !!}
                                                </div>

                                            </div>
                                            <div class="col-6 col-xs-12">
                                                <div class="form-group">
                                                    {!! html()->input('order_meta_desc', $config->order_meta_desc ,[
                                                   'class' => 'form-control ',
                                                   'label' => 'Sifariş səhifəsi alt teq',
                                                   'errorLabel' => $errors->first('order_meta_desc')
                                                   ]) !!}
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-center mt-2">
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
