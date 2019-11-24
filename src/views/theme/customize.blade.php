.container {
    @style([ 'property' => 'width', 'value' => data_get($settings, 'general.container.width') ])
    @style([ 'property' => 'max-width', 'value' => data_get($settings, 'general.container.maxWidth') ])
}

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
}

.container .content {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'content.general.backgroundColor') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'content.general.color') ])
}

.posts .post .post-title-link, .content-single .post .post-title {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'content.general.postTitle.color') ])
}

.posts .post .post-title-link:hover, .content-single .post .post-title:hover {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'content.general.postTitle.hoverColor') ])
}

.posts .post div.post-featured-image {
    @style([ 'property' => 'height', 'value' => data_get($settings, 'content.general.featuredImage.indexPageHeight') ])
}

.post div.post-featured-image {
    @style([ 'property' => 'height', 'value' => data_get($settings, 'content.general.featuredImage.singlePageHeight') ])
}

#sidebar-content .widget-title {
    @style([ 'property' => 'text-transform', 'value' => data_get($settings, 'widgets.titleStyle') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'widgets.titleColor') ])
}

#sidebar-content .widget {
    @style([ 'property' => 'margin-bottom', 'value' => data_get($settings, 'widgets.spacing') ])
}

.container .sidebar {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'sidebar.general.backgroundColor') ])
}

.sidebar header .logo .logo-link {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'sidebar.logo.fontSize') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'sidebar.logo.fontColor') ])
}

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

.hamburger-inner, .hamburger-inner::before, .hamburger-inner::after {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'sidebar.hamburger.color') ])
}

.hamburger.is-active .hamburger-inner,
.hamburger.is-active .hamburger-inner::before,
.hamburger.is-active .hamburger-inner::after {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'sidebar.hamburger.activeColor') ])
}

.sidebar footer {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'footer.general.color') ])
}

h1, .h1 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.headline1.size') ])
}

h2, .h2 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.headline2.size') ])
}

h3, .h3 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.headline3.size') ])
}

h4, .h4 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.headline4.size') ])
}

h5, .h5 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.headline5.size') ])
}

h6, .h6 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.headline6.size') ])
}
