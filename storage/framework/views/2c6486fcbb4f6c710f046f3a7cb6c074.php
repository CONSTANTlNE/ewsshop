<?php if($shop->settings->first()->use_category): ?>
    <select id="category_id" name="category" class="form-input line-height-1">
        <?php $__currentLoopData = $shop->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option name="category_id"
                    value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
<?php endif; ?><?php /**PATH E:\HERD\catalogue\resources\views/htmx/product/addproductmodal.blade.php ENDPATH**/ ?>