@extends("layouts.client")
@section("content")
    @if(session("success"))
        <script>
            Swal.fire({
                // title: 'Đã đến trang cuối',
                text: 'Đã gửi thành công',
                icon: 'success',
            })
        </script>
    @endif
    <style>
        .ember-gg-map {
            box-shadow: 1px 0 8px 0;
        }
    </style>
    <div class="container py-lg-0 py-5">
        <div class="row">
            <div class="col-md-6 col-12 p-lg-5 p-0">
                <div class="ember-gg-map rounded">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d477799.4078156822!2d105.63010912386147!3d20.677394023914566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313677b2397a258f%3A0x8e2e7cdbc3c3cfc6!2zQ3R5IHRuaGggbeG7mXQgdGjDoG5oIHZpw6puIMSRw7pjIMSRaeG7h3Agb2FuaA!5e0!3m2!1svi!2s!4v1652790527186!5m2!1svi!2s"
                        width="100%" height="600vh" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-md-6 col-12 p-lg-5 p-0 py-5">
                <div class="h1 text-main font-weight-bold my-2">Liên hệ với chúng tôi</div>
                <div class="my-2">Đồ đồng Điệp Oanh luân sẵn sàng nhận phản hồi từ khách hàng, cố gắng mang đến sự hài
                    lòng tốt nhất. Xin cảm ơn!
                </div>
                <div class="row my-2">
                    <div class="col-sm-4">
                        <div class="text-main font-weight-bold">Địa chỉ</div>
                        <div>264 Cầu Giấy, HN</div>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-main font-weight-bold">Địa chỉ</div>
                        <div>264 Cầu Giấy, HN</div>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-main font-weight-bold">Địa chỉ</div>
                        <div>264 Cầu Giấy, HN</div>
                    </div>
                </div>
                <form action="{{route("contact.save")}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="text-main  font-weight-bold">Họ và tên</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="address" class="text-main  font-weight-bold">Địa chỉ</label>
                        <input type="text" class="form-control" id="address" name="address"
                               aria-describedby="emailHelp" required>
                    </div>
                    <div class="form-group">
                        <label for="message" class="text-main  font-weight-bold">Lời nhắn</label>
                        <textarea class="form-control" id="message" rows="5" name="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary bg-main">Gửi tin nhắn</button>
                </form>
            </div>
        </div>
    </div>
@endsection
