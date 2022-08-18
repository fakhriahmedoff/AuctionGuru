@extends('backend.layout.master')
@php
    $edit = false;

    if (isset($plan))
    {
        $edit   = true;
    }

@endphp
@section('title', 'Plan')

@section('content')
    <div class="col-12">
        <form action="{{route('admin.plans.update',$plan->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-10">
                    <div class="card card-primary card-outline card-tabs">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! html()->input('name', $edit ? $plan->name : null,[
                                         'class' => 'form-control ',
                                         'label' => 'Adı',
                                         'errorLabel' => $errors->first('name')
                                     ]) !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! html()->input('price', $edit ? $plan->price : null,[
                                            'class' => 'form-control ',
                                            'label' => 'Qiymət',
                                            'errorLabel' => $errors->first('price')
                                        ],'number') !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <a id="add_plan_text" href="#"><label for="">Plan teksti əlavə et</label></a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4" id="plan-texts">
                                    @foreach($plan->planTexts as $item)
                                        <div class="form-group">
                                            <label for="price">Plan teksti</label>
                                            <input type="text" name="plan_texts[]"  style="width: 90%" value="{{$item->text}}" class="form-control d-inline-block">
                                            <a href="#" id="delete" class="btn btn-danger delete mb-2 float-right">Sil</a>

                                        </div>
                                    @endforeach
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
    <script>

        $(document).ready(function () {
            let _btnAdd = $('#add_plan_text');
            let _planTexts = $('#plan-texts');


            let _textInput = `
            <div class="form-group">
            <label for="price">Plan teksti</label>
            <input type="text"  style="width: 90%" name="plan_texts[]" class="form-control d-inline-block">
            <a href="#" id="delete"  class="btn btn-danger delete float-right">Sil</a>
            </div>`;


            $(_btnAdd).click(function () {
                _planTexts.append(_textInput)
            })

            $(document).on('click', '.delete', function (e) {
                $(e.target).parent().remove()
            });


        })


    </script>
@append
