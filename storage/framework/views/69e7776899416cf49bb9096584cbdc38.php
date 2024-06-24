<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li>
        <a
           data-bs-target="#exampleModal"
           data-bs-toggle="modal"
           hx-target="#quickviewtarget"
           hx-get="<?php echo e(route('quickView', ['shop'=>request()->segment(1),'product' => $product->id])); ?>"
        >
        <div class="d-flex justify-content-start align-items-center mb-1">
            <?php $__currentLoopData = $product->media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($loop->first): ?>
                    <img style="width: 70px;height: 70px;margin:5px;border-radius: 7px" src="<?php echo e($media->getUrl()); ?>">
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="d-flex flex-column gap-1">
                <span>    <?php echo e($product->name); ?></span>
                <span>  ₾  <?php echo e($product->price); ?></span>
            </div>
        </div>
        </a>
    </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH E:\HERD\catalogue\resources\views/htmx/searchmobile.blade.php ENDPATH**/ ?>