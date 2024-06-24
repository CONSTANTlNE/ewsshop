@extends('pages.layout')

@php
    //    dd(auth()->user()->email);
@endphp

@section('index')

    <!-- Banner Area Start -->
    {{--    @include('components.banners.secondbanner')--}}

    {{--                      ADDITION BUTTONS--}}

    <div id="addtarget">
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
                                                მთავარი გალერეა
                                            @endif
                                            @auth
                                                <img style="cursor: pointer!important"
                                                     src="{{asset('assets/icons/edit_icon.svg')}}"
                                                     alt="gallery_image"
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
                    <iframe name="nocontent" style="display:none;"></iframe>
                    {{--MAIN GALLERRY--}}
                    <div class="row">
                        <div class="col">
                            <div class="row mb-n-30px justify-content-center" id="maingallery">
                                @foreach($shop->products->where('main_page',1) as  $product)
                                    <div class="col-md-4 col-sm-6 col-6 mb-30px maingpagegalprod">
                                        @auth
                                            <div class="d-flex justify-content-around align-items-center">
                                                {{-- Update Form--}}
                                                <form
                                                      method="post">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$product->id}}">
                                                    <button id="editproductmain" data-open-edit
                                                            hx-target="#editproductmodal"
                                                            hx-get="{{route('product.edit',['shop'=>request()->segment(1),'product'=>$product->id,'initiator'=>'main'])}}">
                                                        <img style="height: 30px;width: 30px;margin-bottom: 20px; cursor:pointer"
                                                             src="{{asset('assets/icons/edit_icon.svg')}}" alt="">
                                                    </button>
                                                </form>
                                                {{-- Delete Form--}}
                                                <form class="deletefrommaingalform"
                                                      action="{{route('product.delete',['shop'=>request()->segment(1)])}}"
                                                      method="post"
                                                        {{--                                            target="nocontent"--}}
                                                >
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$product->id}}">
                                                    <button class="deletebutton"
                                                            style="display: none "
                                                            hx-post="{{route('product.delete.htmx',['shop'=>request()->segment(1)])}}"
                                                            hx-target="#addtarget"
                                                    ></button>
                                                    <button type="button" class="deletemaingalproduct"
                                                    >
                                                        <img style="height: 30px;width: 30px;margin-bottom: 20px;cursor:pointer"
                                                             src="{{asset('assets/icons/delete_remove_icon.svg')}}"
                                                             alt="">
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
                                                @if($shop->settings->first()->use_category===1)
                                                    <span class="category mt-2 text-center">
                                                                                 <a href="{{route('categories',['shop'=>request()->segment(1),'category'=>$product->category->slug])}}">{{$product->category->name}}</a>

                                            </span>
                                                @endif
                                                <h5 class="title text-center">
                                                    <a href="{{route('single.product', ['shop'=>request()->segment(1),'product' => $product->slug])}}">{{$product->name}}
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



        <!-- CATEGORIES AND PRODUCTS FOR MAIN PAGE -->.
        @if($shop->settings->first()->use_category===1)
            @include('pages.categories_main')
        @endif

        {{--    BOTTOM SLIDER --}}
        {{--        @include('components.bottomslider')--}}

        <!-- Fashion Area Start -->
        {{--    @include('components.banners.indexmiddlebanner')--}}
        <!-- Fashion Area End -->
        <!-- Feature Area Srart -->
        {{--    @include('components.features')--}}
        <!-- Feature Area End -->
        <!-- Blog area start from here -->
        {{-- @include('components.blogarea')--}}
        <!-- Blog area end here -->


    </div>

@endsection