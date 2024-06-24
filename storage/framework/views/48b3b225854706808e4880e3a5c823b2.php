<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/myStyle.css')); ?>">

</head>
<body>
<dialog  style="height: 500px!important;text-align: center;position: relative" class="dialog" data-modal>
    <form action="<?php echo e(route('shop.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <h2>შექმენი მაღაზია</h2>

        <label for="shop">მაღაზიის სახელი</label>
        <input class="form-input" type="text" name="shop" id="shop" placeholder="">
        <?php $__errorArgs = ['shop'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p style="color: red"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <label for="address">მისამართი</label>
        <input class="form-input" type="text" name="address" id="address" placeholder="არასავალდებულო">
        <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p style="color: red"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <label for="description">აღწერა</label>
        <textarea class="form-input" name="description" id="description" placeholder="არასავალდებულო"></textarea>
        <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p style="color: red"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <div style="margin-top: 20px;position: absolute;bottom: 10px;left: 35%" class="flex-row align-items-center ">
            <button STYLE="width: min-content;margin-left: 20px;border-radius: 15px" type="submit" class="button-31 ">
                შექმნა
            </button>
        </div>
    </form>
</dialog>
<script>
    document.querySelector("[data-modal]").showModal()
</script>
</body>
</html><?php /**PATH E:\HERD\catalogue\resources\views/pages/createshop.blade.php ENDPATH**/ ?>