@extends('site.layouts.main')

@section('title', $order->product)


@section('content')
    @include('site.order.inc.main')
@endsection

@section('footer_desc')
    @include('site.inc.footer__home_desc')
@endsection

@section('footer')
    @include('site.inc.footer_home')
@endsection
