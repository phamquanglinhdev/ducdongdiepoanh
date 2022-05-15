<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>

    <!-- Liên kết css của bootstrap -->
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <!-- Css của mình -->
    <link rel="stylesheet" type="text/css" href="{{asset("css/all.css")}}">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
</head>
<body>

<header id="menu-bar">
    <nav class="navbar navbar-fixed-top navbar-default opaque-navbar" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="DO_AN.html"><img src="{{asset("img/logo1.png")}}" class="img-responsive" alt=""></a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Trang chủ</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Giới thiệu<span class="caret"></span></a>
                        <ul class="dropdown-menu one">
                            <li><a href="gioithieunghe.html" style="margin-top: 5px;">Giới thiệu về linh vật Nghê</a></li>
                            <li><a href="tranhauyenthe.html">Họa sĩ Trần Hậu Yên Thế</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">Phân loại<span class="caret"></span></a>
                        <ul class="dropdown-menu two">
                            <li><a href="phanloai.html" style="margin-top: 5px;">Phân loại linh vật Nghê</a></li>
                            <li><a href="linhvatnghe.html">Linh vật Nghê VR3D</a></li>
                        </ul>
                    </li>

                    <li><a href="hinhthai.html">Hình thái</a></li>
                    <li><a href="sanpham.html">Sản phẩm ứng dụng</a></li>
                    <li><a href="tintuc.html">Tin tức</a></li>
                    <li><a href="lienhe.html">Liên hệ</a></li>
                    <li class="dropdown search">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                        <ul class="dropdown-menu">
                            <form class="navbar-form navbar-left" action="/action_page.php">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </form>
                        </ul>
                    </li>
                    <li>
                        <ul class="social">
                            <li class="fb"><img src="{{"img/fbw.png"}}" alt="" class="img-responsive">
                                <div class="overlay">
                                    <a href="" title=""><img src="{{asset("img/facebook.png")}}" class="img-responsive" alt="Image"></a>
                                </div></li>
                            <li class="fb"><img src="{{asset("img/youtube.png")}}" alt="" class="img-responsive">
                                <div class="overlay">
                                    <a href="" title=""><img src="{{asset("img/youtuye.png")}}" class="img-responsive" alt="Image"></a>
                                </div></li>
                            <li class="fb"><img src="{{asset("img/pinterest.png")}}" alt="" class="img-responsive">
                                <div class="overlay">
                                    <a href="" title=""><img src="{{asset("img/pinye.png")}}" class="img-responsive" alt="Image"></a>
                                </div></li>
                            <li class="fb"><img src="{{asset("img/instagram.png")}}" alt="" class="img-responsive">
                                <div class="overlay">
                                    <a href="" title=""><img src="{{asset("img/instaye.png")}}" class="img-responsive" alt="Image"></a>
                                </div></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
@yield("content")
<section id="footer">
    <div class="container">
        <div class="noidung">
            <img src="{{asset("img/logo2.png")}}" class="img-responsive" alt="Image">
            <p style="margin-top: 15px;">Nghê đích thực là gã linh vật chầu rìa độc đáo nhất trong nghệ thuật cổ truyền của người Việt.
                Gã linh vật bên lề - nghê đã góp phần làm nên một diện mạo tinh thần sống động, lạc quan, bình dânvà thân thuộc cho nghệ thuật người Việt thời Trung đại. Nghê đã gắn bó ân tình với người Việt
                hàng nghìn năm nay. Nhỏ nhắn và khiêm nhường, chất phác và thuần hậu.</p>
            <img src="{{asset("img/hoatiet2.png")}}" class="hoa img-responsive " alt="Image">
        </div>

        <div class="row" style="margin-top: 30px; margin-bottom: 20px;">
            <div class="col-md-4 col-xs-4">
                <h5>Hợp tác và liên kết:</h5>
                <p>La Sonmai <br>Bảo tàng Mỹ thuật Việt Nam <br>Bảo tàng tỉnh Nam Định</p>
            </div>
            <div class="col-md-4 col-xs-4">
                <h5>Liên hệ:</h5>
                <p>Điện thoại: (+84) 388 517 838<br>Email: nghevietnam@contact.com<br>Địa chỉ: 264 Cầu Giấy, Hà Nội </p>
            </div>
            <div class="col-md-4 col-xs-4">
                <h5>Liên hệ với chúng tôi:</h5>
                <ul class="nav navbar-nav social">
                    <li class="fb"><img src="{{asset("img/fbw.png")}}" alt="" class="img-responsive">
                        <div class="overlay">
                            <a href="" title=""><img src="{{asset("img/facebook.png")}}" class="img-responsive" alt="Image"></a>
                        </div></li>
                    <li class="fb one"><img src="{{asset("img/youtube.png")}}" alt="" class="img-responsive">
                        <div class="overlay">
                            <a href="" title=""><img src="{{asset("img/youtuye.png")}}" class="img-responsive" alt="Image"></a>
                        </div></li>
                    <li class="fb"><img src="{{asset("img/pinterest.png")}}" alt="" class="img-responsive">
                        <div class="overlay">
                            <a href="" title=""><img src="{{asset("img/pinye.png")}}" class="img-responsive" alt="Image"></a>
                        </div></li>
                    <li class="fb two"><img src="{{asset("img/instagram.png")}}" alt="" class="img-responsive">
                        <div class="overlay">
                            <a href="" title=""><img src="{{asset("img/instaye.png")}}" class="img-responsive" alt="Image"></a>
                        </div></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copy" style="background-color: #4f0c08">
        <p>&copy;Copyright 2006 - 2019  All Rights Reserved. Dodongoanhdiep.com<p>
    </div>
</section>



<!-- Liên kết js tổng -->
<script src="{{asset("js/jquery.min.js")}}"></script>
<!-- Liên kết js của bootstrap -->
<script src="{{asset("js/bootstrap.min.js")}}"></script>
<script>  $(window).scroll(function() {
        if($(this).scrollTop() > 50)  /*height in pixels when the navbar becomes non opaque*/
        {
            $('.opaque-navbar').addClass('opaque');
        } else {
            $('.opaque-navbar').removeClass('opaque');
        }
    });</script>
</body>
</html>
