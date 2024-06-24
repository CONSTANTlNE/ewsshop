<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/prompt/tailwind/account-forget-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Mar 2024 19:28:00 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Forget Paassword | Prompt - Tailwind CSS Multipurpose Landing Page Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive Tailwind CSS Multipurpose agency, application, business, clean, creative, cryptocurrency, it solutions, startup, career, blog, modern, creative, multipurpose, portfolio, saas, software, tailwind css, etc." name="description" />
    <meta content="coderthemes" name="author" />

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
                <div class="lg:w-1/2 mx-auto mb-6">
                    <div class="bg-white shadow-md p-12 rounded-s col-span-6">
                        <div class="mb-12">
                            <a style="justify-content: center!important;align-items: center!important" class="flex" href="{{route('index')}}">
                                <img style="width: 55px;height: 50px" src="{{asset('assets/images/logo/logo2.png')}}" alt="logo-img" class="h-8">
                            </a>
                        </div>
                        <form action="{{route('password.update')}}"  method="post">
                            @csrf
                            <input type="hidden" name="token" value="{{ request()->route('token') }}">
                            <div class="mb-4">
                                <label for="email" class="block text-sm font-medium mb-1 text-gray-600">მეილი <small>*</small></label>
                                <input name="email" value="{{$request->email}}" type="email" id="email" class="mb-2 py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0" placeholder="Your Name">
                                @error('email')
                                <span class="text-danger " role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror

                            </div>
                            <div class="mb-4">
                                <label for="password" class="block text-sm font-medium mb-1 text-gray-600">ახალი პაროლი <small>*</small></label>
                                <input type="text" id="password" name="password" class="py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0" >
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
                                @error('token')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="password_confirmation" class="block text-sm font-medium mb-1 text-gray-600">გაიმეორეთ პაროლი <small>*</small></label>
                                <input type="text" id="password_confirmation" name="password_confirmation" class="py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0" >
                            </div>
                            <div class="pt-4 text-center">
                                <button class="w-full bg-primary text-white font-medium leading-6 text-center align-middle select-none py-2 px-4 text-base rounded-md transition-all hover:shadow-lg hover:shadow-primary/30" type="submit">შეცვლა</button>
                                @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
                            </div>
                        </form>

                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="w-full text-center">
                    <p class="text-gray-500 leading-6 text-base"> <a href="{{route('login')}}" class="text-primary font-semibold ms-1">ავტორიზაციის გვერდი</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Frost Plugin Js -->
    <script src="{{asset('landingassets/libs/%40frostui/tailwindcss/frostui.js')}}"></script>

    <!-- Swiper Plugin Js -->
    <script src="{{asset('landingassets/libs/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Animation on Scroll Plugin Js -->
    <script src="{{asset('landingassets/libs/aos/aos.js')}}"></script>

    <!-- Theme Js -->
    <script src="{{asset('landingassets/js/theme.min.js')}}"></script>

</body>


<!-- Mirrored from coderthemes.com/prompt/tailwind/account-forget-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Mar 2024 19:28:00 GMT -->
</html>