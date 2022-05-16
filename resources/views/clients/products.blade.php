@extends("layouts.client")
@section("content")
    <div class="container m-auto py-5">
        <div class="row" id="products">
            {!! $data !!}
        </div>
    </div>
@endsection
@section("js")
    <script>
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
    </script>
@endsection
