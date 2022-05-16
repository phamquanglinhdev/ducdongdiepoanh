@extends("layouts.client")
@section("css")
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
@endsection
@section("content")
    <section class="my-5">
        <div class="container m-auto text-center color-web">
            <div class="text-main h1 font-weight-bold">Sản Phẩm</div>
            <strong class="m-0 text-main ">Đồ đồng Điệp Oanh được nghiên cứu và sáng tạo các sản phẩm truyền
                thống.</strong><br>
            <strong class="m-0 text-main ">Đây là các sản phẩm thủ công mỹ nghệ rất đọc đáo, đòi hỏi kỹ nghệ
                cao.</strong><br>
            <img class="mt-2" src="{{asset("assets/images/products-sticker.png")}}">
        </div>
    </section>
    <section class="products">
        <div class="container px-5 m-auto">
            <div class="row justify-content-end">
                <div class="col-12 col-sm-12 col-md-4 col-lg-3 px-1 px-md-3 py-sm-3 fixed">
                    <h5 class="bg-main w-100 px-4 py-2 text-white text-center ">Sản phẩm</h5>
                    <form action="#">
                        <ul class="list-unstyled list-type-product">
                            <li>
                                <p class="  text-main mt-2 mb-1 font-weight-bold">Loại sản phẩm</p>
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
                        <ul class="list-unstyled list-type-product">
                            <li>
                                <p class="  text-main mt-2 mb-1 font-weight-bold">Loại sản phẩm</p>
                            </li>
                            <li class="nav-item my-1">
                                <input type="checkbox" id="input_product_type_6"/>
                                <label class="small" for="input_product_type_6">Tượng thờ</label>
                            </li>
                            <li class="nav-item my-1">
                                <input type="checkbox" id="input_product_type_7"/>
                                <label class="small" for="input_product_type_7">Đồ thờ cúng</label>
                            </li>
                            <li class="nav-item my-1">
                                <input type="checkbox" id="input_product_type_8"/>
                                <label class="small" for="input_product_type_8">Đồ phong thủy</label>
                            </li>
                            <li class="nav-item my-1">
                                <input type="checkbox" id="input_product_type_9"/>
                                <label class="small" for="input_product_type_9">Đồ trang trí</label>
                            </li>
                        </ul>
                        <ul class="list-group text-left">
                            <div class="form-group">
                                <label class="color-web mt-3 font-weight-500" for="sliderRange">Giá</label>
                                <input type="range" class="form-control-range my-2 slider-score" min="0" max="10000000"
                                       value="0" id="sliderRange">
                                <p><span id="valueRange"></span><span> đ</span></p>
                            </div>
                        </ul>
                    </form>
                    <div class="text-center py-5">
                        <a class="btn btn-outline-dark m-5 text-center p-2 m-auto" id="load-more">Xem thêm</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-8 col-lg-9 my-3 my-md-0">
                    <div class="row mb-2 my-sm-0 mb-md-4" id="products" style="overflow-y: scroll;max-height: 800px">
                        {!! $data !!}
                    </div>
                    <hr>

                </div>

            </div>
        </div>
    </section>

@endsection
@section("js")
    <script>
        let categories = "";
        let limit = 9;
        function loadData(limit, category) {
            $.ajax({
                url: "{{route("filter")}}",
                type: "POST",
                data: {
                    limit: limit,
                    categories: category,
                    _token: "{{csrf_token()}}"
                },
                success: function (response) {
                    console.log(response);
                    if (response) {
                        $("#products").html(response);
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }
        $("input").click(function () {
            categories = "";
            $('input[name="categories"]:checked').each(function (e) {
                categories+=this.value+",";
            });
            loadData(limit,categories)
        })
        $("#load-more").click(function () {
            limit+=3;
            loadData(limit,categories)
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