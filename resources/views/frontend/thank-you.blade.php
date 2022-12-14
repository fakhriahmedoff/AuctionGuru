@extends('frontend.layout.master')

@section('meta_title','Thank You! - AuctionGuru')


@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col text-center">
                <div class="logo">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <hr class="solid my-5">
            </div>
        </div>
        <section class="http-error py-0">
            <div class="row justify-content-center py-3">
                <div class="col-6 text-center">
                    <div class="http-error-main">
                        <h2 class="mb-0">{{$texts['success']}}</h2>
                        <span class="text-6 font-weight-bold text-color-dark">{{$texts['your-order-has']}} </span>
                        <p class="text-3 my-4 line-height-8">{{$texts['an-unexpected-error-ocurred']}}</p>
                    </div>
                    <a href="{{route('home')}}"
                       class="btn btn-primary btn-rounded btn-xl font-weight-semibold text-2 px-4 py-3 mt-1 mb-4"><i
                            class="fas fa-angle-left pe-3"></i>{{$texts['go-back-to-home']}}</a>
                </div>
            </div>
        </section>
    </div>
@endsection
