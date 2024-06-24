<!DOCTYPE html>
<html lang="zxx" dir="ltr">


<!-- Mirrored from htmldemo.net/hmart/hmart/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 May 2024 11:19:37 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($shop->name); ?></title>
    <meta name="robots" content="index, follow"/>
    <meta name="description" content="<?php echo e($shop->description); ?>">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/images/logo/logo2.png')); ?>"/>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
    <!-- CSS
    ============================================ -->

    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js','resources/css/app.css']); ?>


    <link rel="stylesheet" href="<?php echo e(asset('assets/myStyle.css')); ?>">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://unpkg.com/htmx.org@1.9.12"
            integrity="sha384-ujb1lZYygJmzgSwoxRggbCHcjc0rB2XoQrxeTUQyRjrOnlCoYta87iKBWq3EsdM2"
            crossorigin="anonymous"></script>
    <script src="https://unpkg.com/htmx.org@1.9.12/dist/ext/response-targets.js"></script>

    <script type="module">
        import BugsnagPerformance from '//d2wy8f7a9ursnm.cloudfront.net/v1/bugsnag-performance.min.js'

        BugsnagPerformance.start({apiKey: 'edc3d7c94b8f7fb25a4e9a7aa9432ff4'})
    </script>
</head>

<body hx-ext="response-targets">
<div class="main-wrapper">

    <?php echo $__env->make('components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('components.offcanvas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php if($shop->settings->first()->use_main_banner===1 && request()->routeIs('home')): ?>
        <?php echo $__env->make('components.banners.mainbanner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <?php if(auth()->guard()->check()): ?>
            <div style="width: 100%!important;" class="row">
                <div style="padding-right: 0!important;width: 100%!important;" class="col-12">
                    <div style="width: 100%!important;" class="section-title text-center">
                        
                        <dialog class="mainbannerdialog" id="mainbannermodal" style="" data-mainbanner-modal>
                            <form style="height: 100%"
                                  action="<?php echo e(route('main.banner.store',['shop'=>request()->segment(1)])); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <input class="form-input" type="text" name="bannertext" placeholder="სასურველი სათაური">

                                <input type="hidden" class="mainbannerhidden" name="mainbanner_image"
                                       data-converted-mainbanner>


                                <input style="display: none" type="file" data-mainbanner-image
                                       onchange="convertToWebPmain()">

                                <div class="d-flex flex-column gap-2 align-items-center justify-content-center mt-1">
                                    <div style="width: max-content">
                                        <button style="width: max-content" type="button" data-mainbanner-newopload
                                                class="button-31">ფოტო
                                        </button>
                                        <br>
                                        <span id="mainbannerfilename"></span>
                                    </div>
                                </div>
                                <div class="flex-row align-items-center mt-5">
                                    <button STYLE="width: min-content;margin-right: 20px" type="button"
                                            data-mainbanner-close class="button-31">დახურვა
                                    </button>
                                    <button STYLE="width: min-content;margin-left: 20px" type="submit"
                                            class="button-31">
                                        დამატება
                                    </button>
                                </div>
                            </form>
                        </dialog>
                        <button
                                data-mainbanner-open STYLE="width: max-content" class="button-31 mt-2">მთავარი ბანერის
                            დამატება
                        </button>
                        
                        <dialog class="editmainbannerdialog" id="editmainbannermodal" style=""
                                data-mainbanner-editmodal>


                        </dialog>


                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    
    <?php if(auth()->guard()->check()): ?>
        <div class="d-flex flex-row align-items-center justify-content-center gap-2 mb-5 mt-3">
            <button data-category-modal STYLE="width: max-content" class="button-31">კატეგორიის
                დამატება
            </button>
            <dialog class="dialog" style="" data-category>
                <div style="position:relative;height: 100%;">
                    <div id="caterrors"></div>
                    <form
                            action="<?php echo e(route('category.store',['shop'=>request()->segment(1)])); ?>" method="post"
                            hx-post="<?php echo e(route('category.store.htmx')); ?>"
                            hx-target="#categorieslist"
                            hx-target-error="#caterrors">
                        <?php echo csrf_field(); ?>
                        <input class="form-input" type="text" name="name"
                               placeholder="კატეგორიის დასახელება" autocomplete="off">

                        <div id="categorydiv"></div>
                        <div class=" d-flex justify-content-center align-items-center mt-2 mb-2">
                            <button STYLE="width: min-content;" type="submit" class="button-31">
                                დამატება
                            </button>
                        </div>
                    </form>
                    <div id="categorieslist" class="mb-2">
                        <div id="caterrors"></div>
                        <?php $__currentLoopData = $shop->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catindex => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div id="cat<?php echo e($catindex); ?>"
                                 class="d-flex  align-items-start justify-content-between mt-2 w-100">
                                <p style="display: inline-block;max-width: 290px!important;overflow: hidden"><?php echo e($category->name); ?></p>
                                <div class="d-flex">
                                    <form style="margin-bottom: 0!important;"
                                            hx-get="<?php echo e(route('category.edit.htmx')); ?>"
                                            hx-target="#cat<?php echo e($catindex); ?>">
                                        <input type="hidden" name="catid" value="<?php echo e($category->id); ?>">
                                        <button STYLE="width: min-content;">
                                            <img style="cursor: pointer!important"
                                                 src="<?php echo e(asset('assets/icons/edit_icon.svg')); ?>" alt="">
                                        </button>
                                    </form>
                                    <form class="deletecategoryalert" action="<?php echo e(route('category.delete')); ?> "
                                          method="post">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="catid" value="<?php echo e($category->id); ?>">
                                        <button class="deletecategorybuttonaction"></button>

                                    </form>
                                    <button type="button" class="deletecategorybutton" STYLE="width: min-content;">
                                        <img style="cursor: pointer!important;width: 24px; height: 24px"
                                             src="<?php echo e(asset('assets/icons/delete_remove_icon.svg')); ?>" alt="">
                                    </button>
                                </div>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div
                            
                            class="d-flex justify-content-center align-items-center">
                        <button style="width: min-content;" type="button" data-closecat-modal
                                class="button-31">დახურვა
                        </button>
                    </div>
                </div>
            </dialog>

            <button data-open-modal STYLE="width: max-content;" class="button-31"
                    hx-get="<?php echo e(route('addprductmodal')); ?>"
                    hx-target="#addproductmodal"
            >
                პროდუქტის დამატება
            </button>
            <dialog class="dialog" style="" data-modal>

                <form style="height: 100%"
                      
                      hx-post="<?php echo e(route('product.store.htmx',['shop'=>request()->segment(1)])); ?>"
                      hx-target="#addtarget"
                      hx-target-error="#producterrors5"
                      method="post"
                      id="productform">
                    <?php echo csrf_field(); ?>
                    <input class="form-input" type="text" name="name" placeholder="პროდუქტის სახელი" autocomplete="off">

                    <input class="form-input" type="text" name="price" placeholder="ფასი">
                    <input class="form-input" type="text" name="SKU" placeholder="კოდი (არასავალდებულო)">

                    
                    <textarea style="height: 170px;line-height: 1.2!important;" class="form-input"
                              name="description"
                              placeholder="აღწერა"></textarea>

                    <input type="hidden" name="image1" data-converted-newprodimg
                           class="newproductimage">
                    <input type="hidden" name="image2" data-converted-newprodimg2
                           class="newproductimage2">
                    <input type="hidden" name="image3" data-converted-newprodimg3
                           class="newproductimage3">
                    <input type="hidden" name="image4" data-converted-newprodimg4
                           class="newproductimage4">

                    <template id="specstemplate">
                        <div class="d-flex justify-content-between mb-2">
                            <input style="padding:0 10px;display:  inline-block;max-width: 120px;margin-bottom:0"
                                   class="form-input " type="text" name="new_spec[]"
                                   placeholder="სპეციფიკაცია">
                            <input style="padding:0 10px;display: inline-block;max-width: 150px;margin-bottom:0"
                                   class="form-input" type="text" name="new_value[]"
                                   placeholder="ინფორმაცია">
                            <button style="display: inline-block;padding: 0;width: 50px" type="button"
                                    class="button-31 removeButton">
                                <svg style="pointer-events: none;" xmlns="http://www.w3.org/2000/svg"
                                     width="1em" height="1em" viewBox="0 0 24 24">
                                    <path fill="white" d="M19 12.998H5v-2h14z"/>
                                </svg>
                            </button>
                        </div>
                    </template>
                    <div class="d-flex justify-content-between mb-2">

                        <input disabled style="display: inline-block;max-width: 120px;margin-bottom:0"
                               class="form-input disabledinput" type="text" name="spectitle" placeholder="სპეციფიკაცია">
                        <input disabled style="display: inline-block;max-width: 150px;margin-bottom:0"
                               class="form-input disabledinput" name="specinfotitle" type="text"
                               placeholder="ინფორმაცია">
                        <button id="addspec" style="display: inline-block;padding: 0;width: 50px"
                                type="button"
                                class="button-31">
                            <svg style="pointer-events: none" xmlns="http://www.w3.org/2000/svg"
                                 width="1em" height="1em" viewBox="0 0 24 24">
                                <path fill="white" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="d-flex flex-column mb-2" id="specsdiv">

                    </div>
                    
                    <div id="addproductmodal">

                    </div>
                    <div class="d-flex flex-column align-items-start mb-2">
                        <div class=" mt-1 d-flex justify-content-center align-items-center">
                            <input style="height: 25px;" id="main_page" name="main_page" class="form-check-input"
                                   type="checkbox" checked="">
                            <label style="margin-bottom: 0!important;margin-top: 7px"
                                   for="main_page">
                                დაემატოს საერთო გალერეაში
                            </label>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </div>
                    <input style="display: none" type="file" data-newprod-image
                           onchange="convertToWebP()">
                    <input style="display: none" type="file" data-newprod-image2
                           onchange="convertToWebP2()">
                    <input style="display: none" type="file" data-newprod-image3
                           onchange="convertToWebP3()">
                    <input style="display: none" type="file" data-newprod-image4
                           onchange="convertToWebP4()">
                    <div class="d-flex flex-column gap-2 align-items-center justify-content-center mt-1">
                        <div style="width: max-content"
                             class="d-flex flex-column justify-content-around align-items-center">
                            <button style="width: max-content" type="button" data-product-newopload
                                    class="button-31">ფოტო 1
                            </button>
                            <br>
                            <span id="newfilename"></span>
                        </div>
                        <div style="width: max-content"
                             class="d-flex flex-column justify-content-around align-items-center">
                            <button style="width: max-content" type="button" data-product-newopload2
                                    class="button-31">ფოტო 2
                            </button>
                            <br>
                            <span id="newfilename2"></span>
                        </div>
                        <div style="width: max-content"
                             class="d-flex flex-column justify-content-around align-items-center">
                            <button style="width: max-content" type="button" data-product-newopload3
                                    class="button-31">ფოტო 3
                            </button>
                            <br>
                            <span id="newfilename3"></span>
                        </div>
                        <div style="width: max-content"
                             class="d-flex flex-column justify-content-around align-items-center">
                            <button style="width: max-content" type="button" data-product-newopload4
                                    class="button-31">ფოტო 4
                            </button>
                            <br>
                            <span id="newfilename4"></span>
                        </div>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-around align-items-center  mt-5 mb-2">
                        <button STYLE="width: min-content;margin-right: 20px" type="button"
                                data-close-modal class="button-31">დახურვა
                        </button>
                        <button

                                STYLE="width: min-content;margin-left: 20px" type="submit"
                                class="button-31">დამატება
                        </button>
                    </div>

                </form>

                <div id="producterrors5"></div>
            </dialog>
        </div>
    <?php endif; ?>

    
    <?php if(auth()->guard()->check()): ?>
        <dialog style="height: 550px!important;text-align: center" class="dialog" data-mobile-dialog>
            <form action="<?php echo e(route('mobile.store')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <label for="userpmobile">მობილური</label>
                <br>

                <input style="width: 150px" value="<?php echo e(auth()->user()->mobile); ?>" id="userpmobile" class="form-input"
                       type="text" name="mobile" placeholder="">
                <br>
                <br>
                <div class="flex-row align-items-center mb-2">
                    <button STYLE="width:  max-content;border-radius: 15px;" type="submit" class="button-31 ">კოდის
                        მიღება
                    </button>
                </div>
            </form>

            <form style="margin-top: 20px" action="<?php echo e(route('confirm.mobile2')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <label for="code">სმს კოდი</label>
                <br>

                <input style="width: 150px" id="code" class="form-input" type="text" name="code" placeholder="">
                <br>

                <div class="flex-row align-items-center mb-2">
                    <button STYLE="width:  max-content;border-radius: 15px;" type="submit" class="button-31 ">
                        დადასტურება
                    </button>
                </div>
            </form>
            <br> <br>
            <button id="closechangemobile" STYLE="width:  max-content;border-radius: 15px;" type="submit"
                    class="button-31 ">გაუქმება
            </button>
            
            
            


        </dialog>
    <?php endif; ?>

    <!-- Feature product area start -->


    <?php echo $__env->yieldContent('index'); ?>
    <?php echo $__env->yieldContent('products'); ?>

    <!-- Feature product area End -->


    

    <!-- Footer Area Start -->
    <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Footer Area End -->


    <dialog class="dialog" style="" id="editproductmodal" data-edit-modal>

        <div id="editerrors"></div>
    </dialog>

</div>


<!--Product Quick View Modal -->

<div class="modal modal-2 fade" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body" id="quickviewtarget" style="z-index: 6000!important;">

            </div>
        </div>
    </div>
</div>


<!-- Global Vendor, plugins JS -->
<!-- JS Files
============================================ -->
<script src="<?php echo e(asset('assets/js/custom-htmx.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/vendor/jquery-3.6.0.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/swiper-bundle.min.js')); ?>"></script>

<script src="<?php echo e(asset('assets/js/plugins/venobox.min.js')); ?>"></script>


<!--Main JS (Common Activation Codes)-->
<script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>


<?php if(request()->routeIs('home') && auth()->check()): ?>
<script src="<?php echo e(asset('assets/js/webp.createProduct.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/webp.createmainbanner.js')); ?>"></script>
<?php endif; ?>
<?php if(auth()->guard()->check()): ?>
<script src="<?php echo e(asset('assets/js/sitesettings.js')); ?>"></script>
<?php endif; ?>

<?php if(request()->routeIs('home') && auth()->check()): ?>

<script>
    // editMain Banner Modal
    let editmainbannermodal = document.querySelectorAll("[data-mainbanner-editopen]")


    editmainbannermodal.forEach(el => {
            el.addEventListener('click', () => {
                document.querySelector("[data-mainbanner-editmodal]").showModal()
                document.body.style.overflow = 'hidden';
            })
        }
    )


    // Main Banner Modal
    let mainbannermodal = document.querySelector("[data-mainbanner-open]")
    let closebanner = document.querySelector("[data-mainbanner-close]")

    closebanner.addEventListener('click', () => {
        document.querySelector("[data-mainbanner-modal]").close()
        document.body.style.overflow = 'auto';
    })


    mainbannermodal.addEventListener('click', () => {
        document.querySelector("[data-mainbanner-modal]").showModal()
        document.body.style.overflow = 'hidden';

    })
</script>
<?php endif; ?>

<?php if(auth()->guard()->check()): ?>
    <script>


        // Category Modal

        let categorymodal = document.querySelector("[data-category-modal]")
        let closecat = document.querySelector("[data-closecat-modal]")

        categorymodal.addEventListener('click', () => {

            document.querySelector("[data-category]").showModal()
            document.body.style.overflow = 'hidden';


        })
        closecat.addEventListener('click', () => {
            document.querySelector("[data-category]").close()
            document.body.style.overflow = 'auto';

        })


        //  New Product Modal
        let openmodal = document.querySelectorAll("[data-open-modal]")
        let closemodal = document.querySelectorAll("[data-close-modal]")

        openmodal.forEach(el => {
            el.addEventListener('click', () => {
                document.querySelector("[data-modal]").showModal()
                document.body.style.overflow = 'hidden';
            })
        })


        closemodal.forEach(el => {
            el.addEventListener('click', () => {
                document.querySelector("[data-modal]").close()
                document.body.style.overflow = 'auto';
            })
        })



        // Edit Modal
        let openedit = document.querySelectorAll("[data-open-edit]")


        openedit.forEach(el => {
            el.addEventListener('click', () => {
                document.querySelector("[data-edit-modal]").showModal()
                document.body.style.overflow = 'hidden';
            })
        })


        // Change Mobile Modal

        const openmobile = document.getElementById('changemobile')
        const closechangemobile = document.getElementById('closechangemobile')


        openmobile.addEventListener('click', () => {
            document.querySelector("[data-mobile-dialog]").showModal()
            document.body.style.overflow = 'hidden';
        })

        closechangemobile.addEventListener("click", () => {
            document.querySelector("[data-mobile-dialog]").close()
            document.body.style.overflow = 'auto';
        })


    </script>
<?php endif; ?>


<?php if(auth()->guard()->check()): ?>
    <script>
        document
            .getElementById("addspec")
            .addEventListener("click", function () {
                var template = document.getElementById("specstemplate");
                var clonedTemplate = document.importNode(template.content, true);
                document.getElementById("specsdiv").appendChild(clonedTemplate);
            });
        document.getElementById("specsdiv").addEventListener("click", function (e) {
            if (e.target.classList.contains("removeButton")) {
                console.log('clicked')
                e.target.parentNode.remove();
            }
        });

    </script>
<?php endif; ?>

<?php if(auth()->check() && request()->routeIs('home')): ?>
    
    <script>


        

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
<?php endif; ?>

<script>

    // delete product from main page when in main gallery

    let deletemaingalproduct = document.querySelectorAll('.deletemaingalproduct')
    let maingpagegalprod = document.querySelectorAll('.maingpagegalprod')
    let deletebutton = document.querySelectorAll('.deletebutton')


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
                        deletebutton[index].click()
                    }
                });
        })
    })


    // Delete product from main page when in categories gallery

    let deletemaincatprod = document.querySelectorAll('.deletemaincatprod')
    let maincatprod = document.querySelectorAll('.maincatprod')
    let deletebutton2 = document.querySelectorAll('.deletebutton2')


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


    // delete category  (text from cateory dialog)

    // let deletecategoryalert = document.querySelectorAll('.deletecategoryalert')
    let deletecategorybutton = document.querySelectorAll('.deletecategorybutton')
    let deletecategorybuttonaction = document.querySelectorAll('.deletecategorybuttonaction')

    deletecategorybutton.forEach((el, index) => {
        el.addEventListener('click', () => {

            document.querySelector("[data-category]").close()
            document.body.style.overflow = 'auto';

            Swal.fire({
                title: "ნამდვილად გსურთ წაშლა?",
                // text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                cancelButtonText: "გაუქმება",
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "წაშლე",

            }).then((result) => {
                if (result.isConfirmed) {
                    deletecategorybuttonaction[index].click();
                }
                isSwalOpen = true;
            });
        });
    });


