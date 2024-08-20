@extends('site.layouts.main')

@section('title', $politics->id)

@section('description', 'WebSite')

@section('content')
<div class="container content-politics">
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2">
            <h1 class="mb-4">Политика конфиденциальности</h1>
            {!! $politics->content_politics !!}
        </div>
    </div>
</div>
@endsection

@section('footer_desc')
    @include('site.inc.footer__home_desc')
@endsection

@section('footer')
    @include('site.inc.footer_home')
@endsection
