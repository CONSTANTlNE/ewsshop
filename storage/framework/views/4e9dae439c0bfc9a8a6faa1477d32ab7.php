<!DOCTYPE html>
<html lang="zxx" dir="ltr">


<!-- Mirrored from htmldemo.net/hmart/hmart/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 May 2024 11:19:37 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($product->name); ?></title>
    <meta name="robots" content="index, follow"/>
    <meta name="description" content="<?php echo e($product->description); ?>">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/images/logo/logo2.png')); ?>"/>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
    <!-- CSS
    ============================================ -->

    <meta property="og:title" content="<?php echo e($product->name); ?>">
    <meta property="og:description" content="<?php echo e($product->description); ?>">
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <meta property="og:type" content="website">
    <?php $__currentLoopData = $product->media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($loop->first): ?>
    <meta property="og:image" content="<?php echo e($media->getUrl()); ?>">
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <meta property="og:image:alt" content="<?php echo e($product->name); ?>">
    <meta property="og:site_name" content="https://shop.ews.ge/">

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


    <!-- MAIN CONTENT -->
    <!-- Product Details Area Start -->
    <div class="product-details-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                    <!-- Swiper -->
                    <div class="swiper-container zoom-top">
                        <div class="swiper-wrapper">
                            <?php $__currentLoopData = $product->media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <img style="border-radius: 10px" class="img-responsive m-auto singleimg"
                                         src="<?php echo e($media->getUrl()); ?>" alt="">
                                    <a class="venobox full-preview" data-gall="myGallery"
                                       href="<?php echo e($media->getUrl()); ?>">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24"><defs><mask id="solarMagniferZoomInLineDuotone0"><g fill="none" stroke-width="1.5"><circle cx="11.5" cy="11.5" r="9.5" stroke="gray"/><path stroke="#fff" stroke-linecap="round" d="M18.5 18.5L22 22M9 11.5h2.5m0 0H14m-2.5 0V14m0-2.5V9"/></g></mask></defs><path fill="currentColor" d="M0 0h24v24H0z" mask="url(#solarMagniferZoomInLineDuotone0)"/></svg>

                                    </a>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="swiper-container mt-20px zoom-thumbs slider-nav-style-1 small-nav">
                        <div class="swiper-wrapper">
                            <?php $__currentLoopData = $product->media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <img   class="singleimgsmall img-responsive m-auto "
                                           src="<?php echo e($media->getUrl()); ?>" alt="">
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-buttons">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-details-content quickview-content ml-25px">
                        <h2><?php echo e($product->name); ?></h2>
                        <div class="pricing-meta">
                            <ul class="d-flex">
                                <li class="new-price">₾ <?php echo e($product->price); ?></li>
                            </ul>
                        </div>

                        <p class="mt-30px">
                            <?php echo e($product->description); ?>

                        </p>
                        <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                            <span>კოდი:</span>
                            <ul class="d-flex">
                                <li>
                                    <a href="#"><?php echo e($product->SKU); ?></a>
                                </li>
                            </ul>
                        </div>
                        <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                            <span>კატეგორია: </span>
                            <ul class="d-flex">
                                <li>
                                    <a href="<?php echo e(route('categories',['shop'=>request()->segment(1),'category'=>$product->category->slug])); ?>"><?php echo e($product->category->name); ?></a>
                                </li>
                            </ul>
                        </div>
                        <div style="width: max-content" class="mt-2 pro-details-categories-info pro-details-same-style d-flex gap-3 justify-content-start align-items-center mt-2">
                            <?php if($shop->messenger!==null && $shop->settings->first()->use_messenger===1): ?>
                                <span style="margin:0!important">მოგვწერეთ</span>
                                <a href="https://m.me/<?php echo e($shop->messenger); ?>?text=<?php echo e(route('single.product',['shop'=>request()->segment(1),'product'=>$product->slug])); ?>"
                                   target="_blank">
                                    <svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                         preserveAspectRatio="xMidYMid">
                                        <defs>
                                            <radialGradient id="a" cx="19.247%" cy="99.465%" r="108.96%" fx="19.247%" fy="99.465%">
                                                <stop offset="0%" stop-color="#09F"></stop>
                                                <stop offset="60.975%" stop-color="#A033FF"></stop>
                                                <stop offset="93.482%" stop-color="#FF5280"></stop>
                                                <stop offset="100%" stop-color="#FF7061"></stop>
                                            </radialGradient>
                                        </defs>
                                        <path fill="url(#a)"
                                              d="M128 0C55.894 0 0 52.818 0 124.16c0 37.317 15.293 69.562 40.2 91.835 2.09 1.871 3.352 4.493 3.438 7.298l.697 22.77c.223 7.262 7.724 11.988 14.37 9.054L84.111 243.9a10.218 10.218 0 0 1 6.837-.501c11.675 3.21 24.1 4.92 37.052 4.92 72.106 0 128-52.818 128-124.16S200.106 0 128 0Z"></path>
                                        <path fill="#FFF"
                                              d="m51.137 160.47 37.6-59.653c5.98-9.49 18.788-11.853 27.762-5.123l29.905 22.43a7.68 7.68 0 0 0 9.252-.027l40.388-30.652c5.39-4.091 12.428 2.36 8.82 8.085l-37.6 59.654c-5.981 9.489-18.79 11.852-27.763 5.122l-29.906-22.43a7.68 7.68 0 0 0-9.25.027l-40.39 30.652c-5.39 4.09-12.427-2.36-8.818-8.085Z"></path>
                                    </svg>
                                </a>
                            <?php endif; ?>
                            <span style="margin:0!important">გააზიარე</span>
                            <div class="d-flex align-items-center justify-content-center gap-4">

                                <svg style="cursor: pointer" onclick="copyLinkToClipboard()" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M14 7c0-.932 0-1.398-.152-1.765a2 2 0 0 0-1.083-1.083C12.398 4 11.932 4 11 4H8c-1.886 0-2.828 0-3.414.586C4 5.172 4 6.114 4 8v3c0 .932 0 1.398.152 1.765a2 2 0 0 0 1.083 1.083C5.602 14 6.068 14 7 14"/>
                                        <rect width="10" height="10" x="10" y="10" rx="2"/>
                                    </g>
                                </svg>


                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(route('single.product',['shop'=>request()->segment(1),'product'=>$product->slug])); ?>"
                                   target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36" fill="url(#a)" height="40" width="40">
                                        <defs>
                                            <linearGradient x1="50%" x2="50%" y1="97.078%" y2="0%" id="a">
                                                <stop offset="0%" stop-color="#0062E0"></stop>
                                                <stop offset="100%" stop-color="#19AFFF"></stop>
                                            </linearGradient>
                                        </defs>
                                        <path d="M15 35.8C6.5 34.3 0 26.9 0 18 0 8.1 8.1 0 18 0s18 8.1 18 18c0 8.9-6.5 16.3-15 17.8l-1-.8h-4l-1 .8z"></path>
                                        <path fill="#FFF"
                                              d="m25 23 .8-5H21v-3.5c0-1.4.5-2.5 2.7-2.5H26V7.4c-1.3-.2-2.7-.4-4-.4-4.1 0-7 2.5-7 7v4h-4.5v5H15v12.7c1 .2 2 .3 3 .3s2-.1 3-.3V23h4z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- product details description area start -->
                    <div class="description-review-wrapper">
                        <?php if($product->specs->first()): ?>
                            <div class="description-review-topbar nav">
                                <button data-bs-toggle="tab" data-bs-target="#des-details2">მახასიათებლები</button>
                                
                                
                            </div>
                            <div class="tab-content description-review-bottom">
                                <div id="des-details2" class="tab-pane active">
                                    <div class="product-anotherinfo-wrapper text-start">
                                        <ul>
                                            <?php $__currentLoopData = $product->specs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><span><?php echo e($spec->name); ?></span><?php echo e($spec->value); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </ul>
                                    </div>
                                </div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                

                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- product details description area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area Start -->
    <div class="product-area related-product">
        <div class="container">
            <!-- Section Title & Tab Start -->
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center m-0">
                        <h2 class="title">მსგავსი პროდუქტები</h2>
                        
                    </div>
                </div>
            </div>
            <!-- Section Title & Tab End -->
            <div class="row">
                <div class="col">
                    <div class="new-product-slider swiper-container slider-nav-style-1">
                        <div class="swiper-wrapper">
                            <?php $__currentLoopData = $productcategory->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catproduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <!-- Single Prodect -->
                                    <div class="product">

                                        <div class="thumb">

                                            <a href="<?php echo e(route('single.product',['shop'=>request()->segment(1),'product' => $catproduct->slug])); ?>"
                                               class="image">
                                                <?php $__currentLoopData = $catproduct->media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($loop->first): ?>
                                                        <img style="border-radius: 15px" src="<?php echo e($media2->getUrl()); ?>"
                                                             alt="Product"/>
                                                        <img style="border-radius: 15px!important;" class="hover-image"
                                                             src="<?php echo e($media2->getUrl()); ?>"
                                                             alt="Product"/>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category mt-2">
                                                          <a href="<?php echo e(route('categories',['shop'=>request()->segment(1),'category'=>$productcategory->slug])); ?>"><?php echo e($product->category->name); ?></a>


                                            </span>
                                            <h5 class="title">
                                                <a
                                                        href="<?php echo e(route('single.product', ['shop'=>$shop->slug,'product' => $catproduct->slug])); ?>"><?php echo e($catproduct->name); ?>

                                                </a>
                                            </h5>
                                            <span class="price">
                                            <span class="new">₾ <?php echo e($catproduct->price); ?></span>
                                            </span>
                                        </div>
                                        <div class="actions">

                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-buttons">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End -->

    <!-- MAIN CONTENT -->


    

    <!-- Footer Area Start -->
    <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Footer Area End -->
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

<?php if(request()->routeIs('home')): ?>
    <script src="<?php echo e(asset('assets/js/webp.createProduct.js')); ?>"></script>
<?php endif; ?>
<script src="<?php echo e(asset('assets/js/webp.createmainbanner.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/sitesettings.js')); ?>"></script>




<script>

    function copyLinkToClipboard() {
        const linkToCopy = '<?php echo e(route('single.product',['shop'=>request()->segment(1),'product'=>$product->slug])); ?>';
        navigator.clipboard.writeText(linkToCopy)
            .then(() => {
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "დაკოპირებულია",
                    showConfirmButton: false,
                    timer: 1500
                });
            })
    }
</script>





<script>

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


</body>


</html><?php /**PATH E:\HERD\catalogue\resources\views/pages/single-product.blade.php ENDPATH**/ ?>