</script>


<script>
    // sessionStorage.setItem('scrollPosition', window.scrollY);
    //
    // // Restore scroll position after page load
    // document.addEventListener('DOMContentLoaded', () => {
    //     const scrollPosition = sessionStorage.getItem('scrollPosition');
    //     if (scrollPosition) {
    //         window.scrollTo(0, scrollPosition);
    //         sessionStorage.removeItem('scrollPosition'); // Remove the stored position after restoring
    //     }
    // });

    // Track scroll position and update URL parameters
    window.addEventListener('scroll', () => {
        const scrollPosition = window.scrollY;
        const urlParams = new URLSearchParams(window.location.search);
        urlParams.set('scroll', scrollPosition);
        const newUrl = `${window.location.pathname}?${urlParams.toString()}`;
        window.history.replaceState({path: newUrl}, '', newUrl);
    });

    // Restore scroll position from URL parameters
    window.addEventListener('DOMContentLoaded', () => {
        const urlParams = new URLSearchParams(window.location.search);
        const scrollPosition = urlParams.get('scroll');
        if (scrollPosition !== null) {
            window.scrollTo(0, parseInt(scrollPosition));
        }
    });

    // Handle click events on sorting links
    document.querySelectorAll('.dropdown-item').forEach(item => {
        item.addEventListener('click', event => {
            event.preventDefault(); // Prevent default link behavior
            const url = new URL(event.target.href);
            const urlParams = new URLSearchParams(url.search);
            const scrollPosition = window.scrollY; // Get current scroll position
            urlParams.set('scroll', scrollPosition); // Add scroll position to the URL
            url.search = urlParams.toString();
            window.location.href = url.toString(); // Navigate to the new URL
        });
    });


