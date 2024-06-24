<?php if(!$shop->categories->isEmpty()): ?>

    <?php $__currentLoopData = $shop->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($category->products->isNotEmpty() ): ?>
            <div class="banner-area style-three pb-100px">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <?php if(auth()->guard()->check()): ?>
                                <div class=" d-flex flex-column justify-content-center align-items-center">
                                    <button style="width: max-content; margin: auto" type="button" data-category-image
                                            class="button-31">ფოტოს შეცვლა
                                    </button>
                                    <span class="categoryimagefilename"></span>
                                </div>
                                <form class="categoryimageform" action="<?php echo e(route('categoryimageupdate')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="id" value="<?php echo e($category->id); ?>">
                                    <div style="width: max-content"
                                         class="d-flex flex-column justify-content-around align-items-center">
                                        <br>
                                        <input style="display: none" type="file" data-category-imagefile
                                               class="categoryimage">
                                        <input type="hidden" name="categoryimage" data-converted-categoryimage>
                                    </div>
                                </form>
                            <?php endif; ?>

                            <div style="border-radius: 15px!important" class="single-banner mb-lm-30px">
                                
                                <?php if($category->media->isEmpty()): ?>
                                    <?php $__currentLoopData = $category->products->first()->media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($loop->first): ?>
                                            <img style="object-fit: cover" class="categoryimg" src="<?php echo e($media1->getUrl()); ?>" alt="">
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php else: ?>
                                    <?php $__currentLoopData = $category->media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <img style="object-fit: cover" class="categoryimg" src="<?php echo e($media->getUrl()); ?>" alt="">
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                                <div class="banner-content nth-child-3 d-flex align-items-center justify-content-center">
                                    
                                    
                                    
                                    <br>
                                    <a style="width: max-content!important;padding-right: 20px;padding-left: 20px"
                                       href="<?php echo e(route('categories',['shop'=>request()->segment(1),'category'=>$category->slug])); ?>"
                                       class="shop-link"><?php echo e($category->name); ?>


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
                                <?php $__currentLoopData = $category->products->where('category_gallery',1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <div class="col-md-4 col-sm-6 col-6 mb-30px maincatprod">
                                        <?php if(auth()->guard()->check()): ?>
                                            <div class="d-flex justify-content-around align-items-center">
                                                
                                                <form action="<?php echo e(route('product.update',['shop'=>request()->segment(1)])); ?>"
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
                                                
                                                <form class="deletefrommaincatform"
                                                      action="<?php echo e(route('product.delete',['shop'=>request()->segment(1)])); ?>"
                                                      method="post"
                                                      target="nocontent"
                                                >
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
                                                    <button  class="deletebutton2"
                                                             style="display: none "
                                                             hx-post="<?php echo e(route('product.delete.htmx',['shop'=>request()->segment(1)])); ?>"
                                                             hx-target="#addtarget"
                                                    ></button>
                                                    <button type="button" class="deletemaincatprod">
                                                        <img style="height: 30px;width: 30px;margin-bottom: 20px;cursor:pointer"
                                                             src="<?php echo e(asset('assets/icons/delete_remove_icon.svg')); ?>"
                                                             alt="">
                                                    </button>
                                                </form>
                                            </div>
                                        <?php endif; ?>
                                        <section class="product">

                                            <div class="thumb">
                                                <a style="border-radius: 15px!important"

                                                   data-bs-target="#exampleModal"
                                                   data-bs-toggle="modal"
                                                   hx-target="#quickviewtarget"
                                                   hx-get="<?php echo e(route('quickView', ['shop'=>$shop->slug,'product' => $product->id])); ?>"
                                                   class="image">

                                                    <?php if(!$product->getMedia('product_image1')->isEmpty()): ?>
                                                        <img class="product-image"
                                                             src="<?php echo e($product->getMedia('product_image1')[0]->getUrl()); ?>"
                                                             alt="Product"/>
                                                        <img class="hover-image"
                                                             src="<?php echo e($product->getMedia('product_image1')[0]->getUrl()); ?>"
                                                             alt="Product image <?php echo e($product->name); ?>"/>
                                                    <?php endif; ?>
                                                </a>
                                            </div>
                                            <article class="content">
                                                <span class="category mt-2"><a href="#"><?php echo e($category->name); ?></a></span>
                                                <h5 class="title text-center">
                                                    <a href="<?php echo e(route('single.product', ['shop'=>request()->segment(1),'product' => $product->slug])); ?>"><?php echo e($product->name); ?>

                                                    </a>


                                                </h5>
                                                <span class="price">
                                            <span class="new">₾ <?php echo e($product->price); ?></span>
                                        </span>
                                            </article>
                                            

                                            
                                            
                                            
                                            

                                            

                                        </section>
                                    </div>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?><?php /**PATH E:\HERD\catalogue\resources\views/pages/categories_main.blade.php ENDPATH**/ ?>