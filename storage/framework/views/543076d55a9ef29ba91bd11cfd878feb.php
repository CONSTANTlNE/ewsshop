<div id="caterrors"></div>
<?php $__currentLoopData = $shop->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catindex => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div id="cat<?php echo e($catindex); ?>"
         class="d-flex  align-items-start justify-content-between mt-2 w-100">
        <p style="display: inline-block;max-width: 290px!important;overflow: hidden"><?php echo e($category->name); ?></p>
        <div class="d-flex">
            <form  style="margin-bottom: 0!important;"
                    hx-get="<?php echo e(route('category.edit.htmx')); ?>"
                    hx-target="#cat<?php echo e($catindex); ?>">
                <input type="hidden" name="catid" value="<?php echo e($category->id); ?>">
                <button STYLE="width: min-content;">
                    <img style="cursor: pointer!important"
                         src="<?php echo e(asset('assets/icons/edit_icon.svg')); ?>" alt="">
                </button>
            </form>
            <form class="deletecategoryalert" action="<?php echo e(route('category.delete')); ?> "
                  method="post">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="catid" value="<?php echo e($category->id); ?>">
                <button class="deletecategorybuttonaction"></button>

            </form>
            <button type="button" class="deletecategorybutton" STYLE="width: min-content;">
                <img style="cursor: pointer!important;width: 24px; height: 24px"
                     src="<?php echo e(asset('assets/icons/delete_remove_icon.svg')); ?>" alt="">
            </button>
        </div>

    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<script>

     deletecategorybutton = document.querySelectorAll('.deletecategorybutton')
     deletecategorybuttonaction = document.querySelectorAll('.deletecategorybuttonaction')

    deletecategorybutton.forEach((el, index) => {
        el.addEventListener('click', () => {

            document.querySelector("[data-category]").close()
            document.body.style.overflow = 'auto';

            Swal.fire({
                title: "ნამდვილად გსურთ წაშლა?",
                // text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                cancelButtonText: "გაუქმება",
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "წაშლე",

            }).then((result) => {
                if (result.isConfirmed) {
                    deletecategorybuttonaction[index].click();
                }
                isSwalOpen = true;
            });
        });
    });

</script><?php /**PATH E:\HERD\catalogue\resources\views/htmx/categoryupdatedtext.blade.php ENDPATH**/ ?>