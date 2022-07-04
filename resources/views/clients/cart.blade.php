@extends("layouts.client")
@section("content")

    <div class="bg-white">
        <div class="container">
            <div class="p-5">
                <form action="{{route("make.order")}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="pt-lg-3 col-lg-6 col-12">
                            <div class="h3 text-main">Thông tin thanh toán</div>
                            <hr>
                            <div class="form-group">
                                <label for="email">Địa chỉ email</label>
                                <input id="email"  name="email" type="email" class="form-control" value="{{backpack_user()->email}}"
                                       readonly>
                            </div>
                            <div class="form-group">
                                <label for="email">Họ và tên</label>
                                <input id="name" name="name" type="text" class="form-control" value="{{backpack_user()->name}}"
                                       readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số điện thoại</label>
                                <input type="text" name="phone" class="form-control" value="{{backpack_user()->phone ?? ""}}"
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Địa chỉ giao hàng</label>
                                <input type="text" name="address" class="form-control" placeholder="VD:264 Cầu Giấy, Hà Nội" required>
                            </div>

                            <div class="h3 text-main pt-5">Thông tin bổ sung</div>
                            <hr>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Ghi chú đơn hàng</label>
                                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="pt-lg-3 col-lg-6 col-12 bg-light">
                            <div class="h3 text-main">Đơn hàng của bạn</div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <div class="font-weight-bold">Sản phẩm</div>
                                <div class="font-weight-bold">Tạm tính</div>
                            </div>
                            <hr>
                            <div id="packs">
                                {!! $data !!}
                            </div>
                            <div class="loading"></div>
                            <div class="form-check d-none">
                                <input class="form-check-input" type="radio" name="payment_method" id="atm" value="atm" >
                                <label class="form-check-label text-main h5 font-weight-bold" for="atm">
                                    Thanh toán chuyển khoản ngân hàng
                                </label>
                            </div>
                            <div class="d-none">
                                <div>Thông tin chuyển khoản:</div>
                                <div>Ngân hàng: MB Bank </div>
                                <div>Số tài khoản : 0000000000000</div>
                                <div>Người thụ hưởng : Nguyễn Văn A</div>
                                <div>Chi nhánh : Hà Nội</div>
                            </div>
                            <div class="form-check d-none">
                                <input class="form-check-input" type="radio" name="payment_method" id="cash" value="cash" checked>
                                <label class="form-check-label text-main h5 font-weight-bold" for="cash">
                                    Thanh toán khi nhận hàng
                                </label>
                            </div>
                            <hr>
                            <div class="text-center text-lg-left py-2">
                                <button type="submit" class="btn bg-main text-white ">Xác nhận</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section("js")
    <script>
        function changeQuantity(id, quantity) {
            $.ajax({
                url: "{{route("change.quantity")}}",
                type: "POST",
                data: {
                    id: id,
                    quantity: quantity,
                    _token: "{{csrf_token()}}"
                },
                beforeSend: function () {
                    $(".loading").html(
                        '<img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/35771931234507.564a1d2403b3a.gif" class="w-25"/>'
                    )
                },
                success: function (response) {
                    $("#packs").html(response);
                    $(".loading").html("");
                    if(response==="empty"){
                        location.reload();
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }
        function removePack(id){
            $.ajax({
                url: "{{route("client.cart.removeItem")}}",
                type: "POST",
                data: {
                    id: id,
                    _token: "{{csrf_token()}}"
                },
                beforeSend: function () {
                    $(".loading").html(
                        '<img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/35771931234507.564a1d2403b3a.gif" class="w-25"/>'
                    )
                },
                success: function (response) {
                    Swal.fire({
                        text: 'Xóa thành công',
                        icon: 'success',
                    })
                    if(response==="empty"){
                        location.reload();
                    }
                    $("#packs").html(response);
                    $(".loading").html("")
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }

        // $(".pack").on("change",function () {
        //
        // });
        $(document).on('change', '.pack', function() {
            changeQuantity(this.id,this.value)
        });
        $(document).on('click', '.remove-pack', function() {
            console.log(this.id);
            removePack(this.id)
        });

    </script>
@endsection
