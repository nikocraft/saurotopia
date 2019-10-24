<script id="custom-javascript">
    $(document).ready(function() {
        $('.image-lightbox').magnificPopup({type:'image'});
    });

    var $hamburgerBtn = $("#hamburger-button");
    $hamburgerBtn.on("click", function(e) {
        $hamburgerBtn.toggleClass("is-active");
        var $sidebarContent = $("#sidebar-content");
        if($hamburgerBtn.hasClass('is-active')) {
            $sidebarContent.attr("class", "sidebar-content-active");
            $sidebarContent.addClass("animated {{ get_theme_setting('sidebar.hamburger.general.inAnimation') }} fast");
        } else {
            $sidebarContent.removeClass("animated sidebar-content-active {{ get_theme_setting('sidebar.hamburger.general.inAnimation') }} fast");
            window.setTimeout(function() {
                $sidebarContent.addClass("animated {{ get_theme_setting('sidebar.hamburger.general.outAnimation') }} fast");
            }, 200);
            window.setTimeout(function() {
                $sidebarContent.removeClass("sidebar-content-active {{ get_theme_setting('sidebar.hamburger.general.outAnimation') }}");
                $sidebarContent.addClass("sidebar-content-inactive");
            }, 900);
        }
    });

    var $dropdownBtnOpen = $('.dropdown-button-open');
    $dropdownBtnOpen.on("click", function(event) {
        var $dropdownContent = $(event.target).closest('.menu-item').find('.dropdown-content');
        var $dropdownBtnClose = $(event.target).closest('.menu-item').find('.dropdown-button-close');
        $dropdownContent.show();
        $(event.target).hide();
        $dropdownBtnClose.show();
    });

    var $dropdownBtnClose = $('.dropdown-button-close');
    $dropdownBtnClose.on("click", function(event) {
        var $dropdownContent = $(event.target).closest('.menu-item').find('.dropdown-content');
        var $dropdownBtnOpen = $(event.target).closest('.menu-item').find('.dropdown-button-open');
        $dropdownContent.hide();
        $(event.target).hide();
        $dropdownBtnOpen.show();
    });

</script>
