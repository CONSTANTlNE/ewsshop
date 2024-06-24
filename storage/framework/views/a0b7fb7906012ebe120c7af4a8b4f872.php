<!DOCTYPE html>
<html lang="en">
<?php
    //dd('sdsdsd');

?>
        <!-- Mirrored from coderthemes.com/prompt/tailwind/account-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Mar 2024 19:27:59 GMT -->
<head>
    <meta charset="utf-8"/>
    <title>Shop.Ews.Ge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="შექმენით თქვენი პროდუქციის ონლაინ კატალოგი უფასოდ"
          name="description"/>
    <meta name="keywords" content="ციფრული კატალოგი,ონლაინ მაღაზია">
    <link rel="canonical" href="https://shop.ews.ge/">
    <meta name="robots" content="index, follow">

    <!-- Theme favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset('assets/images/logo/logonobg.png')); ?>">

    <!--Swiper slider css-->
    <link href="<?php echo e(asset('landingassets/libs/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet" type="text/css">

    <!-- Animation on Scroll css -->
    <link href="<?php echo e(asset('landingassets/libs/aos/aos.css')); ?>" rel="stylesheet" type="text/css">

    <!-- Style css -->
    <link href="<?php echo e(asset('landingassets/css/style.min.css')); ?>" rel="stylesheet" type="text/css">

    <!-- Icons css -->
    <link href="<?php echo e(asset('landingassets/css/icons.min.css')); ?>" rel="stylesheet" type="text/css">
</head>

<body class="bg-slate-100 tracking-wide">

<div class="min-h-screen flex items-center justify-center">
    <div style="max-width: 500px" >

            <div class="bg-white shadow rounded mb-6">
                <div class="grid grid-cols-12">
                    <div class="bg-white shadow-md p-6 rounded-s col-span-12">
                        <div class="mb-12 d-flex gap-3">
                            <a style="width: 100%!important;display: flex;justify-content: center;align-items: center;gap: 10px" href="<?php echo e(route('index')); ?>">
                                <img src="<?php echo e(asset('assets/images/logo/logonobg.png')); ?>" alt="logo-img" class="h-8">
                                <p style="width: max-content!important">Shop.Ews.Ge</p>
                            </a>

                        </div>



                        <form action="<?php echo e(route('login')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="mb-4">
                                <label for="email" class="block text-sm font-medium mb-1 text-gray-600">მეილი
                                    <small>*</small></label>
                                <input type="email" id="email"
                                       name="email"
                                       class="py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0"
                                      >
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="mb-4">

                                <label for="password" class="block text-sm font-medium mb-1 text-gray-600">პაროლი
                                    <small>*</small></label>
                                <input type="password" id="password" name="password"
                                       class="py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0"
                                       >
                                <a href="<?php echo e(route('password.request')); ?>"
                                   class="mt-1 mb-2 float-center text-gray-500 text-xs border-b border-dashed pb-1 ms-1">პაროლის აღდგენა</a>
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <?php if(session('status')): ?>
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    <?php echo e(session('status')); ?>

                                </div>
                            <?php endif; ?>







                            <div class="mb-0 text-center">
                                <button class="w-full bg-primary text-white font-medium leading-6 text-center align-middle select-none py-2 px-4 text-base rounded-md transition-all hover:shadow-lg hover:shadow-primary/30"
                                        type="submit">ავტორიზაცია
                                </button>
                            </div>
                        </form>

                        <div class="py-4 text-center"><span class="fs-13 fw-bold">ან</span></div>

                        <div class="w-full">
                      <?php echo $__env->make('components.sociallogins', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>

                </div>
            </div>
            <div class="w-full text-center">
                <p class="text-gray-500 leading-6 text-base">არ ხართ რეგისტრირებული? <a href="<?php echo e(route('register')); ?>"
                                                                                       class="text-primary font-semibold ms-1">
                        რეგისტრაცია</a></p>
            </div>

    </div>
</div>

<!-- Frost Plugin Js -->
<script src="<?php echo e(asset('landingassets/libs/%40frostui/tailwindcss/frostui.js')); ?>"></script>

<!-- Swiper Plugin Js -->


<!-- Animation on Scroll Plugin Js -->


<!-- Theme Js -->


</body>


<!-- Mirrored from coderthemes.com/prompt/tailwind/account-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Mar 2024 19:27:59 GMT -->
</html><?php /**PATH E:\HERD\catalogue\resources\views/auth/login.blade.php ENDPATH**/ ?>