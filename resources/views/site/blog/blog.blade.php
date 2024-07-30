@extends('site.layouts.main')

@section('title', $blog->name_post)


@section('content')
    @include('site.blog.inc.main')
@endsection

@section('footer_desc')
    @include('site.inc.footer__home_desc')
@endsection

@section('footer')
    @include('site.inc.footer_home')
@endsection
