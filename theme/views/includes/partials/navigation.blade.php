<div class="navigation-sidebar">
        <!-- Mountains image -->
        <div class="logo-positioning">
            @if(get_theme_setting('header.logo.logotype') == 'text')
        <a class="logo-link" href="{{ url('/') }}">
            {{ get_website_setting('website.title') }}
        </a>
    @else
        <a class="logo-link" href="{{ url('/') }}">
            <img src="{{ get_theme_setting('header.logo.logoImage') }}" class="img-responsive" alt="logo">
        </a>
    @endif
        </div>
        <!-- Slogan -->
        <h6 class="slogan">
            Aurora is a minimal and clean Laraone blog theme.
        </h6>
        <!-- Social Media icons -->
        <div class="social-icons-container">
            <div class="pr-4">
                <a href="#">
                    <i class="fab fa-facebook-f social-icon"></i>
                </a>
            </div>
            <div class="pr-4">
                <a href="#">
                    <i class="fab fa-twitter fa-lg social-icon"></i>
                </a>
            </div>
            <div class="pr-4">
                <a href="#">
                    <i class="fab fa-instagram social-icon"></i>
                </a>
            </div>
            <div class="pr-4">
                <a href="#">
                    <i class="fab fa-linkedin-in social-icon"></i>
                </a>
            </div>
            <div>
                <a href="#">
                    <i class="fab fa-google-plus-g fa-lg social-icon"></i>
                </a>
            </div>
        </div>
        <!-- Responsive wrapper -->
        <div class="hidden" id="responsive-menu">
            <!-- Horizontal border line -->
            <div class="horizontal-border-line">
            </div>
            <!-- Menu -->
            @php
                $menu = get_menu('header');
            @endphp
            <section class="navigation-sidebar-menu">
                <div class="menu">
                @if($menu)
                @foreach ($menu as $key => $item)
                    <div class="menu-item @if($item->subItems->count()) dropdown @endif @if(!$item->subItems->count()) pb-2 @endif">
                        @if($item->parent_id == null)
                            <a class="navigation-sidebar-menu-items" href="/{{ $item->url }}">{{ $item->title }}</a>
                        @endif

                        @if($item->subItems->count())
                            <div class="dropdown-content animated zoomIn faster">
                            @foreach ($item->subItems as $key => $subItem)
                                <div class="drop-menu-item pb-2"><a class="navigation-sidebar-menu-items" href="/{{ $subItem->url }}">{{ $subItem->title }}</a></div>
                            @endforeach
                            </div>
                        @endif
                    </div>
                @endforeach
            @else

                <div class="menu-item pb-2">
                        <a class="navigation-sidebar-menu-items" href="/">Start</a>
                    </div>

                    <div class="menu-item pb-2">
                        <a class="navigation-sidebar-menu-items" href="/posts">Blog</a>
                    </div>

                    <div class="menu-item dropdown">
                            <a class="navigation-sidebar-menu-items" href="/posts">Media</a>
                        <div class="dropdown-content">
                            <div class="drop-menu-item"><a class="navigation-sidebar-menu-items" href="/posts">Videos</a></div>
                            <div class="drop-menu-item"><a class="navigation-sidebar-menu-items" href="/posts">Images</a></div>
                        </div>
                    </div>

                    <div class="menu-item">
                        <a class="navigation-sidebar-menu-items" href="/posts">About</a>
                    </div>
            @endif
        </div>
        </div>
        </section>
    </div>

<div class="responsive-menu-sidebar">

    <!-- Horizontal border line -->
    <div class="horizontal-border-line">
    </div>
    <!-- Menu -->
    @php
            $menu = get_menu('header');
            @endphp
        <section class="navigation-sidebar-menu">
            <div class="menu">
            @if($menu)
            @foreach ($menu as $key => $item)
                <div class="menu-item @if($item->subItems->count()) dropdown @endif @if(!$item->subItems->count()) pb-2 @endif">
                    @if($item->parent_id == null)
                        <a class="navigation-sidebar-menu-items" href="/{{ $item->url }}">{{ $item->title }}</a>
                    @endif

                    @if($item->subItems->count())
                        <div class="dropdown-content animated zoomIn faster">
                        @foreach ($item->subItems as $key => $subItem)
                            <div class="drop-menu-item pb-2"><a class="navigation-sidebar-menu-items" href="/{{ $subItem->url }}">{{ $subItem->title }}</a></div>
                        @endforeach
                        </div>
                    @endif
                </div>
            @endforeach
        @else

            <div class="menu-item pb-2">
                    <a class="navigation-sidebar-menu-items" href="/">Start</a>
                </div>

                <div class="menu-item pb-2">
                    <a class="navigation-sidebar-menu-items" href="/posts">Blog</a>
                </div>

                <div class="menu-item dropdown">
                        <a class="navigation-sidebar-menu-items" href="/posts">Media</a>
                    <div class="dropdown-content">
                        <div class="drop-menu-item"><a class="navigation-sidebar-menu-items" href="/posts">Videos</a></div>
                        <div class="drop-menu-item"><a class="navigation-sidebar-menu-items" href="/posts">Images</a></div>
                    </div>
                </div>

                <div class="menu-item">
                    <a class="navigation-sidebar-menu-items" href="/posts">About</a>
                </div>
        @endif
    </div>
    </section>
</div>
