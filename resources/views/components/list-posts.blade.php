<div class="btn bg-main text-white w-100 rounded-0 mt-2">Tin tức</div>
@php
    $posts = \App\Models\Post::orderBy("updated_at")->limit(5)->get();
@endphp
@if($posts->count()>0)
    @foreach($posts as $post)
        <div class="post border my-1">
            <a href="{{route("post",$post->id)}}" class="nav-link text-main">
                <div class="row">
                    <div class="col-4">
                        <img
                            src="{{$post->thumbnail}}"
                            class="w-100">
                    </div>
                    <div class="col-8">
                        <div>{{$post->title}}</div>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
@endif
<div class="btn bg-main text-white w-100 rounded-0 mt-2">Facebook</div>
<div class="fb-page" data-href="https://www.facebook.com/dododiepoanh" data-tabs="timeline" data-width="" data-height=""
     data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
    <blockquote cite="https://www.facebook.com/dododiepoanh" class="fb-xfbml-parse-ignore"><a
            href="https://www.facebook.com/dododiepoanh">Đồ Đồng Điệp Oanh</a></blockquote>
</div>
