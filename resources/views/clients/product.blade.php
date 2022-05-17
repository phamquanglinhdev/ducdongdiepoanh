@extends("layouts.client")
@php
    $title = $product->name;
@endphp
@section("content")
    <style>
        .bg-muted {
            background-color: #efefef !important;
        }

        .list-image-preview li {
            cursor: pointer;
        }

        .text-warning-60 {
            opacity: .6;
        }

        .text-20 {
            font-size: 20px;
        }
    </style>
    <div class="container m-auto px-md-5 px-4">
        <div class="row mt-3">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 pr-md-4">
                <div class="  mx-auto bg-muted my-3 p-1 p-md-3 rounded-20">
                    <div class="d-flex flex-column text-center pb-3 align-items-center px-md-3 justify-content-center">
                        <img id="image-preview" src="{{$product->first_thumbnail}}" class="w-100"/>
                    </div>
                    <ul class="d-flex list-image-preview list-unstyled justify-content-center align-items-center pb-2">
                        <li class="col p-1">
                            <div
                                class="container-fluid border border-dark d-flex justify-content-center align-items-center px-1 py-2">
                                <img src="{{$product->first_thumbnail}}" class="w-100">
                            </div>
                        </li>
                        <li class="col p-1">
                            <div
                                class="container-fluid border border-dark d-flex justify-content-center align-items-center px-1 py-2">
                                <img src="{{$product->second_thumbnail??$product->first_thumbnail}}" class="w-100">
                            </div>
                        </li>
                        <li class="col p-1">
                            <div
                                class="container-fluid border border-dark d-flex justify-content-center align-items-center px-1 py-2">
                                <img src="{{$product->third_thumbnail??$product->first_thumbnail}}" class="w-100">
                            </div>
                        </li>
                        <li class="col p-1">
                            <div
                                class="container-fluid border border-dark d-flex justify-content-center align-items-center px-1 py-2">
                                <img src="{{$product->four_thumbnail??$product->first_thumbnail}}" class="w-100">
                            </div>
                        </li>
                        <li class="col p-1">
                            <div
                                class="container-fluid border border-dark d-flex justify-content-center align-items-center px-1 py-2">
                                <img src="{{$product->five_thumbnail??$product->first_thumbnail}}" class="w-100">
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class="d-flex list-social-icon justify-content-start px-2 align-items-center list-unstyled">
                    <li class="d-none d-md-inline">
                    <span class="fa-stack">
                        <i class="fas fa-circle text-main fa-stack-2x"></i>
                        <i class="fab fa-facebook text-white fa-stack-1x fa-inverse"></i>
                    </span>
                    </li>
                    <li class="d-none  d-md-inline">
                    <span class="fa-stack">
                        <i class="fas fa-circle text-main fa-stack-2x"></i>
                        <i class="fab fa-youtube text-white  fa-stack-1x fa-inverse"></i>
                    </span>
                    </li>
                    <li class="d-none  d-md-inline">
                    <span class="fa-stack">
                        <i class="fas fa-circle text-main fa-stack-2x"></i>
                        <i class="fab fa-linkedin text-white fa-stack-1x fa-inverse"></i>
                    </span>
                    </li>
                    <li class="d-none  d-md-inline">
                    <span class="fa-stack">
                        <i class="fas fa-circle text-main fa-stack-2x"></i>
                        <i class="fab fa-instagram text-white fa-stack-1x fa-inverse"></i>
                    </span>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 py-md-4 px-2 pl-md-2">
                <h3 class="text-main font-weight-bold">{{$product->name}}</h3>
                <div class="d-block d-sm-flex d-nd-flex justify-content-between align-items-center my-2">
                    <div class="d-flex justify-content-between align-items-center pr-md-1">
                        <p class="text-warning font-weight-bold pl-2 h2 ">{{number_format($product->price)}} đ</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center pt-2 pt-md-0 pl-md-2">
                        <div class="d-flex justify-content-center align-items-center pr-2">
                            @for($i=1;$i<=5;$i++)
                                @if($i<=$product->rating)
                                    <i class="fas mx-1 fa-star text-warning"></i>
                                @else
                                    <i class="far mx-1 fa-star text-warning"></i>
                                @endif
                            @endfor
                        </div>
                        <a href="#"><i class="far fa-heart text-main text-20"></i></a>
                    </div>
                </div>
                <hr class="my-3 border">
                <p class="font-italic">
                    Hình thức <b>Đặt Trước</b> áp dụng cho sản phẩm chờ hoàn thiện trên 7 ngày,
                    đơn hàng sẽ không được giao ngay tới khách hàng.
                </p>
                <br>
                <p class="font-weight-bold d-flex justify-content-start align-items-center">
                    <i class="fas fa-heart text-main text-20 pr-2"></i> 37K người đã thích sản phẩm này
                </p>
                <div style="overflow-wrap: anywhere">
                    {{ $product->description }}
                </div>
                <br>
                <p><span class="font-weight-bold">Kích thước : </span> {{$product->size}}</p>
                <p><span class="font-weight-bold">Chất liệu : </span> Đồng mạ vàng</p>
                <br>
                <button class="btn rounded px-5 py-2 bg-main text-warning"><h4>Liên hệ</h4></button>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-12 text-center">
                <h3 class="text-main font-weight-bold">Sản phẩm liên quan</h3>
                <img src="{{asset("assets/images/good_projects_stiker.png")}}">
            </div>
        </div>
        <div class=" owl-carousel p-1 p-sm-2 p-md-3 p-lg-4">
            <div class="p-3 p-sm-2 p-md-3 p-lg-4">
                <div class="product-card shadow rounded-20 text-center p-2 mb-3">
                    <img src="https://grandart.vn/uploads/danh-muc-san-pham/danhmuc-6.png" class="w-100 pb-2" alt="">
                    <div class="d-flex justify-content-center align-items-center pb-4 product-rating">
                        <i class="small fas mx-1 fa-star text-warning" data-star="1"></i>
                        <i class="small fas mx-1 fa-star text-warning" data-star="2"></i>
                        <i class="small fas mx-1 fa-star text-warning" data-star="3"></i>
                        <i class="small far mx-1 fa-star text-warning" data-star="4"></i>
                        <i class="small far mx-1 fa-star text-warning" data-star="5"></i>
                    </div>
                </div>
                <a href="#" class="nav-link text-dark">
                    <h6 class="text-main">Tượng phật Thích Ca</h6>
                </a>
                <div class="d-flex justify-content-between align-items-end">
                    <strong class="small font-weight-normal">Tượng phật dát vàng</strong>
                    <h6 class="text-warning text-monospace">1.680.000đ</h6>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("js")
    <script>
        let imagePreview = document.getElementById('image-preview')
        let listImage = document.querySelectorAll('.list-image-preview li img')
        Array.from(listImage).forEach((val) => {
            val.addEventListener('mouseover', (event) => {
                if (event.target.src !== undefined) {
                    imagePreview.src = event.target.src
                }
            })
        })
    </script>
@endsection
