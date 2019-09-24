
<div class="flex container container-aurora content-wrap bg-white">
    <div class="sidebar sidebar-left sidebar-aurora h-full bg-sidebar responsive-height-sidebar">
        @include('includes/sidebar')
    </div>
    <div class="content content-{{$pageType}} content-right">
            @include('content/template/default/'.$pageType)
    </div>
</div>

