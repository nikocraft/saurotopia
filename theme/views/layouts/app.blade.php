<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    @include('includes/head')
</head>
<body>
    <div class="aurora" id="app">
        <div class="container container-aurora">
            <div class="sidebar">
                @include('includes/sidebar')
            </div>
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Scripts -->
    @routes

    @php
        $fontResources = get_theme_setting('resources.fonts');
        $iconResources = get_theme_setting('resources.icons');
        $cssResources = get_theme_setting('resources.css');
        $themeFolder = get_theme_folder();
    @endphp

    <script src="{{ mix('js/app.js', 'themes/'.$themeFolder) }}"></script>

    @php
        $jsResources = get_theme_setting('resources.javascript');
    @endphp

    @foreach ( $jsResources as $key => $jsResource )
        @if($jsResource)
            <script id="{{ $key }}" src="{{ $jsResource }}"></script>
        @endif
    @endforeach

    @include('includes/scripts')

    @stack('scripts')

    <noscript>Please enable JavaScript to view this website correctly.</noscript>

</body>
</html>
