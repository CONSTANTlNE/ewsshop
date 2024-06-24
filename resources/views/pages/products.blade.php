@extends('pages.layout')

@section('products')
    <div class="main-wrapper">


        <!-- breadcrumb-area start -->
        {{--        @include('components.breadcrumbs')--}}
        <!-- breadcrumb-area end -->

        <!-- Shop Page Start  -->
        <div class="shop-category-area pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 order-lg-last col-md-12 order-md-last">

                        <!-- Shop Top Area Start -->
                        <div class="shop-top-bar d-flex">
                            {{--                            <p class="compare-product"><span>12</span> Product Found of <span>30</span></p>--}}
                            <div class="select-shoing-wrap d-flex align-items-center">
                                <div class="shot-product">
                                    <p>სორტირება:</p>
                                </div>
                                <!-- Single Wedge End -->
                                <div class="header-bottom-set dropdown">
                                    <button style="background-color: white!important"
                                            class="dropdown-toggle header-action-btn" data-bs-toggle="dropdown">
                                        @if(request()->segment(3)==='price_asc')
                                            ფასი ზრდადი
                                        @elseif(request()->segment(3)==='price_desc')
                                            ფასი კლებადი
                                        @elseif(request()->segment(3)==='oldest')
                                            თარიღი ზრდადი
                                        @elseif(request()->segment(3)==='newest')
                                            თარიღი კლებადი
                                        @else
                                            არჩევა
                                        @endif
                                       </button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a class="dropdown-item"
                                               href="{{route('products.sorted',['shop'=>request()->segment(1),'sort'=>'price_asc'])}}">ფასი
                                                ზრდადი</a></li>
                                        <li><a class="dropdown-item"
                                               href="{{route('products.sorted',['shop'=>request()->segment(1),'sort'=>'price_desc'])}}">ფასი
                                                კლებადი</a></li>
                                        <li><a class="dropdown-item"
                                               href="{{route('products.sorted',['shop'=>request()->segment(1),'sort'=>'oldest'])}}">თარიღი
                                                ზრდადი</a></li>
                                        <li><a class="dropdown-item"
                                               href="{{route('products.sorted',['shop'=>request()->segment(1),'sort'=>'newest'])}}">თარიღი
                                                კლებადი</a></li>
                                    </ul>
                                </div>
                                <!-- Single Wedge Start -->
                            </div>
                            <!-- Right Side End -->
                        </div>
                        <!-- Shop Top Area End -->

                        <!-- PRODUCTS AREA -->
                        <div class="shop-bottom-area">
                            <!-- Tab Content Area Start -->
                            <div id="productstarget2">
                                <div class="row">
                                    <div class="col">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="shop-grid">
                                                {{-- Product Area --}}
                                                <div class="row mb-n-30px justify-content-center">
                                                    @foreach($shop->products as $product)
                                                        <div class="col-md-4 col-sm-6 col-6 mb-30px">
                                                            @auth
                                                                <div class="d-flex justify-content-around align-items-center">
                                                                    <form action="{{route('product.update',['shop'=>request()->segment(1)])}}"
                                                                          method="post">
                                                                        @csrf
                                                                        <input type="hidden" name="id"
                                                                               value="{{$product->id}}">
                                                                        <button id="editproductmain" data-open-edit
                                                                                hx-target="#editproductmodal"
                                                                                hx-get="{{route('product.edit',['shop'=>request()->segment(1),'product'=>$product->id,'initiator'=>'allproducts'])}}">
                                                                            <img style="height: 30px;width: 30px;margin-bottom: 20px; cursor:pointer"
                                                                                 src="{{asset('assets/icons/edit_icon.svg')}}"
                                                                                 alt="">
                                                                        </button>
                                                                    </form>
                                                                    <form
                                                                            class="deletefrommaingalform"
                                                                            action="{{route('product.delete',['shop'=>request()->segment(1)])}}"
                                                                          method="post"

                                                                          hx-post="{{route('product.delete.htmx2',['shop'=>request()->segment(1)])}}"
                                                                          hx-target="#productstarget2"
                                                                    >
                                                                        @csrf
                                                                        <input type="hidden" name="shopid"
                                                                               value="{{$shop->id}}">
                                                                        <input type="hidden" name="id"
                                                                               value="{{$product->id}}">
                                                                        <button class="deletebutton"
                                                                                style="display: none "

                                                                        ></button>
                                                                        <button type="button" class="deletemaingalproduct">
                                                                            <img style="height: 30px;width: 30px;margin-bottom: 20px;cursor:pointer"
                                                                                 src="{{asset('assets/icons/delete_remove_icon.svg')}}"
                                                                                 alt="">
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            @endauth
                                                            <div class="product">

                                                                <div class="thumb">
                                                                    <a style="border-radius: 15px!important"

                                                                       data-bs-target="#exampleModal"
                                                                       data-bs-toggle="modal"
                                                                       hx-target="#quickviewtarget"
                                                                       hx-get="{{route('quickView', ['shop'=>$shop->slug,'product' => $product->id])}}"
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
                                                                <span class="category mt-2">
                                                                                                 <a href="{{route('categories',['shop'=>request()->segment(1),'category'=>$product->category->slug])}}">{{$product->category->name}}</a>

                                                                </span>
                                                                    @endif
                                                                    <h5 class="title text-center">
                                                                        <a
                                                                                href="{{route('single.product', ['shop'=>$shop->slug,'product' => $product->slug])}}">{{$product->name}}
                                                                        </a>
                                                                    </h5>
                                                                    <span class="price">
                                            <span class="new">₾ {{$product->price}}</span>
                                                                </span>
                                                                </div>
                                                                <div class="actions">

                                                                </div>

                                                            </div>

                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tab Content Area End -->
                            <!--  Pagination Area Start -->
                            <div>

                            </div>
                            {{--                            {{ $shop->products->links() }}--}}
                            <div class="pro-pagination-style text-center text-lg-end" data-aos="fade-up"
                                 data-aos-delay="200">
                                <div class="pages">

                                </div>
                            </div>
                            <!--  Pagination Area End -->
                        </div>
                        <!-- PRODUCTS AREA -->
                    </div>
                    <!-- left Sidebar Categories -->
                    <div class="col-lg-3 order-lg-first col-md-12 order-md-first">
                        <div class="shop-sidebar-wrap">
                            <!-- Categories -->
                            <div class="sidebar-widget">
                                <h4 class="sidebar-title">კატეგორიები</h4>
                                <div class="sidebar-widget-category">

                                    @include('components.categorieslist')

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <dialog class="dialog" style="" id="editproductmodal" data-edit-modal>


    </dialog>
@endsection