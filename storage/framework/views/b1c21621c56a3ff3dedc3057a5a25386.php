
<input  style="max-width: 300px " class="form-input" type="text" id="catname" name="name"  value="<?php echo e($category->name); ?>">
<input type="hidden" id="token3" name="_token" value="<?php echo e(csrf_token()); ?>">
<input type="hidden" id="catid" name="catid" value="<?php echo e($category->id); ?>">

<button
        hx-post="<?php echo e(route('category.update.htmx')); ?>"
        hx-include="#catname,#token3,#catid"
        hx-target="#categorieslist"
        hx-target-error="#caterrors"
        style="display: inline-block;padding: 0;width: 50px" type="button" class="button-31 mb-2">
    <svg style="pointer-events: none" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
        <path fill="white" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z"></path>
    </svg>
</button>
<?php /**PATH E:\HERD\catalogue\resources\views/htmx/categorytextedit.blade.php ENDPATH**/ ?>