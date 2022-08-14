@extends('frontend.layout.master')


@section('additional_styles')

    <style>
        @media (min-width: 1024px) {
            .custom-product-image-style-1 img {
                max-width: 120% !important;
                margin-top: -400px;
            }

        }

        /*--------------------------------------------------------------
# Pricing
--------------------------------------------------------------*/
        .pricing .box {
            padding: 40px 20px;
            text-align: center;
            border-radius: 8px;
            position: relative;
            overflow: hidden;
            background: #fefefe;
            box-shadow: 0px 5px 90px 0px rgba(110, 123, 131, 0.1);
        }

        .pricing .box h3 {
            font-weight: 400;
            padding: 15px;
            font-size: 18px;
            text-transform: uppercase;
            font-weight: 600;
            color: #ef524e;
        }

        .pricing .box h4 {
            font-size: 42px;
            color: #ef524e;
            font-weight: 500;
            font-family: "Open Sans", sans-serif;
            margin-bottom: 20px;
        }

        .pricing .box h4 sup {
            font-size: 20px;
            top: -15px;
            left: -3px;
        }

        .pricing .box h4 span {
            color: #bababa;
            font-size: 16px;
            font-weight: 300;
        }

        .pricing .box ul {
            padding: 0;
            list-style: none;
            color: #ef524e;
            text-align: center;
            line-height: 20px;
            font-size: 14px;
        }

        .pricing .box ul li {
            padding-bottom: 16px;
        }

        .pricing .box ul .na {
            color: #ccc;
            text-decoration: line-through;
        }

        .pricing .box .btn-wrap {
            padding: 15px;
            text-align: center;
        }

        .pricing .box .btn-buy {
            display: inline-block;
            padding: 10px 40px;
            border-radius: 4px;
            color: #ef524e;
            transition: none;
            font-size: 14px;
            font-weight: 400;
            font-family: "Raleway", sans-serif;
            font-weight: 600;
            transition: 0.3s;
            border: 2px solid #ef524e;
        }

        .pricing .box .btn-buy:hover {
            background: #ef524e;
            color: #fff;
        }

        .pricing .featured {
            background: #ef524e;
        }

        .pricing .featured h3,
        .pricing .featured h4,
        .pricing .featured h4 span,
        .pricing .featured ul,
        .pricing .featured ul .na {
            color: #fff;
        }

        .pricing .featured .btn-wrap {
            padding: 15px;
            text-align: center;
        }

        .pricing .featured .btn-buy {
            color: #fff;
            border: 2px solid #fff;
        }

        .pricing .featured .btn-buy:hover {
            background: #fff;
            color: #ef524e;
        }


        #we-provide #section-en-description-1 li {
            color: white;
        }

        .section.section.section-height-3 {
            background: url("/frontend/images/backimage.jpeg");
            /* Set a specific height */
            min-height: 200px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 0px !important;

        }

        #we-provide .master-container {
            background: rgba(0, 0, 0, 0.75);
            padding: 4.6153846154rem 0;
        }

        #about-us img {
            margin-top: -30px;
            padding: 10px !important
        }
    </style>

