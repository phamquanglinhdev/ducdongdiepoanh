@extends("layouts.client")
@section("content")
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
    <section id="about">
        <div class="container pt-5">
            <div class="row px-lg-5 p-0">
                <div
                    class="col-12 col-sm-12 col-md-12 col-lg-6 d-flex md-order-last justify-content-center align-items-center h-100">
                    <div>
                        <div class="pt-4 pb-1 text-main font-weight-bold h2">ĐÚC ĐỒNG DIỆP OANH</div>
                        <h2 class="sub-title pb-4 text-main">ĐÚC ĐỒNG GIA TRUYỀN</h2>
                        <p class="desc pb-2 pt-4">Doanh nghiệp Đồ đồng Điệp Oanh là một trong những đơn vị đúc đồng và
                            chế
                            tác đồ
                            đồng lớn của làng nghề tại TT.Lâm - Ý Yên - Nam Định. Cơ sở sản xuất gồm ba phân
                            xưởng chính cùng nhiều xưởng vệ tinh. Sở hữu một đội ngũ các thợ giỏi và nghệ nhân
                            xuất sắc, kinh nghiệm lâu năm, chúng tôi đã sản xuất hàng trăm loại sản phẩm bằng
                            đồng với mẫu mã và kích thước đa dạng, phong phú trong đó có các loại đồ thờ cúng,
                            tượng đồng chân dung, tượng đài, tượng phật, tranh đồng, trống đồng, chuông, chiêng
                            và các sản phẩm phong thủy, mỹ nghệ trang trí nội ngoại thất cao cấp, được kiểm soát
                            từ đầu vào nguyên liệu cho đến đầu ra thành phẩm, đảm bảo sản phẩm khi đưa ra thị
                            trường đến tay người dùng phải đạt tiêu chuẩn cả về thẩm mỹ và kỹ thuật... </p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 md-order-first px-0">
                    <div class=" rounded-circle my-3 text-center mx-auto">
                        <img src="{{asset("assets/images/nghe-nhan-uu-tu.png")}}"
                             class="img-fluid avatar rounded p-lg-3 p-0" alt="">
                    </div>
                    <h4 class="text-center text-main font-weight-bold">Nghệ nhân ưu tú Vũ Duy Điệp</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- start gioi thieu nghe nhan -->
    {{--    <section class="introduce-artis">--}}
    {{--        <div class="h1 text-main text-center pt-lg-5 pt-3 font-weight-bold text-uppercase">Danh mục</div>--}}
    {{--        <div class="container mx-auto p-5">--}}
    {{--            <div class="row pb-5">--}}
    {{--                @if(isset($LOCAL_CATEGORIES))--}}
    {{--                    @foreach($LOCAL_CATEGORIES as $category)--}}
    {{--                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 p-2">--}}
    {{--                            <a href="{{route("products",$category->id)}}"--}}
    {{--                               style="color: inherit;text-decoration: none!important;">--}}
    {{--                                <div class="product-card bg-product-card text-center p-md-3 pb-2 rounded">--}}
    {{--                                    <img src="{{$category->thumbnail}}" class="img-fluid pb-3" alt="">--}}
    {{--                                    <div class="text-main font-weight-bold">{{$category->name}}</div>--}}
    {{--                                </div>--}}
    {{--                            </a>--}}
    {{--                        </div>--}}
    {{--                    @endforeach--}}
    {{--                @endif--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    <!-- end phan gioi thieu nghe nhan  -->
    <!-- gioi thieu du an tieu bieu -->
    <section class="good-project" id="project">
        <div class="container p-md-5 p-1 mx-auto">
            <h1 class="text-main text-center font-weight-bold">DỰ ÁN TIÊU BIỂU</h1>
            <div class="text-center text-main">
                Với kinh nghiệp nhiều đời, Đồ đồng Điệp Oanh đã có những thành tựu tiêu biểu trong đúc đồng như:
            </div>
            <div class="owl-carousel">
                @if(isset($structs))
                    @foreach($structs as $struct)
                        <a href="{{route("struct",$struct->id)}}" class="nav-link text-dark">
                            <div class="product-card text-center p-2 p-sm-4">
                                <img src="{{$struct->thumbnail}}" class="img-fluid pb-3" alt="">
                                <h5 class="text-main sm-small">{{$struct->name}}</h5>
                            </div>
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!-- ket thuc phan gioi thieu duu an tieu bieu -->
    @include("components.videos")
@endsection
