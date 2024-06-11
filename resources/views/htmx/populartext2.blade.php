<h2 class="title">
        @if($shop->headername)
                {{$shop->headername->name}}
        @else
                ყველაზე გაყიდვადი
        @endif
        @auth()
                <img style="cursor: pointer!important" src="{{asset('assets/icons/edit_icon.svg')}}"
                     alt=""
                     hx-get="{{route('shop.populartext.edit',['shop'=>request()->segment(1)])}}"
                     hx-target="#populartext"
                >
        @endauth
</h2>