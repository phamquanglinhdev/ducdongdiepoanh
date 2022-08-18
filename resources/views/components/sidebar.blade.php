<style>

</style>
@php
    $categories = \App\Models\Category::where("category_id","=",null)->where("active","=",1)->get();
@endphp
<div class="btn bg-main text-white w-100 rounded-0 text-uppercase">
    Danh mục sản phẩm
</div>
@foreach($categories as $category)
    <div class="category-box mb-1 text-uppercase text-muted card">
        <a class="btn text-left w-100 rounded-0 "
           @if($category->hasSub())
               role="button"
           data-toggle="collapse"
           href="#category-{{$category->id}}"
           @else
               href="{{route("products",$category->id)}}"
           @endif
           aria-expanded="false" aria-controls="category-{{$category->id}}">
            @if($category->hasSub())
                <i class="fas fa-caret-right"></i>
            @endif
            {{$category->name}}
        </a>

        <div class="collapse mt-0 text-uppercase" id="category-{{$category->id}}">
            <div class="sub-box">
                @foreach($category->SubCategories()->get() as $sub)
                    <a class="ml-3 btn text-main text-left w-100 rounded-0 text-uppercase"
                       @if($sub->hasSub())
                           role="button" data-toggle="collapse"
                       href="#category-sub-{{$sub->id}}"
                       @else
                           href="{{route("products",$sub->id)}}"
                       @endif
                       aria-expanded="false" aria-controls="category-sub-{{$sub->id}}">
                        <span></span>
                        @if($sub->hasSub())
                            <i class="fas fa-caret-right "></i>
                        @endif
                        {{$sub->name}}
                    </a>
                    <div class="collapse mt-0" id="category-sub-{{$sub->id}}">
                        @foreach($sub->SubCategories()->get() as $minSub)
                            <div class="">
                                <a href="{{route("products",$minSub->id)}}" class="ml-4 nav-link text-main">
                                    <i class="fas fa-angle-right"></i>
                                    {{$minSub->name}}
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endforeach
@section("include-js")
    <script>
        $(".category-box").hover(
            function () {
                console.log($(this).children(".collapse"))
                $(this).children(".collapse").collapse('show');
            }, function () {
                $(this).children(".collapse").collapse('hide');
            }
        );
        $(".sub-box").hover(
            function () {
                console.log($(this).children(".collapse"))
                $(this).children(".collapse").collapse('show');
            }, function () {
                $(this).children(".collapse").collapse('hide');
            }
        );
    </script>
@endsection

