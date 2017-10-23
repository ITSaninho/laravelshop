@extends('layouts.site')

@section('header')
    @include('profile_block.header')
@endsection

@section('content')
    @include('profile_block.order')
    @include('profile_block.left_bar')
@endsection

@section('footer')
    @include('profile_block.footer')
@endsection