@extends('backend.layout.master')
@php
    $route = route('admin.reviews.store');
    $edit = false;

    if (isset($review))
    {
        $edit   = true;
        $route  = route('admin.reviews.update',$review->id);
    }

@endphp
@section('title', 'Reviews')

@section('content')
    <div class="col-12">
        <form action="{{$route}}" method="POST" enctype="multipart/form-data">
            @csrf
            @if($edit)
                @method('PUT')
            @endif

            <div class="row">
                <div class="col-md-10">
                    <div class="card card-primary card-outline card-tabs">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! html()->input('name', $edit ? $review->name : null,[
                                              'class' => 'form-control ',
                                              'label' => 'Name',
                                              'errorLabel' => $errors->first('name')
                                          ]) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! html()->input('image', $edit ? $review->image : null,[
                                            'class' => 'form-control ',
                                            'label' => 'Image',
                                            'errorLabel' => $errors->first('image')
                                        ],'file') !!}
                                        <img class="mt-3 " src="{{asset('')}}{{$edit ? $review->image : null}}" width="250px" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! html()->input('text', $edit ? $review->text : null,[
                                            'class' => 'form-control ',
                                            'label' => 'Text',
                                            'errorLabel' => $errors->first('text')
                                        ]) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! html()->dropDown('number', $edit ? $review->number : null,[1 => 1,2 => 2,3 => 3 ,4 => 4,5 => 5],[
                                             'class' => 'form-control ',
                                             'label' => 'Star count',
                                             'errorLabel' => $errors->first('number')
                                         ]) !!}
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
