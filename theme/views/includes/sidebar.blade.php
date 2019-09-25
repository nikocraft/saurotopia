<div class="flex flex-col h-auto height-sidebar-full">
        @include('includes/header')
@php
    $widgetGroup = get_widget_group('sidebar');
    $widgetGroupVisible = false;
    $menu = get_menu('header');

    switch ($pageType) {
        case 'single':
            $contentTypeId = $content->type->slug;
            $contentId = $content->id;
            $widgetGroupVisible = is_widget_group_visible($widgetGroup, $contentTypeId, $contentId);
            break;
        case 'index':
            $contentTypeId = $contentType->slug;
            $widgetGroupVisible = is_widget_group_visible($widgetGroup, $contentTypeId);
            break;
        default:
            $contentTypeId = $contentType->slug;
            $widgetGroupVisible = is_widget_group_visible($widgetGroup, $contentTypeId);
            break;
    }

    if($widgetGroupVisible)
        list($widgets, $widgetsIds) = get_widgets($widgetGroup);
@endphp

{{-- Hamburger menu sidebar (visible from 992px screen width) --}}
<div class="justify-center items-center hamburger-hidden hover:bg-green-400" id="hamburger">
        <div class="hamburger-menu-title">{{ get_website_setting('website.title') }}</div>
        <div class="hamburger-menu">
            @if($menu)
                @foreach ($menu as $key => $item)
                    <div class="hamburger-menu-item @if($item->subItems->count()) dropdown @endif">
                        @if($item->parent_id == null)
                            <a href="/{{ $item->url }}">{{ $item->title }}</a>
                            @if($item->subItems->count())
                                <i class="dropdown-button-open {{ get_theme_setting('header.hamburger.dropDownButtons.openIcon') }}"></i>
                                <i class="dropdown-button-close {{ get_theme_setting('header.hamburger.dropDownButtons.closeIcon') }}"></i>
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
                    <i class="dropdown-button-open {{ get_theme_setting('header.hamburger.dropDownButtons.openIcon') }}"></i>
                    <i class="dropdown-button-close {{ get_theme_setting('header.hamburger.dropDownButtons.closeIcon') }}"></i>

                    <div class="dropdown-content">
                        <div class="drop-menu-item"><a href="/posts">Videos</a></div>
                        <div class="drop-menu-item"><a href="/posts">Images</a></div>
                    </div>
                </div>

                <div class="hamburger-menu-item dropdown">
                    <a href="/posts">Community</a>
                    <i class="dropdown-button-open {{ get_theme_setting('header.hamburger.dropDownButtons.openIcon') }}"></i>
                    <i class="dropdown-button-close {{ get_theme_setting('header.hamburger.dropDownButtons.closeIcon') }}"></i>

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
<div class="responsive-menu justify-center focus:outline-none absolute hamburger-position">
        <button class="hamburger {{ get_theme_setting('header.hamburger.button.style') }}" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
    </div>

@if($widgetGroupVisible)
    @foreach($widgetsIds as $widgetId)
        @php
            $widgetGroupBlock = $widgets[$widgetId];
            $settings = $widgetGroupBlock->settings;
        @endphp

        <div class="widget bg-sidebar flex-1" id="responsive-widget">
            @if($settings->get('renderTitle'))
                <div class="widget-header">
                    <{{ get_theme_setting('widgets.titleSize')}} class="widget-title">
                        {{ $settings->blockTitle }}
                    </{{ get_theme_setting('widgets.titleSize')}}>
                </div>
            @endif
            <div class="widget-body" style="padding: 10;">
                @component('content.render.rootwidget', [
                    'widgetId' => $widgetId,
                    'widgets' => $widgets
                ])@endcomponent
            </div>
        </div>
    @endforeach
@endif

<div class="footer-holder-sidebar">
    @include('includes/footer')
</div>
</div>
