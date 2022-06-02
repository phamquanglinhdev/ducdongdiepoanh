@extends(backpack_view('blank'))
@section("content")
    <ul class="list-group list-group-flush mb-5">
        <div class="mt-4">Họ và tên :</div>
        <li class="list-group-item">{{$contact->name}}</li>
        <div class="mt-4">Địa Chỉ :</div>
        <li class="list-group-item">{{$contact->address}}</li>
        <div class="mt-4">Nội dung :</div>
        <li class="list-group-item">{{$contact->message}}</li>
    </ul>
    <a href="{{route("contact.index")}}"><i class="las la-chevron-circle-left"></i> Trở về</a>
@endsection
