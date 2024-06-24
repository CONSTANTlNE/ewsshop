<?php if($shop->settings->first()->use_slider===1): ?>
    <div class="feature-product-area pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title">რჩეული პროდუქტები</h2>
                    </div>
                </div>
            </div>
            <div class="feature-product-slider swiper-container slider-nav-style-1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide feature-right-content">
                        <div class="image-side">
                            <img src="assets/images/feature-image/2.webp" alt="">

                        </div>
                        <div class="content-side">

                            <div class="prize-content">
                                <h5 class="title">
                                    <?php if(isset($product)): ?>
                                        <a href="<?php echo e(route('single.product',['shop'=>request()->segment(1),'product' => $product->slug])); ?>">Ladies
                                            Smart Watch</a>
                                    <?php endif; ?>
                                </h5>
                                <span class="price">

                                    <span class="new">₾ 38.50</span>
                                    </span>
                            </div>
                            <div class="product-feature">
                                <ul>
                                    <li>Predecessor : <span>None.</span></li>
                                    <li>Support Type : <span>Neutral.</span></li>
                                    <li>Cushioning : <span>High Energizing.</span></li>
                                    <li>Total Weight : <span> 300gm</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide feature-right-content">
                        <div class="image-side">
                            <img src="assets/images/feature-image/3.webp" alt="">

                        </div>
                        <div class="content-side">

                            <div class="prize-content">
                                <h5 class="title"><a href="single-product.html">Ladies Smart Watch</a></h5>
                                <span class="price">

                                    <span class="new">₾ 38.50</span>
                                    </span>
                            </div>
                            <div class="product-feature">
                                <ul>
                                    <li>Predecessor : <span>None.</span></li>
                                    <li>Support Type : <span>Neutral.</span></li>
                                    <li>Cushioning : <span>High Energizing.</span></li>
                                    <li>Total Weight : <span> 300gm</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide feature-right-content">
                        <div class="image-side">
                            <img src="assets/images/feature-image/2.webp" alt="">
                            
                            
                            
                        </div>
                        <div class="content-side">

                            <div class="prize-content">
                                <h5 class="title"><a href="single-product.html">Ladies Smart Watch</a></h5>
                                <span class="price">

                                    <span class="new">₾ 38.50</span>
                                    </span>
                            </div>
                            <div class="product-feature">
                                <ul>
                                    <li>Predecessor : <span>None.</span></li>
                                    <li>Support Type : <span>Neutral.</span></li>
                                    <li>Cushioning : <span>High Energizing.</span></li>
                                    <li>Total Weight : <span> 300gm</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide feature-right-content">
                        <div class="image-side">
                            <img src="assets/images/feature-image/3.webp" alt="">
                        </div>
                        <div class="content-side">

                            <div class="prize-content">
                                <h5 class="title"><a href="single-product.html">Ladies Smart Watch</a></h5>
                                <span class="price">

                                    <span class="new">₾ 38.50</span>
                                    </span>
                            </div>
                            <div class="product-feature">
                                <ul>
                                    <li>Predecessor : <span>None.</span></li>
                                    <li>Support Type : <span>Neutral.</span></li>
                                    <li>Cushioning : <span>High Energizing.</span></li>
                                    <li>Total Weight : <span> 300gm</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?><?php /**PATH E:\HERD\catalogue\resources\views/components/bottomslider.blade.php ENDPATH**/ ?>