<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/custom.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/owl.theme.default.min.css")}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    @yield("css")
</head>
<body>
<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>
<x-zalo-chat></x-zalo-chat>

<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "104416362062991");
    chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v13.0'
        });
    };
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<header>
    <!-- top banner -->
    <div class="banner-wrap">
        <div class="container mx-auto">
            <div class="row align-items-center">
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 py-2 text-center px-1 px-sm-0">
                    <img src="{{asset("assets/images/logo.png")}}" alt="logo" class="header-logo img-fluid">
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 w-100">
                    <div class="row d-flex justify-content-around align-items-center h-100">
                        <div class="d-none d-md-block col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <form action="">
                                <input type="search" name="" class="px-2 py-1 border-0 rounded w-100"
                                       id="header-search-input">
                            </form>
                        </div>
                        <div class="col-12 col-sm-12 pb-sm-0 col-md-6 col-lg-6 col-xl-6">
                            <ul class="d-flex list-social-icon justify-content-end px-2 justify-content-sm-end justify-content-md-center align-items-center list-unstyled">
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
            <nav class="navbar navbar-expand-md navbar-dark px-5 py-2 py-md-2" id="main-nav">

                <i class="d-block d-md-none fas fa-times text-dark" id="toggler-close-btn" data-hide="1"></i>

                <div class="sidebar w-100" id="main-sidebar">

                    <ul class="navbar-nav d-block d-md-flex justify-content-around align-items-center  w-100 py-2">
                        <li class="nav-item px-2 py-md-0 py-2 d-block d-md-none">
                            <img src="{{asset("assets/images/logo.png")}}" class="img-fluid" alt="">
                        </li>
                        <li class="nav-item px-2 py-md-0 py-2"><a href="#" class="nav-link text-white">TRANG CHỦ</a>
                        </li>
                        <li class="nav-item px-2 py-md-0 py-2"><a href="#" class="nav-link text-white">GIỚI THIỆU</a>
                        </li>
                        <li class="nav-item px-2 py-md-0 py-2"><a href="#" class="nav-link text-white">NGHÊ NHÂN</a>
                        </li>
                        <li class="nav-item px-2 py-md-0 py-2"><a href="#" class="nav-link text-white">SẢN PHẨM</a></li>
                        <li class="nav-item px-2 py-md-0 py-2"><a href="#" class="nav-link text-white">CÔNG TRÌNH TIÊU
                                BIỂU</a></li>
                        <li class="nav-item px-2 py-md-0 py-2"><a href="#" class="nav-link text-white">TIN TỨC</a></li>
                        <li class="nav-item px-2 py-md-0 py-2"><a href="#" class="nav-link text-white">LIÊN HỆ</a></li>
                        <li class="nav-item px-2 py-md-0 py-2">
                            <div class="d-block d-md-none">
                                <form action="">
                                    <input type="search" name="" class="px-2 border-0 rounded w-100"
                                           id="header-search-input">
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- end main nav -->
    <!-- start header banner -->
    <section class="container-fluid">
        <img src="{{asset("assets/images/header_banner.jpg")}}" class="img-fluid" alt="">
    </section>
</header>
@yield("content")
<footer class="bg-main container-fluid">
    <div class="container m-auto py-3 px-5">
        <div class="d-flex justify-content-center align-items-center">
            <img src="{{asset("assets/images/logo.png")}}" class="img-fluid" alt="">
        </div>
        <p class="text-center small  text-white my-3">
            Doanh nghiệp đúc đồng Điệp Oanh là một trong những đơn vị đúc đồng và chế tác đồ đồng lớn của làng nghề tại
            TT.Lâm - Ý Yên - Nam Định. Cơ sở sản xuất gồm ba phân xưởng chính cùng nhiều xưởng vệ tinh, Sở hữu một đội
            ngũ các thợ giỏi và nghệ nhân xuất sắc, kinh nghiệm lâu năm Chúng tôi đã sản xuất hàng trăm loại sản phẩm
            bằng đồng với mẫu mã và kích thước đa dạng, phong phú trong đó có các loại đồ thờ cúng,
        </p>
        <div class="row">
            <div class="col">
                <h5 class="text-center text-warning">Hệ thống showroom</h5>
                <h6 class="text-center text-white small py-2">Điện thoại : (+84) 376658437</h6>
                <h6 class="text-center text-white small">Email : đucongdiepoanh@gmail.com</h6>
            </div>
            <div class="col text-center">
                <h5 class="text-center text-warning">Liên hệ</h5>
                <h6 class="text-center text-white py-2 small">Điện thoại : (+84) 376658437</h6>
                <h6 class="text-center text-white small">Địa chỉ : 264 Cầu Giấy , Hà Nội</h6>
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
        <h6 class="text-center text-white small">Copyright 2006 - 2019 All Rights Reserved.Duc Dong Diep Oanh</h6>
    </div>
</footer>
<a id="back-top-top" class="d-flex align-items-center">
    <i class="fas fa-arrow-up w-100 fa-2x text-white "></i>
</a>
<style>
    .fb_dialog_content iframe{
        right: 25px!important;
    }
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
<script src="{{asset("assets/js/custom.js")}}"></script>
<script>
    var btn = $('#back-top-top');

    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
    });
</script>
@yield("js")
</body>
</html>
