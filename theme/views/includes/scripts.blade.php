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

    const $openMenuItem = $("[id^=open-menu-]");
    $openMenuItem.on("click", function(event) {
        const $dropdownBtnOpen = $(event.target).closest('.menu-item').find('.dropdown-button-open');
        const $dropdownBtnClose = $(event.target).closest('.menu-item').find('.dropdown-button-close');

        if($dropdownBtnOpen.is(":visible"))
            $dropdownBtnOpen.trigger('click');
        else {
            $dropdownBtnClose.trigger('click');
        }
    });

    const $dropdownBtnOpen = $('.dropdown-button-open');
    $dropdownBtnOpen.on("click", function(event) {
        const $dropdownContent = $(event.target).closest('.menu-item').find('.dropdown-content');
        const $dropdownBtnClose = $(event.target).closest('.menu-item').find('.dropdown-button-close');
        $dropdownContent.show();
        $(event.target).hide();
        $dropdownBtnClose.show();
    });

    const $dropdownBtnClose = $('.dropdown-button-close');
    $dropdownBtnClose.on("click", function(event) {
        const $dropdownContent = $(event.target).closest('.menu-item').find('.dropdown-content');
        const $dropdownBtnOpen = $(event.target).closest('.menu-item').find('.dropdown-button-open');
        $dropdownContent.hide();
        $(event.target).hide();
        $dropdownBtnOpen.show();
    });
</script>