<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>shop.ews.ge</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/myStyle.css')); ?>">

</head>
<body>


<dialog style="height: 500px!important;text-align: center" class="dialog" data-mobile-dialog>

    <?php if(session('mobsuccess')): ?>
        <p style=" color: green" >
            <strong><?php echo e(session('mobsuccess')); ?></strong>
        </p>
    <?php endif; ?>

    <form  action="<?php echo e(route('mobile.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
    <h2>ვერიფიკაცია</h2>
    <label for="">მობილური</label>
    <br>

    <input style="width: 150px" value="<?php echo e($user->mobile); ?>"   class="form-input" type="text" name="mobile" placeholder="">
        <?php $__errorArgs = ['mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

        <p style=" color: red" >
            <strong><?php echo e($message); ?></strong>
        </p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


    <div class="flex-row align-items-center mb-2">
        <button  STYLE="width:  max-content;border-radius: 15px;" type="submit" class="button-31 ">კოდის მიღება</button>
    </div>
    </form>

    <form  style="margin-top: 20px" action="<?php echo e(route('confirm.mobile2')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <label for="">სმს კოდი</label>
        <br>
        <input style="width: 150px"  class="form-input" type="text" name="code" placeholder="">

        <?php if(session('codeerror')): ?>
            <p style=" color: red" >
                <strong><?php echo e(session('codeerror')); ?></strong>
            </p>
        <?php endif; ?>

        <div class="flex-row align-items-center mb-2">
            <button  STYLE="width:  max-content;border-radius: 15px;" type="submit" class="button-31 ">დადასტურება</button>
        </div>
    </form>







</dialog>
<script>
    document.querySelector("[data-mobile-dialog]").showModal()
</script>
</body>
</html><?php /**PATH E:\HERD\catalogue\resources\views/pages/mobileconfirm.blade.php ENDPATH**/ ?>