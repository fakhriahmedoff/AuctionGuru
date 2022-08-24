<footer id="footer" class="bg-transparent border-0 mt-0">
    <div class="container py-5">
        <div class="row text-center text-lg-start pt-4">
            <div class="col-lg-5 col-xl-4 mb-4 mb-lg-0">
                <h4 class="font-weight-bold text-color-dark text-4-5 mb-3">{{$texts['about-us-detail']}}</h4>

                <div>

                    @if($config->email)
                        <li class="list-inline-item d-flex align-items-center ">
                            <div class="animated-icon animated fadeIn svg-fill-color-dark">
                                <!--?xml version="1.0" encoding="utf-8"?-->
                                <svg version="1.1" id="icon_231661348089132" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64"
                                     style="enable-background:new 0 0 64 64;" xml:space="preserve"
                                     data-filename="email.svg" width="23" height="23">
<path d="M32,60C16.5,60,4,47.5,4,32S16.5,4,32,4c15.9,0,25,8.7,25,24v1c0.2,3.4-0.6,6.8-2.3,9.7c-1.8,3.1-5.1,5.1-8.7,5
	c-4,0-8.6-2.3-8.6-8.8v-0.1L38,22.9c-0.5-0.1-1-0.2-1.5-0.3c-1.4-0.2-2.7-0.3-4.1-0.3c-2.5-0.1-5,0.8-6.7,2.7
	c-1.8,2.1-2.8,4.8-2.6,7.6c-0.1,2.2,0.5,4.3,1.7,6.1c1.1,1.3,2.7,1.9,4.3,1.8c1.2,0,2.4-0.3,3.4-0.9c0.9-0.6,2.2-0.4,2.8,0.6
	s0.4,2.2-0.6,2.8C33,44,31,44.6,29.1,44.5c-2.8,0.1-5.6-1.1-7.4-3.3c-1.8-2.1-2.6-5-2.6-8.7c-0.2-3.8,1.1-7.5,3.7-10.3
	c2.5-2.7,6-4.1,9.7-4c1.6,0,3.1,0.1,4.7,0.4c1.2,0.2,2.4,0.4,3.5,0.7l1.6,0.4L41.4,35c0,4.1,2.9,4.7,4.6,4.7c2.1,0,4.1-1.1,5.2-2.9
	c1.4-2.4,2-5.1,1.8-7.8v-1c0-12.9-7.5-20-21-20C18.7,8,8,18.7,8,32c0,13.3,10.7,24,24,24c6.2,0,12.1-2.4,16.6-6.7
	c0.8-0.8,2.1-0.7,2.8,0.1c0.8,0.8,0.7,2.1-0.1,2.8l0,0C46.2,57.2,39.2,60,32,60z"></path>
</svg>
                            </div>
                            <a href="mailto:{{$config->email}}"
                               class="text-decoration-none text-color-dark text-color-hover-primary font-weight-bold text-3-5 ms-2">{{$config->email}}</a>
                        </li>
                    @endif
                    <br>
                    @if($config->phone || $config->phone2)
                            <li class="list-inline-item d-flex align-items-center">
                                <div class="animated-icon animated fadeIn svg-fill-color-dark">
                                    <!--?xml version="1.0" encoding="utf-8"?-->
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 419 420"
                                         style="enable-background:new 0 0 419 420;" xml:space="preserve"
                                         id="icon_191661348089156" data-filename="phone.svg" width="23" height="23">
	<path d="M303.7,411.1c-15.6-0.1-31.2-2.1-46.4-5.9c-52.4-12.6-106.4-44.7-152-90.4s-77.7-99.6-90.4-152
		C1.7,107.8,11.2,60.6,41.7,30.1l8.7-8.7c16.5-16.4,43.1-16.4,59.6,0l50.1,50.1c16.5,16.5,16.5,43.2,0,59.6l-29.6,29.6
		c14.2,24.9,33.5,49.8,56.3,72.6s47.8,42.1,72.6,56.3l29.6-29.6c16.5-16.5,43.1-16.5,59.6,0c0,0,0,0,0,0l50.1,50.1
		c16.5,16.5,16.5,43.1,0,59.6l-8.7,8.7C368.5,400,338.7,411.1,303.7,411.1z M80.2,39c-3.2,0-6.3,1.3-8.6,3.6l-8.7,8.7
		c-22.9,22.9-29.6,60-18.8,104.5c11.4,47.1,40.6,96.1,82.4,137.9s90.7,71,137.9,82.4c44.5,10.7,81.6,4.1,104.5-18.8l8.7-8.7
		c4.7-4.7,4.7-12.4,0-17.2l-50.1-50.1c-4.7-4.7-12.4-4.7-17.2,0l-37.5,37.5c-4.6,4.6-11.7,5.7-17.5,2.7c-30.8-15.9-61.8-39-89.6-67
		s-51-58.9-66.9-89.6c-3-5.8-1.9-12.9,2.7-17.5l37.5-37.5c4.7-4.7,4.7-12.4,0-17.2L88.8,42.6C86.5,40.3,83.4,39,80.2,39z"></path>
                                        <path d="M319.8,230.7c-8.3,0-15-6.7-15-15l0,0c-0.1-54.8-44.5-99.2-99.3-99.3c-8.3,0-15-6.7-15-15s6.7-15,15-15l0,0
		c71.3,0,129.3,58,129.3,129.3C334.8,224,328,230.7,319.8,230.7C319.8,230.7,319.8,230.7,319.8,230.7z"></path>
                                        <path d="M383.1,230.7c-8.3,0-15-6.7-15-15l0,0c0-89.7-73-162.7-162.6-162.7c-8.3,0-15-6.7-15-15s6.7-15,15-15l0,0
		c106.2,0,192.6,86.4,192.6,192.7C398.1,224,391.4,230.7,383.1,230.7L383.1,230.7z"></path>
