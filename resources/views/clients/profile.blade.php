@extends("layouts.client")
@section("content")
    <section id="profile">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <label class="text-main font-weight-bold" for="email">Địa chỉ email</label>
                    <div class="input-group mb-3">

                        <input type="email" class="form-control" placeholder="Email"
                               value="{{backpack_user()->email}}" id="email" readonly>
                        <div class="input-group-append">
                            @if(backpack_user()->gg!=null)
                                <button class="btn btn-danger" type="button" id="none"><i class="fab fa-google"></i>
                                </button>
                            @elseif(backpack_user()->fb!=null)
                                <button class="btn btn-primary" type="button" id="none"><i class="fab fa-facebook"></i>
                                </button>
                            @else
                                <button class="btn btn-success" type="button" id="change-email"><i
                                        class="fas fa-edit"></i>
                                </button>
                            @endif
                        </div>
                    </div>
                    <label class="text-main font-weight-bold" for="name">Họ và tên</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Họ và tên"
                               value="{{backpack_user()->name}}" id="name" readonly>
                        <div class="input-group-append">
                            <button class="btn btn-success" type="button" id="change-name"><i class="fas fa-edit"></i>
                            </button>
                        </div>
                    </div>
                    <label class="text-main font-weight-bold" for="phone">Số điện thoại</label>
                    <div class="input-group mb-3">

                        <input type="text" class="form-control" placeholder="Số điện thoại"
                               value="{{backpack_user()->phone}}" id="phone" readonly>
                        <div class="input-group-append">
                            <button class="btn btn-success" type="button" id="change-phone"><i class="fas fa-edit"></i>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    @if((backpack_user()->gg!=null) || (backpack_user()->fb!=null))
                    @else
                        <form action="{{route("change.password")}}" method="post" id="change-password">
                            @csrf
                            <div class="form-group">
                                <label for="old" class="text-main font-weight-bold">Mật khẩu cũ</label>
                                <input type="password" name="old" class="form-control" id="" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label for="new" class="text-main font-weight-bold">Mật khẩu mới</label>
                                <input type="password" name="new" class="form-control" id="" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label for="re" class="text-main font-weight-bold">Nhập lại mật khẩu mới</label>
                                <input type="password" name="re" class="form-control" id="" placeholder="" required>
                            </div>

                            <button type="submit" class="btn btn-success">Đổi mật khẩu</button>
                        </form>
                    @endif
                </div>
            </div>
            <hr>
        </div>

    </section>
    <section id="order-history">

    </section>
@endsection
@section("js")
    <script>
        let nameState = 1;
        $("#change-name").click(function () {
            if (nameState == 1) {
                $("#name").attr("readonly", false);
                $("#name").focus();
                $("#change-name").html('<i class="fas fa-check-circle"></i>');
                nameState = 0;
            } else {
                $.ajax({
                    url: "{{route("change.name")}}",
                    type: "POST",
                    data: {
                        value: $("#name").val(),
                        _token: "{{csrf_token()}}"
                    },
                    success: function (response) {
                        Swal.fire({
                            text: 'Đổi tên thành công',
                            icon: 'success',
                        })
                        $("#name").attr("readonly", true);
                        $("#change-name").html('<i class="fas fa-edit"></i>')
                        nameState = 1;
                    },
                    error: function (error) {
                        console.log(error);
                    }
                });

            }
        });

        let phoneState = 1;
        $("#change-phone").click(function () {
            if (phoneState == 1) {
                $("#phone").attr("readonly", false);
                $("#phone").focus();
                $("#change-phone").html('<i class="fas fa-check-circle"></i>');

                phoneState = 0;
            } else {
                $.ajax({
                    url: "{{route("change.phone")}}",
                    type: "POST",
                    data: {
                        value: $("#phone").val(),
                        _token: "{{csrf_token()}}"
                    },
                    success: function (response) {
                        Swal.fire({
                            text: 'Đổi số điện thoại thành công',
                            icon: 'success',
                        })
                        $("#phone").attr("readonly", true);
                        $("#change-phone").html('<i class="fas fa-edit"></i>')
                        phoneState = 1;
                    },
                    error: function (error) {
                        console.log(error);
                    }
                });

            }
        });

        let emailState = 1;
        $("#change-email").click(function () {
            if (emailState == 1) {
                $("#email").attr("readonly", false);
                $("#email").focus();
                $("#change-email").html('<i class="fas fa-check-circle"></i>');
                emailState = 0;
            } else {
                $.ajax({
                    url: "{{route("change.email")}}",
                    type: "POST",
                    data: {
                        value: $("#email").val(),
                        _token: "{{csrf_token()}}"
                    },
                    success: function (response) {
                        Swal.fire({
                            text: 'Đổi tên thành công',
                            icon: 'success',
                        })
                        $("#email").attr("readonly", true);
                        $("#change-email").html('<i class="fas fa-edit"></i>')
                        emailState = 1;
                    },
                    error: function (error) {
                        console.log(error);
                    }
                });

            }
        });


    </script>
    <script>
        $("#change-password").submit(function (e) {
            e.preventDefault();
            var form = $(this);
            var actionUrl = form.attr('action');

            $.ajax({
                type: "POST",
                url: actionUrl,
                data: form.serialize(),
                success: function (data) {
                    if (data === "Đổi mật khẩu thành công") {
                        Swal.fire({
                            text: data,
                            icon: 'success',
                        });
                    } else {
                        Swal.fire({
                            text: data,
                            icon: 'warning',
                        });
                    }
                }
            });

        });
    </script>
@endsection
