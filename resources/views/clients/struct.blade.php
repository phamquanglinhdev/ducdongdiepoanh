@extends("layouts.client")
@section("content")
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-3 d-md-block d-none">
                @include("components.sidebar")
                @include("components.list-posts")
            </div>
            <div class="col-md-9">
                <section class="main-content">
                    <div class="container m-auto">
                        <div class="new-detail">
                            <h4 class="text-main news-responsive-text-title  font-weight-bold">{{$struct->name}}</h4>
                            <!--main desc-->
                            <div class="main-detail py-2 bg-white rounded p-1 ">
                                {!! $struct->document !!}
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
