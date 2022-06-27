@extends('layouts.app')
@section('title')
    DC Comics
@endsection
@section('main_content')
    <div class="hero-banner"></div>
    @include('components.current_series')
    @include('components.second_menu')
@endsection