</svg>
                                </div>

                                @if($config->phone)
                                    <a href="tel:{{str_replace([' ','(',')','-'],'',$config->phone)}}"
                                       class="text-decoration-none text-color-dark text-color-hover-primary font-weight-bold text-3-5 ms-2">{{$config->phone}}</a>
                                @endif
                                 @if($config->phone2)
                                    <b class="d-inline-block" style="margin-left: 11px"> | </b ><a href="tel:{{str_replace([' ','(',')','-'],'',$config->phone2)}}"
                                       class="text-decoration-none text-color-dark text-color-hover-primary font-weight-bold text-3-5 ms-2">{{$config->phone2}}</a>
                                @endif
                            </li>
                    @endif

                </div>
                {{--                <ul class="list list-unstyled d-flex flex-column flex-sm-row justify-content-sm-center justify-content-lg-start mb-0">--}}
                {{--                    <li class="line-height-3 mb-0">--}}
                {{--                        <a href="#" class="text-decoration-none text-color-hover-primary">{{$texts['help-faqs']}}</a>--}}
                {{--                    </li>--}}
                {{--                    <li class="line-height-3 border border-top-0 border-bottom-0 px-sm-3 mx-sm-3 mt-2 mt-sm-0 mb-0">--}}
                {{--                        <a href="#" class="text-decoration-none text-color-hover-primary">{{$texts['order-tracking']}}</a>--}}
                {{--                    </li>--}}
                {{--                    <li class="line-height-3 mt-2 mt-sm-0 mb-0">--}}
                {{--                        <a href="#" class="text-decoration-none text-color-hover-primary">{{$texts['shipping-deliveend']}}</a>--}}
                {{--                    </li>--}}
                {{--                </ul>--}}
            </div>
            <div class="col-lg-3 col-xl-2 offset-xl-2 mb-4 mb-lg-0">
                <h4 class="font-weight-bold text-color-dark text-4-5 mb-3">{{$texts['social-media']}}</h4>
                <ul class="social-icons social-icons-medium social-icons-clean-with-border social-icons-clean-with-border-border-grey social-icons-clean-with-border-icon-dark me-3 mb-0">

                    @if($config->social_links)
                        @foreach(json_decode($config->social_links) as $key=>$link)
                            @if(strlen($link) > 3)
                                <li class="social-icons-{{$key}} mt-1"><a href="{{$link}}" target="_blank"
                                                                          title="Facebook"><i
                                            class="fab fa-{{$key}}"></i></a></li>
                            @endif
                        @endforeach
                    @endif

                </ul>
            </div>
            <div class="col-lg-4 col-xl-3 offset-xl-1">
                <h4 class="font-weight-bold text-color-dark text-4-5 mb-3">{{$texts['payment-methods']}}</h4>
                <div
                    class="payment-cc payment-cc-no-hover-effect text-color-dark justify-content-center justify-content-lg-start mt-1">
                    <i class="fab fa-cc-visa"></i>
                    <i class="fab fa-cc-paypal"></i>
                    <i class="fab fa-cc-stripe"></i>
                    <i class="fab fa-cc-mastercard"></i>
                    <i class="fab fa-cc-apple-pay"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright bg-transparent">
        <div class="container py-2">
            <hr class="bg-dark opacity-1 m-0">
            <div class="row">
                <div class="col text-center py-4">
                    <p class="mb-0">Auction Guru &copy; Copyright 2022. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>

@include('frontend.layout.partials._scripts')
</body>
</html>
