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
        <div class="h1 text-main text-center pt-lg-5 pt-3 font-weight-bold text-uppercase">Danh mục</div>
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
            <h1 class="text-main text-center font-weight-bold">DỰ ÁN TIÊU BIỂU</h1>
            <div class="text-center"><img src="{{asset("assets/images/good_projects_stiker.png")}}"
                                          class="img-fluid py-2" alt=""></div>
            <div class="text-center text-main">
                Với kinh nghiệp nhiều đời, Đúc đồng Điệp Oanh đã có những thành tựu tiêu biểu trong đúc đồng như:....Với
                kinh nghiệp nhiều đời, Đúc đồng Điệp Oanh đã có những thành tựu tiêu biểu trong đúc đồng như:....Với
                kinh
                nghiệp nhiều đời, Đúc đồng Điệp
                Oanh đã có những thành tựu tiêu biểu trong đúc đồng như:....
            </div>
            <div class="owl-carousel">
                <div class="product-card text-center p-2 p-sm-4">
                    <img src="{{asset("assets/images/good-product.jpg")}}" class="img-fluid pb-3" alt="">
                    <h5 class="text-main sm-small">Tượng phật</h5>
                </div>
                <div class="product-card text-center p-2 p-sm-4">
                    <img src="{{asset("assets/images/good-product.jpg")}}" class="img-fluid pb-3" alt="">
                    <h5 class="text-main">Tượng phật</H5>
                </div>
                <div class="product-card text-center p-2 p-sm-4">
                    <img src="{{asset("assets/images/good-product.jpg")}}" class="img-fluid pb-3" alt="">
                    <h5 class="text-main">Tượng phật</H5>
                </div>
                <div class="product-card text-center p-2 p-sm-4">
                    <img src="{{asset("assets/images/good-product.jpg")}}" class="img-fluid pb-3" alt="">
                    <h5 class="text-main">Tượng phật</H5>
                </div>
                <div class="product-card text-center p-2 p-sm-4">
                    <img src="{{asset("assets/images/good-product.jpg")}}" class="img-fluid pb-3" alt="">
                    <h5 class="text-main">Tượng phật</H5>
                </div>
            </div>
        </div>
    </section>
    <!-- ket thuc phan gioi thieu duu an tieu bieu -->
    <!-- bat dau phan san pham -->
    <section class="products">
        <div class="container p-md-5 p-1 mx-auto">
            <h1 class="text-main text-center font-weight-bold">SẢN PHẨM NỔI BẬT</h1>
            <div class="text-center"><img src="{{asset("assets/images/products-sticker.png")}}" class="img-fluid py-2"
                                          alt=""></div>
            <p class="text-center text-main h5">
                Đồ đồng Điệp Oanh được nghiên cứu và sáng tao như một tác phẩm nghệ thuật thật sự. <br>
                Đây là các sản phẩm thủ công mỹ nghệ rất độc đáo , đồi hỏi kỹ nghệ cao.
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
                                    <div class="text-warning font-weight-bold h5">{{number_format($product->price)}}đ
                                    </div>
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
                        <div class="pt-4 pb-1 text-main font-weight-bold h2">ĐÚC ĐỒNG DIỆP OANH</div>
                        <h2 class="sub-title pb-4 text-main">ĐÚC ĐỒNG GIA TRUYỀN</h2>
                        <p class="desc pb-2 pt-4">Doanh nghiệp đúc đồng Điệp Oanh là một trong những đơn vị đúc đồng và
                            chế
                            tác đồ
                            đồng lớn của làng nghề tại TT.Lâm - Ý Yên - Nam Định. Cơ sở sản xuất gồm ba phân
                            xưởng chính cùng nhiều xưởng vệ tinh, Sở hữu một đội ngũ các thợ giỏi và nghệ nhân
                            xuất sắc, kinh nghiệm lâu năm Chúng tôi đã sản xuất hàng trăm loại sản phẩm bằng
                            đồng với mẫu mã và kích thước đa dạng, phong phú trong đó có các loại đồ thờ cúng,
                            tượng đồng chân dung, tượng đài, tượng phật, tranh đồng, trống đồng, chuông, chiêng
                            và các sản phẩm phong thủy, mỹ nghệ trang trí nộ ngoại thất cao cấp, được kiểm soát
                            từ đầu vào nguyên liệu cho đến đầu ra thành phẩm, đảm bảo sản phẩm khi đưa ra thị
                            trường đến tay người dùng phải đạt tiêu chuẩn cả về thẩm mỹ và kỹ thuật... </p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 md-order-first px-0">
                    <div class=" rounded-circle my-3 text-center mx-auto">
                        <img src="https://dodongdiepoanh.com/uploads/DO/7.jpg" class="img-fluid avatar rounded-circle p-lg-3 p-0" alt="">
                    </div>
                    <h4 class="text-center text-main font-weight-bold">Nghệ nhân đúc đồng Điệp Oanh</h4>
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
@section("css")

@endsection
