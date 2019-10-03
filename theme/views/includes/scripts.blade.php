<script id="custom-javascript">
    $(document).ready(function() {
        $('.image-lightbox').magnificPopup({type:'image'});
    });

    var $hamburger = $(".hamburger");
    $hamburger.on("click", function(e) {
        $hamburger.toggleClass("is-active");
        var $sidebarId = $("#sidebar");
        var $responsiveWidget = $(".responsive-widget");
        var $hamburgerId = $("#hamburger");
        var $footer = $(".footer-holder-sidebar");
        if($hamburger.hasClass('is-active')) {
            $hamburgerId.attr("class", "container container-hamburger content-wrap");
            $hamburgerId.addClass("require-visible require-invisible-fullwidth-menu animated {{ get_theme_setting('sidebar.hamburger.general.inAnimation') }} slow");
            $responsiveWidget.removeClass("animated {{ get_theme_setting('sidebar.hamburger.general.outAnimation') }}");
            $responsiveWidget.addClass("widget justify-center require-visible animated {{ get_theme_setting('sidebar.hamburger.general.inAnimation') }} slow responsive-first-widget");
            $sidebarId.removeClass("");
            $responsiveWidget.removeClass("responsive-widget-hidden");
            $footer.addClass("footer-visible");
        } else {
            $hamburgerId.removeClass("animated {{ get_theme_setting('sidebar.hamburger.general.inAnimation') }} slow");
            $responsiveWidget.removeClass("animated {{ get_theme_setting('sidebar.hamburger.general.inAnimation') }} slow");
            $sidebarId.addClass("");
            $responsiveWidget.addClass("responsive-widget-hidden");
            $footer.removeClass("footer-visible");
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