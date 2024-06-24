@if($shop->settings->first()->use_main_gallery===1)
    <div class="product-area pb-100px mt-3">
        <p>{{session('deletesuccess')}}</p>
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
                                        <form  class="deletefrommaingalform" action="{{route('product.delete',['shop'=>request()->segment(1)])}}"
                                               method="post"
                                               target="nocontent"
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
                                           hx-get="{{route('quickView', ['shop'=>$shop->slug,'product' => $product->id])}}"
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
                                            <span class="category mt-2 text-center">
                                                              <a href="{{route('categories',['shop'=>request()->segment(1),'category'=>$product->category->slug])}}">{{$product->category->name}}</a>

                                            </span>
                                        <h5 class="title text-center"><a
                                                    href="{{route('single.product', ['shop'=>$shop->slug,'product' => $product->slug])}}">{{$product->name}}
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
@include('components.bottomslider')


<!-- Fashion Area Start -->
{{--    @include('components.banners.indexmiddlebanner')--}}
<!-- Fashion Area End -->
<!-- Feature Area Srart -->
{{--    @include('components.features')--}}
<!-- Feature Area End -->
<!-- Blog area start from here -->
{{-- @include('components.blogarea')--}}
<!-- Blog area end here -->


{{--<dialog class="dialog" style="" id="editproductmodal" data-edit-modal>--}}

{{--    <div id="editerrors"></div>--}}
{{--</dialog>--}}


<script>
     deletemaingalproduct = document.querySelectorAll('.deletemaingalproduct')
     maingpagegalprod = document.querySelectorAll('.maingpagegalprod')
      deletebutton = document.querySelectorAll('.deletebutton')


     deletemaingalproduct.forEach((el, index) => {
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
                         setTimeout(() => {
                             deletebutton[index].click()
                         }, 500)
                     }
                 });
         })
     })


      deletemaincatprod = document.querySelectorAll('.deletemaincatprod')
      maincatprod = document.querySelectorAll('.maincatprod')
      deletebutton2 = document.querySelectorAll('.deletebutton2')


    deletemaincatprod.forEach((el, index) => {
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
            }).then((result) => {
                if (result.isConfirmed) {
                    deletebutton2[index].click()
                }
            });
        })
    })

</script>

{{--Reinitialize open edit modal--}}
<script>
    openedit = document.querySelectorAll("[data-open-edit]")


    openedit.forEach(el => {
        el.addEventListener('click', () => {
            document.querySelector("[data-edit-modal]").showModal()
            document.body.style.overflow = 'hidden';

        })
    })

</script>


@if(session('deletesuccess'))
    <script>

            Swal.fire({
                position: "center",
                icon: "success",
                title: "პროდუქტი წარმატებით წაიშალა",
                showConfirmButton: false,
                timer: 2500
            });

    </script>
@endif

<script>

    //Category Image Upload

    categoryimagebtn = document.querySelectorAll('[data-category-image]')
    categoryimagebtn.forEach((el, index) => {
        el.addEventListener('click', () => {

            document.querySelectorAll("[data-category-imagefile]")[index].click()

            document.querySelectorAll("[data-category-imagefile]")[index].addEventListener('change', () => {

                function convertToWebpcategory() {

                    const inputElement = document.querySelectorAll("[data-category-imagefile]")

                    let categoryimagefilename = document.querySelectorAll('.categoryimagefilename')

                    categoryimagefilename[index].textContent = inputElement[index].files[0].name

                    // თუ ფაილი არჩეული არაა
                    if (inputElement[index].files.length === 0) {
                        console.error("No file selected.");
                        return;
                    }

                    const file = inputElement[index].files[0];
                    const reader = new FileReader();

                    reader.onload = function (event) {
                        const image = new Image();
                        image.onload = function () {
                            const canvas = document.createElement("canvas");
                            const ctx = canvas.getContext("2d");

                            // Set canvas dimensions
                            canvas.width = image.width;
                            canvas.height = image.height;

                            // Draw image on canvas
                            ctx.drawImage(image, 0, 0, image.width, image.height);

                            // Convert canvas to base64 string (WebP format)
                            const base64WebP = canvas.toDataURL("image/webp", 0.7);

                            // Set the base64 string as the value of the hidden input field
                            webpinput = document.querySelectorAll("[data-converted-categoryimage]")
                            webpinput[index].value = base64WebP;

                            // Submit the form
                            // document.getElementById("existingForm").submit();
                            document.querySelectorAll('.categoryimageform')[index].submit()
                        };
                        image.src = event.target.result;

                    };
                    reader.readAsDataURL(file);
                }

                convertToWebpcategory()
            })
        })
    })


</script>