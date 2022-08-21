<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{$title??"Đồ đồng Điệp Oanh"}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{$SETTING["description"]}}">
    <meta name="keywords" content="{{$keyword??$SETTING["keywords"]}}">
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/custom.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/owl.theme.default.min.css")}}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link rel="icon" type="image/x-icon" href="{{asset("assets/images/favicon.ico")}}">
    <meta name="zalo-platform-site-verification" content="OOwL2EMJ1WuHauCix8CRCoggpWd6snLJCp4"/>
    @yield("css")
</head>
<body>
<!--Start of WebPush.vn-->

<!--End of WebPush.vn-->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0&appId=752127876147770&autoLogAppEvents=1"
        nonce="meZBPpaO"></script>
<!-- Messenger Plugin chat Code -->
<style>
    /*@media (min-width: 768px) {*/
    /*    .submenu:hover .dropdown-menu {*/
    /*        display: inline-flex !important;*/
    /*        justify-content: center;*/
    /*        align-items: center;*/
    /*        left: 101% !important;*/
    /*        top: -10px !important;*/
    /*    }*/

    /*    .top-50 {*/
    /*        top: 50px;*/
    /*    }*/
    /*}*/

    /*@media (max-width: 768px) {*/

    /*    .submenu .dropdown-menu {*/
    /*        display: block !important;*/
    /*    }*/

    /*    .submenu .dropdown-menu .row {*/
    /*        display: block !important;*/
    /*    }*/

    /*    .submenu {*/
    /*        display: block !important;*/
    /*    }*/

    /*    .submenu .dropdown-menu.collapse.show {*/

    /*    }*/

    /*    .collapse:not(.show) {*/
    /*        display: none !important;*/
    /*    }*/
    /*}*/

    .megamenu {
        position: static;
    }

    .megamenu .dropdown-menu {
        background: none;
        border: none;
        width: 100%;
    }


    body {

    }

    code {
        color: #745eb1;
        background: #000000;
        padding: 0.1rem 0.2rem;
        border-radius: 0.2rem;
    }

    .text-uppercase {
        letter-spacing: 0.08em;
    }

    .dropdown .dropdown-menu {
        transition: all 0.5s;
        overflow: hidden;
        transform-origin: top center;
        transform: scale(1, 0);
        display: block;
    }

    .dropdown:hover .dropdown-menu {
        transform: scale(1);
    }
</style>


