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
               type="button"
           data-toggle="collapse"
           data-target="#category-{{$category->id}}"
           @else
               href="{{route("products",$category->id)}}"
           @endif
           aria-expanded="false" aria-controls="collapseWidthExample">
            @if($category->hasSub())
                <i class="fas fa-caret-right"></i>
            @endif
            {{$category->name}}
        </a>
        <div>
            <div class="collapse width mt-0 text-uppercase" id="category-{{$category->id}}">
                @foreach($category->SubCategories()->get() as $sub)
                    <a class="btn text-main text-left w-100 rounded-0 text-uppercase"
                       @if($sub->hasSub())
                           type="button" data-toggle="collapse"
                       data-target="#category-sub-{{$sub->id}}"
                       @else
                           href="{{route("products",$sub->id)}}"
                       @endif
                       aria-expanded="false" aria-controls="collapseWidthExample">
                        <span class="ml-3"></span>
                        @if($sub->hasSub())
                            <i class="fas fa-caret-right "></i>
                        @endif
                        {{$sub->name}}
                    </a>
                    <div>
                        <div class="collapse width mt-0" id="category-sub-{{$sub->id}}">
                            @foreach($sub->SubCategories()->get() as $minSub)
                                <div class="p-1">
                                    <a href="{{route("products",$minSub->id)}}" class="nav-link text-main">
                                        <span class="ml-4"></span> {{$minSub->name}}
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endforeach


