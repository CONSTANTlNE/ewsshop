<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/prompt/tailwind/account-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Mar 2024 19:27:59 GMT -->
<head>
    <meta charset="utf-8"/>
    <title>Login your account | Prompt - Tailwind CSS Multipurpose Landing Page Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive Tailwind CSS Multipurpose agency, application, business, clean, creative, cryptocurrency, it solutions, startup, career, blog, modern, creative, multipurpose, portfolio, saas, software, tailwind css, etc."
          name="description"/>
    <meta content="coderthemes" name="author"/>

    <!-- Theme favicon -->
    <link rel="shortcut icon" href="{{asset('landingassets/images/favicon.ico')}}">

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
        <div class="container">
            <div >
                <div class="bg-white shadow rounded mb-6">
                    <div class="grid md:grid-cols-12">
                        <div class="bg-white shadow-md p-12 rounded-s xl:col-span-5 md:col-span-6">
                            <div class="mb-12">
                                <a href="index.html">
                                    <img src="{{asset('landingassets/images/logo-dark.png')}}" alt="logo-img" class="h-8">
                                </a>
                            </div>
                            <h6 class="text-base/[1.6] font-semibold text-gray-600 mb-0 mt-4">Create Your Account</h6>
                            <p class="text-gray-500 text-sm/[1.6] mt-1 mb-6">Don't have an account? Create your account, it takes less than a minute.</p>
                            <form action="{{route('register')}}" method="post" >
                                @csrf
                                <div class="mb-4">
                                    <label for="input-label" class="block text-sm font-medium mb-1 text-gray-600">Your Name <small>*</small></label>
                                    <input name="name" type="text" id="input-label" class="mb-2 py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0" placeholder="Your Name">
                                   @error('name')
                                    <span class="text-danger " role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="email" class="block text-sm font-medium mb-1 text-gray-600">Email <small>*</small></label>
                                    <input name="email" type="email" id="email" class="mb-2 py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0" placeholder="Your Name">
                                    @error('email')
                                    <span class="text-danger " role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror

                                </div>

                                <div class="mb-4">
                                    <label for="password" class="block text-sm font-medium mb-1 text-gray-600">Password <small>*</small></label>
                                    <input  type="password" id="password" name="password" class="mb-2 py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0" placeholder="Enter your password">
                                    @error('password')
                                    <span class="text-danger " role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="password" class="block text-sm font-medium mb-1 text-gray-600">Confirm Password <small>*</small></label>
                                    <input  type="password" id="password" name="password_confirmation" class="mb-2 py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0" placeholder="Enter your password">
                                    @error('password_confirmation')
                                    <span class="text-danger " role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                                <div class="mb-0 text-center">
                                    <button class="w-full bg-primary text-white font-medium leading-6 text-center align-middle select-none py-2 px-4 text-base rounded-md transition-all hover:shadow-lg hover:shadow-primary/30" type="submit">Register</button>
                                </div>
                            </form>

                            <div class="py-4 text-center"><span class="fs-13 fw-bold">OR</span></div>

                            <div class="w-full">
                                <a href="#" class="block border text-gray-500 font-medium leading-6 text-center align-middle select-none py-2 px-4 text-sm rounded-md transition-all hover:shadow-md">
                                    <span class="flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github icon icon-xs me-2">
                                            <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                        </svg>
                                        Sign Up with Github
                                    </span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full text-center">
                    <p class="text-gray-500 leading-6 text-base">Already have an account? <a href="{{route('login')}}" class="text-primary font-semibold ms-1">Log In</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Frost Plugin Js -->
    <script src="{{asset('landingassets/libs/%40frostui/tailwindcss/frostui.js')}}"></script>

    <!-- Swiper Plugin Js -->
{{--    <script src="{{asset('landingassets/libs/swiper/swiper-bundle.min.js')}}"></script>--}}

    <!-- Animation on Scroll Plugin Js -->
{{--    <script src="{{asset('landingassets/libs/aos/aos.js')}}"></script>--}}

    <!-- Theme Js -->
{{--    <script src="{{asset('landingassets/js/theme.min.js')}}"></script>--}}

</body>


<!-- Mirrored from coderthemes.com/prompt/tailwind/account-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Mar 2024 19:28:00 GMT -->
</html>