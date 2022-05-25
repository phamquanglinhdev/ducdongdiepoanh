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
    <div class="bg-white">
        <div class="container">
            <div class="login-form py-5">
                <div class="col-md-6 col-12">
                    <form action="{{route("client.login.check")}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Địa chỉ email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp"
                                   placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                   placeholder="Password">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                            <label class="form-check-label" for="exampleCheck1">Ghi nhớ đăng nhập</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Đăng nhập</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
