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
    <!-- start gioi thieu nghe nhan -->
    <section class="introduce-artis">
        <div class="h1 text-main text-center pt-lg-5 pt-3 font-weight-bold text-uppercase">Danh m???c</div>
        <div class="container mx-auto p-5">
            <div class="row pb-5">
                @if(isset($LOCAL_CATEGORIES))
                    @foreach($LOCAL_CATEGORIES as $category)
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 p-2">
                            <a href="{{route("products",$category->id)}}"
                               style="color: inherit;text-decoration: none!important;">
                                <div class="product-card bg-product-card text-center p-md-3 pb-2 rounded">
                                    <img src="{{$category->thumbnail}}" class="img-fluid pb-3" alt="">
                                    <div class="text-main font-weight-bold">{{$category->name}}</div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!-- end phan gioi thieu nghe nhan  -->
    <!-- gioi thieu du an tieu bieu -->
    <section class="good-project" id="project">
        <div class="container p-md-5 p-1 mx-auto">
            <h1 class="text-main text-center font-weight-bold">D??? ??N TI??U BI???U</h1>
            <div class="text-center"><img src="{{asset("assets/images/good_projects_stiker.png")}}"
                                          class="img-fluid py-2" alt=""></div>
            <div class="text-center text-main">
                V???i kinh nghi???p nhi???u ?????i, ????? ?????ng ??i???p Oanh ???? c?? nh???ng th??nh t???u ti??u bi???u trong ????c ?????ng nh??:
            </div>
            <div class="owl-carousel">
                <div class="product-card text-center p-2 p-sm-4">
                    <img src="{{asset("assets/images/good-product.jpg")}}" class="img-fluid pb-3" alt="">
                    <h5 class="text-main sm-small">T?????ng ph???t</h5>
                </div>
                <div class="product-card text-center p-2 p-sm-4">
                    <img src="{{asset("assets/images/good-product.jpg")}}" class="img-fluid pb-3" alt="">
                    <h5 class="text-main">T?????ng ph???t</H5>
                </div>
                <div class="product-card text-center p-2 p-sm-4">
                    <img src="{{asset("assets/images/good-product.jpg")}}" class="img-fluid pb-3" alt="">
                    <h5 class="text-main">T?????ng ph???t</H5>
                </div>
                <div class="product-card text-center p-2 p-sm-4">
                    <img src="{{asset("assets/images/good-product.jpg")}}" class="img-fluid pb-3" alt="">
                    <h5 class="text-main">T?????ng ph???t</H5>
                </div>
                <div class="product-card text-center p-2 p-sm-4">
                    <img src="{{asset("assets/images/good-product.jpg")}}" class="img-fluid pb-3" alt="">
                    <h5 class="text-main">T?????ng ph???t</H5>
                </div>
            </div>
        </div>
    </section>
    <!-- ket thuc phan gioi thieu duu an tieu bieu -->
    <!-- bat dau phan san pham -->
    <section class="products">
        <div class="container p-md-5 p-1 mx-auto">
            <h1 class="text-main text-center font-weight-bold">S???N PH???M N???I B???T</h1>
            <div class="text-center"><img src="{{asset("assets/images/products-sticker.png")}}" class="img-fluid py-2"
                                          alt=""></div>
            <p class="text-center text-main h5">
                ????? ?????ng ??i???p Oanh ???????c nghi??n c???u v?? s??ng t???o nh?? m???t t??c ph???m ngh??? thu???t th???t s???. <br>
                ????y l?? c??c s???n ph???m th??? c??ng m??? ngh??? r???t ?????c ????o, ????i h???i k??? ngh??? cao.
            </p>
            <div class="row  m-0 pt-5 py-2">
                @if(isset($HOT_PRODUCTS))
                    @foreach($HOT_PRODUCTS as $product)
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 pl-3 p-1">
                            <a href="{{route("product",$product->slug)}}" style="text-decoration: none;color: inherit">
                                <div class="product-card shadow-lg rounded-20 text-center p-2 mb-3">
                                    <img src="{{$product->first_thumbnail}}" class="img-fluid pb-2" alt="">
                                    <div class="d-flex justify-content-center align-items-center pb-4">
                                        @for($i =1;$i<=5;$i++)
                                            @if($product->rating >= $i)
                                                <i class="small fas mx-1 fa-star text-warning"></i>
                                            @else
                                                <i class="small far mx-1 fa-star text-warning"></i>
                                            @endif
                                        @endfor
                                    </div>
                                </div>
                                <div class="text-main font-weight-bold ">{{$product->name}}</div>
                                <div class="d-md-flex justify-content-between align-items-end">
                                    <div class="text-main">{{$product->Category()->first()->name}}</div>
{{--                                    <div class="text-warning font-weight-bold h5">{{number_format($product->price)}}??--}}
{{--                                    </div>--}}
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>

        </div>
    </section>
    <!-- ket thuc phan san pham -->
    <section id="about">
        <div class="container">
            <div class="row px-lg-5 p-0">
                <div
                    class="col-12 col-sm-12 col-md-12 col-lg-6 d-flex md-order-last justify-content-center align-items-center h-100">
                    <div>
                        <div class="pt-4 pb-1 text-main font-weight-bold h2">????C ?????NG DI???P OANH</div>
                        <h2 class="sub-title pb-4 text-main">????C ?????NG GIA TRUY???N</h2>
                        <p class="desc pb-2 pt-4">Doanh nghi???p ????? ?????ng ??i???p Oanh l?? m???t trong nh???ng ????n v??? ????c ?????ng v??
                            ch???
                            t??c ?????
                            ?????ng l???n c???a l??ng ngh??? t???i TT.L??m - ?? Y??n - Nam ?????nh. C?? s??? s???n xu???t g???m ba ph??n
                            x?????ng ch??nh c??ng nhi???u x?????ng v??? tinh. S??? h???u m???t ?????i ng?? c??c th??? gi???i v?? ngh??? nh??n
                            xu???t s???c, kinh nghi???m l??u n??m, ch??ng t??i ???? s???n xu???t h??ng tr??m lo???i s???n ph???m b???ng
                            ?????ng v???i m???u m?? v?? k??ch th?????c ??a d???ng, phong ph?? trong ???? c?? c??c lo???i ????? th??? c??ng,
                            t?????ng ?????ng ch??n dung, t?????ng ????i, t?????ng ph???t, tranh ?????ng, tr???ng ?????ng, chu??ng, chi??ng
                            v?? c??c s???n ph???m phong th???y, m??? ngh??? trang tr?? n???i ngo???i th???t cao c???p, ???????c ki???m so??t
                            t??? ?????u v??o nguy??n li???u cho ?????n ?????u ra th??nh ph???m, ?????m b???o s???n ph???m khi ????a ra th???
                            tr?????ng ?????n tay ng?????i d??ng ph???i ?????t ti??u chu???n c??? v??? th???m m??? v?? k??? thu???t... </p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 md-order-first px-0">
                    <div class=" rounded-circle my-3 text-center mx-auto">
                        <img src="https://dodongdiepoanh.com/uploads/DO/7.jpg" class="img-fluid avatar rounded-circle p-lg-3 p-0" alt="">
                    </div>
                    <h4 class="text-center text-main font-weight-bold">Ngh??? nh??n ??u t?? V?? Duy ??i???p</h4>
                </div>
            </div>
        </div>
    </section>
    <section class="post carousel mt-lg-5 mt-3">
        <h1 class="text-main text-center font-weight-bold">TIN T???C N???I B???T</h1>
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
                            <img src="{{$post->thumbnail??"https://dodongdiepoanh.com/uploads/DO/7.jpg"}}" class="img-fluid pb-3" alt="">
                            <h5 class="text-main sm-small">{{$post->title}}</h5>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="videos mt-lg-5 mt-3 pb-5">
        <div class="container">
            <h1 class="text-main text-center font-weight-bold">VIDEO N???I B???T</h1>
            <div class="text-center"><img src="{{asset("assets/images/products-sticker.png")}}" class="img-fluid py-2"
                                          alt=""></div>
            <div class="row m-0">
                <div class="col-md-6 col-12">
                    <iframe class="rounded" width="100%" height="300px" src="https://www.youtube.com/embed/Lfri2bVjo44"></iframe>
                </div>
                <div class="col-md-6 col-12">
                    <iframe  class="rounded" width="100%" height="300px" src="https://www.youtube.com/embed/Lfri2bVjo44"></iframe>
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
{{--                    <h1 class="text-main text-left text-uppercase font-weight-bold">???nh</h1>--}}
{{--                    <div class="row py-4">--}}
{{--                        <div class="col-6 px-1 px-sm-3 px-md-1">--}}
{{--                            <div class="card image-card rounded-20 shadow-lg text-white">--}}
{{--                                <img src="{{asset("assets/images/card-image.jpg")}}" class="w-100 rounded-20"--}}
{{--                                     alt="...">--}}
{{--                                <div class="card-img-overlay d-flex justify-content-center align-items-end py-2">--}}
{{--                                    <p class="card-title text-center bottom-0 small">Linh v???t ngh?? ????c ?????ng</p>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-6 px-1 px-sm-3 px-md-1">--}}
{{--                            <div class="card image-card rounded-20 shadow-lg text-white">--}}
{{--                                <img src="{{asset("assets/images/card-image.jpg")}}" class="w-100 rounded-20"--}}
{{--                                     alt="...">--}}
{{--                                <div class="card-img-overlay d-flex justify-content-center align-items-end py-2">--}}
{{--                                    <p class="card-title text-center bottom-0 small">Linh v???t ngh?? ????c ?????ng</p>--}}

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
{{--                                    <p class="card-title text-center bottom-0 small">Linh v???t ngh?? ????c ?????ng</p>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-6 px-1 px-sm-3 px-md-1">--}}
{{--                            <div class="card image-card rounded-20 shadow-lg text-white">--}}
{{--                                <img src="{{asset("assets/images/card-image.jpg")}}" class="w-100 rounded-20"--}}
{{--                                     alt="...">--}}
{{--                                <div class="card-img-overlay d-flex justify-content-center align-items-end py-2">--}}
{{--                                    <p class="card-title text-center bottom-0 small">Linh v???t ngh?? ????c ?????ng</p>--}}
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
        $(document).ready(function(){
            $(".posts-carousel").owlCarousel();
        });
    </script>
@endsection
