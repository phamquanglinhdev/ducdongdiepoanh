@extends(backpack_view('blank'))
@section("content")
    <h4>Chức năng cao cấp (Import sản phẩm từ file Excel)</h4>
    <hr>
    <form action="{{route("post.excel")}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="file" name="data" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <button type="submit" class="btn btn-success">Gủi</button>
    </form>
@endsection
