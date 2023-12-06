<meta charset="utf-8">
<!-- Mobile Specific Meta Tag-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link rel="shortcut icon" href="{{ \Settings::get('site_favicon') }}" type="image/png">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

{!! Theme::css('css/bootstrap.min.css') !!}

{!! Theme::css('css/bootstrap-slider.css') !!}

{!! Theme::css('css/normalize.css') !!}

{!! Theme::css('css/font-awesome.min.css') !!}

{!! Theme::css('css/icomoon.css') !!}

{!! Theme::css('css/chosen.css') !!}

{!! Theme::css('css/prettyPhoto.css') !!}

{!! Theme::css('css/scrollbar.css') !!}

{!! Theme::css('css/morris.css') !!}

{!! Theme::css('css/owl.carousel.css') !!}

{!! Theme::css('css/YouTubePopUp.css') !!}

{!! Theme::css('css/auto-complete.css') !!}

{!! Theme::css('css/jquery.navhideshow.css') !!}

{!! Theme::css('css/transitions.css') !!}

{!! Theme::css('css/style.css') !!}

{!! Theme::css('css/color.css') !!}

{!! Theme::css('css/responsive.css') !!}

{!! Theme::css('plugins/toastr/toastr.min.css') !!}

{!! \Html::style('assets/corals/plugins/lightbox2/css/lightbox.min.css') !!}

{!! \Html::style('assets/corals/plugins/icheck/skins/all.css') !!}

{!! Theme::css('plugins/Lightbox/css/lightbox.min.css') !!}

{!! Theme::css('plugins/select2/dist/css/select2.min.css') !!}

{!! Theme::css('plugins/Ladda/ladda-themeless.min.css') !!}


{!! \Html::script('assets/corals/js/corals_header.js') !!}

<script type="text/javascript">
    window.base_url = '{!! url('/') !!}';
</script>

@yield('css')
@stack('partial_css')

{!! \Assets::css() !!}

@if(\Language::isRTL())
    {!! Theme::css('css/vendor-rtl.css') !!}
    {!! Theme::css('css/styles-rtl.css') !!}
@endif

@if(\Settings::get('google_analytics_id'))
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async
            src="https://www.googletagmanager.com/gtag/js?id={{ \Settings::get('google_analytics_id') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', "{{ \Settings::get('google_analytics_id') }}");
    </script>
@endif
<style type="text/css">
    {!! \Settings::get('custom_css', '') !!}
</style>
