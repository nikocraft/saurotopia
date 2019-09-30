
<div class="sidebar-container container container-aurora content-wrap">
    <div class="sidebar sidebar-left sidebar-aurora sidebar-wrapper" id="sidebar">
        @include('includes/sidebar')
    </div>
    <div class="content content-{{$pageType}} content-right">
            @include('content/template/default/'.$pageType)
    </div>
</div>

