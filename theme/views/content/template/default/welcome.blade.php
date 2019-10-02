@extends('layouts.app')

@php
    $templatePath = 'content/template/default';
@endphp

@include('includes/seo')

@section('content')
    <div class="sidebar-container container container-aurora content-wrap">
        <div class="sidebar sidebar-left sidebar-aurora sidebar-wrapper" id="sidebar">
            @include('includes/sidebar')
        </div>
        <div class="content content-single content-right" style="padding: 64px;">
            @welcome()
            @endwelcome
        </div>
    </div>
@endsection

@push('scripts')
@endpush
