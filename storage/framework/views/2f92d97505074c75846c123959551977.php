<div class="row">
    <div class="col">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="shop-grid">
                
                <div class="row mb-n-30px">
                    <?php $__currentLoopData = $shop->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4 col-sm-6 col-6 mb-30px">
                            <?php if(auth()->guard()->check()): ?>
                                <div class="d-flex justify-content-around align-items-center">
                                    <form action="<?php echo e(route('product.update',['shop'=>request()->segment(1)])); ?>"
                                          method="post">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="id"
                                               value="<?php echo e($product->id); ?>">
                                        <button id="editproductmain" data-open-edit
                                                hx-target="#editproductmodal"
                                                hx-get="<?php echo e(route('product.edit',['shop'=>$shop->slug,'product'=>$product->id,'initiator'=>'allproducts'])); ?>">
                                            <img style="height: 30px;width: 30px;margin-bottom: 20px; cursor:pointer"
                                                 src="<?php echo e(asset('assets/icons/edit_icon.svg')); ?>"
                                                 alt="">
                                        </button>
                                    </form>
                                    <form
                                            class="deletefrommaingalform"
                                            action="<?php echo e(route('product.delete',['shop'=>request()->segment(1)])); ?>"
                                            method="post"

                                            hx-post="<?php echo e(route('product.delete.htmx2',['shop'=>request()->segment(1)])); ?>"
                                            hx-target="#productstarget2"
                                    >
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="shopid"
                                               value="<?php echo e($shop->id); ?>">
                                        <input type="hidden" name="id"
                                               value="<?php echo e($product->id); ?>">
                                        <button class="deletebutton"
                                                style="display: none "

                                        ></button>
                                        <button type="button" class="deletemaingalproduct">
                                            <img style="height: 30px;width: 30px;margin-bottom: 20px;cursor:pointer"
                                                 src="<?php echo e(asset('assets/icons/delete_remove_icon.svg')); ?>"
                                                 alt="">
                                        </button>
                                    </form>
                                </div>
                            <?php endif; ?>
                            <div class="product">

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
                                                 alt="Product"/>
                                        <?php endif; ?>
                                    </a>
                                </div>
                                <div class="content">
                                    <?php if($shop->settings->first()->use_category===1): ?>
                                        <span class="category mt-2">
                                                                    <a href="#"><?php echo e($product->category->name); ?>  </a>
                                                                </span>
                                    <?php endif; ?>
                                    <h5 class="title text-center"><a
                                                href="<?php echo e(route('single.product', ['shop'=>$shop->slug,'product' => $product->slug])); ?>"><?php echo e($product->name); ?>

                                        </a>
                                    </h5>
                                    <span class="price">
                                            <span class="new">₾ <?php echo e($product->price); ?></span>
                                                                </span>
                                </div>
                                <div class="actions">

                                </div>

                            </div>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelector("[data-edit-modal]").close()
    openedit = document.querySelectorAll("[data-open-edit]")


    openedit.forEach(el => {
        el.addEventListener('click', () => {
            document.querySelector("[data-edit-modal]").showModal()
            document.body.style.overflow = 'hidden';

        })
    })




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
                        deletebutton[index].click()
                    }
                });
        })
    })
</script>


<?php if(session('deletesuccess')): ?>
    <script>

        Swal.fire({
            position: "center",
            icon: "success",
            title: "პროდუქტი წარმატებით წაიშალა",
            showConfirmButton: false,
            timer: 2500
        });

    </script>
<?php endif; ?><?php /**PATH E:\HERD\catalogue\resources\views/htmx/product/productshtmx.blade.php ENDPATH**/ ?>