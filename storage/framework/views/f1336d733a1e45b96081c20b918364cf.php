<form style="height: 100%"



>
    <div id="editerrors"></div>
    <?php echo csrf_field(); ?>
    <input type="hidden" name="initiator" value="<?php echo e($initiator); ?>">
    <input type="hidden" name="shopid" value="<?php echo e($shop->id); ?>">
    <input type="hidden" name="categoryid" value="<?php echo e($product->category->id); ?>">
    <input type="hidden" name="id" id="productid" value="<?php echo e($product->id); ?>">
    <input class="form-input" type="text" name="name" placeholder="პროდუქტის სახელი" value="<?php echo e($product->name); ?>">
    <input class="form-input" type="text" name="price" placeholder="ფასი" value="<?php echo e($product->price); ?>">
    <input class="form-input" type="text" name="SKU" placeholder="კოდი" value="<?php echo e($product->SKU); ?>">

    


    <textarea style="height: 170px;line-height: 1.2!important;" class="form-input"
              name="description"
              placeholder="აღწერა"><?php echo e($product->description); ?>

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
        <?php $__currentLoopData = $product->specs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="d-flex justify-content-between mb-2">
                <input type="hidden" name="old_spec_id[]" value="<?php echo e($spec->id); ?>">
                <input style="padding:0 10px;display:  inline-block;max-width: 120px;margin-bottom:0"

                       class="form-input" type="text" name="old_spec[]" value="<?php echo e($spec->name); ?>"
                       placeholder="სპეციფიკაცია">
                <input style="padding:0 10px;display: inline-block;max-width: 150px;margin-bottom:0"
                       class="form-input" type="text" name="old_value[]" value="<?php echo e($spec->value); ?>"
                       placeholder="ინფორმაცია">
                <button style="display: inline-block;padding: 0;width: 50px" type="button"
                        class="button-31 removeButton2">
                    <svg style="pointer-events: none;" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                         viewBox="0 0 24 24">
                        <path fill="white" d="M19 12.998H5v-2h14z"/>
                    </svg>
                </button>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php if($shop->settings->first()->use_category): ?>
        <select id="category_id" name="category" class="form-input line-height-1">
            <option
                    value="<?php echo e($product->category->id); ?>" selected><?php echo e($product->category->name); ?></option>
            <?php $__currentLoopData = $shop->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <option
                        value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    <?php endif; ?>
    <div class="d-flex flex-column align-items-start mb-2">
        <div class=" mt-1">
            <input id="main_page" style="height: 25px;" name="main_page" class="form-check-input" <?php if($product->main_page==1): ?>  checked
                   <?php endif; ?>
                   type="checkbox">
            <label style="margin-bottom: 0!important;margin-top: 7px"
                   for="main_page">
                დაემატოს საერთო გალერეაში
            </label>
        </div>








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

    <?php if(!$product->getMedia('product_image1')->isempty()): ?>
        <div class="d-flex flex-row gap-2 align-items-center justify-content-center mt-1">

            <img style="width: 100px;height: 150px;border-radius: 10%" class="imagePreview"
                 src="<?php echo e($product->getMedia('product_image1')[0]->getUrl()); ?>">

            <div class="d-flex flex-column justify-content-around align-items-center w-100 gap-2">
                <button style="width: max-content" type="button" data-product-editnewopload
                        class="button-31 uploadimages">შეცვლა
                </button>
                <span class="text-center" id="editnewfilename"></span>
            </div>
            <br>

        </div>
    <?php endif; ?>

    <?php if(!$product->getMedia('product_image2')->isempty()): ?>
        <div class="d-flex flex-row gap-2 align-items-center justify-content-center mt-1 imagecontainer ">
            <img style="width: 100px;height: 150px;border-radius: 10%" class="imagePreview"
                 src="<?php echo e($product->getMedia('product_image2')[0]->getUrl()); ?>">
            <div class="d-flex flex-column gap-2 justify-content-center align-items-center w-100">
                <button style="width: max-content" type="button" data-product-editnewopload2
                        class="button-31 uploadimages">შეცვლა
                </button>
                <span class="text-center" id="editnewfilename2"></span>

                <input type="hidden" id="media_id2" name="media_id"
                       value="<?php echo e($product->getMedia('product_image2')[0]->id); ?>">
                <button style="width: max-content"
                        hx-post="<?php echo e(route('admin.product.removeimage',['shop'=>request()->segment(1)])); ?>"
                        hx-include="[name='_token'],  #media_id2, #productid"
                        type="button"
                        class="button-31 deleteimg">წაშლა
                </button>

            </div>
            <br>
        </div>
    <?php else: ?>
        <div class="d-flex flex-row gap-2 align-items-center justify-content-center mt-1">
            <img style="width: 100px;height: 150px;border-radius: 10%" class="imagePreview"
                 src="<?php echo e(asset('assets/images/noimage.jpg')); ?>">
            <div class="d-flex flex-column gap-2 justify-content-center align-items-center w-100">
                <button style="width: max-content" type="button" data-product-editnewopload2
                        class="button-31 uploadimages">შეცვლა
                </button>
                <span class="text-center" id="editnewfilename2"></span>

            </div>
            <br>
        </div>
    <?php endif; ?>
    <?php if(!$product->getMedia('product_image3')->isempty()): ?>
        <div class="d-flex flex-row gap-2 align-items-center justify-content-center mt-1 imagecontainer">
            <img style="width: 100px;height: 150px;border-radius: 10%" class="imagePreview"
                 src="<?php echo e($product->getMedia('product_image3')[0]->getUrl()); ?>">
            <div class="d-flex flex-column gap-2 justify-content-center align-items-center w-100">
                <button style="width: max-content" type="button" data-product-editnewopload3
                        class="button-31 uploadimages">შეცვლა
                </button>
                <span class="text-center" id="editnewfilename3"></span>

                <input type="hidden" id="media_id3" name="media_id"
                       value="<?php echo e($product->getMedia('product_image3')[0]->id); ?>">
                <button
                        hx-post="<?php echo e(route('admin.product.removeimage',['shop'=>request()->segment(1)])); ?>"
                        hx-include="[name='_token'], #media_id3, #productid"
                        style="width: max-content" type="button"
                        class="button-31 deleteimg">წაშლა
                </button>

            </div>
            <br>
        </div>
    <?php else: ?>
        <div class="d-flex flex-row gap-2 align-items-center justify-content-center mt-1">
            <img style="width: 100px;height: 150px;border-radius: 10%" class="imagePreview"
                 src="<?php echo e(asset('assets/images/noimage.jpg')); ?>">
            <div class="d-flex flex-column gap-2 justify-content-center align-items-center w-100">
                <button style="width: max-content" type="button" data-product-editnewopload3
                        class="button-31 uploadimages">შეცვლა
                </button>
                <span class="text-center" id="editnewfilename3"></span>
            </div>
            <br>
        </div>
    <?php endif; ?>
    <?php if(!$product->getMedia('product_image4')->isempty()): ?>
        <div class="d-flex flex-row gap-2 align-items-center align-items-center justify-content-center mt-1 imagecontainer">
            <img style="width: 100px;height: 150px;border-radius: 10%" class="imagePreview"
                 src="<?php echo e($product->getMedia('product_image4')[0]->getUrl()); ?>">
            <div class="d-flex flex-column gap-2 justify-content-around align-items-center w-100">
                <button style="width: max-content" type="button" data-product-editnewopload4
                        class="button-31 uploadimages">შეცვლა
                </button>
                <span class="text-center" id="editnewfilename4"></span>

                <input type="hidden" id="media_id4" name="media_id"
                       value="<?php echo e($product->getMedia('product_image4')[0]->id); ?>">
                <button style="width: max-content"
                        hx-post="<?php echo e(route('admin.product.removeimage',['shop'=>request()->segment(1)])); ?>"
                        hx-include="[name='_token'], #media_id4, #productid"
                        type="button"
                        class="button-31 deleteimg">წაშლა
                </button>
            </div>
            <br>
        </div>
    <?php else: ?>
        <div class="d-flex flex-row gap-2 align-items-center align-items-center justify-content-center mt-1">
            <img style="width: 100px;height: 150px;border-radius: 10%" class="imagePreview"
                 src="<?php echo e(asset('assets/images/noimage.jpg')); ?>">
            <div class="d-flex flex-column gap-2 justify-content-around align-items-center w-100">
                <button style="width: max-content" type="button" data-product-editnewopload4
                        class="button-31 uploadimages">შეცვლა
                </button>
                <span class="text-center" id="editnewfilename4"></span>
            </div>
            <br>
        </div>
    <?php endif; ?>


    <div class="d-flex align-items-center justify-content-center  mt-5 mb-2">
        <button STYLE="width: min-content;margin-right: 20px" type="button"
                data-close-edit id="closeedit" class="button-31">დახურვა
        </button>
        <button STYLE="width: min-content;margin-left: 20px" type="button"
                class="button-31 updateproduct"
                hx-post="<?php echo e(route('product.update.htmx',['shop'=>request()->segment(1),'product'=>$product->id])); ?>"
                <?php if($initiator==='main'): ?>
                    hx-target="#addtarget"
                <?php endif; ?>
                <?php if($initiator==='allproducts'): ?>
                    hx-target="#productstarget2"
                <?php endif; ?>
                        <?php if($initiator==='category'): ?>
                    hx-target="#categorycontainer"

                        <?php endif; ?>
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


<script src="<?php echo e(asset('assets/js/webp.editProduct.js')); ?>"></script><?php /**PATH E:\HERD\catalogue\resources\views/htmx/product/editproduct.blade.php ENDPATH**/ ?>