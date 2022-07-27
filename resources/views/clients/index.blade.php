@extends("layouts.client")

@section("content")
    <style>
        .introduce-product .image-card {
            min-height: 230px;
            max-height: 250px;
            overflow: hidden;
        }

        .introduce-product .image-card img {
            min-height: 230px;
        }

        .introduce-artis .title {
            font-size: 48px !important;
        }

        .introduce-artis .sub-title {
            font-size: 20px !important;
        }

        .introduce-artis .desc {
            font-size: 14px !important;
            letter-spacing: 1.5px;
        }

        .avatar-wraper {
            overflow: hidden;
            max-height: 334px !important;
            min-height: 334px !important;
            object-fit: cover;
            border-radius: 50%;
            max-width: 336px !important;
        }

        .avatar-wraper .avatar {
            transform: scale(2);
        }

        .good-project {
            background-image: url("{{asset("assets/images/product-introduce-bg.png")}}");
            background-position: top;
        }

        .introduce-artis {
            background-image: url("{{asset("assets/images/backchitiettintuc.png")}}");
        }

    </style>
    <section class="banner">
        {{--        <img src="{{$SETTING["banner"]}}" class="w-100" alt="">--}}
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{$SETTING["banner"]}}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{$SETTING["banner"]}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{$SETTING["banner"]}}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- end header banner -->

    <!-- bat dau phan san pham -->
    <section class="products pt-3">
        <div class="row container m-auto pt-2">
            <div class="col-md-3">
                @include("components.sidebar")
                @include("components.list-posts")
            </div>
            <div class="col-md-9">
                @include("components.hot-product")
            </div>
        </div>
    </section>
    <!-- ket thuc phan san pham -->

    <section class="post carousel mt-lg-5 mt-3">
        <h1 class="text-main text-center font-weight-bold">TIN TỨC NỔI BẬT</h1>
        <div class="text-center"><img src="{{asset("assets/images/products-sticker.png")}}" class="img-fluid py-2"
                                      alt=""></div>
        @php
            $posts = \App\Models\Post::orderBy("updated_at")->get();
        @endphp
        <div class="container">
            <div class="owl-carousel">
                @foreach($posts as $post)
                    <div class="product-card text-center p-2 p-sm-4">
                        <a href="{{route("post",$post->id)}}">
                            <img src="{{$post->thumbnail??"https://dodongdiepoanh.com/uploads/DO/7.jpg"}}"
                                 class="img-fluid pb-3" alt="">
                            <h5 class="text-main sm-small">{{$post->title}}</h5>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="videos mt-lg-5 mt-3 pb-5">
        <div class="container">
            <h1 class="text-main text-center font-weight-bold">VIDEO NỔI BẬT</h1>
            <div class="text-center"><img src="{{asset("assets/images/products-sticker.png")}}" class="img-fluid py-2"
                                          alt=""></div>
            <div class="row m-0">
                <div class="col-md-6 col-12">
                    <iframe class="rounded" width="100%" height="300px"
                            src="https://www.youtube.com/embed/Lfri2bVjo44"></iframe>
                </div>
                <div class="col-md-6 col-12">
                    <iframe class="rounded" width="100%" height="300px"
                            src="https://www.youtube.com/embed/Lfri2bVjo44"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- bat dau phan video  -->
    {{--    <section class="introduce-product">--}}
    {{--        <div class="container p-5 m-auto">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-12 col-sm-12 col-md-8 col-lg-8 p-2">--}}
    {{--                    <h1 class="text-main font-weight-bold">VIDEO</h1>--}}
    {{--                    <div class="embed-responsive embed-responsive-4by3 rounded-20 shadow-lg my-4">--}}
    {{--                        <iframe class="embed-responsive-item"--}}
    {{--                                src="https://www.youtube.com/embed/{{$SETTING["indexVideo"]}}"--}}
    {{--                                title="YouTube video player" frameborder="0"--}}
    {{--                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"--}}
    {{--                                allowfullscreen></iframe>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-12 col-sm-12 col-md-4 col-lg-4 p-2">--}}
    {{--                    <h1 class="text-main text-left text-uppercase font-weight-bold">Ảnh</h1>--}}
    {{--                    <div class="row py-4">--}}
    {{--                        <div class="col-6 px-1 px-sm-3 px-md-1">--}}
    {{--                            <div class="card image-card rounded-20 shadow-lg text-white">--}}
    {{--                                <img src="{{asset("assets/images/card-image.jpg")}}" class="w-100 rounded-20"--}}
    {{--                                     alt="...">--}}
    {{--                                <div class="card-img-overlay d-flex justify-content-center align-items-end py-2">--}}
    {{--                                    <p class="card-title text-center bottom-0 small">Linh vật nghê đúc đồng</p>--}}

    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-6 px-1 px-sm-3 px-md-1">--}}
    {{--                            <div class="card image-card rounded-20 shadow-lg text-white">--}}
    {{--                                <img src="{{asset("assets/images/card-image.jpg")}}" class="w-100 rounded-20"--}}
    {{--                                     alt="...">--}}
    {{--                                <div class="card-img-overlay d-flex justify-content-center align-items-end py-2">--}}
    {{--                                    <p class="card-title text-center bottom-0 small">Linh vật nghê đúc đồng</p>--}}

    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="row py-1 py-lg-3 py-xl-4">--}}
    {{--                        <div class="col-6 px-1 px-sm-3 px-md-1">--}}
    {{--                            <div class="card image-card rounded-20 shadow-lg text-white">--}}
    {{--                                <img src="{{asset("assets/images/card-image.jpg")}}" class="w-100 rounded-20"--}}
    {{--                                     alt="...">--}}
    {{--                                <div class="card-img-overlay d-flex justify-content-center align-items-end py-2">--}}
    {{--                                    <p class="card-title text-center bottom-0 small">Linh vật nghê đúc đồng</p>--}}

    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-6 px-1 px-sm-3 px-md-1">--}}
    {{--                            <div class="card image-card rounded-20 shadow-lg text-white">--}}
    {{--                                <img src="{{asset("assets/images/card-image.jpg")}}" class="w-100 rounded-20"--}}
    {{--                                     alt="...">--}}
    {{--                                <div class="card-img-overlay d-flex justify-content-center align-items-end py-2">--}}
    {{--                                    <p class="card-title text-center bottom-0 small">Linh vật nghê đúc đồng</p>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    <!-- ket thuc phan video -->
@endsection
@section("js")
    <script>
        $(document).ready(function () {
            $(".posts-carousel").owlCarousel();
        });
    </script>
@endsection
