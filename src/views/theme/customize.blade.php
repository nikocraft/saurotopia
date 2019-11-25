body {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'general.body.backgroundColor') ])
    @style([ 'property' => 'background-image', 'value' => data_get($settings, 'general.body.backgroundImage') ])
    @if(data_get($settings, 'general.body.backgroundImage'))
        @style([ 'property' => 'background-size', 'value' => data_get($settings, 'general.body.backgroundSize') ])
        @style([ 'property' => 'background-attachment', 'value' => data_get($settings, 'general.body.backgroundStyle') ])
        @style([ 'property' => 'background-position', 'value' => data_get($settings, 'general.body.backgroundPosition') ])
        @style([ 'property' => 'background-repeat', 'value' => data_get($settings, 'general.body.backgroundRepeat') ])
    @endif
    @style([ 'property' => 'font-family', 'value' => data_get($settings, 'general.font.family') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'general.font.color') ])
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'general.font.size') ])
    @style([ 'property' => 'line-height', 'value' => data_get($settings, 'general.font.lineHeight') ])
}

{{-- Container --}}
.container {
    @style([ 'property' => 'width', 'value' => data_get($settings, 'general.container.width') ])
    @style([ 'property' => 'max-width', 'value' => data_get($settings, 'general.container.maxWidth') ])
}
{{-- Content Container Styles --}}
.container .content {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'content.general.backgroundColor') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'content.general.color') ])
}

{{-- Content Styles --}}
.content-index .posts .post .post-title-link, 
.content-single .post .post-title {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'content.general.postTitle.color') ])
}

.content-index .posts .post .post-title-link:hover, 
.content-single .post .post-title:hover {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'content.general.postTitle.hoverColor') ])
}

{{-- Featured Image Styles --}}
.content-index .posts .post .post-featured-image {
    @style([ 'property' => 'height', 'value' => data_get($settings, 'content.general.featuredImage.indexPageHeight') ])
}

.content-single .post .post-featured-image {
    @style([ 'property' => 'height', 'value' => data_get($settings, 'content.general.featuredImage.singlePageHeight') ])
}

{{-- Sidebar Widget Styles --}}
#sidebar-content .widget-title {
    @style([ 'property' => 'text-transform', 'value' => data_get($settings, 'widgets.titleStyle') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'widgets.titleColor') ])
}

#sidebar-content .widget {
    @style([ 'property' => 'margin-bottom', 'value' => data_get($settings, 'widgets.spacing') ])
}

{{-- Sidebar Styles --}}
.container .sidebar {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'sidebar.general.backgroundColor') ])
}

{{-- Logo Styles --}}
.sidebar header .logo .logo-link {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'sidebar.logo.fontSize') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'sidebar.logo.fontColor') ])
}

{{-- Navigation Styles --}}
#navigation .menu .menu-item a {
    @style([ 'property' => 'padding', 'value' => data_get($settings, 'sidebar.menu.items.padding') ])
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'sidebar.menu.items.fontSize') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'sidebar.menu.items.fontColor') ])
}

#navigation .menu .menu-item a:hover {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'sidebar.menu.items.fontHoverColor') ])
}

#navigation .menu .drop-menu-item > a {
    @style([ 'property' => 'text-transform', 'value' => data_get($settings, 'sidebar.menu.dropDownItems.textTransform') ])
    @style([ 'property' => 'padding', 'value' => data_get($settings, 'sidebar.menu.dropDownItems.padding') ])
}

{{-- Hamburger Button Styles --}}
.hamburger-inner, .hamburger-inner::before, 
.hamburger-inner::after {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'sidebar.hamburgerButton.color') ])
}

.hamburger.is-active .hamburger-inner,
.hamburger.is-active .hamburger-inner::before,
.hamburger.is-active .hamburger-inner::after {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'sidebar.hamburgerButton.activeColor') ])
}

{{-- Sidebar Footer Styles --}}
.sidebar footer {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'footer.general.fontColor') ])
}


{{-- Headline styles --}}
h1, .h1 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.size.headline1') ])
}

h2, .h2 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.size.headline2') ])
}

h3, .h3 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.size.headline3') ])
}

h4, .h4 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.size.headline4') ])
}

h5, .h5 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.size.headline5') ])
}

h6, .h6 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.size.headline6') ])
}

h1, .h1, h2, .h2, h3, .h3, h4, .h4 {
    @style([ 'property' => 'line-height', 'value' => data_get($settings, 'headlines.general.lineHeight') ])
}