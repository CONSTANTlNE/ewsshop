@if(!$shop->categories->isEmpty())

    @foreach($shop->categories as $category)
        @if($category->products->isNotEmpty() )
            <div class="banner-area style-three pb-100px">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            @auth
                                <div class=" d-flex flex-column justify-content-center align-items-center">
                                    <button style="width: max-content; margin: auto" type="button" data-category-image
                                            class="button-31">ფოტოს შეცვლა
                                    </button>
                                    <span class="categoryimagefilename"></span>
                                </div>
                                <form class="categoryimageform" action="{{route('categoryimageupdate')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$category->id}}">
                                    <div style="width: max-content"
                                         class="d-flex flex-column justify-content-around align-items-center">
                                        <br>
                                        <input style="display: none" type="file" data-category-imagefile
                                               class="categoryimage">
                                        <input type="hidden" name="categoryimage" data-converted-categoryimage>
                                    </div>
                                </form>
                            @endauth

                            <div style="border-radius: 15px!important" class="single-banner mb-lm-30px">
                                {{--                                @php  dd($category->media->isEmpty()) @endphp--}}
                                @if($category->media->isEmpty())
                                    @foreach($category->products->first()->media as $media1)
                                        @if($loop->first)
                                            <img style="object-fit: cover" class="categoryimg" src="{{$media1->getUrl()}}" alt="">
                                        @endif
                                    @endforeach

                                @else
                                    @foreach($category->media as $media)
                                        <img style="object-fit: cover" class="categoryimg" src="{{$media->getUrl()}}" alt="">
                                    @endforeach
                                @endif
                                <div class="banner-content nth-child-3 d-flex align-items-center justify-content-center">
                                    {{--                                <h3 class="title">--}}
                                    {{--                                    {{$category->name}}--}}
                                    {{--                                </h3>--}}
                                    <br>
                                    <a style="width: max-content!important;padding-right: 20px;padding-left: 20px"
                                       href="{{route('categories',['shop'=>request()->segment(1),'category'=>$category->slug])}}"
                                       class="shop-link">{{$category->name}}

                                    </a>
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
                            <div class="row mb-n-30px justify-content-center">
                                @foreach($category->products->where('category_gallery',1) as $product)

                                    <div class="col-md-4 col-sm-6 col-6 mb-30px maincatprod">
                                        @auth
                                            <div class="d-flex justify-content-around align-items-center">
                                                {{-- Update Form--}}
                                                <form action="{{route('product.update',['shop'=>request()->segment(1)])}}"
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
                                                <form class="deletefrommaincatform"
                                                      action="{{route('product.delete',['shop'=>request()->segment(1)])}}"
                                                      method="post"
                                                      target="nocontent"
                                                >
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$product->id}}">
                                                    <button  class="deletebutton2"
                                                             style="display: none "
                                                             hx-post="{{route('product.delete.htmx',['shop'=>request()->segment(1)])}}"
                                                             hx-target="#addtarget"
                                                    ></button>
                                                    <button type="button" class="deletemaincatprod">
                                                        <img style="height: 30px;width: 30px;margin-bottom: 20px;cursor:pointer"
                                                             src="{{asset('assets/icons/delete_remove_icon.svg')}}"
                                                             alt="">
                                                    </button>
                                                </form>
                                            </div>
                                        @endauth
                                        <section class="product">

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
                                                             alt="Product image {{$product->name}}"/>
                                                    @endif
                                                </a>
                                            </div>
                                            <article class="content">
                                                <span class="category mt-2"><a href="#">{{$category->name}}</a></span>
                                                <h5 class="title text-center">
                                                    <a href="{{route('single.product', ['shop'=>request()->segment(1),'product' => $product->slug])}}">{{$product->name}}
                                                    </a>


                                                </h5>
                                                <span class="price">
                                            <span class="new">₾ {{$product->price}}</span>
                                        </span>
                                            </article>
                                            {{--                                            <div class="actions">--}}

                                            {{--                                                <button class="action quickview" data-link-action="quickview"--}}
                                            {{--                                                        title="Quick view"--}}
                                            {{--                                                        data-bs-toggle="modal" data-bs-target="#exampleModal"><i--}}
                                            {{--                                                            class="pe-7s-look"></i></button>--}}

                                            {{--                                            </div>--}}

                                        </section>
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