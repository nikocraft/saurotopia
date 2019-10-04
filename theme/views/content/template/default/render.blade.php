@extends('layouts/app')

@include('includes/seo')

@section('content')

    @if($pageType == 'single')
        {{-- {{ $fontResources }} --}}
        @include('content/template/default/single')
    @elseif($pageType == 'index')
    {{-- {{ $fontResources }} --}}
        @include('content/template/default/index')
    @else
    {{-- {{ $fontResources }} --}}
        @include('content/template/default/welcome')
    @endif

@endsection

@push('scripts')

@endpush
