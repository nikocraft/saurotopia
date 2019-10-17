<script id="custom-javascript">
    $(document).ready(function() {
        $('.image-lightbox').magnificPopup({type:'image'});
    });

    var $hamburger = $(".hamburger");
    $hamburger.on("click", function(e) {
        $hamburger.toggleClass("is-active");
        var $hamburgerId = $("#hamburger");
        if($hamburger.hasClass('is-active')) {
            $hamburgerId.attr("class", "hamburger-menu-active");
            $hamburgerId.addClass("animated {{ get_theme_setting('sidebar.hamburger.general.inAnimation') }} fast");
        } else {
            $hamburgerId.removeClass("animated hamburger-menu-active {{ get_theme_setting('sidebar.hamburger.general.inAnimation') }} fast");
            window.setTimeout(function() {
                $('#hamburger').addClass("animated {{ get_theme_setting('sidebar.hamburger.general.outAnimation') }} fast");
            }, 200);
            window.setTimeout(function() {
                $hamburgerId.removeClass("hamburger-menu-active {{ get_theme_setting('sidebar.hamburger.general.outAnimation') }}");
                $hamburgerId.addClass("hamburger-menu-inactive");
            }, 900);
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
