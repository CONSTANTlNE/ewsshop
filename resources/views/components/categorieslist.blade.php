<ul>
    <li><a href="{{route('products',['shop'=>request()->segment(1)])}}"
           class="selected m-0"
           @if(request()->routeIs('products') || request()->routeIs('products.sorted'))
               style="color: blue"
                @endif
        > ყველა პორდუქტი

            <span>({{$productscount}})</span> </a></li>
    @if($shop->settings->first()->use_category===1)
        @foreach($shop->categories as $category)
            <li>
                <a href="{{route('categories',['shop'=>request()->segment(1),'category'=>$category->slug])}}"
                   class="selected m-0">
                    {{$category->name}}
                    <span>({{$category->products->count() }})</span> </a>
            </li>
        @endforeach
    @endif
</ul>