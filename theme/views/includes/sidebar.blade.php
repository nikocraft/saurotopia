<div class="flex flex-col h-full">
        @include('includes/header')
@php
    $widgetGroup = get_widget_group('sidebar');
    $widgetGroupVisible = false;

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

@if($widgetGroupVisible)
    @foreach($widgetsIds as $widgetId)
        @php
            $widgetGroupBlock = $widgets[$widgetId];
            $settings = $widgetGroupBlock->settings;
        @endphp

        <div class="widget bg-sidebar flex-1 responsive-wrap-sidebar">
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
{{-- Hamburger menu sidebar (visible from 992px screen width) --}}
<div class="justify-center items-center hamburger-hidden">
    <div class="px-6 pt-6 pb-4 hover:bg-green-400">
        <i class="fas fa-bars text-white text-5xl"></i>
    </div>
</div>
<div class="footer-holder-sidebar">
    @include('includes/footer')
</div>
</div>
