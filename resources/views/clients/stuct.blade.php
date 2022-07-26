@extends("layouts.client")
@section("content")
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
                Với kinh nghiệp nhiều đời, Đồ đồng Điệp Oanh đã có những thành tựu tiêu biểu trong đúc đồng như:
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
@endsection
