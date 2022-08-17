@extends('frontend.layout.master')

@section('content')
    <div role="main" class="main">

        <div class="pt-lg-5 pt-5"></div>
        <div class="container shop py-3 mt-lg-5 pt-5 ">

            <form role="form" method="post" action="{{route('order')}}">
                @csrf
                <div class="row">
                    <div class="col-lg-7 mb-4 mb-lg-0">
                        <h2 class="text-color-dark font-weight-bold text-5-5 mb-3">Billing Details</h2>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-label">First Name <span class="text-color-danger">*</span></label>
                                <input type="text"
                                       class="form-control @if($errors->first('name')) is-invalid @endif h-auto py-2"
                                       name="name" value="{{old('name')}}"
                                       required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label">Email <span class="text-color-danger">*</span></label>
                                <input type="email" class="form-control h-auto py-2"
                                       @if($errors->first('email')) is-invalid @endif name="email"
                                       value="{{old('email')}}"
                                       required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label">Order Notes</label>
                                <textarea
                                        class="form-control h-auto py-2 @if($errors->first('message')) is-invalid @endif"
                                        name="message" rows="5"
                                        placeholder="Notes about your order e.g. special notes">{{old('message')}}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="form-label">Attach your auction sheet <span
                                            class="text-color-danger">*</span></label>
                                <input type="file"
                                       class="form-control h-auto py-2 @if($errors->first('uploaded_files')) is-invalid @endif"
                                       name="uploaded_files"
                                       required="">

                                @foreach($errors->all() as $err)
                                    {{$err}}
                                @endforeach
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-5 position-relative">
                        <div class="card border-width-3 border-radius-0 border-color-hover-dark" data-plugin-sticky=""
                             data-plugin-options="{'minWidth': 991, 'containerSelector': '.row', 'padding': {'top': 85}}">
                            <div class="card-body">
                                <h4 class="font-weight-bold text-uppercase text-4 mb-3">Your Order</h4>
                                <table class="shop_table cart-totals mb-3">
                                    <tbody>
                                    <tr class="shipping">
                                        <td colspan="2">
                                            <strong class="d-block text-color-dark mb-2">Select your plan</strong>

                                            <div class="d-flex flex-column">
                                                <label class="d-flex align-items-center text-color-grey mb-0"
                                                       for="shipping_method1">
                                                    <input id="shipping_method1" type="radio" class="me-2"
                                                           name="plan" value="plan1" checked="">
                                                    Free Shipping
                                                </label>
                                                <label class="d-flex align-items-center text-color-grey mb-0"
                                                       for="shipping_method2">
                                                    <input id="shipping_method2" type="radio" class="me-2"
                                                           name="plan" value="plan3">
                                                    Local Pickup
                                                </label>
                                                <label class="d-flex align-items-center text-color-grey mb-0"
                                                       for="shipping_method3">
                                                    <input id="shipping_method3" type="radio" class="me-2"
                                                           name="plan" value="plan3">
                                                    Flat Rate: $5.00
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    {{--                                    <tr class="total">--}}
                                    {{--                                        <td>--}}
                                    {{--                                            <strong class="text-color-dark text-3-5">Total</strong>--}}
                                    {{--                                        </td>--}}
                                    {{--                                        <td class="text-end">--}}
                                    {{--                                            <strong class="text-color-dark"><span class="amount text-color-dark text-5">$431</span></strong>--}}
                                    {{--                                        </td>--}}
                                    {{--                                    </tr>--}}
                                    <tr class="payment-methods">
                                        <td colspan="2">
                                            <strong class="d-block text-color-dark mb-2">Payment Methods</strong>

                                            <div class="d-flex flex-column">
                                                <label class="d-flex align-items-center text-color-grey mb-0"
                                                       for="payment_method1">
                                                    <input id="payment_method1" type="radio" class="me-2"
                                                           name="payment_method" value="cash-on-delivery" checked="">
                                                    Cash On Delivery
                                                </label>
                                                <label class="d-flex align-items-center text-color-grey mb-0"
                                                       for="payment_method2">
                                                    <input id="payment_method2" type="radio" class="me-2"
                                                           name="payment_method" value="paypal">
                                                    PayPal
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Your personal data will be used to process your order, support your
                                            experience throughout this website, and for other purposes described in our
                                            privacy policy.
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <button type="submit"
                                        class="btn btn-primary btn-modern w-100 text-uppercase text-3 py-3">Place Order
                                    <i class="fas fa-arrow-right ms-2"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection
