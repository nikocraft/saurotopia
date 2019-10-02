<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    @include('includes/head')
</head>
<body>
<div class="aurora" id="app">
    @yield('content')
    <div class="footer-holder-website container container-aurora bg-white">
        @include('includes/footer')
    </div>
</div>

<!-- Scripts -->
@routes

@php
    $fontResources = get_theme_setting('resources.fonts');
    $iconResources = get_theme_setting('resources.icons');
    $cssResources = get_theme_setting('resources.css');
    $themeFolder = get_theme_folder();
@endphp

<script src="{{ mix('js/app.js', 'themes/'.$themeFolder) }}"></script>

@php
    $jsResources = get_theme_setting('resources.javascript');
@endphp

@foreach ( $jsResources as $key => $jsResource )
    @if($jsResource)
        <script id="{{ $key }}" src="{{ $jsResource }}"></script>
    @endif
@endforeach

<script id="custom-javascript">
    $(document).ready(function() {
        $('.image-lightbox').magnificPopup({type:'image'});
    });

    var $hamburger = $(".hamburger");
    $hamburger.on("click", function(e) {
        $hamburger.toggleClass("is-active");
        var $sidebarId = $("#sidebar");
        var $responsiveWidgetId = $(".responsive-widget");
        var $hamburgerId = $("#hamburger");
        if($hamburger.hasClass('is-active')) {
            $hamburgerId.attr("class", "container container-aurora content-wrap");
            $hamburgerId.addClass("require-visible require-invisible-fullwidth-menu animated {{ get_theme_setting('sidebar.hamburger.general.inAnimation') }} slow");
            $responsiveWidgetId.removeClass("animated {{ get_theme_setting('sidebar.hamburger.general.outAnimation') }}");
            $responsiveWidgetId.addClass("widget justify-center require-visible animated {{ get_theme_setting('sidebar.hamburger.general.inAnimation') }} slow responsive-first-widget");
            $sidebarId.removeClass("");
            $responsiveWidgetId.removeClass("responsive-widget-hidden");
        } else {
            $hamburgerId.removeClass("animated {{ get_theme_setting('sidebar.hamburger.general.inAnimation') }} slow");
            $responsiveWidgetId.removeClass("animated {{ get_theme_setting('sidebar.hamburger.general.inAnimation') }} slow");
            $sidebarId.addClass("");
            $responsiveWidgetId.addClass("responsive-widget-hidden");
            window.setTimeout(function() {
                $('#hamburger').addClass("animated {{ get_theme_setting('sidebar.hamburger.general.outAnimation') }}");
                $('.responsive-widget').addClass("animated {{ get_theme_setting('sidebar.hamburger.general.outAnimation') }}");
            }, 200);
            window.setTimeout(function() {
                $('.responsive-widget').removeClass("require-visible responsive-first-widget animated {{ get_theme_setting('sidebar.hamburger.general.outAnimation') }}");
                $('#hamburger').removeClass("require-visible");
            }, 800);
        }
    });

    var $dropdownBtnOpen = $('.dropdown-button-open');
    $dropdownBtnOpen.on("click", function(event) {
        var $dropdownContent = $(event.target).closest('.hamburger-menu-item').find('.dropdown-content');
        var $dropdownBtnClose = $(event.target).closest('.hamburger-menu-item').find('.dropdown-button-close');
        $dropdownContent.show();
        $(event.target).hide();
        $dropdownBtnClose.show();
    });

    var $dropdownBtnClose = $('.dropdown-button-close');
    $dropdownBtnClose.on("click", function(event) {
        var $dropdownContent = $(event.target).closest('.hamburger-menu-item').find('.dropdown-content');
        var $dropdownBtnOpen = $(event.target).closest('.hamburger-menu-item').find('.dropdown-button-open');
        $dropdownContent.hide();
        $(event.target).hide();
        $dropdownBtnOpen.show();
    });

</script>

@stack('scripts')

<noscript>Please enable JavaScript to view this website correctly.</noscript>

</body>
</html>
