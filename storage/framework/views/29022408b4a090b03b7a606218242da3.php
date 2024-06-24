<!-- offcanvas overlay start -->
<div class="offcanvas-overlay"></div>
<!-- offcanvas overlay end -->
<!-- OffCanvas settings2 Start -->
<div id="offcanvas-shop" class="offcanvas offcanvas-wishlist">
    <div class="inner">
        <form id="" action="<?php echo e(route('shop.settings.update',['shop'=>request()->segment(1)])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="head">
                <span class="title">მაღაზიის მონაცემები</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>

                        <div class="flex-column justify-content-center align-middle w-100">
                            <label style="margin-bottom: 0!important;" for="shopname">
                                მაღაზიის სახელის შეცვლა
                            </label>
                            <input id="shopname" name="name"
                                   class="form-input"
                                   type="text"
                                   placeholder="ახალი სახელი"
                                   autocomplete="off"
                            >
                        </div>
                        <div class="flex-row justify-content-center align-middle mt-2 w-100">
                            <label style="margin-bottom: 0!important;" for="shopaddress">
                                მისამართი
                            </label>
                            <input id="shopaddress" name="address"
                                   class="form-input"
                                   type="text"
                                   value="<?php echo e($shop->address); ?>"
                                   placeholder="მისამართი"
                                   autocomplete="off"
                            >
                        </div>
                        <?php if(auth()->check() && auth()->user()->auth_type===null): ?>
                            <div class="flex-row justify-content-center align-middle mt-2 w-100">
                                <label style="margin-bottom: 0!important;" for="email">
                                    მეილის ცვლილება
                                </label>
                                <input id="email" name="email"
                                       class="form-input"
                                       type="text"
                                       value="<?php echo e(auth()->user()->email); ?>"
                                       placeholder="მეილი"
                                       autocomplete="off"
                                >
                            </div>
                            <div class="flex-row justify-content-center align-middle mt-2 w-100">
                                <label style="margin-bottom: 0!important;" for="password">
                                    პაროლის ცვლილება
                                </label>
                                <input id="password" name="password"
                                       class="form-input"
                                       type="text"
                                       placeholder="პაროლი"
                                       autocomplete="off"
                                >
                            </div>
                        <?php endif; ?>
                        <div class="flex-row justify-content-center align-middle mt-2 w-100">
                            <label style="margin-bottom: 0!important;" for="messenger">
                                <svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                     preserveAspectRatio="xMidYMid">
                                    <defs>
                                        <radialGradient id="a" cx="19.247%" cy="99.465%" r="108.96%" fx="19.247%"
                                                        fy="99.465%">
                                            <stop offset="0%" stop-color="#09F"/>
                                            <stop offset="60.975%" stop-color="#A033FF"/>
                                            <stop offset="93.482%" stop-color="#FF5280"/>
                                            <stop offset="100%" stop-color="#FF7061"/>
                                        </radialGradient>
                                    </defs>
                                    <path fill="url(#a)"
                                          d="M128 0C55.894 0 0 52.818 0 124.16c0 37.317 15.293 69.562 40.2 91.835 2.09 1.871 3.352 4.493 3.438 7.298l.697 22.77c.223 7.262 7.724 11.988 14.37 9.054L84.111 243.9a10.218 10.218 0 0 1 6.837-.501c11.675 3.21 24.1 4.92 37.052 4.92 72.106 0 128-52.818 128-124.16S200.106 0 128 0Z"/>
                                    <path fill="#FFF"
                                          d="m51.137 160.47 37.6-59.653c5.98-9.49 18.788-11.853 27.762-5.123l29.905 22.43a7.68 7.68 0 0 0 9.252-.027l40.388-30.652c5.39-4.091 12.428 2.36 8.82 8.085l-37.6 59.654c-5.981 9.489-18.79 11.852-27.763 5.122l-29.906-22.43a7.68 7.68 0 0 0-9.25.027l-40.39 30.652c-5.39 4.09-12.427-2.36-8.818-8.085Z"/>
                                </svg>
                            </label>
                            <input style="max-width: 300px!important"
                                   id="messenger"
                                   value="<?php echo e($shop->messenger); ?>"
                                   name="messenger" class="form-input mt-2"
                                   type="text" placeholder="ჩაწერეთ მხოლოდ გვერდის სახელი">
                        </div>

                        <div class="flex-row justify-content-center align-middle mt-2 w-100">
                            <label style="margin-bottom: 0!important;" for="shopfb">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36" fill="url(#a)"
                                     height="40" width="40">
                                    <defs>
                                        <linearGradient x1="50%" x2="50%" y1="97.078%" y2="0%" id="a">
                                            <stop offset="0%" stop-color="#0062E0"/>
                                            <stop offset="100%" stop-color="#19AFFF"/>
                                        </linearGradient>
                                    </defs>
                                    <path d="M15 35.8C6.5 34.3 0 26.9 0 18 0 8.1 8.1 0 18 0s18 8.1 18 18c0 8.9-6.5 16.3-15 17.8l-1-.8h-4l-1 .8z"/>
                                    <path fill="#FFF"
                                          d="m25 23 .8-5H21v-3.5c0-1.4.5-2.5 2.7-2.5H26V7.4c-1.3-.2-2.7-.4-4-.4-4.1 0-7 2.5-7 7v4h-4.5v5H15v12.7c1 .2 2 .3 3 .3s2-.1 3-.3V23h4z"/>
                                </svg>
                            </label>
                            <input style="max-width: 290px!important"
                                   id="shopfb"
                                   value="<?php echo e($shop->facebook); ?>"
                                   name="facebook" class="form-input mt-2"
                                   type="text" placeholder="გვერდის სრული ლინკი">
                        </div>
                        <div class="flex-row justify-content-center align-middle mt-2 w-100">
                            <label style="margin-bottom: 0!important;" for="shopinsta">
                                <svg enable-background="new 0 0 1024 1024" height="36" id="Instagram_2_"
                                     version="1.1" viewBox="0 0 1024 1024" width="36" xml:space="preserve"
                                     xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Background">
                                        <linearGradient
                                                gradientTransform="matrix(0.9397 0.3421 0.3421 -0.9397 276.2042 765.8284)"
                                                gradientUnits="userSpaceOnUse" id="bg_1_" x1="463.9526"
                                                x2="-194.4829" y1="-73.1143" y2="711.4479">
                                            <stop offset="0" style="stop-color:#20254C"/>
                                            <stop offset="0.0571" style="stop-color:#29254D"/>
                                            <stop offset="0.1502" style="stop-color:#41234F"/>
                                            <stop offset="0.2679" style="stop-color:#692152"/>
                                            <stop offset="0.4039" style="stop-color:#A01F57"/>
                                            <stop offset="0.5333" style="stop-color:#DA1C5C"/>
                                            <stop offset="0.5924" style="stop-color:#DC255A"/>
                                            <stop offset="0.6889" style="stop-color:#E13D56"/>
                                            <stop offset="0.8106" style="stop-color:#EA654E"/>
                                            <stop offset="0.9515" style="stop-color:#F69C44"/>
                                            <stop offset="1" style="stop-color:#FBB040"/>
                                        </linearGradient>
                                        <circle cx="512.001" cy="512" fill="url(#bg_1_)" id="bg" r="512"/>
                                    </g>
                                    <g id="Instagram_3_">
                                        <circle cx="658.765" cy="364.563" fill="#FFFFFF" r="33.136"/>
                                        <circle cx="512.001" cy="512" fill="none" r="121.412" stroke="#FFFFFF"
                                                stroke-miterlimit="10" stroke-width="45"/>
                                        <path d="M255.358,612.506c0,91.127,73.874,165,165,165   h183.283c91.127,0,165-73.873,165-165V411.495c0-91.127-73.873-165-165-165H420.358c-91.127,0-165,73.873-165,165V612.506z"
                                              fill="none" stroke="#FFFFFF" stroke-miterlimit="10"
                                              stroke-width="45"/>
                                    </g></svg>
                            </label>
                            <input style="max-width: 290px!important"
                                   id="shopinsta"
                                   value="<?php echo e($shop->instagram); ?>"
                                   name="instagram" class="form-input mt-2"
                                   type="text" placeholder="გვერდის სრული ლინკი">
                        </div>
                        <div class="flex-row justify-content-center align-middle mt-2 w-100">
                            <label style="margin-bottom: 0!important;" for="shopyoutube">
                                <svg viewBox="0 0 256 180" width="36" height="36" xmlns="http://www.w3.org/2000/svg"
                                     preserveAspectRatio="xMidYMid">
                                    <path d="M250.346 28.075A32.18 32.18 0 0 0 227.69 5.418C207.824 0 127.87 0 127.87 0S47.912.164 28.046 5.582A32.18 32.18 0 0 0 5.39 28.24c-6.009 35.298-8.34 89.084.165 122.97a32.18 32.18 0 0 0 22.656 22.657c19.866 5.418 99.822 5.418 99.822 5.418s79.955 0 99.82-5.418a32.18 32.18 0 0 0 22.657-22.657c6.338-35.348 8.291-89.1-.164-123.134Z"
                                          fill="red"/>
                                    <path fill="#FFF" d="m102.421 128.06 66.328-38.418-66.328-38.418z"/>
                                </svg>
                            </label>
                            <input style="max-width: 290px!important"
                                   id="shopyoutube"
                                   value="<?php echo e($shop->youtube); ?>"
                                   name="youtube" class="form-input mt-2"
                                   type="text" placeholder="არხის სრული ლინკი">
                        </div>
                    </li>
                </ul>
            </div>

            <div class="foot">
                <div class="buttons">
                    <button style="width: 100%;border-radius: 15px">
                        <a style="border-radius: 15px"
                           class="btn btn-dark btn-hover-primary mt-10px">შენახვა</a>
                    </button>
                </div>
                <div class="buttons">
                    <button
                            id="changemobile"
                            type="button"
                            style="width: 100%;border-radius: 15px">
                            <a style="border-radius: 15px"
                           class="btn btn-dark btn-hover-primary mt-10px">მობილურის ცვლილება</a>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<div id="offcanvas-settings" class="offcanvas offcanvas-wishlist">
    <div class="inner">
        <form id="settingsform" action="<?php echo e(route('settings.update',['shop'=>request()->segment(1)])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="head">
                <span class="title">ძირითადი პარამეტრები</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <div class="flex-row justify-content-center align-middle">
                            <input id="use_logo" style="height: 25px;" name="use_logo"
                                   class="form-check-input"
                                   type="checkbox"
                                   <?php if($shop->settings->first()->use_logo==1): ?>checked="" <?php endif; ?> >
                            <label style="margin-bottom: 0!important;" for="use_logo">
                                გამოვიყენო მთავარი ბანერი
                            </label>
                        </div>
                        <div class="flex-row justify-content-center align-middle">
                            <input id="main_banner_checkbox" style="height: 25px;" name="use_main_banner"
                                   class="form-check-input"
                                   type="checkbox"
                                   <?php if($shop->settings->first()->use_main_banner==1): ?>checked="" <?php endif; ?> >
                            <label style="margin-bottom: 0!important;" for="main_banner_checkbox">
                                გამოვიყენო მთავარი ბანერი
                            </label>
                        </div>
                        <div class="flex-row justify-content-center align-middle mt-2">
                            <input id="show_description" style="height: 25px;" name="show_description"
                                   class="form-check-input"
                                   type="checkbox"
                                   <?php if($shop->settings->first()->show_description==1): ?>checked="" <?php endif; ?> >
                            <label style="margin-bottom: 0!important;" for="show_description">
                                ვაჩვენო მაღაზიის აღწერა
                            </label>
                        </div>
                        <div class="flex-row justify-content-center align-middle mt-2">
                            <input style="height: 25px;" id="use_main_gallery" name="use_main_gallery"
                                   class="form-check-input  mt-2"
                                   type="checkbox"
                                   <?php if($shop->settings->first()->use_main_gallery==1): ?>checked="" <?php endif; ?> >
                            <label style="margin-bottom: 0!important;" for="use_main_gallery">
                                ვაჩვენო მთავარი გალერეა
                            </label>
                        </div>

                        <div class="flex-row justify-content-center align-middle mt-2">
                            <input style="height: 25px;" id="use_category" name="use_category"
                                   class="form-check-input"
                                   type="checkbox"
                                   <?php if($shop->settings->first()->use_category===1): ?>checked="" <?php endif; ?> >
                            <label style="margin-bottom: 0!important;" for="use_category">
                                კატეგორიების გამოყენება
                            </label>
                        </div>

                        <div class="flex-row justify-content-center align-middle mt-2">
                            <input style="height: 25px;" id="use_spec" name="use_spec" class="form-check-input"
                                   type="checkbox"
                                   value=""
                                   <?php if($shop->settings->first()->use_spec===1): ?>checked="" <?php endif; ?> >
                            <label style="margin-bottom: 0!important;" for="use_spec">
                                მახასიათებლების ჩვენება
                            </label>
                        </div>

                        <div class="flex-row justify-content-center align-middle mt-2">
                            <input style="height: 25px;" id="use_socials" name="use_socials"
                                   class="form-check-input" type="checkbox"
                                   value=""
                                   <?php if($shop->settings->first()->use_socials===1): ?>checked="" <?php endif; ?> >
                            <label style="margin-bottom: 0!important;" for="use_socials">
                                ვაჩვენო სოც. გვერდები
                            </label>
                        </div>

                        <div class="flex-row justify-content-center align-middle mt-2">
                            <input style="height: 25px;" id="whatsapp" name="whatsapp"
                                   class="form-check-input" type="checkbox"
                                   value=""
                                   <?php if($shop->settings->first()->whatsapp===1): ?>checked="" <?php endif; ?> >
                            <label style="margin-bottom: 0!important;" for="whatsapp">
                                გამოვიყენო WhatsApp
                            </label>
                        </div>
                        <div class="flex-row justify-content-center align-middle mt-2">
                            <input style="height: 25px;" id="use_description" name="use_description"
                                   class="form-check-input" type="checkbox"
                                   value=""
                                   <?php if($shop->settings->first()->use_description===1): ?>checked <?php endif; ?> >
                            <label style="margin-bottom: 0!important;" for="use_description">
                                ვაჩვენო საინფორმაციო ველი
                            </label>
                        </div>
                        <div class="flex-row justify-content-center align-middle mt-2">
                            <input style="height: 25px;" id="use_messenger" name="use_messenger"
                                   class="form-check-input"
                                   type="checkbox" value=""
                                   <?php if($shop->settings->first()->use_messenger===1): ?>checked="" <?php endif; ?> >
                            <label style="margin-bottom: 0!important;" for="use_messenger">
                                გამოვიყენო Messenger
                            </label>
                        </div>

                    </li>

                </ul>
            </div>
            <div class="foot">
                <div class="buttons">
                    <button style="width: 100%;border-radius: 15px">
                        <a style="border-radius: 15px"
                           class="btn btn-dark btn-hover-primary mt-30px">შენახვა</a>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- OffCanvas Wishlist End -->

<!-- OffCanvas Categories -->
<div id="offcanvas-cart" class="offcanvas offcanvas-cart">
    <div class="shop-sidebar-wrap">
        <div class="sidebar-widget">
            <h4 class="sidebar-title">კატეგორიები</h4>
            <div class="sidebar-widget-category">
                <?php echo $__env->make('components.categorieslist', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('components.socials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <div class="user-panel">
            <ul>
                <li><a href="tel:<?php echo e($shop->user->mobile); ?>">
                        <svg  style="color: #266bf9;margin-right:15px" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24"><path fill="currentColor" d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24c1.12.37 2.33.57 3.57.57c.55 0 1 .45 1 1V20c0 .55-.45 1-1 1c-9.39 0-17-7.61-17-17c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1c0 1.25.2 2.45.57 3.57c.11.35.03.74-.25 1.02z"/></svg>

                        <?php echo e($shop->user->mobile); ?></a>
                </li>
                <?php if($shop->address!==null): ?>
                    <li>
                        <a  href="https://www.google.com/maps/search/?api=1&query=<?php echo e($shop->address); ?>" target="_blank">

                            <svg style="color: #266bf9;margin-right:15px" xmlns="http://www.w3.org/2000/svg"
                                 width="20px"
                                 height="20px" viewBox="0 0 256 256">
                                <path fill="currentColor"
                                      d="M208 20H64a20 20 0 0 0-20 20v20H32a12 12 0 0 0 0 24h12v32H32a12 12 0 0 0 0 24h12v32H32a12 12 0 0 0 0 24h12v20a20 20 0 0 0 20 20h144a20 20 0 0 0 20-20V40a20 20 0 0 0-20-20m-4 192H68V44h136Zm-103.2-40.63a48 48 0 0 1 70.4 0a12 12 0 0 0 17.6-16.32a72 72 0 0 0-19.21-14.68a44 44 0 1 0-67.19 0a72.1 72.1 0 0 0-19.2 14.68a12 12 0 0 0 17.6 16.32M116 112a20 20 0 1 1 20 20a20 20 0 0 1-20-20"/>
                            </svg>
                            <?php echo e($shop->address); ?>

                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
<!-- OffCanvas Categories End -->

<!-- OffCanvas Menu Start -->
<div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
    <button class="offcanvas-close"></button>
    <div class="user-panel">
        <ul>
            <li><a href="tel:<?php echo e($shop->user->mobile); ?>"><i class="fa fa-phone"></i><?php echo e($shop->user->mobile); ?></a></li>
            <?php if($shop->address!==null): ?>
                <li>
                    <a  href="https://www.google.com/maps/search/?api=1&query=<?php echo e($shop->address); ?>" target="_blank">

                        <svg style="color: #266bf9;margin-right:15px" xmlns="http://www.w3.org/2000/svg"
                             width="20px"
                             height="20px" viewBox="0 0 256 256">
                            <path fill="currentColor"
                                  d="M208 20H64a20 20 0 0 0-20 20v20H32a12 12 0 0 0 0 24h12v32H32a12 12 0 0 0 0 24h12v32H32a12 12 0 0 0 0 24h12v20a20 20 0 0 0 20 20h144a20 20 0 0 0 20-20V40a20 20 0 0 0-20-20m-4 192H68V44h136Zm-103.2-40.63a48 48 0 0 1 70.4 0a12 12 0 0 0 17.6-16.32a72 72 0 0 0-19.21-14.68a44 44 0 1 0-67.19 0a72.1 72.1 0 0 0-19.2 14.68a12 12 0 0 0 17.6 16.32M116 112a20 20 0 1 1 20 20a20 20 0 0 1-20-20"/>
                        </svg>
                        <?php echo e($shop->address); ?>

                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
    <div class="shop-sidebar-wrap">
        <!-- Categories -->
        <div class="sidebar-widget">
            <h4 class="sidebar-title">კატეგორიები</h4>
            <div class="sidebar-widget-category">
                <?php echo $__env->make('components.categorieslist', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>

    </div>
    <?php echo $__env->make('components.socials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<!-- OffCanvas Menu End -->
<!-- Hero/Intro Slider Start --><?php /**PATH E:\HERD\catalogue\resources\views/components/offcanvas.blade.php ENDPATH**/ ?>