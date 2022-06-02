@extends("layouts.client")
@section("content")
    @if(session("error"))
        <script>
            Swal.fire({
                // title: 'Đã đến trang cuối',
                text: 'Sai tên đăng nhập hoặc mật khẩu',
                icon: 'warning',
            })
        </script>
    @endif
    @if(session("invalid-register"))
        <script>
            Swal.fire({
                // title: 'Đã đến trang cuối',
                text: '{{session("invalid-register")}}',
                icon: 'warning',
            })
        </script>
    @endif
    <style>
        #particles-js {
            background: url("{{asset("assets/images/backchitiettintuc.png")}}");
        }
    </style>
    <div id="particles-js">
        <div class="container">
            <div class="login-form py-5 row">
                <div class="col-md-6 col-12 mb-5 py-2 bg-light">
                    <div class="h1 text-main py-2 font-weight-bold">Đăng nhập</div>
                    <hr>
                    <form action="{{route("client.login.check")}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Địa chỉ email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp"
                                   placeholder="Nhập email" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mật khẩu</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                   placeholder="Nhập mật khẩu" required>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                            <label class="form-check-label" for="exampleCheck1">Ghi nhớ đăng nhập</label>
                        </div>
                        <button type="submit" class="btn bg-main text-white">Đăng nhập</button>
                        <div class="pt-2">
                            <a href="{{route("backpack.auth.password.reset")}}">Quên mật khẩu ?</a>
                        </div>
                    </form>
                    <div class="pt-3"></div>
                    <hr class="pt-5">
                    <div class=" py-2">
                        <div class="text-center py-2">Hoặc đăng nhập bằng</div>
                        <div class="row">
                            <div class="col-md-6 col-12 px-md-2">
                                <a class="btn btn-danger w-100" href="{{route("google.login")}}"> <i class="fab fa-google"></i> Google</a>
                            </div>
                            <div class="col-md-6 col-12 px-md-2">
                                <a class=" btn btn-primary w-100 " href="{{route("facebook.login")}}"><i class="fab fa-facebook-f"></i> Facebook</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 bg-light mb-5 py-2">
                    <div class="h1 text-main py-2 font-weight-bold">Đăng ký</div>
                    <hr>
                    <form action="{{route("client.register.check")}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="mail">Địa chỉ email</label>
                            <input type="email" name="email" class="form-control" id="mail"
                                   aria-describedby="emailHelp"
                                   placeholder="Email của bạn" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Họ và tên</label>
                            <input type="text" name="name" class="form-control" id="name"
                                   placeholder="VD: Nguyễn Văn A" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Số điện thoại</label>
                            <input type="text" name="phone" class="form-control" id="phone"
                                   placeholder="VD: {{$SETTING["hotline"]}}">
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input type="password" name="password" class="form-control" id="password"
                                   placeholder="Mật khẩu" required>
                        </div>
                        <div class="form-group">
                            <label for="re-password">Nhập lại mật khẩu</label>
                            <input type="password" name="repassword" class="form-control" id="repassword"
                                   placeholder="Nhập lại mật khẩu" required>
                        </div>
                        <button type="submit" class="btn bg-main text-white">Đăng ký</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
