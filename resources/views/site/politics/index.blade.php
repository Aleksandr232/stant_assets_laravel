@extends('site.layouts.main')

@section('title', $politics->id)

@section('description', 'WebSite')

{{-- @section('content')
    @include('site.inc.main')
@endsection --}}

@section('footer_desc')
    @include('site.inc.footer__home_desc')
@endsection

@section('footer')
    @include('site.inc.footer_home')
@endsection
