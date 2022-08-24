@extends('backend.layout.master')
@php
    $route = route('admin.texts.store');
    $edit = false;

    if (isset($text))
    {
        $edit   = true;
        $route  = route('admin.texts.update',$text->id);
    }

@endphp
@section('title', 'Content texts')

@section('content')
    <div class="col-12">
        <form action="{{$route}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-10">
                    <div class="card card-primary card-outline card-tabs">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! html()->dropDown('group',$edit ? $text->group : null ,['site' => 'site','admin' => 'admin'], [
                                            'prompt' => ' - Seçin -',
                                            'label' => 'Group',
                                            'class' => 'form-control ',
                                             'errorLabel' => $errors->first('group')

                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="key">Key</label>
                                        <input type="text" readonly name="key" id="key" value="{{$edit ? $text->key: null}}" errorlabel=" key mütləqdir" class="form-control  @if($errors->first('key')) is-invalid @endif">
                                        <span class="text-danger"> {{$errors->first('key')}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group w-100">
                                        <label for="">Text</label>
                                        <textarea name="value"
                                                  class="form-control @if($errors->first('value')) is-invalid @endif"
                                                  cols="30" rows="3">{{$edit ? $text->value : null}}</textarea>
                                        @if($errors->first('value'))
                                            <span class="text-danger"> {{$errors->first('value')}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <input type="submit" value="@lang('admin.save')"
                                           class="btn btn-success btn-lg">
                                </div>
                            </div>

                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('additional_scripts')

@append
