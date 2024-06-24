<div class="section" id="main_bannerjs">
    <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
        <!-- Hero slider Active -->

        <div class="swiper-wrapper">

            @if($shop->mainbanner->isNotEmpty()))
                @foreach($shop->mainbanner as $banner)

                    <div class="hero-slide-item slider-height-2 swiper-slide bg-color1"
                        >
                        <div class="container h-100">
                            <div class="row h-100 flex-row-reverse">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                                    <div class="hero-slide-content hero-slide-content-2 slider-animated-1">
                                        <h2 class="title-1">{{$banner->title}}</h2>

                                        <div style="width: min-content" class="d-flex flex-column justify-content-center align-items-center">
                                            <a href="{{route('products')}}" class="btn btn-primary text-capitalize">ყველა
                                                პროდუქტი</a>
                                            <button
                                                    hx-get="{{route('main.banner.edit',['banner'=>$banner->id])}}"
                                                    hx-target="#editmainbannermodal"
                                                    data-mainbanner-editopen STYLE="width: max-content"
                                                    class="button-31 mt-2">რედაქტირება
                                            </button>
                                            <form action="{{route('main.banner.delete')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$banner->id}}">
                                                <button
                                                        {{--                                                hx-get="{{route('main.banner.delete')}}"--}}
                                                        {{--                                                hx-target="#editmainbannermodal"--}}
                                                        STYLE="width: max-content" class="button-31 mt-2">წაშლა
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative align-items-center">
                                    <div class="show-case">
                                        <div class="hero-slide-image slider-2">
                                            @foreach($banner->media as $media)
                                                <img src="{{$media->getUrl()}}" alt=""/>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            @else
                <!-- Single slider item -->
                <div class="hero-slide-item slider-height-2 swiper-slide bg-color1"
                    >
                    <div class="container h-100">
                        <div class="row h-100 flex-row-reverse">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                                <div class="hero-slide-content hero-slide-content-2 slider-animated-1">
                                    <h2 class="title-1">
                                        shop.ews.ge
                                    </h2>
                                    {{--                                <span class="price">--}}
                                    {{--                                            <span class="mini-title">Only</span>--}}
                                    {{--                                        <span class="amount">$24.00</span>--}}
                                    {{--                                        </span>--}}
                                    <a href="{{route('products',['shop'=>request()->segment(1)])}}" class="btn btn-primary text-capitalize">ყველა
                                        პროდუქტი</a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative align-items-center">
                                <div class="show-case">
                                    <div class="hero-slide-image slider-2">
                                        <img src="{{asset('assets/images/4-4.png')}}" alt=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single slider item -->
                <div class="hero-slide-item slider-height-2 swiper-slide bg-color1"
                     >
                    <div class="container h-100">
                        <div class="row h-100 flex-row-reverse">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                                <div class="hero-slide-content hero-slide-content-2 slider-animated-1">
                                    <h2 class="title-1"> shop.ews.ge </h2>
                                    {{--                                <span class="price">--}}
                                    {{--                                            <span class="mini-title">Only</span>--}}
                                    {{--                                        <span class="amount">$24.00</span>--}}
                                    {{--                                        </span>--}}
                                    <a href="{{route('products',['shop'=>request()->segment(1)])}}" class="btn btn-primary text-capitalize">ყველა
                                        პროდუქტი</a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative align-items-center">
                                <div class="show-case">
                                    <div class="hero-slide-image slider-2">
                                        <img src="{{asset('assets/images/banner1.png')}}" alt=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- Add Arrows -->
        <div class="swiper-buttons">
            <div class="swiper-button-prev">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 32 32"><path fill="currentColor" d="m16 8l1.43 1.393L11.85 15H24v2H11.85l5.58 5.573L16 24l-8-8z"/><path fill="currentColor" d="M16 30a14 14 0 1 1 14-14a14.016 14.016 0 0 1-14 14m0-26a12 12 0 1 0 12 12A12.014 12.014 0 0 0 16 4"/></svg>            </div>
            <div class="swiper-button-next">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 32 32"><path fill="currentColor" d="m16 8l-1.43 1.393L20.15 15H8v2h12.15l-5.58 5.573L16 24l8-8z"/><path fill="currentColor" d="M16 30a14 14 0 1 1 14-14a14.016 14.016 0 0 1-14 14m0-26a12 12 0 1 0 12 12A12.014 12.014 0 0 0 16 4"/></svg>            </div>
        </div>
    </div>
</div>