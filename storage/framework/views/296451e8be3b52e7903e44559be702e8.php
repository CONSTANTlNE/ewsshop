<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z"/></svg>
</button>
<div class="row">
    <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
        <!-- Swiper -->
        <div class="swiper-container gallery-top quiviewmainimg">
            <div class="swiper-wrapper quiviewmainimg">
                <?php $__currentLoopData = $product->media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div   style="border-radius: 15px!important;max-height: 484px!important" class="swiper-slide">
                        <img style="border-radius: 15px!important" class="img-responsive m-auto quiviewmainimg"
                             src="<?php echo e($img->getUrl()); ?>" alt="">
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="swiper-container gallery-thumbs mt-20px slider-nav-style-1 small-nav">
            <div class="swiper-wrapper">
                <?php $__currentLoopData = $product->media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide">
                        <img class="img-responsive m-auto quickviewsmallimg" src="<?php echo e($media->getUrl()); ?>" alt="">
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!-- Add Arrows -->





        </div>
    </div>
    <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
        <div class="product-details-content quickview-content">
            <h2><?php echo e($product->name); ?></h2>
            <div class="pricing-meta">
                <ul class="d-flex">
                    <li class="new-price">₾ <?php echo e($product->price); ?></li>
                </ul>
            </div>

            <p class="mt-30px">
                <?php echo e($product->description); ?>

            </p>
            <?php if($product->SKU!==null): ?>
                <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                    <span>კოდი:</span>
                    <ul class="d-flex">
                        <li>
                            <a><?php echo e($product->SKU); ?></a>
                        </li>
                    </ul>
                </div>
            <?php endif; ?>
            <?php if($shop->settings->first()->use_category===1): ?>
            <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                <span>კატეგორია: </span>
                <ul class="d-flex">
                    <li>
                        <a href="<?php echo e(route('categories',['shop'=>request()->segment(1),'category'=>$product->category->slug])); ?>"><?php echo e($product->category->name); ?></a>
                    </li>

                </ul>
            </div>
            <?php endif; ?>
            <div class="specs">
                <?php if($product->specs && $shop->settings->first()->use_spec===1): ?>
                    <?php $__currentLoopData = $product->specs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p class="mb-1"><span><?php echo e($spec->name); ?></span> <?php echo e($spec->value); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
            <div class="pro-details-categories-info pro-details-same-style d-flex gap-3 justify-content-start align-items-center mt-3">

            </div>

            <div style="width: max-content" class="pro-details-categories-info pro-details-same-style d-flex gap-3 justify-content-start align-items-center mt-2">
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
    </div>
</div>

<script>
    if (typeof galleryThumb !== 'undefined') {
        galleryThumb.destroy();
    }

    galleryThumb = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        slidesPerView: 3,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        centerMood: true,
    });


    if (typeof galleryTop !== 'undefined') {
        galleryTop.destroy();
    }

    galleryTop = new Swiper('.gallery-top', {
        spaceBetween: 0,
        loop: true,
        slidesPerView: 1,
        centerMood: true,
        thumbs: {
            swiper: galleryThumb
        }
    });
</script>

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
</script><?php /**PATH E:\HERD\catalogue\resources\views/htmx/product/quickview.blade.php ENDPATH**/ ?>