</script>


<?php if(session()->has('error')): ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            Swal.fire({
                title: "<?php echo e(session('error')); ?>",
                icon: "warning",
                showCancelButton: true,
                showConfirmButton: false,
                cancelButtonText: "გასაგებია",
                confirmButtonColor: "#3085d6",
            });
        })
    </script>
<?php endif; ?>


<?php if(auth()->guard()->check()): ?>
    

    <script>


        logoupdatebutton = document.querySelectorAll('[data-logo-image]')


        logoupdatebutton.forEach((el, index) => {
            el.addEventListener('click', () => {

                document.querySelectorAll("[data-logo-imagefile]")[index].click()
                document.querySelectorAll("[data-logo-imagefile]")[index].addEventListener('change', () => {

                    console.log("change")

                    function convertToWebplogo() {

                        const inputElement = document.querySelectorAll("[data-logo-imagefile]")


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
                                webpinput = document.querySelectorAll("[data-converted-logoimage]")
                                webpinput[index].value = base64WebP;
                                console.log(webpinput[index].value)
                                // Submit the form
                                // document.getElementById("existingForm").submit();
                                document.querySelectorAll('.logoform')[index].submit()
                            };
                            image.src = event.target.result;

                        };
                        reader.readAsDataURL(file);
                    }

                    convertToWebplogo()
                })
            })
        })


    </script>
<?php endif; ?>

</body>


</html><?php /**PATH E:\HERD\catalogue\resources\views/pages/layout.blade.php ENDPATH**/ ?>