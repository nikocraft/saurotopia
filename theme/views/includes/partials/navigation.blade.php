{{-- <div class="navigation-wrapper">
    @php
        $menu = get_menu('header');
    @endphp
    <div class="menu">
        @if($menu)
            @foreach ($menu as $key => $item)
                <div class="menu-item @if($item->subItems->count()) dropdown @endif @if(!$item->subItems->count()) pb-2 @endif">
                    @if($item->parent_id == null)
                        <a href="/{{ $item->url }}">{{ $item->title }}</a>
                    @endif

                    @if($item->subItems->count())
                        <div class="dropdown-content animated zoomIn faster">
                        @foreach ($item->subItems as $key => $subItem)
                            <div class="drop-menu-item pb-2"><a href="/{{ $subItem->url }}">{{ $subItem->title }}</a></div>
                        @endforeach
                        </div>
                    @endif
                </div>
            @endforeach
        @else
            <div class="menu-item pb-2">
                <a href="/">Start</a>
            </div>

            <div class="menu-item pb-2">
                <a href="/posts">Blog</a>
            </div>

            <div class="menu-item dropdown">
                    <a href="/posts">Media</a>
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
</div> --}}
