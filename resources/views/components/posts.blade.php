
<div class="container pt-5">
    <div class="row">
        <div class="col-sm-6">
            <div class="btn bg-main text-white rounded-0 w-100">Tin tức</div>
            @php
                $posts = \App\Models\Post::where("type","=",0)->orderBy("updated_at")->limit(5)->get();
            @endphp
            @if($posts->count()>0)
                @foreach($posts as $post)
                    <div class="post border my-1">
                        <a href="{{route("post",$post->id)}}" class="nav-link text-main">
                            <div class="row">
                                <div class="col-2">
                                    <img
                                        src="{{$post->thumbnail}}"
                                        class="w-100">
                                </div>
                                <div class="col-10">
                                    <div>{{$post->title}}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="col-sm-6">
            <div class="btn bg-main text-white rounded-0 w-100">Tin tức doanh nghiệp</div>
            @php
                $posts = \App\Models\Post::where("type","=",1)->orderBy("updated_at")->limit(5)->get();
            @endphp
            @if($posts->count()>0)
                @foreach($posts as $post)
                    <div class="post border my-1">
                        <a href="{{route("post",$post->id)}}" class="nav-link text-main">
                            <div class="row">
                                <div class="col-2">
                                    <img
                                        src="{{$post->thumbnail}}"
                                        class="w-100">
                                </div>
                                <div class="col-10">
                                    <div>{{$post->title}}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
