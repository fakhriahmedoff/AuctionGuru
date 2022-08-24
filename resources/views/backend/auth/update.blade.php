@extends('backend.layout.master')

@section('title','Update admin panel credentials')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Fill inputs below</h3>
                        </div>
                        <form method="post" action="{{route('admin.updateAdminDetails')}}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    {!! html()->input('name', $user->name, [
                                                     'placeholder' => 'Adı',
                                                     'errorLabel' => $errors->first('name')
                                                     ]) !!}
                                </div>
                                <div class="form-group">
                                    {!! html()->input('email', $user->email, [
                                                     'placeholder' => 'Email',
                                                     'errorLabel' => $errors->first('email')
                                                     ]) !!}
                                </div>
                                <div class="form-group">
                                    {!! html()->input('password', '', [
                                                     'placeholder' => 'Password',
                                                     'errorLabel' => $errors->first('password')
                                                     ],'password') !!}
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
