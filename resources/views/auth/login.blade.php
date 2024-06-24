<!DOCTYPE html>
<html lang="en">
@php
    //dd('sdsdsd');

@endphp
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
    <link rel="shortcut icon" href="{{asset('assets/images/logo/logonobg.png')}}">

    <!--Swiper slider css-->
    <link href="{{asset('landingassets/libs/swiper/swiper-bundle.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Animation on Scroll css -->
    <link href="{{asset('landingassets/libs/aos/aos.css')}}" rel="stylesheet" type="text/css">

    <!-- Style css -->
    <link href="{{asset('landingassets/css/style.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Icons css -->
    <link href="{{asset('landingassets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
</head>

<body class="bg-slate-100 tracking-wide">

<div class="min-h-screen flex items-center justify-center">
    <div style="max-width: 500px" >

            <div class="bg-white shadow rounded mb-6">
                <div class="grid grid-cols-12">
                    <div class="bg-white shadow-md p-6 rounded-s col-span-12">
                        <div class="mb-12 d-flex gap-3">
                            <a style="width: 100%!important;display: flex;justify-content: center;align-items: center;gap: 10px" href="{{route('index')}}">
                                <img src="{{asset('assets/images/logo/logonobg.png')}}" alt="logo-img" class="h-8">
                                <p style="width: max-content!important">Shop.Ews.Ge</p>
                            </a>

                        </div>
{{--                        <h6 class="text-base/[1.6] font-semibold text-gray-600 mb-0 mt-4">Welcome back!</h6>--}}
{{--                        <p class="text-gray-500 text-sm/[1.6] mt-1 mb-6">Enter your email address and password to access--}}
{{--                            admin panel.</p>--}}
                        <form action="{{route('login')}}" method="post">
                            @csrf
                            <div class="mb-4">
                                <label for="email" class="block text-sm font-medium mb-1 text-gray-600">მეილი
                                    <small>*</small></label>
                                <input type="email" id="email"
                                       name="email"
                                       class="py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0"
                                      >
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
                            </div>

                            <div class="mb-4">

                                <label for="password" class="block text-sm font-medium mb-1 text-gray-600">პაროლი
                                    <small>*</small></label>
                                <input type="password" id="password" name="password"
                                       class="py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0"
                                       >
                                <a href="{{route('password.request')}}"
                                   class="mt-1 mb-2 float-center text-gray-500 text-xs border-b border-dashed pb-1 ms-1">პაროლის აღდგენა</a>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
                            </div>
                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif
{{--                            <div class="flex items-center mb-4">--}}
{{--                                <input id="remember" type="checkbox"--}}
{{--                                       class="shrink-0 border-gray-400 rounded text-blue-600">--}}
{{--                                <label for="remember" class="text-xs/none text-gray-700 font-medium ms-3">Remember--}}
{{--                                    me</label>--}}
{{--                            </div>--}}

                            <div class="mb-0 text-center">
                                <button class="w-full bg-primary text-white font-medium leading-6 text-center align-middle select-none py-2 px-4 text-base rounded-md transition-all hover:shadow-lg hover:shadow-primary/30"
                                        type="submit">ავტორიზაცია
                                </button>
                            </div>
                        </form>

                        <div class="py-4 text-center"><span class="fs-13 fw-bold">ან</span></div>

                        <div class="w-full">
                      @include('components.sociallogins')
                        </div>
                    </div>

                </div>
            </div>
            <div class="w-full text-center">
                <p class="text-gray-500 leading-6 text-base">არ ხართ რეგისტრირებული? <a href="{{route('register')}}"
                                                                                       class="text-primary font-semibold ms-1">
                        რეგისტრაცია</a></p>
            </div>

    </div>
</div>

<!-- Frost Plugin Js -->
<script src="{{asset('landingassets/libs/%40frostui/tailwindcss/frostui.js')}}"></script>

<!-- Swiper Plugin Js -->
{{--<script src="{{asset('landingassets/libs/swiper/swiper-bundle.min.js')}}"></script>--}}

<!-- Animation on Scroll Plugin Js -->
{{--<script src="{{asset('landingassets/libs/aos/aos.js')}}"></script>--}}

<!-- Theme Js -->
{{--<script src="{{asset('landingassets/js/theme.min.js')}}"></script>--}}

</body>


<!-- Mirrored from coderthemes.com/prompt/tailwind/account-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Mar 2024 19:27:59 GMT -->
</html>