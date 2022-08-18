@extends("layouts.client")
@section("content")
    <div class="p-5 text-center h1">Tin tức</div>
    <div class="container py-2">
        <div class="row">
            <div class="col-md-3">
                @include("components.sidebar")
                @include("components.list-posts")
            </div>
            <div class="col-md-9">
                <div class="container" id="posts">
                    {!! $data !!}
                </div>
                <div class="text-center">
                    <button class="btn btn-success" id="load-more">Xem thêm</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("js")
    <script>
        let limit = 6;
        let type = 0;
        function load(){
            prvData = $("#posts").html();
            limit +=2;
            $.ajax({
                url: "{{route("ajax-post")}}",
                type: "POST",
                data: {
                    limit: limit,
                    _token: "{{csrf_token()}}"
                },
                beforeSend: function () {
                    $("#posts").html("<img src='https://cdn.dribbble.com/users/902865/screenshots/4814970/loading-opaque.gif' alt='...' class='ajax-load'>")
                },
                success: function (response) {
                    if (response !== "") {
                        $("#posts").html(response);

                    } else {
                        Swal.fire({
                            // title: 'Đã đến trang cuối',
                            text: 'Không tìm thấy dữ liệu phù hợp',
                            icon: 'warning',
                        })
                        limit -= 1;
                        $("#posts").html(prvData)
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }
        $("#load-more").click(function () {
            load();
        })
    </script>
@endsection
