@php
    $menu = get_menu('header');
@endphp

<div id="navigation">
    <div class="menu">
        @if($menu)
            @foreach ($menu as $key => $item)
                <div class="menu-item @if($item->subItems->count()) dropdown @endif">
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
            <div class="menu-item">
                <a href="/">Start</a>
            </div>

            <div class="menu-item">
                <a href="/posts">Blog</a>
            </div>

            <div class="menu-item dropdown">
                <a href="/posts">Media</a>
                <i class="dropdown-button-open {{ get_theme_setting('sidebar.hamburger.dropDownButtons.openIcon') }}"></i>
                <i class="dropdown-button-close {{ get_theme_setting('sidebar.hamburger.dropDownButtons.closeIcon') }}"></i>

                <div class="dropdown-content">
                    <div class="drop-menu-item"><a href="/posts">Videos</a></div>
                    <div class="drop-menu-item"><a href="/posts">Images</a></div>
                </div>
            </div>

            <div class="menu-item dropdown">
                <a href="/posts">Community</a>
                <i class="dropdown-button-open {{ get_theme_setting('sidebar.hamburger.dropDownButtons.openIcon') }}"></i>
                <i class="dropdown-button-close {{ get_theme_setting('sidebar.hamburger.dropDownButtons.closeIcon') }}"></i>

                <div class="dropdown-content">
                    <div class="drop-menu-item"><a href="/posts">Videos</a></div>
                    <div class="drop-menu-item"><a href="/posts">Images</a></div>
                </div>
            </div>

            <div class="menu-item">
                <a href="/posts">About</a>
            </div>
        @endif
    </div>
</div>
