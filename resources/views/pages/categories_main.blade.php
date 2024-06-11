
@if(!$shop->categories->isEmpty())

    @foreach($shop->categories as $category)
        @if(  $category->products->isNotEmpty())
        <div class="banner-area style-three pb-100px">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div style="border-radius: 15px!important" class="single-banner mb-lm-30px">
                            <img src="assets/images/banner/8.webp" alt="">
                            <div  class="banner-content nth-child-3 d-flex align-items-center justify-content-center">
{{--                                <h3 class="title">--}}
{{--                                    {{$category->name}}--}}
{{--                                </h3>--}}
                                <br>
                                <a style="width: max-content!important;padding-right: 10px;padding-left: 10px" href="{{route('categories',['shop'=>request()->segment(1),'category'=>$category->slug])}}" class="shop-link">{{$category->name}} <i class="fa fa-arrow-right"
                                                                                               aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-area pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="row mb-n-30px">
                            @php
                            @endphp
                            @foreach($category->products->where('category_gallery',1) as $product)

                                <div class="col-md-4 col-sm-6 col-6 mb-30px">
                                    @auth
                                        <div class="d-flex justify-content-around align-items-center">
                                            <form action="{{route('product.update',['shop'=>request()->segment(1)])}}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$product->id}}">
                                                <button id="editproductmain" data-open-edit
                                                        hx-target="#editproductmodal"
                                                        hx-get="{{route('product.edit',['shop'=>request()->segment(1),'product'=>$product->id])}}">
                                                    <img style="height: 30px;width: 30px;margin-bottom: 20px; cursor:pointer"
                                                         src="{{asset('assets/icons/edit_icon.svg')}}" alt="">
                                                </button>
                                            </form>
                                            <form action="{{route('product.delete',['shop'=>request()->segment(1)])}}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$product->id}}">
                                                <button>
                                                    <img style="height: 30px;width: 30px;margin-bottom: 20px;cursor:pointer"
                                                         src="{{asset('assets/icons/delete_remove_icon.svg')}}" alt="">
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
                                               hx-get="{{route('quickView', ['shop'=>request()->segment(1),'product' => $product->id])}}"

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
                                            <span class="category"><a href="#">{{$category->name}}</a></span>
                                            <h5 class="title text-center"><a
                                                        href="single-product.html">{{$product->name}}
                                                </a>
                                            </h5>
                                            <span class="price">
                                            <span class="new">₾ {{$product->price}}</span>
                                        </span>
                                        </div>
                                        <div class="actions">

                                            <button class="action quickview" data-link-action="quickview"
                                                    title="Quick view"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="pe-7s-look"></i></button>

                                        </div>

                                    </div>
                                </div>

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    @endforeach
@endif