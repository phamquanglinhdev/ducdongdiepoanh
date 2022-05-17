@php
    $title = $post->title;
@endphp
@extends("layouts.client")
@section("content")
    <style>

        /*news */
        .news-responsive-text-p {
            font-size: 32px !important;
        }

        .news-responsive-text-title {
            font-size: 1.8rem !important;
        }

        .main-content {
            background-image: url("{{asset("assets/images/news_back.png")}}");
            background-size: cover;
        }

        /*end news*/
    </style>
    <section class="main-content">
        <div class="container p-3 p-md-5 m-auto">
            <div class="row">
                <div class="col-12 col-lg-9 pr-sm-3">
                    <div class="new-detail">
                        <h4 class="text-main news-responsive-text-title  font-weight-bold">{{$post->title}}</h4>
                        <div class="d-flex justify-content-start ">
                            <i class="far fa-clock"></i>
                            <h6 class="px-2  text-truncate-sm h-100">{{$post->updated_at}}</h6>
                            <ul class="d-flex justify-content-around align-items-center list-unstyled">
                                <li class="px-1">
                                    <span class="fas fa-star  text-warning"></span>
                                </li>
                                <li class="pl-1 px-md-1">
                                    <span class="fas fa-star  text-warning"></span>
                                </li>
                                <li class="pl-1 px-md-1">
                                    <span class="fas fa-star  text-warning"></span>
                                </li>
                                <li class="pl-1 px-md-1">
                                    <span class="fas fa-star  text-warning"></span>
                                </li>
                                <li class="pl-1 px-md-1">
                                    <span class="fas fa-star  text-warning"></span>
                                </li>
                            </ul>
                        </div>
                        <!--main desc-->
                        <div class="main-detail py-4">
                            {!! $post->document !!}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 pl-sm-2">
                    <div class="row  my-3">
                        <div class="col-12">
                            <h5 class="text-main text-sm-center text-md-center  text-lg-left  font-weight-bold">Tin Đọc
                                Nhiều</h5>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-12 px-sm-2 px-md-3 text-center">
                            <hr class="my-3 border-main"/>
                            <a href="#" class="nav-link text-dark">
                                <img src="{{asset("assets/images/new_detail_img_2.jpg")}}"
                                     class="img-fluid rounded-20 my-2"/>
                                <p class="text-truncate-sm  font-weight-500">Nghệ nhân đúc đồng Vũ Duy Điệp:
                                    Kết hợp tinh hoa nghề với khoa ...</p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-12 px-sm-2 px-md-3 text-center">
                            <hr class="my-3 border-main"/>
                            <a href="#" class="nav-link text-dark">
                                <img src="{{asset("assets/images/new_detail_img_2.jpg")}}}"
                                     class="img-fluid rounded-20 my-2"/>
                                <p class="text-truncate-sm  font-weight-500">Nghệ nhân đúc đồng Vũ Duy Điệp:
                                    Kết hợp tinh hoa nghề với khoa ...</p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-12 px-sm-2 px-md-3 text-center">
                            <hr class="my-3 border-main"/>
                            <a href="#" class="nav-link text-dark">
                                <img src="{{asset("assets/images/new_detail_img_2.jpg")}}"
                                     class="img-fluid rounded-20 my-2"/>
                                <p class="text-truncate-sm  font-weight-500">Nghệ nhân đúc đồng Vũ Duy Điệp:
                                    Kết hợp tinh hoa nghề với khoa ...</p>
                            </a>
                        </div>
                    </div>
                    <div class="row  my-3">
                        <div class="col-12">
                            <h5 class="text-main text-sm-center text-md-center text-lg-left   font-weight-bold">Tin Đọc
                                Nhiều</h5>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-12 px-sm-2 px-md-3 text-center">
                            <hr class="my-3 border-main"/>
                            <a href="#" class="nav-link text-dark">
                                <img src="{{asset("assets/images/new_detail_img_2.jpg")}}"
                                     class="img-fluid rounded-20 my-2"/>
                                <p class="text-truncate-sm  font-weight-500">Nghệ nhân đúc đồng Vũ Duy Điệp:
                                    Kết hợp tinh hoa nghề với khoa ...</p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-12 px-sm-2 px-md-3 text-center">
                            <hr class="my-3 border-main"/>
                            <a href="#" class="nav-link text-dark">
                                <img src="{{asset("assets/images/new_detail_img_2.jpg")}}"
                                     class="img-fluid rounded-20 my-2"/>
                                <p class="text-truncate-sm  font-weight-500">Nghệ nhân đúc đồng Vũ Duy Điệp:
                                    Kết hợp tinh hoa nghề với khoa ...</p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-12 px-sm-2 px-md-3 text-center">
                            <hr class="my-3 border-main"/>
                            <a href="#" class="nav-link text-dark">
                                <img src="{{asset("assets/images/new_detail_img_2.jpg")}}"
                                     class="img-fluid rounded-20 my-2"/>
                                <p class="text-truncate-sm  font-weight-500">Nghệ nhân đúc đồng Vũ Duy Điệp:
                                    Kết hợp tinh hoa nghề với khoa ...</p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-12 px-sm-2 px-md-3 text-center">
                            <hr class="my-3 border-main"/>
                            <a href="#" class="nav-link text-dark">
                                <img src="{{asset("assets/images/new_detail_img_2.jpg")}}"
                                     class="img-fluid rounded-20 my-2"/>
                                <p class="text-truncate-sm  font-weight-500">Nghệ nhân đúc đồng Vũ Duy Điệp:
                                    Kết hợp tinh hoa nghề với khoa ...</p>
                            </a>
                        </div>
                    </div>
                    <div class="row  my-3">
                        <div class="col-12">
                            <h5 class="text-main text-sm-center  text-md-center text-lg-left   font-weight-bold">Tin Đọc
                                Nhiều</h5>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-12 px-sm-2 px-md-3 text-center">
                            <hr class="my-3 border-main"/>
                            <a href="#" class="nav-link text-dark">
                                <img src="{{asset("assets/images/new_detail_img_2.jpg")}}"
                                     class="img-fluid rounded-20 my-2"/>
                                <p class="text-truncate-sm  font-weight-500">Nghệ nhân đúc đồng Vũ Duy Điệp:
                                    Kết hợp tinh hoa nghề với khoa ...</p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-12 px-sm-2 px-md-3 text-center">
                            <hr class="my-3 border-main"/>
                            <a href="#" class="nav-link text-dark">
                                <img src="{{asset("assets/images/new_detail_img_2.jpg")}}"
                                     class="img-fluid rounded-20 my-2"/>
                                <p class="text-truncate-sm  font-weight-500">Nghệ nhân đúc đồng Vũ Duy Điệp:
                                    Kết hợp tinh hoa nghề với khoa ...</p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-12 px-sm-2 px-md-3 text-center">
                            <hr class="my-3 border-main"/>
                            <a href="#" class="nav-link text-dark">
                                <img src="{{asset("assets/images/new_detail_img_2.jpg")}}"
                                     class="img-fluid rounded-20 my-2"/>
                                <p class="text-truncate-sm  font-weight-500">Nghệ nhân đúc đồng Vũ Duy Điệp:
                                    Kết hợp tinh hoa nghề với khoa ...</p>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
