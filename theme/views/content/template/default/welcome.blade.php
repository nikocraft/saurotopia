@extends('layouts.app')

@php
    $templatePath = 'content/template/default';
@endphp

@include('includes/seo')

@section('content')
    <div class="container container-aurora">
        <div class="content" style="padding: 64px;">
            @welcome()
            @endwelcome
        </div>
    </div>
@endsection

@push('scripts')
@endpush
