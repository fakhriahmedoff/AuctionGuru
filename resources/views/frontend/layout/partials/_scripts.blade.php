
<!-- Vendor -->
<script data-cfasync="false" src="{{asset('frontend')}}/js/cloudflare-static-email-decode.min.js"></script>
<script src="{{asset('frontend')}}/js/js-plugins.min.js"></script>
<script src="{{asset('frontend')}}/js/js-star-rating.min.js"></script>
<script src="{{asset('frontend')}}/js/krajee-fas-theme.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{asset('frontend')}}/js/5100-js-theme.js"></script>

<!-- Demo -->
<script src="{{asset('frontend')}}/js/demos-demo-product-landing.js"></script>

<!-- Theme Initialization Files -->
<script src="{{asset('frontend')}}/js/6973-js-theme.init.js"></script>

<!-- Examples -->
<script src="{{asset('frontend')}}/js/examples-examples.image360.js"></script>
<script src="{{asset('frontend')}}/js/examples-examples.gallery.js"></script>


<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon='{"rayId":"73a93988effdc87c","version":"2022.6.0","r":1,"token":"03fa3b9eb60b49789931c4694c153f9b","si":100}'
        crossorigin="anonymous"></script>

@yield('additional_scripts')

@if(\Illuminate\Support\Facades\Auth::check())
<script>

    function getSelectionText() {
        var text = "";
        if (window.getSelection) {
            text = window.getSelection().toString();
        } else if (document.selection && document.selection.type != "Control") {
            text = document.selection.createRange().text;
        }
        return text;
    }

    window.addEventListener('click', function (evt) {
        if (evt.detail === 3) {
            let _selection = getSelectionText();

            if(_selection.length > 1)
            {
                window.open(`/admin/texts?filters%5Bgroup%5D=&filters%5Bkey%5D=&filters%5Bvalue%5D=${_selection}`,"_blank" );
            }
        }
    });

</script>
@endif