@endsection
@section('content')

    <div role="main" class="main">

        <section id="home"
                 class="section section-with-shape-divider border-0 custom-bg-color-grey-1 overflow-visible m-0 pt-5 pb-5 pb-lg-0">
            <div class="container position-relative z-index-2 h-100 py-md-5">
                <div class="row align-items-center justify-content-center h-100 pt-5 py-xl-5 my-xl-5 pb-0">
                    <div class="col-md-10 col-lg-6 text-center text-sm-end order-2 order-lg-1 pe-lg-0 py-lg-5 my-lg-5">
                        <h1 class="text-13 ls-0 line-height-1 custom-ws-nowrap mb-3 z-index-1 position-relative text-center text-sm-start">
									<span class="d-block position-relative">
										<span class="custom-bg-color-grey-1 z-index-1 position-relative pe-sm-4">
											<span
                                                class="d-inline-block text-color-grey positive-ls-3 custom-font-size-1 custom-letter-spacing-1 appear-animation"
                                                data-appear-animation="fadeInLeftShorter"
                                                data-appear-animation-delay="1000">INTRODUCING</span>
										</span>
										<svg
                                            class="d-none d-sm-block position-absolute left-0 top-50pct transform3dy-n50 mt-2"
                                            height="1" width="99%">
										  	<line x1="0" y1="0" x2="600" y2="0" stroke="#969696" stroke-width="5"
                                                  class="appear-animation" data-appear-animation="customSVGLineAnim"
                                                  data-appear-animation-delay="100"
                                                  data-appear-animation-duration="2s"></line>
										</svg>
									</span>
                            <strong
                                class="font-weight-extra-bold text-3 text-sm-3-4 text-md-4 text-lg-2 text-xl-3 d-inline-block negative-ls-2 position-relative z-index-1 appear-animation"
                                data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1200">Auction
                                sheet translation
                            </strong>
                        </h1>
                        <p class="font-weight-light text-5 text-center text-sm-end mb-4 appear-animation"
                           data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1400">
                            Get your auction sheet translated now!
                        </p>
                        <div
                            class="d-flex flex-column flex-sm-row align-items-center justify-content-end mb-4 appear-animation"
                            data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1600">
                            <span class="font-weight-light text-4">Starting at</span>
                            <span class="text-color-primary font-weight-bold text-11 my-3 my-sm-0 mx-4">$15</span>
                            <a href="#"
                               class="btn btn-primary btn-rounded font-weight-bold text-4 px-5 py-3">Order now!</a>
                        </div>
                        <a href="#"
                           class="d-inline-flex align-items-center text-color-default text-color-hover-primary text-decoration-none font-weight-medium ms-3 ms-sm-0 appear-animation"
                           data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1800">Learn More <i
                                class="icons icon-arrow-right text-1 ms-2"></i></a>
                    </div>
                    <div class="col-lg-6 align-self-xl-stretch position-relative order-1 order-lg-2">
                        <div class="custom-product-image-style-1 d-none d-lg-block">
                            <div data-plugin-float-element
                                 data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                                <img src="{{asset('frontend')}}/images/mainpic.png"
                                     class="img-fluid appear-animation"
                                     alt="" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spacer pt-5 pb-4"></div>
            <div class="shape-divider shape-divider-bottom" style="height: 215px;">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewbox="0 0 1920 215"
                     preserveaspectratio="xMinYMin">
                    <path fill="#FFF" d="M-13,24c3.03-0.28,7.53-0.66,13-1c26.45-1.65,46.73-0.59,57,0c76.61,4.41,118,9,118,9
							c70.55,7.83,105.82,11.74,151,19c32.98,5.3,65.87,11.44,179,37c145.79,32.94,138.71,33.5,203,47c85.09,17.87,149.08,31.32,237,40
							c113.11,11.17,203.29,8.29,234,7c16.74-0.7,63.49-4.13,157-11c107.74-7.91,117.84-9.32,153-10c52.52-1.02,97.8,0.79,153,3
							c21.27,0.85,54.96,2.38,96,5c37.55,2.4,68.64,4.91,119,9c30.97,2.52,56.12,4.64,72,6c0,13.33,0,26.67,0,40c-646,0-1292,0-1938,0
							C-10.33,157.33-11.67,90.67-13,24z"></path>
                </svg>
            </div>
        </section>

        <section id="pricing" class="pricing">
            <div class="container aos-init aos-animate" data-aos="fade-up">

                <div class="section-title">
                    <h2 class="font-weight-bold text-9 text-center mb-2 mt-5 line-height-2 appear-animation animated maskUp appear-animation-visible"
                        data-appear-animation="maskUp" data-appear-animation-delay="600"
                        style="animation-delay: 600ms;">Pricing</h2>
                    <br>
                    <p class="mb-5 appear-animation animated maskUp appear-animation-visible">Magnam dolores commodi
                        suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur
                        velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
                        in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row appear-animation animated maskUp appear-animation-visible">

                    <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="zoom-im" data-aos-delay="100">
                        <div class="box">
                            <h3>Free</h3>
                            <h4><sup>$</sup>0<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li class="na">Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mt-md-0 aos-init aos-animate" data-aos="zoom-in"
                         data-aos-delay="100">
                        <div class="box featured">
                            <h3>Business</h3>
                            <h4><sup>$</sup>19<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0 aos-init aos-animate" data-aos="zoom-in"
                         data-aos-delay="100">
                        <div class="box">
                            <h3>Developer</h3>
                            <h4><sup>$</sup>29<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <section id="asd" class="section section-with-shape-divider border-0 bg-transparent m-0 p-0">
            <div class="container pt-lg-5">
                {{--                <div class="row">--}}
                {{--                    <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="zoom-im" data-aos-delay="100">--}}
                {{--                        <div class="box"><h3>Free</h3><h4><sup>$</sup>0<span> / month</span></h4>--}}
                {{--                            <ul>--}}
                {{--                                <li>Aida dere</li>--}}
                {{--                                <li>Nec feugiat nisl</li>--}}
                {{--                                <li>Nulla at volutpat dola</li>--}}
                {{--                                <li class="na">Pharetra massa</li>--}}
                {{--                                <li class="na">Massa ultricies mi</li>--}}
                {{--                            </ul>--}}
                {{--                            <div class="btn-wrap"><a href="#" class="btn-buy">Buy Now</a></div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-lg-4 col-md-6 mt-4 mt-md-0 aos-init aos-animate" data-aos="zoom-in"--}}
                {{--                         data-aos-delay="100">--}}
                {{--                        <div class="box featured"><h3>Business</h3><h4><sup>$</sup>19<span> / month</span></h4>--}}
                {{--                            <ul>--}}
                {{--                                <li>Aida dere</li>--}}
                {{--                                <li>Nec feugiat nisl</li>--}}
                {{--                                <li>Nulla at volutpat dola</li>--}}
                {{--                                <li>Pharetra massa</li>--}}
                {{--                                <li class="na">Massa ultricies mi</li>--}}
                {{--                            </ul>--}}
                {{--                            <div class="btn-wrap"><a href="#" class="btn-buy">Buy Now</a></div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0 aos-init aos-animate" data-aos="zoom-in"--}}
                {{--                         data-aos-delay="100">--}}
                {{--                        <div class="box"><h3>Developer</h3><h4><sup>$</sup>29<span> / month</span></h4>--}}
                {{--                            <ul>--}}
                {{--                                <li>Aida dere</li>--}}
                {{--                                <li>Nec feugiat nisl</li>--}}
                {{--                                <li>Nulla at volutpat dola</li>--}}
                {{--                                <li>Pharetra massa</li>--}}
                {{--                                <li>Massa ultricies mi</li>--}}
                {{--                            </ul>--}}
                {{--                            <div class="btn-wrap"><a href="#" class="btn-buy">Buy Now</a></div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                {{--                <div class="row align-items-start justify-content-center py-5  mb-4">--}}
                {{--                    --}}
                {{--                    <div class="col-md-9 col-lg-5 col-xl-6 order-2 order-lg-1">--}}
                {{--                        <div data-plugin-float-element--}}
                {{--                             data-plugin-options="{'startPos': 'bottom', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">--}}
                {{--                            <img src="{{asset('frontend')}}/images/product-landing-product-2.png"--}}
                {{--                                 class="img-fluid appear-animation" alt=""--}}
                {{--                                 data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"--}}
                {{--                                 style="margin-top: -65px;">--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-lg-7 col-xl-6 order-1 order-lg-2 mb-5 mb-xl-0 pb-5 pb-xl-0">--}}
                {{--                        <div class="overflow-hidden mb-1">--}}
                {{--                            <span--}}
                {{--                                class="d-block text-color-default custom-letter-spacing-1 text-3-5 mb-0 appear-animation"--}}
                {{--                                data-appear-animation="maskUp" data-appear-animation-delay="400">POWERFUL DEVICE</span>--}}
                {{--                        </div>--}}
                {{--                        <div class="overflow-hidden mb-4">--}}
                {{--                            <h2 class="font-weight-bold text-9 negative-ls-05 line-height-2 mb-0 appear-animation"--}}
                {{--                                data-appear-animation="maskUp" data-appear-animation-delay="600">Japanese Auction Sheet--}}
                {{--                                Translation Services</h2>--}}
                {{--                        </div>--}}
                {{--                        <p class="font-weight-semibold text-4-5 line-height-6 mb-4 appear-animation"--}}
                {{--                           data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">Are you thinking of--}}
                {{--                            buying a car at a Japanese car auction? That’s a smart choice, because the quality of--}}
                {{--                            pre-owned Japanese vehicles is second to none!</p>--}}
                {{--                        <p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"--}}
                {{--                           data-appear-animation-delay="1000">But to make the best possible choice, you need to know exactly what you’re getting. All cars sold in Japan undergo a thorough inspection before they’re put on the market. So getting a complete and accurate translation of the auction inspector’s report is essential before making your purchase.--}}
                {{--                        </p>--}}
                {{--                        <a href="#reviews" data-hash data-hash-offset="0" data-hash-offset-lg="70"--}}
                {{--                           class="btn btn-primary btn-rounded font-weight-bold text-3-5 px-5 py-3 appear-animation"--}}
                {{--                           data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">Reviews</a>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
            <div class="spacer pt-5 pb-5 my-lg-5 my-xl-0"></div>
            <div class="spacer pt-5 pb-5 my-lg-5 my-xl-0"></div>

            <div class="spacer pt-5 pb-5 my-lg-5 my-xl-0"></div>
            <div class="shape-divider shape-divider-bottom shape-divider-reverse-y" style="height: 215px;">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewbox="0 0 1920 215"
                     preserveaspectratio="xMinYMin">
                    <path fill="#EFF1F3" d="M-17,20c4.09,0.79,9.94,1.87,17,3c14.01,2.23,24.68,3.35,31,4c25.44,2.62,38.16,3.92,52,5
								c124.22,9.65,185,12,185,12c68.3,2.64,120.49,4.65,191,2c22.4-0.84,21.56-1.21,158-11c128.51-9.22,140.25-9.68,153-10
								c22.7-0.57,91-1.79,179,6c80.95,7.16,140.16,18.54,204,31c93.98,18.34,96.08,23.21,217,50c124.45,27.57,213.36,42.61,276,52
								c77.73,11.66,123.89,15.95,169,18c51.59,2.34,94.89,1.42,126,0c0,16.35,0,32.69,0,49.04c-651.33,0-1302.67,0-1954,0
								C-14.33,160.69-15.67,90.35-17,20z"></path>
                </svg>
            </div>
        </section>

        <section id="about-us"
            class="section section-with-shape-divider border-0 custom-bg-color-grey-1 overflow-visible z-index-1 m-0 pt-0 pb-1">
            <div class="container custom-xs-margin-top-1 pt-3 pb-lg-5 mb-lg-5">
                {{--                <div class="overflow-hidden mb-1">--}}
                {{--                            <span--}}
                {{--                                class="d-block text-color-default custom-letter-spacing-1 text-3-5 mb-0 appear-animation"--}}
                {{--                                data-appear-animation="maskUp"--}}
                {{--                                data-appear-animation-delay="400">Japanese Auction Sheet Translation Services</span>--}}
                {{--                </div>--}}
                {{--                <div class="overflow-hidden mb-4">--}}
                {{--                    <h2 class="font-weight-bold text-9 negative-ls-05 line-height-2 mb-0 appear-animation"--}}
                {{--                        data-appear-animation="maskUp" data-appear-animation-delay="600">Are you thinking of--}}
                {{--                        buying a car at a Japanese car auction? That’s a smart choice, because the quality of--}}
                {{--                        pre-owned Japanese vehicles is second to none!--}}
                {{--                    </h2>--}}
                {{--                </div>--}}
                <div class="section-title">
                    <h2 class="font-weight-bold text-9 text-center mb-2 mt-5 line-height-2 appear-animation animated maskUp appear-animation-visible"
                        data-appear-animation="maskUp" data-appear-animation-delay="600"
                        style="animation-delay: 600ms;">Japanese Auction Sheet Translation Services
                    </h2>
                    <br>
                    <p class="mb-5 appear-animation animated maskUp appear-animation-visible text-center">Are you
                        thinking of buying
                        a car at a Japanese car auction? That’s a smart choice, because the quality of pre-owned
                        Japanese vehicles is second to none!
                    </p>
                </div>

                <div class="row align-items-start justify-content-center ">
                    <div class="col-lg-8 col-xl-6 pb-5 pb-lg-0 mb-lg-5 mb-xl-0">

                        <p class="font-weight-bold text-4-5 line-height-6 mb-4 appear-animation"
                           data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">Lorem ipsum dolor
                            sit amet, consectetur adipiscing elit.</p>
                        <p class="text-3-5 appear-animation" data-appear-animation="fadeInUpShorter"
                           data-appear-animation-delay="1000">But to make the best possible choice, you need to know
                            exactly what you’re getting. All cars sold in Japan undergo a thorough inspection before
                            they’re put on the market. So getting a complete and accurate translation of the auction
                            inspector’s report is essential before making your purchase.
                        </p>
                        <p class="text-3-5 font-weight-bold appear-animation" data-appear-animation="fadeInUpShorter"
                           data-appear-animation-delay="1000">The problem: auction sheets can be extremely technical and
                            difficult to understand.
                        </p>
                        <p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                           data-appear-animation-delay="1000">EFJ is here to help! With over a decade of experience in
                            the
                            Japanese car auction industry, our professionals are trusted experts in auction sheet
                            translation. We work hard to ensure that our clients have all the information they need to
                            make
                            the right car-buying decision – and avoid costly buying mistakes due to inaccurate or
                            incomplete
                            information.
                        </p>
                        <a href="#features" data-hash data-hash-offset="0" data-hash-offset-lg="70"
                           class="btn btn-primary btn-rounded font-weight-bold text-3-5 px-5 py-3 appear-animation"
                           data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">Features</a>
                    </div>
                    <div class="col-md-9 col-lg-4 col-xl-6 mb-5 mb-lg-0 ">
                        <div data-plugin-float-element
                             data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                            <img src="{{asset('frontend')}}/images/secpic.jpeg"
                                 class="img-fluid  appear-animation" style="" alt=""
                                 data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                        </div>
                    </div>
                </div>

                <div class="spacer pt-5 pb-5 my-lg-5 my-xl-0"></div>

            </div>
            <div class="shape-divider shape-divider-bottom" style="height: 215px;">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewbox="0 0 1920 215"
                     preserveaspectratio="xMinYMin">
                    <path fill="#FFF" d="M-13,24c3.03-0.28,7.53-0.66,13-1c26.45-1.65,46.73-0.59,57,0c76.61,4.41,118,9,118,9
							c70.55,7.83,105.82,11.74,151,19c32.98,5.3,65.87,11.44,179,37c145.79,32.94,138.71,33.5,203,47c85.09,17.87,149.08,31.32,237,40
							c113.11,11.17,203.29,8.29,234,7c16.74-0.7,63.49-4.13,157-11c107.74-7.91,117.84-9.32,153-10c52.52-1.02,97.8,0.79,153,3
							c21.27,0.85,54.96,2.38,96,5c37.55,2.4,68.64,4.91,119,9c30.97,2.52,56.12,4.64,72,6c0,13.33,0,26.67,0,40c-646,0-1292,0-1938,0
							C-10.33,157.33-11.67,90.67-13,24z"></path>
                </svg>
            </div>
        </section>

        <div class="container position-relative z-index-2 pt-5 mt-md-5 mt-xl-0 pt-xl-0">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-9 col-lg-5 col-xl-6 mb-5 mb-lg-0">
                    <div data-plugin-float-element
                         data-plugin-options="{'startPos': 'bottom', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                        <img src="{{asset('frontend')}}/images/product-landing-noise.jpg"
                             class="img-fluid appear-animation" alt=""
                             data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    </div>
                </div>
                <div class="col-lg-7 col-xl-6 pb-4">
                    <div class="overflow-hidden mb-1">
                        <span class="d-block text-color-default custom-letter-spacing-1 text-3-5 mb-0 appear-animation"
                              data-appear-animation="maskUp" data-appear-animation-delay="400">EXTRA CONFORT</span>
                    </div>
                    <div class="overflow-hidden mb-4">
                        <h2 class="font-weight-bold text-9 negative-ls-05 line-height-2 mb-0 appear-animation"
                            data-appear-animation="maskUp" data-appear-animation-delay="600">Noise Cancelling</h2>
                    </div>
                    <p class="font-weight-bold text-4-5 line-height-6 mb-4 appear-animation"
                       data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est.</p>
                    <p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                       data-appear-animation-delay="1000">Vestibulum auctor felis eget orci semper vestibulum.
                        Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. In nibh ipsum,
                        blandit id faucibus ac, finibus vitae dui.</p>
                    <a href="demo-product-landing-checkout.html"
                       class="btn btn-primary btn-rounded font-weight-bold text-3-5 px-5 py-3 appear-animation"
                       data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">Buy Now!</a>
                </div>
            </div>
        </div>

        <div class="container container-xl-custom position-relative overflow-hidden pb-5">
            <svg class="position-absolute w-100 h-100 z-index-2 p-events-none d-none d-lg-block" viewbox="0 0 120 120"
                 version="1.1" xmlns="http://www.w3.org/2000/svg" style="bottom: -80px; left: 0;">
                <circle cx="60" cy="90" r="90" stroke="#edeeee" stroke-width="0.3" fill="transparent"
                        class="appear-animation" data-appear-animation="customSVGLineAnimTwo"
                        data-appear-animation-delay="200" data-appear-animation-duration="3s"
                        data-plugin-options="{'accY': -300, 'forceAnimation': true}"></circle>
            </svg>
            {{--            <div class="row pt-lg-5 mt-lg-5" id="tour">--}}
            {{--                <div class="col text-center pt-5 mt-5">--}}
            {{--                    <div class="overflow-hidden mb-1">--}}
            {{--                        <span class="d-block text-color-default positive-ls-3 text-3-5 mb-0 appear-animation"--}}
            {{--                              data-appear-animation="maskUp"--}}
            {{--                              data-appear-animation-delay="500">360&ordm; VIRTUAL TOUR</span>--}}
            {{--                    </div>--}}
            {{--                    <div class="overflow-hidden mb-1">--}}
            {{--                        <h2 class="font-weight-bold negative-ls-05 text-9 mb-0 appear-animation"--}}
            {{--                            data-appear-animation="maskUp" data-appear-animation-delay="200">Virtual Tour</h2>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--            <div class="row">--}}
            {{--                <div class="col">--}}
            {{--                    <div class="cd-product-viewer-wrapper" data-frame="16" data-friction="0.33">--}}
            {{--                        <div>--}}
            {{--                            <figure class="product-viewer appear-animation" data-appear-animation="fadeInUpShorter"--}}
            {{--                                    data-appear-animation-delay="300">--}}
            {{--                                <img src="{{asset('frontend')}}/images/products-product-360-sprite-preview.jpg"--}}
            {{--                                     alt="Product Preview">--}}
            {{--                                <div class="product-sprite" data-image="img/products/product-360-sprite.jpg"></div>--}}
            {{--                            </figure>--}}

            {{--                            <div class="cd-product-viewer-handle">--}}
            {{--                                <span class="fill"></span>--}}
            {{--                                <span class="handle">--}}
            {{--							        		Handle--}}
            {{--							        		<span class="bars"></span>--}}
            {{--							        	</span>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>

        <section class="section section-height-3 bg-dark border-0 m-0" id="we-provide">
            <div class="master-container">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-xl-8 mb-lg-4">
                            <div class="overflow-hidden mb-1">
                                {{--                            <div class="appear-animation" data-appear-animation="maskUp"--}}
                                {{--                                 data-appear-animation-delay="500">--}}
                                {{--                                <span class="d-block text-color-light custom-letter-spacing-1 text-3-5 opacity-5 mb-0">Japanese Auction Sheet Translation Services</span>--}}
                                {{--                            </div>--}}
                            </div>
                            <h2 class="text-color-light font-weight-bold ls-0 text-9 mb-4">What details will EFJ’s
                                auction
                                sheet translation service provide?
                            </h2>
                            <p class="text-3-5 text-color-light opacity-5">
                            <div id="section-en-description-1" class="page-content font-weight-light">
                                <ul>
                                    <li>Complete vehicle ownership and maintenance history</li>
                                    <li>Independent inspector’s notes describing the car’s mechanical, electrical, and
                                        structural condition
                                    </li>
                                    <li>Detailed assessment of exterior and interior flaws</li>
                                </ul>
                            </div>
                            </p>
                        </div>
                        <div class="col-lg-5 col-xl-4 mb-5 mb-lg-0 pt-lg-5">
                            <div class="d-flex flex-wrap align-items-center justify-content-lg-end">
									<span class="text-color-primary font-weight-bold text-11 line-height-1 me-4">
										<span
                                            class="d-block text-color-white custom-font-size-2 line-height-3 font-weight-light opacity-9">Starting at</span>
										$15
									</span>
                                <a href="demo-product-landing-checkout.html"
                                   class="btn btn-primary btn-rounded font-weight-bold text-3-5 px-5 py-3">Buy Now!</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h3 class="text-color-light text-4 font-weight-bold mb-2">GENERAL</h3>
                        </div>
                    </div>
                    <div class="row">
                        <p class="text-color-white">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate veritatis, voluptates.
                            Accusamus accusantium animi aperiam commodi cumque dolore earum eveniet facilis fugit iusto
                            magnam magni numquam, qui soluta ullam ut.
                        </p>
                        {{--                        <div class="col-md-6 col-lg-4 pe-lg-4 py-lg-2">--}}
                        {{--                            <ul class="list list-light list-unstyled mb-0">--}}
                        {{--                                <li class="text-color-light font-weight-light mb-1"><span--}}
                        {{--                                        class="custom-min-width opacity-5">Designed For</span> Smartphones--}}
                        {{--                                </li>--}}
                        {{--                                <li class="text-color-light font-weight-light mb-1"><span--}}
                        {{--                                        class="custom-min-width opacity-5">Circumaural</span> Supra-aural--}}
                        {{--                                </li>--}}
                        {{--                                <li class="text-color-light font-weight-light mb-1"><span--}}
                        {{--                                        class="custom-min-width opacity-5">Magnet Type</span> Neodymium--}}
                        {{--                                </li>--}}
                        {{--                                <li class="text-color-light font-weight-light mb-1 mb-lg-0"><span--}}
                        {{--                                        class="custom-min-width opacity-5">Wih Microphone</span> Yes--}}
                        {{--                                </li>--}}
                        {{--                            </ul>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="col-md-6 col-lg-4 px-lg-4 py-lg-2">--}}
                        {{--                            <ul class="list list-light list-unstyled mb-0">--}}
                        {{--                                <li class="text-color-light font-weight-light mb-1"><span--}}
                        {{--                                        class="custom-min-width opacity-5">Glass Type</span> Monocle--}}
                        {{--                                </li>--}}
                        {{--                                <li class="text-color-light font-weight-light mb-1"><span--}}
                        {{--                                        class="custom-min-width opacity-5">Lens Type</span> Bi Convex--}}
                        {{--                                </li>--}}
                        {{--                                <li class="text-color-light font-weight-light mb-1"><span--}}
                        {{--                                        class="custom-min-width opacity-5">Suitable For</span> Entertainment--}}
                        {{--                                </li>--}}
                        {{--                                <li class="text-color-light font-weight-light mb-1 mb-lg-0"><span--}}
                        {{--                                        class="custom-min-width opacity-5">Functions</span> Graphical Display--}}
                        {{--                                </li>--}}
                        {{--                            </ul>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="col-md-6 col-lg-4 ps-lg-4 py-lg-2">--}}
                        {{--                            <ul class="list list-light list-unstyled mb-0">--}}
                        {{--                                <li class="text-color-light font-weight-light mb-1"><span--}}
                        {{--                                        class="custom-min-width opacity-5">Compatible OS</span> Android--}}
                        {{--                                </li>--}}
                        {{--                                <li class="text-color-light font-weight-light mb-1"><span--}}
                        {{--                                        class="custom-min-width opacity-5">Compatible Eye</span> Both--}}
                        {{--                                </li>--}}
                        {{--                                <li class="text-color-light font-weight-light mb-1 mb-lg-0"><span--}}
                        {{--                                        class="custom-min-width opacity-5">Control Type</span> Manual--}}
                        {{--                                </li>--}}
                        {{--                            </ul>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>

        </section>

        <section class="section section-with-shape-divider bg-transparent border-0 m-0 p-0">
            <div id="reviews" class="container position-relative pb-5 mb-5">
                <div class="row pt-4 mt-5">
                    <div class="col text-center">
                        <div class="overflow-hidden mb-1">
                            <span
                                class="d-block text-color-default custom-letter-spacing-2 text-3-5 mb-0 appear-animation"
                                data-appear-animation="maskUp" data-appear-animation-delay="300">FROM BUYERS</span>
                        </div>
                        <div class="overflow-hidden mb-4">
                            <h2 class="font-weight-bold negative-ls-05 text-9 mb-0 appear-animation"
                                data-appear-animation="maskUp" data-appear-animation-delay="500">Reviews</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center position-relative z-index-1 pb-5 mb-5 appear-animation"
                     data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
                    <div class="col-lg-11 pb-5 mb-3">
                        <div
                            class="owl-carousel owl-theme nav-outside nav-style-1 nav-arrows-thin nav-dark nav-font-size-lg mb-0"
                            data-plugin-options="{'responsive': {'0': {'items': 1, 'nav': false, 'dots': true}, '476': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'dots': false, 'nav': true}">
                            <div>
                                <div class="row align-items-center justify-content-center text-center text-md-start">
                                    <div class="col-10 col-md-3 col-lg-1-5 mb-4 mb-md-0">
                                        <img src="{{asset('frontend')}}/images/product-landing-client-1.jpg"
                                             class="img-fluid rounded-circle border border-width-10 custom-border-color-3"
                                             width="160" alt="">
                                    </div>
                                    <div class="col-md-9 col-lg-4-5 ps-lg-4">
                                        <input type="text" class="rating-invisible" value="5" title=""
                                               data-plugin-star-rating
                                               data-plugin-options="{'displayOnly': true, 'color': 'primary', 'extraClass': 'text-4'}">
                                        <p class="text-4 line-height-9 pe-lg-5 mt-2">Vestibulum auctor felis eget orci
                                            semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero
                                            luctus, molestie nunc. In nibh ipsum, blandit id.</p>
                                        <strong class="text-color-dark font-weight-bold text-4">Jennifer Doe</strong>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row align-items-center justify-content-center text-center text-md-start">
                                    <div class="col-10 col-md-3 col-lg-1-5 mb-4 mb-md-0">
                                        <img src="{{asset('frontend')}}/images/product-landing-client-2.jpg"
                                             class="img-fluid rounded-circle border border-width-10 custom-border-color-3"
                                             width="160" alt="">
                                    </div>
                                    <div class="col-md-9 col-lg-4-5 ps-lg-4">
                                        <input type="text" class="rating-invisible" value="5" title=""
                                               data-plugin-star-rating
                                               data-plugin-options="{'displayOnly': true, 'color': 'primary', 'extraClass': 'text-4'}">
                                        <p class="text-4 line-height-9 pe-lg-5 mt-2">Vestibulum auctor felis eget orci
                                            semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero
                                            luctus, molestie nunc. In nibh ipsum, blandit id.</p>
                                        <strong class="text-color-dark font-weight-bold text-4">Monica Doe</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="position-absolute bottom-0 w-100" style="left: 93%;">
                    <img src="{{asset('frontend')}}/images/product-landing-product-wire.jpg" class="img-fluid" alt="">
                </div>
            </div>
            <div class="shape-divider shape-divider-bottom" style="height: 215px;">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewbox="0 0 1920 215"
                     preserveaspectratio="xMinYMin">
                    <path fill="#EFF1F3" d="M-17,20c4.09,0.79,9.94,1.87,17,3c14.01,2.23,24.68,3.35,31,4c25.44,2.62,38.16,3.92,52,5
								c124.22,9.65,185,12,185,12c68.3,2.64,120.49,4.65,191,2c22.4-0.84,21.56-1.21,158-11c128.51-9.22,140.25-9.68,153-10
								c22.7-0.57,91-1.79,179,6c80.95,7.16,140.16,18.54,204,31c93.98,18.34,96.08,23.21,217,50c124.45,27.57,213.36,42.61,276,52
								c77.73,11.66,123.89,15.95,169,18c51.59,2.34,94.89,1.42,126,0c0,16.35,0,32.69,0,49.04c-651.33,0-1302.67,0-1954,0
								C-14.33,160.69-15.67,90.35-17,20z"></path>
                </svg>
            </div>
        </section>

        {{--        <section class="section custom-bg-color-grey-1 position-relative z-index-1 border-0 pt-0 m-0">--}}
        {{--            <div class="container shop pb-4" style="margin-top: -45px;">--}}
        {{--                <div class="row">--}}
        {{--                    <div class="col-lg-5 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter"--}}
        {{--                         data-appear-animation-delay="200">--}}

        {{--                        <div class="thumb-gallery-wrapper">--}}
        {{--                            <div--}}
        {{--                                class="thumb-gallery-detail owl-carousel owl-theme manual nav-inside nav-style-1 nav-dark nav-arrows-thin mb-3">--}}
        {{--                                <div>--}}
        {{--                                    <img alt="" class="img-fluid"--}}
        {{--                                         src="{{asset('frontend')}}/images/product-landing-product-carousel-1.jpg"--}}
        {{--                                         data-zoom-image="img/demos/product-landing/product-carousel-1.jpg">--}}
        {{--                                </div>--}}
        {{--                                <div>--}}
        {{--                                    <img alt="" class="img-fluid"--}}
        {{--                                         src="{{asset('frontend')}}/images/product-landing-product-carousel-1-2.jpg"--}}
        {{--                                         data-zoom-image="img/demos/product-landing/product-carousel-1-2.jpg">--}}
        {{--                                </div>--}}
        {{--                                <div>--}}
        {{--                                    <img alt="" class="img-fluid"--}}
        {{--                                         src="{{asset('frontend')}}/images/product-landing-product-carousel-1-3.jpg"--}}
        {{--                                         data-zoom-image="img/demos/product-landing/product-carousel-1-3.jpg">--}}
        {{--                                </div>--}}
        {{--                                <div>--}}
        {{--                                    <img alt="" class="img-fluid"--}}
        {{--                                         src="{{asset('frontend')}}/images/product-landing-product-carousel-1-4.jpg"--}}
        {{--                                         data-zoom-image="img/demos/product-landing/product-carousel-1-4.jpg">--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                            <div class="thumb-gallery-thumbs owl-carousel owl-theme manual thumb-gallery-thumbs mb-0">--}}
        {{--                                <div class="cur-pointer">--}}
        {{--                                    <img alt="" class="img-fluid"--}}
        {{--                                         src="{{asset('frontend')}}/images/product-landing-product-carousel-1.jpg">--}}
        {{--                                </div>--}}
        {{--                                <div class="cur-pointer">--}}
        {{--                                    <img alt="" class="img-fluid"--}}
        {{--                                         src="{{asset('frontend')}}/images/product-landing-product-carousel-1-2.jpg">--}}
        {{--                                </div>--}}
        {{--                                <div class="cur-pointer">--}}
        {{--                                    <img alt="" class="img-fluid"--}}
        {{--                                         src="{{asset('frontend')}}/images/product-landing-product-carousel-1-3.jpg">--}}
        {{--                                </div>--}}
        {{--                                <div class="cur-pointer">--}}
        {{--                                    <img alt="" class="img-fluid"--}}
        {{--                                         src="{{asset('frontend')}}/images/product-landing-product-carousel-1-4.jpg">--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}

        {{--                    </div>--}}

        {{--                    <div class="col-lg-7 appear-animation" data-appear-animation="fadeInUpShorter"--}}
        {{--                         data-appear-animation-delay="400">--}}

        {{--                        <div class="summary entry-summary position-relative">--}}
        {{--                            <h1 class="mb-0 font-weight-bold text-8">Porto Headphone</h1>--}}

        {{--                            <div class="pb-0 clearfix d-flex align-items-center">--}}
        {{--                                <div title="Rated 3 out of 5" class="float-start">--}}
        {{--                                    <input type="text" class="d-none" value="5" title="" data-plugin-star-rating--}}
        {{--                                           data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">--}}
        {{--                                </div>--}}

        {{--                                <div class="review-num">--}}
        {{--                                    <a href="#reviews"--}}
        {{--                                       class="text-decoration-none text-color-default text-color-hover-primary"--}}
        {{--                                       data-hash data-hash-offset="0" data-hash-offset-lg="110">--}}
        {{--                                        <span class="count text-color-inherit" itemprop="ratingCount">(2</span> reviews)--}}
        {{--                                    </a>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}

        {{--                            <div class="divider divider-small">--}}
        {{--                                <hr class="bg-color-grey-scale-4">--}}
        {{--                            </div>--}}

        {{--                            <p class="price mb-3">--}}
        {{--                                <span class="sale text-color-primary font-weight-bold ms-1">$350</span>--}}
        {{--                                <span class="amount text-color-default">$400</span>--}}
        {{--                            </p>--}}

        {{--                            <p class="text-3-5 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus--}}
        {{--                                nibh sed elimttis adipiscing. Fusce in hendrerit purus. Lorem ipsum dolor sit amet.</p>--}}

        {{--                            <ul class="list list-unstyled text-2">--}}
        {{--                                <li class="mb-0">AVAILABILITY: <strong class="text-color-dark">AVAILABLE</strong></li>--}}
        {{--                                <li class="mb-0">SKU: <strong class="text-color-dark">1234567890</strong></li>--}}
        {{--                            </ul>--}}


        {{--                            <form enctype="multipart/form-data" method="post" class="cart" action="#">--}}
        {{--                                <table class="table table-borderless" style="max-width: 300px;">--}}
        {{--                                    <tbody>--}}
        {{--                                    <tr>--}}
        {{--                                        <td class="align-middle text-2 px-0 py-2">SIZE:</td>--}}
        {{--                                        <td class="px-0 py-2">--}}
        {{--                                            <div class="custom-select-1">--}}
        {{--                                                <select name="size"--}}
        {{--                                                        class="form-control form-select bg-color-transparent text-1 h-auto py-2">--}}
        {{--                                                    <option value="">PLEASE CHOOSE</option>--}}
        {{--                                                    <option value="blue">Small</option>--}}
        {{--                                                    <option value="red">Normal</option>--}}
        {{--                                                    <option value="green">Big</option>--}}
        {{--                                                </select>--}}
        {{--                                            </div>--}}
        {{--                                        </td>--}}
        {{--                                    </tr>--}}
        {{--                                    <tr>--}}
        {{--                                        <td class="align-middle text-2 px-0 py-2">COLOR:</td>--}}
        {{--                                        <td class="px-0 py-2">--}}
        {{--                                            <div class="custom-select-1">--}}
        {{--                                                <select name="color"--}}
        {{--                                                        class="form-control form-select bg-color-transparent text-1 h-auto py-2">--}}
        {{--                                                    <option value="">PLEASE CHOOSE</option>--}}
        {{--                                                    <option value="blue">Blue</option>--}}
        {{--                                                    <option value="red">Red</option>--}}
        {{--                                                    <option value="green">Green</option>--}}
        {{--                                                </select>--}}
        {{--                                            </div>--}}
        {{--                                        </td>--}}
        {{--                                    </tr>--}}
        {{--                                    </tbody>--}}
        {{--                                </table>--}}
        {{--                                <div class="d-flex align-items-center my-4">--}}
        {{--                                    <div class="quantity quantity-lg float-none me-3 mb-0">--}}
        {{--                                        <input type="button"--}}
        {{--                                               class="minus bg-transparent text-color-hover-light bg-color-hover-primary border-color-hover-primary border"--}}
        {{--                                               value="-">--}}
        {{--                                        <input type="text"--}}
        {{--                                               class="input-text qty text bg-transparent border border-start-0 border-end-0"--}}
        {{--                                               title="Qty" value="1" name="quantity" min="1" step="1">--}}
        {{--                                        <input type="button"--}}
        {{--                                               class="plus bg-transparent text-color-hover-light bg-color-hover-primary border-color-hover-primary border"--}}
        {{--                                               value="+">--}}
        {{--                                    </div>--}}
        {{--                                    <button type="submit"--}}
        {{--                                            class="btn btn-primary btn-rounded font-weight-bold text-3-5 btn-px-5 btn-py-2">--}}
        {{--                                        Buy Now!--}}
        {{--                                    </button>--}}
        {{--                                </div>--}}
        {{--                            </form>--}}

        {{--                            <div class="d-flex align-items-center">--}}
        {{--                                <ul class="social-icons social-icons-medium social-icons-clean-with-border social-icons-clean-with-border-border-grey social-icons-clean-with-border-icon-dark me-3 mb-0">--}}
        {{--                                    <!-- Facebook -->--}}
        {{--                                    <li class="social-icons-facebook">--}}
        {{--                                        <a href="https://www.facebook.com/sharer.php?u=https://www.okler.net"--}}
        {{--                                           class="border" target="_blank" data-bs-toggle="tooltip"--}}
        {{--                                           data-bs-animation="false" data-bs-placement="top" title="Share On Facebook">--}}
        {{--                                            <i class="fab fa-facebook-f"></i>--}}
        {{--                                        </a>--}}
        {{--                                    </li>--}}
        {{--                                    <!-- Google+ -->--}}
        {{--                                    <li class="social-icons-googleplus">--}}
        {{--                                        <a href="https://plus.google.com/share?url=https://www.okler.net" class="border"--}}
        {{--                                           target="_blank" data-bs-toggle="tooltip" data-bs-animation="false"--}}
        {{--                                           data-bs-placement="top" title="Share On Google+">--}}
        {{--                                            <i class="fab fa-google-plus-g"></i>--}}
        {{--                                        </a>--}}
        {{--                                    </li>--}}
        {{--                                    <!-- Twitter -->--}}
        {{--                                    <li class="social-icons-twitter">--}}
        {{--                                        <a href="https://twitter.com/share?url=https://www.okler.net&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons"--}}
        {{--                                           class="border" target="_blank" data-bs-toggle="tooltip"--}}
        {{--                                           data-bs-animation="false" data-bs-placement="top" title="Share On Twitter">--}}
        {{--                                            <i class="fab fa-twitter"></i>--}}
        {{--                                        </a>--}}
        {{--                                    </li>--}}
        {{--                                    <!-- Email -->--}}
        {{--                                    <li class="social-icons-email">--}}
        {{--                                        <a href="/cdn-cgi/l/email-protection#8ab5d9ffe8e0efe9feb7d9e2ebf8efaadee2e3f9aadaebedefacebe7fab1c8e5eef3b7c3afb8baf9ebfdafb8bafee2e3f9afb8baebe4eeafb8bafee2e5ffede2feafb8bae5ecafb8baf3e5ffabafb8baaae2fefefaf9b0a5a5fdfdfda4e5e1e6eff8a4e4effe"--}}
        {{--                                           class="border" data-bs-toggle="tooltip" data-bs-animation="false"--}}
        {{--                                           data-bs-placement="top" title="Share By Email">--}}
        {{--                                            <i class="far fa-envelope"></i>--}}
        {{--                                        </a>--}}
        {{--                                    </li>--}}
        {{--                                </ul>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}

        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </section>--}}

        <section id="explore" class="section video section-height-4 overlay overlay-show overlay-op-8 border-0 m-0"
                 data-video-path="video/memory-of-a-woman" data-plugin-video-background
                 data-plugin-options="{'posterType': 'jpg', 'position': '50% 50%', 'autoplay': false, 'changePoster': '{{asset('frontend')}}/img/demos/product-landing/backgrounds/background-1.jpg'}">
            <div class="container py-5 my-5">
                <div class="row">
                    <div class="col text-center">
                        <div class="video-background-play-wrapper">
                            <h2 class="d-flex flex-wrap align-items-center justify-content-center text-color-light font-weight-bold text-10 negative-ls-05 mb-0 appear-animation"
                                data-appear-animation="blurIn" data-appear-animation-delay="400">
                                Explore The Best Of You
                                <a href="https://vimeo.com/45830194"
                                   class="video-background-play text-decoration-none custom-play-button-1 bg-primary bg-hover-primary text-color-light ms-3 my-4">
                                    <i class="fas fa-play"></i>
                                </a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row justify-content-center py-5 my-4">
                <div class="col-sm-10 col-md-9 col-lg-4 text-center mb-5 mb-lg-0">
                    <i class="icons icon-earphones-alt text-color-primary text-9"></i>
                    <h2 class="text-color-dark font-weight-bold text-4 line-height-1 mt-4 mb-0">CUSTOMER SUPPORT</h2>
                    <span class="d-block text-color-dark mb-2">Need Assistance?</span>
                    <p class="font-weight-light px-lg-3 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Duis nec vestibulum magna, et dapib.</p>
                </div>
                <div class="col-sm-10 col-md-9 col-lg-4 text-center mb-5 mb-lg-0">
                    <i class="icons icon-credit-card text-color-primary text-9"></i>
                    <h2 class="text-color-dark font-weight-bold text-4 line-height-1 mt-4 mb-0">SECURED PAYMENT</h2>
                    <span class="d-block text-color-dark mb-2">Safe &amp; Fast</span>
                    <p class="font-weight-light px-lg-3 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Duis nec vestibulum magna, et dapibus lacus. Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="col-sm-10 col-md-9 col-lg-4 text-center">
                    <i class="icons icon-action-undo text-color-primary text-9"></i>
                    <h2 class="text-color-dark font-weight-bold text-4 line-height-1 mt-4 mb-0">RETURNS</h2>
                    <span class="d-block text-color-dark mb-2">Easy &amp; Free</span>
                    <p class="font-weight-light px-lg-3 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Duis nec vestibulum magna, et dapib.</p>
                </div>
            </div>
        </div>

        <section class="section custom-bg-color-grey-1 border-0 m-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 mb-4 mb-lg-0">
                        <div class="feature-box feature-box-style-2 feature-box-secondary">
                            <div class="feature-box-icon">
                                <i class="icons icon-envelope text-color-dark text-11"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold line-height-1 mb-1">Subscribe To Our Newsletter</h4>
                                <p class="line-height-5 line-height-sm-1 mb-0">Get all the latest information on Events,
                                    Sales and Offers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="alert alert-success d-none" id="newsletterSuccess">
                            <strong>Success!</strong> You've been added to our email list.
                        </div>
                        <div class="alert alert-danger d-none" id="newsletterError"></div>
                        <form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" class="mw-100">
                            <div class="input-group">
                                <input class="form-control form-control-sm bg-light border-0 px-4 text-3"
                                       placeholder="Your E-mail Address" name="newsletterEmail" id="newsletterEmail"
                                       type="email">
                                <button class="btn btn-primary  text-color-light text-2 py-3 px-5" type="submit"><strong
                                        class="position-relative top-1">SUBSCRIBE NOW!</strong></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection
