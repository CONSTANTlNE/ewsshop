<form style="height: 100%"
{{--      action="{{route('product.update',['shop'=>request()->segment(1),'product'=>$product->id])}}"--}}
{{--      method="post"--}}

>
    <div id="editerrors"></div>
    @csrf
    <input type="hidden" name="initiator" value="{{$initiator}}">
    <input type="hidden" name="shopid" value="{{$shop->id}}">
    <input type="hidden" name="categoryid" value="{{$product->category->id}}">
    <input type="hidden" name="id" id="productid" value="{{$product->id}}">
    <input class="form-input" type="text" name="name" placeholder="პროდუქტის სახელი" value="{{$product->name}}">
    <input class="form-input" type="text" name="price" placeholder="ფასი" value="{{$product->price}}">
    <input class="form-input" type="text" name="SKU" placeholder="კოდი" value="{{$product->SKU}}">

    {{--<input class="form-input" type="text" name="description" placeholder="აღწერა">--}}


    <textarea style="height: 170px;line-height: 1.2!important;" class="form-input"
              name="description"
              placeholder="აღწერა">{{$product->description}}
    </textarea>


    <template id="specstemplate2">
        <div class="d-flex justify-content-between mb-2">
            <input style="padding:0 10px;display:  inline-block;max-width: 120px;margin-bottom:0"
                   class="form-input" type="text" name="new_spec[]"
                   placeholder="სპეციფიკაცია">
            <input style="padding:0 10px;display: inline-block;max-width: 150px;margin-bottom:0"
                   class="form-input" type="text" name="new_value[]"
                   placeholder="   ინფორმაცია">
            <button style="display: inline-block;padding: 0;width: 50px" type="button"
                    class="button-31 removeButton2">
                <svg style="pointer-events: none;" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                     viewBox="0 0 24 24">
                    <path fill="white" d="M19 12.998H5v-2h14z"/>
                </svg>
            </button>
        </div>
    </template>
    <div class="d-flex justify-content-between mb-2">
        <input disabled style="display: inline-block;max-width: 120px;margin-bottom:0;background-color: lightgray"
               class="form-input" type="text" placeholder="სპეციფიკაცია">
        <input disabled style="display: inline-block;max-width: 150px;margin-bottom:0;background-color: lightgray"
               class="form-input" type="text" placeholder="   ინფორმაცია">
        <button id="addspec2" style="display: inline-block;padding: 0;width: 50px"
                type="button"
                class="button-31">
            <svg style="pointer-events: none" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                 viewBox="0 0 24 24">
                <path fill="white" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z"/>
            </svg>
        </button>
    </div>

    <div class="d-flex flex-column mb-2" id="specsdiv2">
        @foreach($product->specs as $spec)
            <div class="d-flex justify-content-between mb-2">
                <input type="hidden" name="old_spec_id[]" value="{{$spec->id}}">
                <input style="padding:0 10px;display:  inline-block;max-width: 120px;margin-bottom:0"

                       class="form-input" type="text" name="old_spec[]" value="{{$spec->name}}"
                       placeholder="სპეციფიკაცია">
                <input style="padding:0 10px;display: inline-block;max-width: 150px;margin-bottom:0"
                       class="form-input" type="text" name="old_value[]" value="{{$spec->value}}"
                       placeholder="ინფორმაცია">
                <button style="display: inline-block;padding: 0;width: 50px" type="button"
                        class="button-31 removeButton2">
                    <svg style="pointer-events: none;" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                         viewBox="0 0 24 24">
                        <path fill="white" d="M19 12.998H5v-2h14z"/>
                    </svg>
                </button>
            </div>
        @endforeach
    </div>
    @if($shop->settings->first()->use_category)
        <select id="category_id" name="category" class="form-input line-height-1">
            <option
                    value="{{$product->category->id}}" selected>{{$product->category->name}}</option>
            @foreach($shop->categories as $index => $category)

                <option
                        value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    @endif
    <div class="d-flex flex-column align-items-start mb-2">
        <div class=" mt-1">
            <input id="main_page" style="height: 25px;" name="main_page" class="form-check-input" @if($product->main_page==1)  checked
                   @endif
                   type="checkbox">
            <label style="margin-bottom: 0!important;margin-top: 7px"
                   for="main_page">
                დაემატოს საერთო გალერეაში
            </label>
        </div>
{{--        <div class=" mt-1">--}}
{{--            <input style="height: 25px;" name="category_gallery" class="form-check-input"--}}
{{--                   type="checkbox" @if($product->category_gallery==1)  checked @endif>--}}
{{--            <label style="margin-bottom: 0!important;margin-top: 7px"--}}
{{--                   for="flexCheckChecked">--}}
{{--                დაემატოს კატეგორიის გალერეაში--}}
{{--            </label>--}}
{{--        </div>--}}
    </div>

    <input type="hidden" name="image_1" data-converted-newprodimg
           class="editnewproductimage">
    <input type="hidden" name="image2" data-converted-newprodimg2
           class="editnewproductimage2">
    <input type="hidden" name="image3" data-converted-newprodimg3
           class="editnewproductimage3">
    <input type="hidden" name="image4" data-converted-newprodimg4
           class="editnewproductimage4">

    <input style="display: none" type="file" data-newprod-editimage
           onchange="editconvertToWebP()" class="imageInput">
    <input style="display: none" type="file" data-newprod-editimage2
           onchange="editconvertToWebP2()" class="imageInput">
    <input style="display: none" type="file" data-newprod-editimage3
           onchange="editconvertToWebP3()" class="imageInput">
    <input style="display: none" type="file" data-newprod-editimage4
           onchange="editconvertToWebP4()" class="imageInput">

    @if(!$product->getMedia('product_image1')->isempty())
        <div class="d-flex flex-row gap-2 align-items-center justify-content-center mt-1">

            <img style="width: 100px;height: 150px;border-radius: 10%" class="imagePreview"
                 src="{{$product->getMedia('product_image1')[0]->getUrl()}}">

            <div class="d-flex flex-column justify-content-around align-items-center w-100 gap-2">
                <button style="width: max-content" type="button" data-product-editnewopload
                        class="button-31 uploadimages">შეცვლა
                </button>
                <span class="text-center" id="editnewfilename"></span>
            </div>
            <br>

        </div>
    @endif

    @if(!$product->getMedia('product_image2')->isempty())
        <div class="d-flex flex-row gap-2 align-items-center justify-content-center mt-1 imagecontainer ">
            <img style="width: 100px;height: 150px;border-radius: 10%" class="imagePreview"
                 src="{{$product->getMedia('product_image2')[0]->getUrl()}}">
            <div class="d-flex flex-column gap-2 justify-content-center align-items-center w-100">
                <button style="width: max-content" type="button" data-product-editnewopload2
                        class="button-31 uploadimages">შეცვლა
                </button>
                <span class="text-center" id="editnewfilename2"></span>

                <input type="hidden" id="media_id2" name="media_id"
                       value="{{$product->getMedia('product_image2')[0]->id}}">
                <button style="width: max-content"
                        hx-post="{{route('admin.product.removeimage',['shop'=>request()->segment(1)])}}"
                        hx-include="[name='_token'],  #media_id2, #productid"
                        type="button"
                        class="button-31 deleteimg">წაშლა
                </button>

            </div>
            <br>
        </div>
    @else
        <div class="d-flex flex-row gap-2 align-items-center justify-content-center mt-1">
            <img style="width: 100px;height: 150px;border-radius: 10%" class="imagePreview"
                 src="{{asset('assets/images/noimage.jpg')}}">
            <div class="d-flex flex-column gap-2 justify-content-center align-items-center w-100">
                <button style="width: max-content" type="button" data-product-editnewopload2
                        class="button-31 uploadimages">შეცვლა
                </button>
                <span class="text-center" id="editnewfilename2"></span>

            </div>
            <br>
        </div>
    @endif
    @if(!$product->getMedia('product_image3')->isempty())
        <div class="d-flex flex-row gap-2 align-items-center justify-content-center mt-1 imagecontainer">
            <img style="width: 100px;height: 150px;border-radius: 10%" class="imagePreview"
                 src="{{$product->getMedia('product_image3')[0]->getUrl()}}">
            <div class="d-flex flex-column gap-2 justify-content-center align-items-center w-100">
                <button style="width: max-content" type="button" data-product-editnewopload3
                        class="button-31 uploadimages">შეცვლა
                </button>
                <span class="text-center" id="editnewfilename3"></span>

                <input type="hidden" id="media_id3" name="media_id"
                       value="{{$product->getMedia('product_image3')[0]->id}}">
                <button
                        hx-post="{{route('admin.product.removeimage',['shop'=>request()->segment(1)])}}"
                        hx-include="[name='_token'], #media_id3, #productid"
                        style="width: max-content" type="button"
                        class="button-31 deleteimg">წაშლა
                </button>

            </div>
            <br>
        </div>
    @else
        <div class="d-flex flex-row gap-2 align-items-center justify-content-center mt-1">
            <img style="width: 100px;height: 150px;border-radius: 10%" class="imagePreview"
                 src="{{asset('assets/images/noimage.jpg')}}">
            <div class="d-flex flex-column gap-2 justify-content-center align-items-center w-100">
                <button style="width: max-content" type="button" data-product-editnewopload3
                        class="button-31 uploadimages">შეცვლა
                </button>
                <span class="text-center" id="editnewfilename3"></span>
            </div>
            <br>
        </div>
    @endif
    @if(!$product->getMedia('product_image4')->isempty())
        <div class="d-flex flex-row gap-2 align-items-center align-items-center justify-content-center mt-1 imagecontainer">
            <img style="width: 100px;height: 150px;border-radius: 10%" class="imagePreview"
                 src="{{$product->getMedia('product_image4')[0]->getUrl()}}">
            <div class="d-flex flex-column gap-2 justify-content-around align-items-center w-100">
                <button style="width: max-content" type="button" data-product-editnewopload4
                        class="button-31 uploadimages">შეცვლა
                </button>
                <span class="text-center" id="editnewfilename4"></span>

                <input type="hidden" id="media_id4" name="media_id"
                       value="{{$product->getMedia('product_image4')[0]->id}}">
                <button style="width: max-content"
                        hx-post="{{route('admin.product.removeimage',['shop'=>request()->segment(1)])}}"
                        hx-include="[name='_token'], #media_id4, #productid"
                        type="button"
                        class="button-31 deleteimg">წაშლა
                </button>
            </div>
            <br>
        </div>
    @else
        <div class="d-flex flex-row gap-2 align-items-center align-items-center justify-content-center mt-1">
            <img style="width: 100px;height: 150px;border-radius: 10%" class="imagePreview"
                 src="{{asset('assets/images/noimage.jpg')}}">
            <div class="d-flex flex-column gap-2 justify-content-around align-items-center w-100">
                <button style="width: max-content" type="button" data-product-editnewopload4
                        class="button-31 uploadimages">შეცვლა
                </button>
                <span class="text-center" id="editnewfilename4"></span>
            </div>
            <br>
        </div>
    @endif


    <div class="d-flex align-items-center justify-content-center  mt-5 mb-2">
        <button STYLE="width: min-content;margin-right: 20px" type="button"
                data-close-edit id="closeedit" class="button-31">დახურვა
        </button>
        <button STYLE="width: min-content;margin-left: 20px" type="button"
                class="button-31 updateproduct"
                hx-post="{{route('product.update.htmx',['shop'=>request()->segment(1),'product'=>$product->id])}}"
                @if($initiator==='main')
                    hx-target="#addtarget"
                @endif
                @if($initiator==='allproducts')
                    hx-target="#productstarget2"
                @endif
                        @if($initiator==='category')
                    hx-target="#categorycontainer"

                        @endif
                hx-target-error="#editerrors"
                id="editproductform"


        >შენახვა
        </button>
    </div>

