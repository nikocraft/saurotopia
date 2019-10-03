@extends('layouts.app')

@php
    $templatePath = 'content/template/default';
@endphp

@include('includes/seo')

@section('content')
    <div class="container container-aurora">
        <div class="sidebar sidebar-wrapper" id="sidebar">
            @include('includes/sidebar')
        </div>
        <div class="content" style="padding: 64px;">
            @welcome()
            @endwelcome
        </div>
    </div>
@endsection

@push('scripts')
@endpush
