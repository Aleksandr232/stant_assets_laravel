@extends('site.layouts.main')

@section('title', $politics->id)

@section('description', 'WebSite')

@section('content')
<div class="container-politics">
    <div class="row-politics">
        <div class="col-politics">
            <h1 class="title-politics">Политика конфиденциальности</h1>
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