</form>


<script>


    //Reinitialize close button for edit modal
    // if (typeof closeeidit !== 'undefined') {
    //     closeedit.destroy()
    // }

    // open function is in leyout
    closeedit = document.querySelector("[data-close-edit]")

    closeedit.addEventListener('click', () => {

        document.querySelector("[data-edit-modal]").close()

        document.body.style.overflow = 'auto';

    })


    // Specs form edit Modal

    document
        .getElementById("addspec2")
        .addEventListener("click", function () {
            var template = document.getElementById("specstemplate2");
            var clonedTemplate = document.importNode(template.content, true);
            document.getElementById("specsdiv2").appendChild(clonedTemplate);
        });
    document.getElementById("specsdiv2").addEventListener("click", function (e) {
        if (e.target.classList.contains("removeButton2")) {

            e.target.parentNode.remove();

        }
    });


    // Image Preview

    uploadProfileImage = document.querySelectorAll('.uploadimages');
    imagePreview = document.querySelectorAll('.imagePreview')
    imageInput = document.querySelectorAll('.imageInput')


    if (uploadProfileImage !== null) {

        uploadProfileImage.forEach((el, index) => {
            el.addEventListener('click', function () {

                imageInput[index].addEventListener('change', function () {
                    const input = this;
                    if (input.files && input.files[0]) {
                        const reader = new FileReader();
                        reader.onload = function (e) {
                            imagePreview[index].src = e.target.result;
                            imagePreview[index].style.display = 'block';
                        }
                        reader.readAsDataURL(input.files[0]);
                    }
                })
            });


        });
    }

</script>

<script>

    document.querySelector('.updateproduct').addEventListener('click', () => {


        document.body.style.overflow = 'auto';


    })




    imagecontainer = document.querySelectorAll('.imagecontainer')
    document.querySelectorAll('.deleteimg').forEach((el, index) => {
        el.addEventListener('click', () => {
            imagecontainer[index].remove();
        })
    })

</script>


<script src="{{asset('assets/js/webp.editProduct.js')}}"></script>