<ul>
    <li><a href="<?php echo e(route('products',['shop'=>request()->segment(1)])); ?>"
           class="selected m-0"
           <?php if(request()->routeIs('products') || request()->routeIs('products.sorted')): ?>
               style="color: blue"
                <?php endif; ?>
        > ყველა პორდუქტი

            <span>(<?php echo e($productscount); ?>)</span> </a></li>
    <?php if($shop->settings->first()->use_category===1): ?>
        <?php $__currentLoopData = $shop->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="<?php echo e(route('categories',['shop'=>request()->segment(1),'category'=>$category->slug])); ?>"
                   class="selected m-0">
                    <?php echo e($category->name); ?>

                    <span>(<?php echo e($category->products->count()); ?>)</span> </a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</ul><?php /**PATH E:\HERD\catalogue\resources\views/components/categorieslist.blade.php ENDPATH**/ ?>