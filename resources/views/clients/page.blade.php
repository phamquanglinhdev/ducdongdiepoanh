@php
    $title = $page->name;
    $keyword = $page->keyword;
@endphp
@extends("layouts.client")
@section("content")
    <div class="container py-4">
        <div class="row">
            <div class="col-md-3 d-md-block d-none">
                @include("components.sidebar")
                @include("components.list-posts")
            </div>
            <div class="col-md-9 col-12">
                <div class="h3 font-weight-bold text-uppercase">{{$page->name}}</div>
                <hr>
                <div class="p-1">
                    <div>{!! $page->document !!}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
