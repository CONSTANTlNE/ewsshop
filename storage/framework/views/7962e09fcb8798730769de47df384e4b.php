<h2 class="title">
        <?php if($shop->headername): ?>
                <?php echo e($shop->headername->name); ?>

        <?php else: ?>
                ყველაზე გაყიდვადი
        <?php endif; ?>
        <?php if(auth()->guard()->check()): ?>
                <img style="cursor: pointer!important" src="<?php echo e(asset('assets/icons/edit_icon.svg')); ?>"
                     alt=""
                     hx-get="<?php echo e(route('shop.populartext.edit',['shop'=>request()->segment(1)])); ?>"
                     hx-target="#populartext"
                >
        <?php endif; ?>
</h2><?php /**PATH E:\HERD\catalogue\resources\views/htmx/populartext2.blade.php ENDPATH**/ ?>