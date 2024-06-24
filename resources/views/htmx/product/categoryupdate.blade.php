<div class="row">
    <div class="col-lg-9 order-lg-last col-md-12 order-md-last">

        <!-- Shop Top Area Start -->
        <div class="shop-top-bar d-flex">
            <p style="width: max-content!important;padding-left: 10px;padding-right: 10px"
               class="compare-product ">კატეგორია {{$categories->name}}</p>
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

                        <i class="fa fa-angle-down"></i></button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a class="dropdown-item"
                               href="{{route('categories.sorted',['shop'=>$shop->slug,'category'=>$categories->slug,'sort'=>'price_asc'])}}">ფასი
                                ზრდადი</a></li>
                        <li><a class="dropdown-item"
                               href="{{route('categories.sorted',['shop'=>$shop->slug,'category'=>$categories->slug,'sort'=>'price_desc'])}}">ფასი
                                კლებადი</a></li>
                        <li><a class="dropdown-item"
                               href="{{route('categories.sorted',['shop'=>$shop->slug,'category'=>$categories->slug,'sort'=>'oldest'])}}">თარიღი
                                ზრდადი</a></li>
                        <li><a class="dropdown-item"
                               href="{{route('categories.sorted',['shop'=>$shop->slug, 'category'=>$categories->slug,'sort'=>'newest'])}}">თარიღი
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
            <div id="categorypage">
                <div class="row">
                    <div class="col">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="shop-grid">
                                {{-- Product Area --}}
                                <div class="row mb-n-30px justify-content-center">
                                    @foreach($categories->products as $product)
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
                                                                hx-get="{{route('product.edit',['shop'=>request()->segment(1),'product'=>$product->id,'initiator'=>'category','categoryid'=>$categories->id])}}">
                                                            <img style="height: 30px;width: 30px;margin-bottom: 20px; cursor:pointer"
                                                                 src="{{asset('assets/icons/edit_icon.svg')}}"
                                                                 alt="">
                                                        </button>
                                                    </form>
                                                    <form action="{{route('product.delete',['shop'=>request()->segment(1)])}}"
                                                          method="post">
                                                        @csrf
                                                        <input type="hidden" name="id"
                                                               value="{{$product->id}}">
                                                        <button class="deletecatbutton" type="submit" ></button>
                                                        <button type="button" class="deleteproductfromcat">
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
                                                                <span class="category mt-2"><a
                                                                            href="#">{{$categories->name}}</a></span>
                                                    <h5 class="title text-center"><a
                                                                href="single-product.html">{{$product->name}}
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
                    <ul>
                        <li><a href="{{route('products',['shop'=>request()->segment(1)])}}"
                               class="selected m-0"
                               @if(request()->routeIs('products') || request()->routeIs('products.sorted'))
                                   style="color: blue"
                                    @endif
                            >
                                ყველა
                                @php

                                        @endphp
                                <span>({{$productscount}})</span> </a></li>
                        @if($shop->settings->first()->use_category===1)
                            @foreach($shop->categories as $category)
                                <li>
                                    <a href="{{route('categories',['shop'=>request()->segment(1),'category'=>$category->slug])}}"
                                       class="selected m-0">
                                        {{$category->name}}
                                        <span>({{$category->products->count() }})</span> </a></li>
                            @endforeach
                        @endif

                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>



{{--<script>--}}
{{--    deletemaingalproduct = document.querySelectorAll('.deletemaingalproduct')--}}
{{--    maingpagegalprod = document.querySelectorAll('.maingpagegalprod')--}}
{{--    deletebutton = document.querySelectorAll('.deletebutton')--}}


{{--    deletemaingalproduct.forEach((el, index) => {--}}
{{--        el.addEventListener('click', () => {--}}
{{--            Swal.fire({--}}
{{--                title: "ნამდვილად გსურთ წაშლა?",--}}
{{--                // text: "You won't be able to revert this!",--}}
{{--                icon: "warning",--}}
{{--                showCancelButton: true,--}}
{{--                cancelButtonText: "გაუქმება",--}}
{{--                confirmButtonColor: "#3085d6",--}}
{{--                cancelButtonColor: "#d33",--}}
{{--                confirmButtonText: "წაშლე"--}}
{{--            })--}}
{{--                .then((result) => {--}}
{{--                    if (result.isConfirmed) {--}}
{{--                        setTimeout(() => {--}}
{{--                            deletebutton[index].click()--}}
{{--                        }, 500)--}}
{{--                    }--}}
{{--                });--}}
{{--        })--}}
{{--    })--}}


{{--    deletemaincatprod = document.querySelectorAll('.deletemaincatprod')--}}
{{--    maincatprod = document.querySelectorAll('.maincatprod')--}}
{{--    deletebutton2 = document.querySelectorAll('.deletebutton2')--}}


{{--    deletemaincatprod.forEach((el, index) => {--}}
{{--        el.addEventListener('click', () => {--}}
{{--            Swal.fire({--}}
{{--                title: "ნამდვილად გსურთ წაშლა?",--}}
{{--                // text: "You won't be able to revert this!",--}}
{{--                icon: "warning",--}}
{{--                showCancelButton: true,--}}
{{--                cancelButtonText: "გაუქმება",--}}
{{--                confirmButtonColor: "#3085d6",--}}
{{--                cancelButtonColor: "#d33",--}}
{{--                confirmButtonText: "წაშლე"--}}
{{--            }).then((result) => {--}}
{{--                if (result.isConfirmed) {--}}
{{--                    deletebutton2[index].click()--}}
{{--                }--}}
{{--            });--}}
{{--        })--}}
{{--    })--}}

{{--</script>--}}
<script>
    openedit = document.querySelectorAll("[data-open-edit]")


    openedit.forEach(el => {
        el.addEventListener('click', () => {
            document.querySelector("[data-edit-modal]").showModal()
            document.body.style.overflow = 'hidden';

        })
    })

</script>
<script>

        deleteproductfromcat = document.querySelectorAll('.deleteproductfromcat')
        console.log(deleteproductfromcat)
        deletecatbutton = document.querySelectorAll('.deletecatbutton')

        deleteproductfromcat.forEach((el, index) => {
            el.addEventListener('click', () => {

                Swal.fire({
                    title: "ნამდვილად გსურთ წაშლა?",
                    // text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    cancelButtonText: "გაუქმება",
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "წაშლე"
                })
                    .then((result) => {
                        if (result.isConfirmed) {
                            deletecatbutton[index].click()
                        }
                    });
            })
        })



</script>

