@extends("layouts.client")
@section("content")
    <section id="slider">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Số lượng slide -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Nội dung slide -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/banner.jpg" class="img-responsive img-slide-1" alt="Image">
                    <img src="img/bannermobile.png" class="img-responsive img-slide-2" alt="Image">
                </div>
                <div class="item">
                    <img src="img/banner.jpg" class="img-responsive img-slide-1" alt="Image">
                    <img src="img/bannermobile.png" class="img-responsive img-slide-2" alt="Image">
                </div>
                <div class="item">
                    <img src="img/banner.jpg" class="img-responsive img-slide-1" alt="Image">
                    <img src="img/bannermobile.png" class="img-responsive img-slide-2" alt="Image">
                </div>
            </div>

            <!-- Điều khiển trái phải -->
        </div>
    </section>

    <section id="tranhauyenthe">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text">
                    <h1>Trần Hậu Yên Thế</h1>
                    <h2>Dành trọn tình yêu tha thiết với linh vật Nghê Việt Nam</h2>
                    <p>Giảng viên, họa sĩ, tiến sĩ Trần Hậu Yên Thế công tác tại Trường Đại học Mỹ thuật Việt Nam. Ông
                        là tác giả của những cuốn sách nghiên cứu mỹ thuật, di sản văn hóa, như: "Dịch đồ-cách tiếp cận
                        từ thị giác", "Đồ án trang trí mỹ thuật ở đền Vua Đinh-Lê", "Song xưa phố cũ"... Ông được giải
                        thưởng Bùi Xuân Phái-Vì tình yêu Hà Nội năm 2014 cho cuốn "Song xưa phố cũ". Xem cuốn sách này,
                        người ta phần nào hiểu được tính cách ông, cái tính cách có “cái tôi” hơi nhiều.<br>
                        Ông như người chịu ơn đất này. Anh trả cái ơn đó bằng một tình yêu tha thiết. Và ông không thể
                        chịu nổi, không thể chấp nhận bất cứ thứ gì làm xấu đi thành phố ông yêu quý. Ông rong ruổi khắp
                        các con phố, ngõ nhỏ của Hà Nội để chụp ảnh, ghi chép, phác họa hình ảnh Hà Nội. </p>
                    <a href="tranhauyenthe.html" title="">
                        <button type="button" class="btn btn-default">Xem thêm</button>
                    </a>
                </div>

                <div class="col-md-6 image">
                    <img src="img/yenthe.png" class="img-responsive" alt="Image">
                </div>
            </div>
        </div>
    </section>

    <section id="phanloai">
        <div class="container">
            <h1 class="text-center" style="margin-bottom: 0px;">Phân Loại</h1>
            <p class="text-center">Dù nghê có muôn hình vạn trạng và sự định danh chỉ mang tính tương đối, dưới đây là
                một số dạng nghê chính</p>
            <img src="img/hoatiet.png" alt="">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6 nghe">
                    <img src="img/sutunghe.png" class="img-responsive" alt="Image">
                    <h2 class="text-center">Sư Tử Nghê</h2>
                    <div class="overlay">
                        <a href="" title=""><img src="img/sutungheye.png" class="img-responsive" alt="Image"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 nghe">
                    <img src="img/longnghe.png" class="img-responsive" alt="Image">
                    <h2 class="text-center">Long Nghê</h2>
                    <div class="overlay">
                        <a href="" title=""><img src="img/longngheye.png" class="img-responsive" alt="Image"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 nghe">
                    <img src="img/kylannghe.png" class="img-responsive" alt="Image">
                    <h2 class="text-center">Kỳ Lân Nghê</h2>
                    <div class="overlay">
                        <a href="" title=""><img src="img/kylanngheye.png" class="img-responsive" alt="Image"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 nghe">
                    <img src="img/khuyennghe.png" class="img-responsive" alt="Image">
                    <h2 class="text-center">Khuyển Nghê</h2>
                    <div class="overlay">
                        <a href="" title=""><img src="img/khuyenngheye.png" class="img-responsive" alt="Image"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="hinhthai">
        <div class="container">
            <h1 class="text-center title">Hình Thái Nghê</h1>
            <p class="text-center para">Nghê là linh vật hư cấu lại được sáng tạo qua bàn tay và sự sáng tạo của các
                nghệ sĩ dân gian<br>nên nghê vô cùng phong phú và đa dạng</p>
            <img src="img/hoatiet.png" style="margin: auto;" class="img-responsive" alt="Image">
            <div class="row" style="margin-top: 30px;">
                <div class="col-md-2 col-xs-12">
                    <div class="row">
                        <div class="col-md-12 col-xs-4 one">
                            <img src="img/daunghe.png" class="img-responsive" alt="Image">
                            <div class="overlay">
                                <a href="hinhthai.html" title=""><img src="img/daungheye.png" class="img-responsive"
                                                                      alt="Image"></a>
                            </div>
                            <h4>Đầu nghê</h4>
                        </div>
                        <div class="col-md-12 col-xs-4 two">
                            <img src="img/rangnghe.png" class="img-responsive" alt="Image">
                            <div class="overlay">
                                <a href="hinhthai.html" title=""><img src="img/rangngheye.png" class="img-responsive"
                                                                      alt="Image"></a>
                            </div>
                            <h4>Răng nghê</h4>
                        </div>
                        <div class="col-md-12 col-xs-4 two">
                            <img src="img/tainghe.png" class="img-responsive" alt="Image">
                            <div class="overlay">
                                <a href="hinhthai.html" title=""><img src="img/taingheye.png" class="img-responsive"
                                                                      alt="Image"></a>
                            </div>
                            <h4>Tai nghê</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-xs-12">
                    <a href="hinhthai.html" title=""><img src="img/nghe.png" class="img-responsive" alt="Image"></a>
                </div>
                <div class="col-md-2 col-xs-12">
                    <div class="row">
                        <div class="col-md-12 col-xs-4 one">
                            <img src="img/raunghe.png" class="img-responsive pic1" alt="Image">
                            <div class="overlay">
                                <a href="hinhthai.html" title=""><img src="img/raungheye.png" class="img-responsive"
                                                                      alt="Image"></a>
                            </div>
                            <h4>Râu nghê</h4>
                        </div>
                        <div class="col-md-12 col-xs-4 two">
                            <img src="img/lungnghe.png" class="img-responsive" alt="Image">
                            <div class="overlay">
                                <a href="hinhthai.html" title=""><img src="img/lungngheye.png" class="img-responsive"
                                                                      alt="Image"></a>
                            </div>
                            <h4>Lưng nghê</h4>
                        </div>
                        <div class="col-md-12 col-xs-4 two">
                            <img src="img/duoinghe.png" class="img-responsive" alt="Image">
                            <div class="overlay">
                                <a href="hinhthai.html" title=""><img src="img/duoingheye.png" class="img-responsive"
                                                                      alt="Image"></a>
                            </div>
                            <h4>Đuôi nghê</h4>
                        </div>
                    </div>
                </div>
            </div>
            <a href="hinhthai.html" title="">
                <button type="button" class="btn btn-default">Xem thêm</button>
            </a>
        </div>
    </section>
    <section id="sanpham">
        <div class="container">
            <h1 class="text-center title" style="color: #e8c152;">Sản phẩm ứng dụng</h1>
            <p class="text-center para" style="color: white;">Linh vật Nghê được nghiên cứu và sáng tạo các sản phẩm
                truyền thống. Đây là các sản phẩm thủ công mỹ nghệ rất độc đáo, đòi hỏi kỹ nghệ cao.
            </p>
            <img src="img/hoatiet2.png" style="margin: auto;" class="hoa img-responsive" alt="Image">
            <div id="carousel-id" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-md-3 col-xs-6">
                                <div class="product">
                                    <div class="product-image">
                                        <a href="" title="">
                                            <img src="img/sp1.png" class="img-responsive" alt="Image">
                                        </a>
                                        <ul class="rating">
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="far fa-star disable"></li>
                                            <li class="far fa-star disable"></li>
                                        </ul>
                                        <ul class="social">
                                            <li class="mua">
                                                <img src="img/searchsp.png" class="img-responsive mo" alt="Image">
                                                <div class="overlay">
                                                    <a href="giohang.html" title=""><img src="img/searchspye.png"
                                                                                         class="img-responsive"
                                                                                         alt="Image"></a>
                                                </div>
                                            </li>
                                            <li class="mua">
                                                <img src="img/cart.png" class="img-responsive" alt="Image">
                                                <div class="overlay">
                                                    <a href="" title=""><img src="img/cartye.png" class="img-responsive"
                                                                             alt="Image"></a>
                                                </div>
                                            </li>
                                            <li class="mua">
                                                <img src="img/tim.png" class="img-responsive" alt="Image">
                                                <div class="overlay">
                                                    <a href="" title=""><img src="img/timye.png" class="img-responsive"
                                                                             alt="Image"></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <h5>Khuyển nghê</h5>
                                        <p>Iphone XS Max</p>
                                        <h4>1.860.000đ</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="product">
                                    <div class="product-image">
                                        <a href="" title="">
                                            <img src="img/sp1.png" class="img-responsive" alt="Image">
                                        </a>
                                        <ul class="rating">
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="far fa-star disable"></li>
                                            <li class="far fa-star disable"></li>
                                        </ul>
                                        <ul class="social">
                                            <li class="mua">
                                                <img src="img/searchsp.png" class="img-responsive mo" alt="Image">
                                                <div class="overlay">
                                                    <a href="giohang.html" title=""><img src="img/searchspye.png"
                                                                                         class="img-responsive"
                                                                                         alt="Image"></a>
                                                </div>
                                            </li>
                                            <li class="mua">
                                                <img src="img/cart.png" class="img-responsive" alt="Image">
                                                <div class="overlay">
                                                    <a href="" title=""><img src="img/cartye.png" class="img-responsive"
                                                                             alt="Image"></a>
                                                </div>
                                            </li>
                                            <li class="mua">
                                                <img src="img/tim.png" class="img-responsive" alt="Image">
                                                <div class="overlay">
                                                    <a href="" title=""><img src="img/timye.png" class="img-responsive"
                                                                             alt="Image"></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <h5>Khuyển nghê</h5>
                                        <p>Iphone XS Max</p>
                                        <h4>1.860.000đ</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="product">
                                    <div class="product-image">
                                        <a href="" title="">
                                            <img src="img/sp1.png" class="img-responsive" alt="Image">
                                        </a>
                                        <ul class="rating">
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="far fa-star disable"></li>
                                            <li class="far fa-star disable"></li>
                                        </ul>
                                        <ul class="social">
                                            <li class="mua">
                                                <img src="img/searchsp.png" class="img-responsive mo" alt="Image">
                                                <div class="overlay">
                                                    <a href="giohang.html" title=""><img src="img/searchspye.png"
                                                                                         class="img-responsive"
                                                                                         alt="Image"></a>
                                                </div>
                                            </li>
                                            <li class="mua">
                                                <img src="img/cart.png" class="img-responsive" alt="Image">
                                                <div class="overlay">
                                                    <a href="" title=""><img src="img/cartye.png" class="img-responsive"
                                                                             alt="Image"></a>
                                                </div>
                                            </li>
                                            <li class="mua">
                                                <img src="img/tim.png" class="img-responsive" alt="Image">
                                                <div class="overlay">
                                                    <a href="" title=""><img src="img/timye.png" class="img-responsive"
                                                                             alt="Image"></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <h5>Khuyển nghê</h5>
                                        <p>Iphone XS Max</p>
                                        <h4>1.860.000đ</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="product">
                                    <div class="product-image">
                                        <a href="" title="">
                                            <img src="img/sp1.png" class="img-responsive" alt="Image">
                                        </a>
                                        <ul class="rating">
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="far fa-star disable"></li>
                                            <li class="far fa-star disable"></li>
                                        </ul>
                                        <ul class="social">
                                            <li class="mua">
                                                <img src="img/searchsp.png" class="img-responsive mo" alt="Image">
                                                <div class="overlay">
                                                    <a href="giohang.html" title=""><img src="img/searchspye.png"
                                                                                         class="img-responsive"
                                                                                         alt="Image"></a>
                                                </div>
                                            </li>
                                            <li class="mua">
                                                <img src="img/cart.png" class="img-responsive" alt="Image">
                                                <div class="overlay">
                                                    <a href="" title=""><img src="img/cartye.png" class="img-responsive"
                                                                             alt="Image"></a>
                                                </div>
                                            </li>
                                            <li class="mua">
                                                <img src="img/tim.png" class="img-responsive" alt="Image">
                                                <div class="overlay">
                                                    <a href="" title=""><img src="img/timye.png" class="img-responsive"
                                                                             alt="Image"></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <h5>Khuyển nghê</h5>
                                        <p>Iphone XS Max</p>
                                        <h4>1.860.000đ</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-3 col-xs-6">
                                <div class="product">
                                    <div class="product-image">
                                        <a href="" title="">
                                            <img src="img/sp1.png" class="img-responsive" alt="Image">
                                        </a>
                                        <ul class="rating">
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="far fa-star disable"></li>
                                            <li class="far fa-star disable"></li>
                                        </ul>
                                        <ul class="social">
                                            <li class="mua">
                                                <img src="img/searchsp.png" class="img-responsive mo" alt="Image">
                                                <div class="overlay">
                                                    <a href="giohang.html" title=""><img src="img/searchspye.png"
                                                                                         class="img-responsive"
                                                                                         alt="Image"></a>
                                                </div>
                                            </li>
                                            <li class="mua">
                                                <img src="img/cart.png" class="img-responsive" alt="Image">
                                                <div class="overlay">
                                                    <a href="" title=""><img src="img/cartye.png" class="img-responsive"
                                                                             alt="Image"></a>
                                                </div>
                                            </li>
                                            <li class="mua">
                                                <img src="img/tim.png" class="img-responsive" alt="Image">
                                                <div class="overlay">
                                                    <a href="" title=""><img src="img/timye.png" class="img-responsive"
                                                                             alt="Image"></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <h5>Khuyển nghê</h5>
                                        <p>Iphone XS Max</p>
                                        <h4>1.860.000đ</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="product">
                                    <div class="product-image">
                                        <a href="" title="">
                                            <img src="img/sp1.png" class="img-responsive" alt="Image">
                                        </a>
                                        <ul class="rating">
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="far fa-star disable"></li>
                                            <li class="far fa-star disable"></li>
                                        </ul>
                                        <ul class="social">
                                            <li class="mua">
                                                <img src="img/searchsp.png" class="img-responsive mo" alt="Image">
                                                <div class="overlay">
                                                    <a href="giohang.html" title=""><img src="img/searchspye.png"
                                                                                         class="img-responsive"
                                                                                         alt="Image"></a>
                                                </div>
                                            </li>
                                            <li class="mua">
                                                <img src="img/cart.png" class="img-responsive" alt="Image">
                                                <div class="overlay">
                                                    <a href="" title=""><img src="img/cartye.png" class="img-responsive"
                                                                             alt="Image"></a>
                                                </div>
                                            </li>
                                            <li class="mua">
                                                <img src="img/tim.png" class="img-responsive" alt="Image">
                                                <div class="overlay">
                                                    <a href="" title=""><img src="img/timye.png" class="img-responsive"
                                                                             alt="Image"></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <h5>Khuyển nghê</h5>
                                        <p>Iphone XS Max</p>
                                        <h4>1.860.000đ</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="product">
                                    <div class="product-image">
                                        <a href="" title="">
                                            <img src="img/sp1.png" class="img-responsive" alt="Image">
                                        </a>
                                        <ul class="rating">
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="far fa-star disable"></li>
                                            <li class="far fa-star disable"></li>
                                        </ul>
                                        <ul class="social">
                                            <li class="mua">
                                                <img src="img/searchsp.png" class="img-responsive mo" alt="Image">
                                                <div class="overlay">
                                                    <a href="giohang.html" title=""><img src="img/searchspye.png"
                                                                                         class="img-responsive"
                                                                                         alt="Image"></a>
                                                </div>
                                            </li>
                                            <li class="mua">
                                                <img src="img/cart.png" class="img-responsive" alt="Image">
                                                <div class="overlay">
                                                    <a href="" title=""><img src="img/cartye.png" class="img-responsive"
                                                                             alt="Image"></a>
                                                </div>
                                            </li>
                                            <li class="mua">
                                                <img src="img/tim.png" class="img-responsive" alt="Image">
                                                <div class="overlay">
                                                    <a href="" title=""><img src="img/timye.png" class="img-responsive"
                                                                             alt="Image"></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <h5>Khuyển nghê</h5>
                                        <p>Iphone XS Max</p>
                                        <h4>1.860.000đ</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="product">
                                    <div class="product-image">
                                        <a href="" title="">
                                            <img src="img/sp1.png" class="img-responsive" alt="Image">
                                        </a>
                                        <ul class="rating">
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="far fa-star disable"></li>
                                            <li class="far fa-star disable"></li>
                                        </ul>
                                        <ul class="social">
                                            <li class="mua">
                                                <img src="img/searchsp.png" class="img-responsive mo" alt="Image">
                                                <div class="overlay">
                                                    <a href="giohang.html" title=""><img src="img/searchspye.png"
                                                                                         class="img-responsive"
                                                                                         alt="Image"></a>
                                                </div>
                                            </li>
                                            <li class="mua">
                                                <img src="img/cart.png" class="img-responsive" alt="Image">
                                                <div class="overlay">
                                                    <a href="" title=""><img src="img/cartye.png" class="img-responsive"
                                                                             alt="Image"></a>
                                                </div>
                                            </li>
                                            <li class="mua">
                                                <img src="img/tim.png" class="img-responsive" alt="Image">
                                                <div class="overlay">
                                                    <a href="" title=""><img src="img/timye.png" class="img-responsive"
                                                                             alt="Image"></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <h5>Khuyển nghê</h5>
                                        <p>Iphone XS Max</p>
                                        <h4>1.860.000đ</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-id" data-slide="prev"><i
                        class="fas fa-chevron-left"></i></a>
                <a class="right carousel-control" href="#carousel-id" data-slide="next"><i
                        class="fas fa-chevron-right"></i></a>
            </div>

            <a href="sanpham.html" title="">
                <button>Xem thêm</button>
            </a>
        </div>
    </section>
    <section id="tintuc">
        <div class="container">
            <h1 class="text-center title">Tin tức</h1>
            <img src="img/hoatiet.png" style="margin: auto;" class=" hoa img-responsive" alt="Image">
            <div class="row">

                <div class="col-md-8 col-xs-12">
                    <iframe src="https://www.youtube.com/embed/fc9tNzWCnHY" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="col-md-2 col-xs-6">
                    <div class="tren">
                        <div class="box-item">
                            <div class="box-post">
                                <h1 class="post-title">
                                    <a href="chitiettintuc.html">
                                        Phân loại biểu tượng “Con Nghê” trong
                                        văn hóa Việt
                                    </a>
                                </h1>
                            </div>
                            <a href="chitiettintuc.html" title=""><img src="img/new1.png" class="img-responsive"
                                                                       alt="Image"></a>
                        </div>
                    </div>
                    <div class="duoi">
                        <div class="box-item">
                            <div class="box-post">
                                <h1 class="post-title">
                                    <a href="chitiettintuc.html">
                                        Phân loại biểu tượng “Con Nghê” trong
                                        văn hóa Việt
                                    </a>
                                </h1>
                            </div>
                            <a href="chitiettintuc.html" title=""><img src="img/new1.png" class="img-responsive"
                                                                       alt="Image"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-xs-6">
                    <div class="tren">
                        <div class="box-item">
                            <div class="box-post">
                                <h1 class="post-title">
                                    <a href="chitiettintuc.html">
                                        Phân loại biểu tượng “Con Nghê” trong
                                        văn hóa Việt
                                    </a>
                                </h1>
                            </div>
                            <div class="anh">
                                <a href="chitiettintuc.html" title=""><img src="img/new1.png" class="img-responsive"
                                                                           alt="Image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="duoi">
                        <div class="box-item">
                            <div class="box-post">
                                <h1 class="post-title">
                                    <a href="chitiettintuc.html">
                                        Phân loại biểu tượng “Con Nghê” trong
                                        văn hóa Việt
                                    </a>
                                </h1>
                            </div>
                            <a href="chitiettintuc.html" title=""><img src="img/new1.png" class="img-responsive"
                                                                       alt="Image"></a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="tintuc.html" title="">
                <button>Xem thêm</button>
            </a>
        </div>
    </section>
@endsection
