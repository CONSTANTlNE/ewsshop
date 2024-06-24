

<?php
    //    dd(auth()->user()->email);
?>

<?php $__env->startSection('index'); ?>

    <!-- Banner Area Start -->
    

    

    <div id="addtarget">
        <!-- Product Main Gallery Start -->
        <?php if($shop->settings->first()->use_main_gallery===1): ?>
            <div class="product-area pb-100px mt-3">
                <div class="container">
                    <!-- Section Title & Tab Start -->
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title text-center">
                                <div id="populartext">
                                    <?php if($shop->products->isNotEmpty()): ?>
                                        <h2 class="title">
                                            <?php if($shop->headername): ?>
                                                <?php echo e($shop->headername->name); ?>

                                            <?php else: ?>
                                                მთავარი გალერეა
                                            <?php endif; ?>
                                            <?php if(auth()->guard()->check()): ?>
                                                <img style="cursor: pointer!important"
                                                     src="<?php echo e(asset('assets/icons/edit_icon.svg')); ?>"
                                                     alt="gallery_image"
                                                     hx-get="<?php echo e(route('shop.populartext.edit',['shop'=>$shop->slug])); ?>"
                                                     hx-target="#populartext"
                                                >
                                            <?php endif; ?>
                                        </h2>
                                    <?php endif; ?>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                    <iframe name="nocontent" style="display:none;"></iframe>
                    
                    <div class="row">
                        <div class="col">
                            <div class="row mb-n-30px justify-content-center" id="maingallery">
                                <?php $__currentLoopData = $shop->products->where('main_page',1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-4 col-sm-6 col-6 mb-30px maingpagegalprod">
                                        <?php if(auth()->guard()->check()): ?>
                                            <div class="d-flex justify-content-around align-items-center">
                                                
                                                <form
                                                      method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
                                                    <button id="editproductmain" data-open-edit
                                                            hx-target="#editproductmodal"
                                                            hx-get="<?php echo e(route('product.edit',['shop'=>request()->segment(1),'product'=>$product->id,'initiator'=>'main'])); ?>">
                                                        <img style="height: 30px;width: 30px;margin-bottom: 20px; cursor:pointer"
                                                             src="<?php echo e(asset('assets/icons/edit_icon.svg')); ?>" alt="">
                                                    </button>
                                                </form>
                                                
                                                <form class="deletefrommaingalform"
                                                      action="<?php echo e(route('product.delete',['shop'=>request()->segment(1)])); ?>"
                                                      method="post"
                                                        
                                                >
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
                                                    <button class="deletebutton"
                                                            style="display: none "
                                                            hx-post="<?php echo e(route('product.delete.htmx',['shop'=>request()->segment(1)])); ?>"
                                                            hx-target="#addtarget"
                                                    ></button>
                                                    <button type="button" class="deletemaingalproduct"
                                                    >
                                                        <img style="height: 30px;width: 30px;margin-bottom: 20px;cursor:pointer"
                                                             src="<?php echo e(asset('assets/icons/delete_remove_icon.svg')); ?>"
                                                             alt="">
                                                    </button>
                                                </form>
                                            </div>
                                        <?php endif; ?>
                                        <div style="min-height: 300px" class="product">

                                            <div class="thumb">
                                                <a style="border-radius: 15px!important"

                                                   data-bs-target="#exampleModal"
                                                   data-bs-toggle="modal"
                                                   hx-target="#quickviewtarget"
                                                   hx-get="<?php echo e(route('quickView', ['shop'=>request()->segment(1),'product' => $product->id])); ?>"
                                                   
                                                   class="image">

                                                    <?php if(!$product->getMedia('product_image1')->isEmpty()): ?>
                                                        <img class="product-image"
                                                             src="<?php echo e($product->getMedia('product_image1')[0]->getUrl()); ?>"
                                                             alt="Product"/>
                                                        <img class="hover-image"
                                                             src="<?php echo e($product->getMedia('product_image1')[0]->getUrl()); ?>"
                                                             alt="Product"/>
                                                    <?php endif; ?>
                                                </a>
                                            </div>
                                            <div class="content">
                                                <?php if($shop->settings->first()->use_category===1): ?>
                                                    <span class="category mt-2 text-center">
                                                                                 <a href="<?php echo e(route('categories',['shop'=>request()->segment(1),'category'=>$product->category->slug])); ?>"><?php echo e($product->category->name); ?></a>

                                            </span>
                                                <?php endif; ?>
                                                <h5 class="title text-center">
                                                    <a href="<?php echo e(route('single.product', ['shop'=>request()->segment(1),'product' => $product->slug])); ?>"><?php echo e($product->name); ?>

                                                    </a>
                                                </h5>
                                                <span class="price">
                                            <span class="new">₾ <?php echo e($product->price); ?></span>
                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if($shop->products->isNotEmpty()): ?>
                    <div class=" d-flex align-items-center justify-content-center mt-5">

                        <a href="<?php echo e(route('products',['shop'=>request()->segment(1)])); ?>" class="allproducts">ყველა
                            პროდუქტი</a>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>



        <!-- CATEGORIES AND PRODUCTS FOR MAIN PAGE -->.
        <?php if($shop->settings->first()->use_category===1): ?>
            <?php echo $__env->make('pages.categories_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>

        
        

        <!-- Fashion Area Start -->
        
        <!-- Fashion Area End -->
        <!-- Feature Area Srart -->
        
        <!-- Feature Area End -->
        <!-- Blog area start from here -->
        
        <!-- Blog area end here -->


    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\HERD\catalogue\resources\views/pages/shop.blade.php ENDPATH**/ ?>