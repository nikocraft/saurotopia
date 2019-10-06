@extends('layouts/app')

@include('includes/seo')

@section('sidebar')
    @include('includes/sidebar')
@endsection

@section('content')
    @switch($pageType)
        @case('single')
            @include('content/template/default/single')
            @break
        @case('welcome')
            @include('content/template/default/welcome')
            @break
        @default
            @include('content/template/default/index')
    @endswitch
@endsection

@push('scripts')

@endpush
