<div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
    <!-- Hero slider Active -->

    <div class="swiper-wrapper">

        @if($shop->mainbanner->isNotEmpty()))
        @foreach($shop->mainbanner as $banner)

            <div class="hero-slide-item slider-height-2 swiper-slide bg-color1"
                 data-bg-image="{{asset('assets/images/hero/bg/hero-bg-2-1.webp')}}">
                <div class="container h-100">
                    <div class="row h-100 flex-row-reverse">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                            <div class="hero-slide-content hero-slide-content-2 slider-animated-1">
                                <h2 class="title-1">{{$banner->title}}</h2>
                                {{--                                <span class="price">--}}
                                {{--                                            <span class="mini-title">Only</span>--}}
                                {{--                                        <span class="amount">$24.00</span>--}}
                                {{--                                        </span>--}}

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
                 data-bg-image="{{asset('assets/images/hero/bg/hero-bg-2-1.webp')}}">
                <div class="container h-100">
                    <div class="row h-100 flex-row-reverse">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                            <div class="hero-slide-content hero-slide-content-2 slider-animated-1">
                                <h2 class="title-1">Easy Your Life <br>
                                    For Smart Device </h2>
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
                                    <img src="{{asset('assets/images/hero/inner-img/hero-2-1.png')}}" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single slider item -->
            <div class="hero-slide-item slider-height-2 swiper-slide bg-color1"
                 data-bg-image="{{asset('assets/images/hero/bg/hero-bg-2-1.webp')}}">
                <div class="container h-100">
                    <div class="row h-100 flex-row-reverse">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                            <div class="hero-slide-content hero-slide-content-2 slider-animated-1">
                                <h2 class="title-1">Easy Your Life <br>
                                    For Smart Device </h2>
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
                                    <img src="{{asset('assets/images/hero/inner-img/hero-2-1.png')}}" alt=""/>
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
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>