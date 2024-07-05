@extends('site.layouts.main')

@section('title', 'Account')

@section('description', 'Account')

@section('content')
    @include('account.layouts.main')
@endsection

@section('footer_desc')
    @include('site.inc.footer__home_desc')
@endsection

@section('footer')
    @include('site.inc.footer_home')
@endsection
