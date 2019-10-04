@php
$menu = get_menu('header');
@endphp

    <div class="hamburger-button responsive-menu">
        <button class="hamburger {{ get_theme_setting('sidebar.hamburger.button.style') }}" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
    </div>

    {{-- Hamburger menu sidebar (visible from 992px screen width) --}}
    <div class="hamburger-menu-sidebar hamburger-hidden" id="hamburger">
        @if(get_theme_setting('sidebar.hamburger.logo.logotype') == 'image')
            <img src="{{ get_theme_setting('sidebar.hamburger.logo.logoImage') }}" alt="">
        @else
            <div class="hamburger-menu-title">{{ get_website_setting('website.title') }}</div>
        @endif
        <div class="hamburger-menu">
            @if($menu)
                @foreach ($menu as $key => $item)
                    <div class="hamburger-menu-item @if($item->subItems->count()) dropdown @endif">
                        @if($item->parent_id == null)
                            <a href="/{{ $item->url }}">{{ $item->title }}</a>
                            @if($item->subItems->count())
                                <i class="dropdown-button-open {{ get_theme_setting('sidebar.hamburger.dropDownButtons.openIcon') }}"></i>
                                <i class="dropdown-button-close {{ get_theme_setting('sidebar.hamburger.dropDownButtons.closeIcon') }}"></i>
                            @endif
                        @endif

                        @if($item->subItems->count())
                            <div class="dropdown-content">
                            @foreach ($item->subItems as $key => $subItem)
                                <div class="drop-menu-item"><a href="/{{ $subItem->url }}">{{ $subItem->title }}</a></div>
                            @endforeach
                            </div>
                        @endif
                    </div>
                @endforeach
            @else
                <div class="hamburger-menu-item">
                    <a href="/">Start</a>
                </div>

                <div class="hamburger-menu-item">
                    <a href="/posts">Blog</a>
                </div>

                <div class="hamburger-menu-item dropdown">
                    <a href="/posts">Media</a>
                    <i class="dropdown-button-open {{ get_theme_setting('sidebar.hamburger.dropDownButtons.openIcon') }}"></i>
                    <i class="dropdown-button-close {{ get_theme_setting('sidebar.hamburger.dropDownButtons.closeIcon') }}"></i>

                    <div class="dropdown-content">
                        <div class="drop-menu-item"><a href="/posts">Videos</a></div>
                        <div class="drop-menu-item"><a href="/posts">Images</a></div>
                    </div>
                </div>

                <div class="hamburger-menu-item dropdown">
                    <a href="/posts">Community</a>
                    <i class="dropdown-button-open {{ get_theme_setting('sidebar.hamburger.dropDownButtons.openIcon') }}"></i>
                    <i class="dropdown-button-close {{ get_theme_setting('sidebar.hamburger.dropDownButtons.closeIcon') }}"></i>

                    <div class="dropdown-content">
                        <div class="drop-menu-item"><a href="/posts">Videos</a></div>
                        <div class="drop-menu-item"><a href="/posts">Images</a></div>
                    </div>
                </div>

                <div class="hamburger-menu-item">
                    <a href="/posts">About</a>
                </div>
            @endif
        </div>
    </div>
