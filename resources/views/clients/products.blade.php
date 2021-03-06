@extends("layouts.client")

@section("content")

    <style>
        .slider-score {
            -webkit-appearance: none;
            width: 100%;
            height: 10px;
            background: #d3d3d3;
            outline: none;
            opacity: 0.7;
            -webkit-transition: .2s;
            transition: opacity .2s;
        }

        .slider-score:hover {
            opacity: 1;
        }

        .slider-score::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            background: #580d08;
            cursor: pointer;
        }

        .slider-score::-moz-range-thumb {
            width: 20px;
            height: 20px;
            background: #580d08;
            cursor: pointer;
        }

        .list-type-product input[type="checkbox"] {
            appearance: none;
            -webkit-appearance: none;
            width: 16px;
            height: 16px;
            border-radius: 2px;
            border: 1px solid #661013;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .list-type-product input[type="checkbox"]:after {
            font-family: 'Font Awesome 5 Free';
            content: "\f00c";
            font-weight: 900;
            font-size: 8px;
            color: white;
            display: none;
        }

        .list-type-product li {
            display: flex;
            justify-content: start;
            align-items: center;
        }

        .list-type-product li label {
            margin: 0 6px !important;
        }

        .list-type-product input[type="checkbox"]:checked {
            background-color: #61100c;
        }

        .list-type-product input[type="checkbox"]:checked + label {
            color: #61100c;
        }

        .list-type-product input[type="checkbox"]:checked:after {
            display: inline-block;
        }
    </style>
    <style>
        .ajax-load {
            margin: auto;
            width: 100%;
        }
    </style>
    <section class="my-5">
        <div class="container m-auto text-center color-web">
            <div class="text-main h1 font-weight-bold">S???n Ph???m</div>
            <strong class="m-0 text-main ">????? ?????ng ??i???p Oanh ???????c nghi??n c???u v?? s??ng t???o c??c s???n ph???m truy???n
                th???ng.</strong><br>
            <strong class="m-0 text-main ">????y l?? c??c s???n ph???m th??? c??ng m??? ngh??? r???t ?????c ????o, ????i h???i k??? ngh???
                cao.</strong><br>
            <img class="mt-2" src="{{asset("assets/images/products-sticker.png")}}">
        </div>
    </section>
    <section class="products">
        <div class="container px-lg-5 m-auto">
            <div class="row justify-content-end">
                <div class="col-12 col-sm-12 col-md-4 col-lg-3 px-1 px-md-3 py-sm-3 d-block d-md-block">
                    <div class="bg-main w-100 px-lg-4 h5 py-2 text-white text-center ">S???n ph???m</div>
                    <div id="large-filter">
                        <ul class="list-unstyled list-type-product">
                            <li>
                                <p class="  text-main mt-2 mb-1 font-weight-bold">Lo???i s???n ph???m</p>
                            </li>
                            @if(isset($categories))
                                @foreach($categories as $category)
                                    <li class="nav-item my-1">
                                        <input type="checkbox" value="{{$category->id}}" id="{{$category->name}}"
                                               name="categories"/>
                                        <label class="small" for="{{$category->name}}">{{$category->name}}</label>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                        {{--                        <ul class="list-unstyled list-type-product">--}}
                        {{--                            <li>--}}
                        {{--                                <p class="  text-main mt-2 mb-1 font-weight-bold">Lo???i s???n ph???m</p>--}}
                        {{--                            </li>--}}
                        {{--                            <li class="nav-item my-1">--}}
                        {{--                                <input type="checkbox" id="input_product_type_6"/>--}}
                        {{--                                <label class="small" for="input_product_type_6">T?????ng th???</label>--}}
                        {{--                            </li>--}}
                        {{--                            <li class="nav-item my-1">--}}
                        {{--                                <input type="checkbox" id="input_product_type_7"/>--}}
                        {{--                                <label class="small" for="input_product_type_7">????? th??? c??ng</label>--}}
                        {{--                            </li>--}}
                        {{--                            <li class="nav-item my-1">--}}
                        {{--                                <input type="checkbox" id="input_product_type_8"/>--}}
                        {{--                                <label class="small" for="input_product_type_8">????? phong th???y</label>--}}
                        {{--                            </li>--}}
                        {{--                            <li class="nav-item my-1">--}}
                        {{--                                <input type="checkbox" id="input_product_type_9"/>--}}
                        {{--                                <label class="small" for="input_product_type_9">????? trang tr??</label>--}}
                        {{--                            </li>--}}

                        {{--                        </ul>--}}
{{--                        <ul class="list-group text-left">--}}
{{--                            <div class="form-group">--}}
{{--                                <label class="color-web mt-3 font-weight-500" for="sliderRange">Gi??</label>--}}
{{--                                <input type="range" name="price" class="form-control-range my-2 slider-score" min="0"--}}
{{--                                       max="19999999"--}}
{{--                                       value="0" id="sliderRange">--}}
{{--                                <p>T??? <span id="valueRange"></span><span> ?? ?????n 20.000.000 ??</span></p>--}}
{{--                            </div>--}}
{{--                        </ul>--}}
                        <div class="row m-0 justify-content-between py-2">
                            <div class="col-6 p-lg-1">
                                <a class="btn bg-main p-2 text-white w-100" id="previous">Trang tr?????c</a>
                            </div>
                            <div class="col-6 p-lg-1">
                                <a class="btn bg-main p-2 text-white w-100" id="next">Trang k???</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-8 col-lg-9 my-3 my-md-0">
                    <div class="row mb-2 my-sm-0 mb-md-4" id="products">
                        {!! $data !!}
                    </div>
                    <hr>

                </div>

            </div>
        </div>
    </section>

