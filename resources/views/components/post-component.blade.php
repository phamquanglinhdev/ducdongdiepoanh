<div class="p-0 post">
    <a class="nav-link" href="{{route("post",$post->id)}}">
        <div class="row border rounded">
            <div class="col-md-2 col-sm-6 col-12 p-2">
                <img src="{{$post->thumbnail}}"
                     class="w-100">
            </div>
            <div class="col-md-10 col-sm-6 col-12 p-2">
                <div class="text-main h3">
                    {{$post->title}}
                </div>
                <div class="font-italic">
                    <span class="fas fa-clock text-main"></span>
                    <span class=" text-main">{{$post->updated_at}}</span>
                </div>
                <div class="font-italic small" style="max-height: 48px;overflow: hidden">
                    {!! $post->document !!}
                </div>
            </div>
        </div>
    </a>
</div>
