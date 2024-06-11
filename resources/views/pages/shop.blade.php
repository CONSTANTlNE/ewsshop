@extends('pages.layout')

@php
    //dd($shop->products)
@endphp

@section('index')

    <!-- Banner Area Start -->
    {{--    @include('components.banners.secondbanner')--}}

    {{--                      ADDITION BUTTONS--}}


    <!-- Product Main Gallery Start -->
    @if($shop->settings->first()->use_main_gallery===1)
        <div class="product-area pb-100px mt-3">
            <div class="container">
                <!-- Section Title & Tab Start -->
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <div id="populartext">
                                @if($shop->products->isNotEmpty())
                                    <h2 class="title">
                                        @if($shop->headername)
                                            {{$shop->headername->name}}
                                        @else
                                            ყველაზე გაყიდვადი
                                        @endif
                                        @auth
                                            <img style="cursor: pointer!important"
                                                 src="{{asset('assets/icons/edit_icon.svg')}}"
                                                 alt=""
                                                 hx-get="{{route('shop.populartext.edit',['shop'=>$shop->slug])}}"
                                                 hx-target="#populartext"
                                            >
                                        @endauth
                                    </h2>
                                @endif
                            </div>
                            <br>

                        </div>
                    </div>
                </div>

                {{--              MAIN GALLERRY--}}
                <div class="row">
                    <div class="col">
                        <div class="row mb-n-30px">

                            @foreach($shop->products->where('main_page',1) as $product)
                                <div class="col-md-4 col-sm-6 col-6 mb-30px">
                                    @auth
                                        <div class="d-flex justify-content-around align-items-center">
                                            <form action="{{route('product.update',['shop'=>request()->segment(1)])}}"
                                                  method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$product->id}}">
                                                <button id="editproductmain" data-open-edit
                                                        hx-target="#editproductmodal"
                                                        hx-get="{{route('product.edit',['shop'=>request()->segment(1),'product'=>$product->id])}}">
                                                    <img style="height: 30px;width: 30px;margin-bottom: 20px; cursor:pointer"
                                                         src="{{asset('assets/icons/edit_icon.svg')}}" alt="">
                                                </button>
                                            </form>
                                            <form action="{{route('product.delete',['shop'=>request()->segment(1)])}}"
                                                  method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$product->id}}">
                                                <button>
                                                    <img style="height: 30px;width: 30px;margin-bottom: 20px;cursor:pointer"
                                                         src="{{asset('assets/icons/delete_remove_icon.svg')}}" alt="">
                                                </button>
                                            </form>
                                        </div>
                                    @endauth
                                    <div style="min-height: 300px" class="product">

                                        <div class="thumb">
                                            <a style="border-radius: 15px!important"

                                               data-bs-target="#exampleModal"
                                               data-bs-toggle="modal"
                                               hx-target="#quickviewtarget"
                                               hx-get="{{route('quickView', ['shop'=>request()->segment(1),'product' => $product->id])}}"
                                               {{--href="{{route('single.product')}}"--}}
                                               class="image">

                                                @if(!$product->getMedia('product_image1')->isEmpty())
                                                    <img class="product-image"
                                                         src="{{$product->getMedia('product_image1')[0]->getUrl()}}"
                                                         alt="Product"/>
                                                    <img class="hover-image"
                                                         src="{{$product->getMedia('product_image1')[0]->getUrl()}}"
                                                         alt="Product"/>
                                                @endif
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category mt-2 text-center"><a
                                                        href="#">{{$product->category->name}}</a></span>
                                            <h5 class="title text-center"><a
                                                        href="single-product.html">{{$product->name}}
                                                </a>
                                            </h5>
                                            <span class="price">
                                            <span class="new">₾ {{$product->price}}</span>
                                        </span>
                                        </div>
                                    </div>

                                </div>

                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
            @if($shop->products->isNotEmpty())
                <div class=" d-flex align-items-center justify-content-center mt-5">

                    <a href="{{route('products',['shop'=>request()->segment(1)])}}" class="allproducts">ყველა
                        პროდუქტი</a>
                </div>
            @endif
        </div>
    @endif



    <!-- CATEGORIES AND PRODUCTS FOR MAIN PAGE -->
    @include('pages.categories_main')



    {{--    BOTTOM SLIDER --}}
    @if($shop->settings->first()->use_slider===1)
    <div class="feature-product-area pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title">რჩეული პროდუქტები</h2>
                    </div>
                </div>
            </div>
            <div class="feature-product-slider swiper-container slider-nav-style-1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide feature-right-content">
                        <div class="image-side">
                            <img src="assets/images/feature-image/2.webp" alt="">

                        </div>
                        <div class="content-side">

                            <div class="prize-content">
                                <h5 class="title"><a href="{{route('single.product',['shop'=>request()->segment(1)])}}">Ladies
                                        Smart Watch</a></h5>
                                <span class="price">
{{--                                <span class="old">$48.50</span>--}}
                                    <span class="new">₾ 38.50</span>
                                    </span>
                            </div>
                            <div class="product-feature">
                                <ul>
                                    <li>Predecessor : <span>None.</span></li>
                                    <li>Support Type : <span>Neutral.</span></li>
                                    <li>Cushioning : <span>High Energizing.</span></li>
                                    <li>Total Weight : <span> 300gm</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide feature-right-content">
                        <div class="image-side">
                            <img src="assets/images/feature-image/3.webp" alt="">

                        </div>
                        <div class="content-side">

                            <div class="prize-content">
                                <h5 class="title"><a href="single-product.html">Ladies Smart Watch</a></h5>
                                <span class="price">

                                    <span class="new">₾ 38.50</span>
                                    </span>
                            </div>
                            <div class="product-feature">
                                <ul>
                                    <li>Predecessor : <span>None.</span></li>
                                    <li>Support Type : <span>Neutral.</span></li>
                                    <li>Cushioning : <span>High Energizing.</span></li>
                                    <li>Total Weight : <span> 300gm</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide feature-right-content">
                        <div class="image-side">
                            <img src="assets/images/feature-image/2.webp" alt="">
                            {{--                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"--}}
                            {{--                                    data-bs-target="#exampleModal-Cart"><i--}}
                            {{--                                        class="pe-7s-shopbag"></i></button>--}}
                        </div>
                        <div class="content-side">

                            <div class="prize-content">
                                <h5 class="title"><a href="single-product.html">Ladies Smart Watch</a></h5>
                                <span class="price">
{{--                                <span class="old">$48.50</span>--}}
                                    <span class="new">₾ 38.50</span>
                                    </span>
                            </div>
                            <div class="product-feature">
                                <ul>
                                    <li>Predecessor : <span>None.</span></li>
                                    <li>Support Type : <span>Neutral.</span></li>
                                    <li>Cushioning : <span>High Energizing.</span></li>
                                    <li>Total Weight : <span> 300gm</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide feature-right-content">
                        <div class="image-side">
                            <img src="assets/images/feature-image/3.webp" alt="">
                        </div>
                        <div class="content-side">

                            <div class="prize-content">
                                <h5 class="title"><a href="single-product.html">Ladies Smart Watch</a></h5>
                                <span class="price">

                                    <span class="new">₾ 38.50</span>
                                    </span>
                            </div>
                            <div class="product-feature">
                                <ul>
                                    <li>Predecessor : <span>None.</span></li>
                                    <li>Support Type : <span>Neutral.</span></li>
                                    <li>Cushioning : <span>High Energizing.</span></li>
                                    <li>Total Weight : <span> 300gm</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>

    @endif

    <!-- Fashion Area Start -->
    {{--    @include('components.banners.indexmiddlebanner')--}}
    <!-- Fashion Area End -->
    <!-- Feature Area Srart -->
    @include('components.features')
    <!-- Feature Area End -->
    <!-- Blog area start from here -->
    {{-- @include('components.blogarea')--}}
    <!-- Blog area end here -->
    <dialog class="dialog" style="" id="editproductmodal" data-edit-modal>


    </dialog>
@endsection