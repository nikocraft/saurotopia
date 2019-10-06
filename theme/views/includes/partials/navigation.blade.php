<div class="navigation-sidebar">
    <div class="responsive-menu-sidebar">
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
</div>