<header>
    <!-- top banner -->
    <div class="banner-wrap">
        <div class="container mx-auto">
            <div class="row m-0 align-items-center justify-content-center">
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 py-2 text-center px-1 px-sm-0">
                    <a href="{{route("index")}}">
                        <img src="{{asset("assets/images/logo.png")}}" alt="logo" class="header-logo img-fluid">
                    </a>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 w-100">
                    <div class="row d-flex justify-content-around align-items-center h-100">
                        <div class="d-none d-md-block col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <input type="text" class="form-control search"
                                   placeholder="Tìm kiếm tất cả ở đây">
                        </div>
                        <div class="col-12 col-sm-12 pb-sm-0 col-md-6 col-lg-6 col-xl-6">
                            <ul class="m-0 d-flex list-social-icon justify-content-end px-2 justify-content-sm-end justify-content-md-center align-items-center list-unstyled">
                                <li class="d-none  d-md-inline">
                                    <span class="fa-stack">
                                        <i class="fas fa-circle text-white fa-stack-2x"></i>
                                        <i class="fab fa-facebook text-dark fa-stack-1x fa-inverse"></i>
                                      </span>
                                </li>
                                <li class="d-none  d-md-inline">
                                    <span class="fa-stack">
                                        <i class="fas fa-circle text-white fa-stack-2x"></i>
                                        <i class="fab fa-youtube text-dark  fa-stack-1x fa-inverse"></i>
                                      </span>
                                </li>
                                <li class="d-none  d-md-inline">
                                    <span class="fa-stack">
                                        <i class="fas fa-circle text-white fa-stack-2x"></i>
                                        <i class="fab fa-linkedin text-dark fa-stack-1x fa-inverse"></i>
                                      </span>
                                </li>
                                <li class="d-none  d-md-inline">
                                    <span class="fa-stack">
                                        <i class="fas fa-circle text-white fa-stack-2x"></i>
                                        <i class="fab fa-instagram text-dark fa-stack-1x fa-inverse"></i>
                                      </span>
                                </li>
                                <button class="d-block d-md-none rounded" id="navbar-toggler-btn" type="button"
                                        data-show="0">
                                    <span class="fa-stack">
                                        <i class="fas fa-circle text-white fa-stack-2x"></i>
                                        <i class="fas fa-bars text-dark fa-stack-1x fa-inverse"></i>
                                      </span>
                                </button>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end top banner -->
    <!-- main nav -->
    <div class="bg-main main-nav">
        <div class="container m-auto">
            <nav class="navbar navbar-expand-md navbar-dark py-2 py-md-2" id="main-nav">

                <i class="d-block d-md-none fas fa-times text-dark" id="toggler-close-btn" data-hide="1"></i>

                <div class="sidebar w-100" id="main-sidebar">

                    <ul class="navbar-nav d-block d-md-flex justify-content-around align-items-center  w-100 py-2">
                        <li class="nav-item px-2 py-md-0 py-2 d-block d-md-none">
                            <img src="{{asset("assets/images/logo.png")}}" class="img-fluid" alt="">
                        </li>
                        <li class="nav-item px-2 py-md-0 py-2"><a href="{{route("index")}}" class="nav-link text-white">TRANG
                                CHỦ</a>
                        </li>
                        <li class="nav-item px-2 py-md-0 py-2"><a href="{{route("post",1)}}"
                                                                  class="nav-link text-white">GIỚI
                                THIỆU</a>
                        </li>
                        {{--                        <li class="nav-item px-2 py-md-0 py-2"><a href="#" class="nav-link text-white">NGHÊ NHÂN</a>--}}
                        {{--                        </li>--}}
                        {{--                        <li class="nav-item px-2 py-md-0 py-2 dropdown border-0 outline-0 rounded">--}}
                        {{--                            <a href="{{route("products")}}" class="nav-link text-white dropdown-toggle"--}}
                        {{--                               data-toggle="dropdown">SẢN PHẨM</a>--}}
                        {{--                            <ul class="dropdown-menu border-0 outline-0 shadow top-50 rounded">--}}
                        {{--                                @foreach($LOCAL_CATEGORIES as $category)--}}
                        {{--                                    <li class="nav-item dropdown submenu pr-2 py-0">--}}
                        {{--                                        <div class="d-none d-lg-flex justify-content-between align-items-center ">--}}
                        {{--                                            <a class="nav-link text-dark text-uppercase"--}}
                        {{--                                               data-toggle="dropdown">{{$category->name}}</a>--}}
                        {{--                                            <span class="fas fa-angle-right text-dark"></span>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="d-lg-none d-flex justify-content-between align-items-center"--}}
                        {{--                                             data-toggle="collapse" data-target="#collapseMainItem-{{$category->id}}">--}}
                        {{--                                            <a class="nav-link text-dark text-uppercase">{{$category->name}}</a>--}}
                        {{--                                            <span class="fas fa-angle-right text-dark"></span>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div id="collapseMainItem-{{$category->id}}"--}}
                        {{--                                             class="collapse dropdown-menu rounded-0 border-0 outline-0 shadow py-0">--}}
                        {{--                                            <ul id="collpaseSubItem-{{$category->id}}"--}}
                        {{--                                                class="collapse d-flex flex-wrap flex-column justify-content-between align-items-center list-unstyled">--}}
                        {{--                                                <li class="nav-item">--}}
                        {{--                                                    <a href="#" class="nav-link text-dark text-uppercase">{{$category->name}} ABC</a>--}}
                        {{--                                                </li>--}}
                        {{--                                                <li class="nav-item">--}}
                        {{--                                                    <a href="#" class="nav-link text-dark">{{$category->name}} ABC</a>--}}
                        {{--                                                </li>--}}
                        {{--                                                <li class="nav-item">--}}
                        {{--                                                    <a href="#" class="nav-link text-dark">{{$category->name}} ABC</a>--}}
                        {{--                                                </li>--}}
                        {{--                                            </ul>--}}
                        {{--                                        </div>--}}
                        {{--                                    </li>--}}
                        {{--                                @endforeach--}}
                        {{--                            </ul>--}}
                        {{--                        </li>--}}
                        <li class="nav-item px-2 d-md-none d-block"><a class="nav-link text-white"
                                                                       href="{{route("products")}}">SẢN PHẨM</a></li>
                        <li class="nav-item px-2 dropdown megamenu d-md-block d-none">
                            <a id="megamneu" href="" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="true"
                               class="nav-link text-white dropdown-toggle font-weight-bold text-uppercase">SẢN
                                PHẨM</a>
                            <div aria-labelledby="megamneu" class="dropdown-menu border-0 p-0 m-0 ">
                                <div class=" d-block bg-main">
                                    <div class="row rounded-0 m-0 shadow-sm">
                                        <div class="col-12">
                                            <div class="p-lg-4">
                                                <div class="row m-0">
                                                    @foreach($LOCAL_CATEGORIES as $category)
                                                        <div
                                                            class="col-lg-3 col-md-4 col-sm-6 p-3">
                                                            <h6 class="font-weight-bold text-uppercase text-white">
                                                                <div class="btn bg-white text-main w-100">
                                                                    @if(!$category->hasSub())
                                                                        <a class="text-main"
                                                                           href="{{route("products",$category->id)}}">
                                                                            {{$category->name}}
                                                                        </a>
                                                                    @else
                                                                        {{$category->name}}
                                                                    @endif
                                                                </div>
                                                            </h6>
                                                            <ul class="list-unstyled">
                                                                @if($category->hasSub())
                                                                    @foreach($category->SubCategories()->get() as $sub)
                                                                        <li class="nav-item ">
                                                                            @if(!$sub->hasSub())
                                                                                <a href="#"
                                                                                   class="nav-link pb-0 text-white text-uppercase">
                                                                                    {{$sub->name}}</a>
                                                                            @else
                                                                                <a data-toggle="collapse"
                                                                                   class="nav-link pb-0 text-white text-uppercase"
                                                                                   href="#collapse-{{$sub->id}}"
                                                                                   role="button"
                                                                                   aria-expanded="false"
                                                                                   aria-controls="collapseExample">
                                                                                    <i class="fas fa-plus-square"></i>
                                                                                    {{$sub->name}}
                                                                                </a>
                                                                                <div class="collapse"
                                                                                     id="collapse-{{$sub->id}}">
                                                                                    @if($sub->hasSub())
                                                                                        @foreach($sub->SubCategories()->get() as $sub2)
                                                                                            <a href="#"
                                                                                               class="nav-link pb-0 text-white text-uppercase">
                                                                                                <i class="ml-3 fas fa-minus-square"></i>
                                                                                                {{$sub2->name}}</a>
                                                                                        @endforeach
                                                                                    @endif
                                                                                </div>
                                                                            @endif
                                                                        </li>
                                                                    @endforeach
                                                                @endif

                                                            </ul>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item px-2 py-md-0 py-2"><a href="{{route("structs")}}"
                                                                  class="nav-link text-white">CÔNG TRÌNH TIÊU BIỂU</a>
                        </li>
                        {{--                        <li class="nav-item px-2 py-md-0 py-2"><a href="#" class="nav-link text-white">CÔNG TRÌNH TIÊU--}}
                        {{--                                BIỂU</a></li>--}}
                        <li class="nav-item px-2 py-md-0 py-2"><a href="{{route("posts")}}"
                                                                  class="nav-link text-white">TIN TỨC</a></li>
                        <li class="nav-item px-2 py-md-0 py-2"><a href="{{route("contact")}}"
                                                                  class="nav-link text-white">LIÊN HỆ</a></li>
                        {{--                        @if(backpack_auth()->check())--}}
                        {{--                            <li class="nav-item dropdown px-2 py-md-0 py-2 text-uppercase text-white">--}}
                        {{--                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"--}}
                        {{--                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                        {{--                                    {{backpack_user()->name}}--}}
                        {{--                                </a>--}}
                        {{--                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                        {{--                                    @if(backpack_user()->role==0)--}}
                        {{--                                        <a class="dropdown-item" href="{{backpack_url("dashboard")}}">BẢNG ĐIỀU KHIỂN--}}
                        {{--                                            (ADMIN)</a>--}}
                        {{--                                    @endif--}}
                        {{--                                    <a class="dropdown-item" href="{{route("profile")}}">THÔNG TIN & LỊCH SỬ</a>--}}
                        {{--                                    <a class="dropdown-item" href="{{route("client.cart")}}">GIỎ HÀNG</a>--}}
                        {{--                                    <a class="dropdown-item" href="{{route("client.logout")}}">ĐĂNG XUẤT</a>--}}
                        {{--                                </div>--}}
                        {{--                            </li>--}}
                        {{--                        @else--}}
                        {{--                            <li class="nav-item px-2 py-md-0 py-2"><a href="{{route("client.login")}}"--}}
                        {{--                                                                      class="nav-link text-white">ĐĂNG NHẬP</a></li>--}}
                        {{--                        @endif--}}
                        <li class="nav-item px-2 py-md-0 py-2">
                            <div class="d-block d-md-none">
                                <input type="text" class="form-control search" placeholder="Tìm kiếm tất cả ở đây">
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- end main nav -->
    <!-- start header banner -->
</header>
@yield("content")
<footer class="bg-main container-fluid">
    <div class="container m-auto py-3 pt-5">
        {{--        <div class="d-flex justify-content-center align-items-center">--}}
        {{--            <img src="{{asset("assets/images/logo.png")}}" class="img-fluid" alt="">--}}
        {{--        </div>--}}
        {{--        <p class="text-center text-white my-3">--}}
        {{--            Doanh nghiệp đồ đồng Điệp Oanh là một trong những đơn vị đúc đồng và chế tác đồ đồng lớn của làng nghề tại--}}
        {{--            TT.Lâm - Ý Yên - Nam Định. Cơ sở sản xuất gồm ba phân xưởng chính cùng nhiều xưởng vệ tinh, Sở hữu một đội--}}
        {{--            ngũ các thợ giỏi và nghệ nhân xuất sắc, kinh nghiệm lâu năm Chúng tôi đã sản xuất hàng trăm loại sản phẩm--}}
        {{--            bằng đồng với mẫu mã và kích thước đa dạng, phong phú trong đó có các loại đồ thờ cúng,--}}
        {{--        </p>--}}
        <div class="row text-white justify-content-between">
            <div class="col-md-4 col-12">
                <h3 class="font-weight-bold my-2">Đồ đồng Điệp Oanh</h3>
                {{--                <h5 class="text-center text-warning">Hệ thống showroom</h5>--}}
                <div class="text-white">GPĐKKD: 600662679, cấp ngày 08/10/2009</div>
                <div class="text-white mb-2">Nơi cấp: Sở KH và Đầu Tư tỉnh Nam Định</div>
                <div class="text-white">Điện thoại : {{$SETTING["hotline"]}}</div>
                <div class="text-white mb-2">Email : {{$SETTING["email"]}}</div>
                <div class="text-white ">Địa chỉ : {{$SETTING["address"]}}</div>
                <div class="text-white ">Xưởng sản xuất: Khu A – Thị Trấn Lâm – Ý Yên – Nam Định</div>

            </div>
            <div class="col-md-2 col-12">
                <h3 class="font-weight-bold my-2">Về chúng tôi</h3>
                <div class="text-white">Thông tin liên hệ</div>
                <div class="text-white ">Cam kết chất lượng</div>
                <div class="text-white ">Lời giới thiệu</div>
            </div>
            <div class="col-md-2 col-12">
                <h3 class="font-weight-bold my-2">Điều khoản</h3>
                @if(isset($PAGES))
                    @foreach($PAGES as $page)
                        <div class="text-white">
                            <a class="text-white" href="{{route("fix-page",$page->slug)}}">{{$page->name}}</a>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="col-md-4 col-12">
                <h3 class="font-weight-bold my-2">Google Map</h3>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3741.671712919712!2d106.01890000000002!3d20.313851200000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313677befa87199f%3A0x21302beaea6d1e32!2zxJDDumMgxJDhu5NuZyDEkGnhu4dwIE9hbmggLSDEkOG7kyDEkOG7k25nIEtodSBW4buxYyDDnSBZw6pu!5e0!3m2!1svi!2s!4v1661074989789!5m2!1svi!2s"
                    width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="row py-3">
            <div class="col text-center">
                <img src="{{asset("assets/images/good_projects_stiker.png")}}" class="img-fluid" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h5 class="text-center text-warning">Kết nối với chúng tôi</h5>
                <ul class="d-flex justify-content-center align-items-center list-unstyled my-3">
                    <li>
                        <span class="fa-stack">
                            <i class="fas fa-circle text-white fa-stack-2x"></i>
                            <i class="fab fa-facebook text-dark fa-stack-1x fa-inverse"></i>
                        </span>
                    </li>
                    <li>
                        <span class="fa-stack">
                            <i class="fas fa-circle text-white fa-stack-2x"></i>
                            <i class="fab fa-youtube text-dark  fa-stack-1x fa-inverse"></i>
                        </span>
                    </li>
                    <li>
                        <span class="fa-stack">
                            <i class="fas fa-circle text-white fa-stack-2x"></i>
                            <i class="fab fa-linkedin text-dark fa-stack-1x fa-inverse"></i>
                        </span>
                    </li>
                    <li>
                        <span class="fa-stack">
                            <i class="fas fa-circle text-white fa-stack-2x"></i>
                            <i class="fab fa-instagram text-dark fa-stack-1x fa-inverse"></i>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-footer py-3">
        <h6 class="text-center text-white ">Copyright 2006 - 2022 All Rights Reserved.Do Dong Diep Oanh</h6>
    </div>
</footer>
<a id="back-top-top" class="d-flex align-items-center">
    <i class="fas fa-arrow-up w-100 fa-2x text-white "></i>
</a>
<style>
    #back-top-top {
        display: inline-block;
        background-color: #FF9800;
        width: 50px;
        height: 50px;
        text-align: center;
        border-radius: 4px;
        position: fixed;
        bottom: 30px;
        left: 30px;
        transition: background-color .3s,
        opacity .5s, visibility .5s;
        opacity: 0;
        visibility: hidden;
        z-index: 1000;
    }

    #back-top-top:hover {
        cursor: pointer;
        background-color: #333;
        text-decoration: none;
    }

    #back-top-top:active {
        background-color: #555;
    }

    #back-top-top.show {
        opacity: 1;
        visibility: visible;
    }

    /* Styles for the content section */

    .content {
        width: 77%;
        margin: 50px auto;
        font-family: 'Merriweather', serif;
        font-size: 17px;
        color: #6c767a;
        line-height: 1.9;
    }

    @media (min-width: 500px) {
        .content {
            width: 43%;
        }

        #button {
            margin: 30px;
        }
    }

    .content h1 {
        margin-bottom: -10px;
        color: #03a9f4;
        line-height: 1.5;
    }

    .content h3 {
        font-style: italic;
        color: #96a2a7;
    }
</style>
<script src="{{asset("assets/js/jquery.slim.min.js")}}"></script>
<script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("assets/js/owl.carousel.min.js")}}"></script>
<script src="{{asset("assets/js/search.min.js")}}"></script>
<script src="{{asset("assets/js/custom.js")}}"></script>
<script>
    $(document).on('click', '.dropdown-menu', function (e) {
        e.stopPropagation();
    });
    var btn = $('#back-top-top');

    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({scrollTop: 0}, '300');
    });
</script>
@include("components.social-fix")
<script>
    jQuery(document).ready(function ($) {
        var engine = new Bloodhound({
            remote: {
                url: '{{route("search")}}?q=%QUERY%',
                wildcard: '%QUERY%'
            },
            datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
            queryTokenizer: Bloodhound.tokenizers.whitespace
        });

        $(".search").typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            source: engine.ttAdapter(),
            name: 'usersList',
            templates: {
                empty: [
                    '<div class="list-group search-results-dropdown"><div class="list-group-item">Không có kết quả phù hợp.</div></div>'
                ],
                header: [
                    '<div class="list-group search-results-dropdown">'
                ],
                suggestion: function (data) {
                    return '<a href="{{url("san-pham")}}/' + data.slug + '" class="list-group-item">' + data.name + '</a>'
                }
            }
        });
    });
</script>
@yield("include-js")
@yield("js")
</body>
</html>
