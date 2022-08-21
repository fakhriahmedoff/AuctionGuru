
<footer id="footer" class="bg-transparent border-0 mt-0">
    <div class="container py-5">
        <div class="row text-center text-lg-start pt-4">
            <div class="col-lg-5 col-xl-4 mb-4 mb-lg-0">
                <h4 class="font-weight-bold text-color-dark text-4-5 mb-3">{{$texts['customer-servicend']}}</h4>
                <ul class="list list-unstyled d-flex flex-column flex-sm-row justify-content-sm-center justify-content-lg-start mb-0">
                    <li class="line-height-3 mb-0">
                        <a href="#" class="text-decoration-none text-color-hover-primary">{{$texts['help-faqs']}}</a>
                    </li>
                    <li class="line-height-3 border border-top-0 border-bottom-0 px-sm-3 mx-sm-3 mt-2 mt-sm-0 mb-0">
                        <a href="#" class="text-decoration-none text-color-hover-primary">{{$texts['order-tracking']}}</a>
                    </li>
                    <li class="line-height-3 mt-2 mt-sm-0 mb-0">
                        <a href="#" class="text-decoration-none text-color-hover-primary">{{$texts['shipping-deliveend']}}</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-xl-2 offset-xl-2 mb-4 mb-lg-0">
                <h4 class="font-weight-bold text-color-dark text-4-5 mb-3">{{$texts['social-media']}}</h4>
                <ul class="social-icons social-icons-medium social-icons-clean-with-border social-icons-clean-with-border-border-grey social-icons-clean-with-border-icon-dark me-3 mb-0">
                    <li class="social-icons-facebook"><a href="https://www.facebook.com/" target="_blank"
                                                         title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="social-icons-twitter"><a href="https://www.twitter.com/" target="_blank"
                                                        title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li class="social-icons-linkedin"><a href="https://www.linkedin.com/" target="_blank"
                                                         title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-xl-3 offset-xl-1">
                <h4 class="font-weight-bold text-color-dark text-4-5 mb-3">{{$texts['payment-methods']}}</h4>
                <div
                    class="payment-cc payment-cc-no-hover-effect text-color-dark justify-content-center justify-content-lg-start">
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
