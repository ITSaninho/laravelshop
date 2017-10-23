@extends('layouts.site')

@section('header')
    @include('site_block.header')
@endsection

@section('content')
    @include('site_block.product')
    @include('site_block.left_bar')
@endsection

@section('footer')
    @include('site_block.footer')
@endsection