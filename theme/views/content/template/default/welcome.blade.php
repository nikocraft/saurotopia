@extends('layouts.app')

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