@endsection
@section("js")
    @if(session("cart-empty"))
        <script>
            Swal.fire({
                // title: '???? ?????n trang cu???i',
                text: 'Gi??? h??ng tr???ng, th??m s???n ph???m v??o gi??? h??ng n??o !',
                icon: 'warning',
            })
        </script>
    @endif
    @if(session("success-order"))
        <script>
            Swal.fire({
                // title: '???? ?????n trang cu???i',
                text: 'Tuy???t v???i, ????n h??ng c???a b???n ???? ???????c x??c nh???n',
                icon: 'success',
            })
        </script>
    @endif
    <script>
        let categories = "";
        let limit = 1;
        let price = 0;
        let search = "";

        function loadData() {
            prvData = $("#products").html();
            $.ajax({
                url: "{{route("filter")}}",
                type: "POST",
                data: {
                    limit: limit,
                    categories: categories,
                    price: price,
                    _token: "{{csrf_token()}}"
                },
                beforeSend: function () {

                    $("#products").html("<img src='https://cdn.dribbble.com/users/902865/screenshots/4814970/loading-opaque.gif' alt='...' class='ajax-load'>")
                },
                success: function (response) {
                    if (response !== "") {
                        $("#products").html(response);
                        $("#counter-value").html(limit);
                    } else {
                        Swal.fire({
                            // title: '???? ?????n trang cu???i',
                            text: 'Kh??ng t??m th???y d??? li???u ph?? h???p',
                            icon: 'warning',
                        })
                        limit -= 1;
                        $("#products").html(prvData)
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }

        $(".products input").click(function () {
            limit = 1;
            categories = "";
            $('input[name="categories"]:checked').each(function (e) {
                categories += this.value + ",";
            });
            price = $('input[name="price"]').val()
            console.log(price)
            loadData()
        })
        $("#next").click(function () {
            limit += 1;
            categories = "";
            $('input[name="categories"]:checked').each(function (e) {
                categories += this.value + ",";
            });
            loadData()
        })
        $("#previous").click(function () {
            if (limit > 1) {
                limit -= 1;
                categories = "";
                $('input[name="categories"]:checked').each(function (e) {
                    categories += this.value + ",";
                });
                loadData()
            } else {
                Swal.fire({
                    // title: '???? ?????n trang cu???i',
                    text: '???? ??? trang ?????u',
                    icon: 'warning',
                })
            }
        })
    </script>
    <script>
        let rangeInput = document.getElementById("sliderRange")
        let outputValue = document.getElementById("valueRange")
        outputValue.innerHTML = '0'
        rangeInput.addEventListener('input', (e) => {
            let value = e.target.value
            outputValue.innerHTML = new Intl.NumberFormat().format(value)
        })


    </script>
@endsection
