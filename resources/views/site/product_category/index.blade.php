@extends('site.layouts.main')

@section('title', $name)

@section('description', 'WebSite')

@section('content')
    @include('site.product_category.inc.main')
@endsection

@section('footer_desc')
    @include('site.product_category.inc.footer__home_desc')
@endsection

@section('footer')
    @include('site.product_category.inc.footer_home')
@endsection


