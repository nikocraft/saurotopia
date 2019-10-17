@extends('layouts/app')

@section('sidebar')
    @include('includes/sidebar')
@endsection

@section('content')
    <div class="container">
        <div class="" style="padding: 64px;">
            @welcome()
            @endwelcome
        </div>
    </div>
@endsection
