<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/prompt/tailwind/home-saas.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Mar 2024 19:27:22 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Saas Application Landing Page | Prompt - Tailwind CSS Multipurpose Landing Page Template</title>
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

<body class="text-gray-800">

    <!-- =========== Navbar Start =========== -->
    @include('landingcomponents.header')
    <!-- =========== Navbar End =========== -->

    <!-- =========== Mobile Menu Start (Offcanvas) =========== -->
    @include('landingcomponents.mobilemenu')
    <!-- =========== Mobile Menu End =========== -->

    <!-- =========== Hero Section Start =========== -->
    <section class="bg-gradient-to-t from-slate-500/10 relative">

        <section class="relative pt-44 pb-36">
            <div class="container">
                <div class="grid lg:grid-cols-2 grid-cols-1 gap-16 items-center">

                    <div class="order-2 lg:order-1">
                        <div class="text-center sm:text-start">

                            <h1 class="text-3xl/tight sm:text-4xl/tight lg:text-5xl/tight font-semibold mb-7">
                                The best way to
                                <span class="relative z-0 after:bg-green-500/50 after:-z-10 after:absolute md:after:h-6 after:h-4 after:w-full after:bottom-0 after:end-0">showcase</span> your saas
                            </h1>
                            <p class="sm:text-lg text-gray-500">Make your saas application stand out with high-quality landing page designed and developed by professional</p>
                            <div class="flex gap-3 mt-16">
                                <input type="email" class="inline-block text-sm border border-slate-300 focus:ring-0 rounded shadow-lg sm:shadow-none bg-white w-full py-3 " id="Email" aria-describedby="emailHelp" placeholder="Your Email">
                                <button for="Email" class="bg-primary text-white rounded-lg text-sm font-semibold flex-none hover:shadow-lg hover:shadow-primary/30 focus:shadow-none focus:outline focus:outline-primary/40 px-3">Sign Up</button>
                            </div>
                            <div class="flex flex-wrap items-center gap-5 mt-5">
                                <div class="flex items-center gap-2">
                                    <svg class="stroke-green-500 stroke-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                    <p class="text-sm text-gray-700">Free 14-day Demo</p>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="stroke-green-500 stroke-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                    <p class="text-sm text-gray-700">No credit card needed</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="order-1 lg:order-2">
                        <div class="relative">

                            <div class="hidden sm:block">
                                <div class="before:w-24 before:h-24 before:absolute before:-bottom-8 before:-start-8 before:bg-[url('https://coderthemes.com/prompt/images/pattern/dot2.svg')]"></div>
                                <div class="after:w-24 after:h-24 after:absolute after:-top-10 after:end-10 2xl:after:end-0 after:rotate-45 after:bg-[url('https://coderthemes.com/prompt/images/pattern/dot5.svg')]"></div>
                            </div>

                            <div id="swiper_one" class="swiper border-[6px] border-white bg-white 2xl:w-[140%]" data-aos="fade-left" data-aos-duration="1000">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="absolute inset-0 flex items-center justify-center">
                                            <a href="#" class="sm:h-14 h-10 sm:w-14 w-10 rounded-full bg-green-500 flex items-center justify-center">
                                                <svg class="h-5 w-5 fill-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16.1628 6.83709C19.3876 9.02928 21 10.1254 21 12.0001C21 13.8748 19.3876 14.9709 16.1628 17.1631C15.2726 17.7682 14.3897 18.338 13.5783 18.8128C12.8665 19.2293 12.0604 19.6602 11.2258 20.0831C8.00859 21.7134 6.39999 22.5286 4.95724 21.6261C3.5145 20.7236 3.38338 18.8342 3.12114 15.0555C3.04698 13.9868 3 12.9392 3 12.0001C3 11.0609 3.04698 10.0133 3.12114 8.9447C3.38338 5.16597 3.5145 3.2766 4.95725 2.37408C6.39999 1.47155 8.00859 2.28672 11.2258 3.91706C12.0604 4.34 12.8665 4.77085 13.5783 5.18738C14.3897 5.66216 15.2726 6.23193 16.1628 6.83709Z" />
                                                </svg>
                                            </a>
                                        </div>
                                        <img src="{{asset('landingassets/images/hero/saas1.png')}}" alt="saas1" class="w-full h-full rounded-md">
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="absolute inset-0 flex items-center justify-center">
                                            <a href="#" class="sm:h-14 h-10 sm:w-14 w-10 rounded-full bg-green-500 flex items-center justify-center">
                                                <svg class="h-5 w-5 fill-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16.1628 6.83709C19.3876 9.02928 21 10.1254 21 12.0001C21 13.8748 19.3876 14.9709 16.1628 17.1631C15.2726 17.7682 14.3897 18.338 13.5783 18.8128C12.8665 19.2293 12.0604 19.6602 11.2258 20.0831C8.00859 21.7134 6.39999 22.5286 4.95724 21.6261C3.5145 20.7236 3.38338 18.8342 3.12114 15.0555C3.04698 13.9868 3 12.9392 3 12.0001C3 11.0609 3.04698 10.0133 3.12114 8.9447C3.38338 5.16597 3.5145 3.2766 4.95725 2.37408C6.39999 1.47155 8.00859 2.28672 11.2258 3.91706C12.0604 4.34 12.8665 4.77085 13.5783 5.18738C14.3897 5.66216 15.2726 6.23193 16.1628 6.83709Z" />
                                                </svg>
                                            </a>
                                        </div>
                                        <img src="{{asset('landingassets/images/hero/saas2.png')}}" alt="saas2" class="w-full h-full rounded-md">
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="absolute inset-0 flex items-center justify-center">
                                            <a href="#" class="sm:h-14 h-10 sm:w-14 w-10 rounded-full bg-green-500 flex items-center justify-center">
                                                <svg class="h-5 w-5 fill-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16.1628 6.83709C19.3876 9.02928 21 10.1254 21 12.0001C21 13.8748 19.3876 14.9709 16.1628 17.1631C15.2726 17.7682 14.3897 18.338 13.5783 18.8128C12.8665 19.2293 12.0604 19.6602 11.2258 20.0831C8.00859 21.7134 6.39999 22.5286 4.95724 21.6261C3.5145 20.7236 3.38338 18.8342 3.12114 15.0555C3.04698 13.9868 3 12.9392 3 12.0001C3 11.0609 3.04698 10.0133 3.12114 8.9447C3.38338 5.16597 3.5145 3.2766 4.95725 2.37408C6.39999 1.47155 8.00859 2.28672 11.2258 3.91706C12.0604 4.34 12.8665 4.77085 13.5783 5.18738C14.3897 5.66216 15.2726 6.23193 16.1628 6.83709Z" />
                                                </svg>
                                            </a>
                                        </div>
                                        <img src="{{asset('landingassets/images/hero/saas3.png')}}" alt="saas3" class="w-full h-full rounded-md">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <div class="absolute bottom-0 inset-x-0 hidden sm:block">
            <img src="{{asset('landingassets/images/shapes/white-wave.svg')}}" alt="white-wave-svg" class="w-full -scale-x-100 -scale-y-100">
        </div>

    </section>
    <!-- =========== Hero Section End =========== -->

    <!-- =========== feature Section Start =========== -->
    <section class="overflow-hidden">
        <div class="xl:py-24 py-16">
            <div class="container">

                <div class="text-center">
                    <span class="text-sm font-medium py-1 px-3 rounded-full text-primary bg-primary/10">Features</span>
                    <h1 class="text-3xl/tight font-medium mt-3 mb-4">Better Management. Better Performance</h1>
                    <p class="text-gray-500">Start working with <span class="text-primary">Prompt</span> to manage your workforce better</p>
                </div>

                <div class="xl:pt-16 xl:pb-28 py-16">
                    <div class="grid lg:grid-cols-2 grid-cols-1 gap-6 items-center">

                        <div class="relative">
                            <div class="hidden sm:block">
                                <div class="after:w-20 after:h-20 after:absolute after:-top-8 after:-start-8 2xl:after:end-0 after:bg-[url('https://coderthemes.com/prompt/images/pattern/dot5.svg')]"></div>
                                <div class="before:w-20 before:h-20 before:absolute before:-bottom-8 before:-end-8 before:bg-[url('https://coderthemes.com/prompt/images/pattern/dot2.svg')]"></div>
                            </div>
                            <img src="{{asset('landingassets/images/hero/saas1.png')}}" alt="saas1" data-aos="fade-right" data-aos-duration="400">
                        </div>

                        <div class="lg:ms-24">
                            <div data-fc-type="accordion" data-aos="fade-up" data-aos-duration="500">
                                <!-- 1 -->
                                <button class="pt-2 inline-flex items-center gap-x-4 w-full font-medium text-left text-gray-800 transition-all hover:text-gray-500 dark:text-gray-200 dark:hover:text-gray-400" data-fc-type="collapse">
                                    <div class="bg-blue-500/10 rounded-lg flex items-center justify-center h-12 w-12">
                                        <svg class="h-6 w-6 text-blue-500" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                                                <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" id="Combined-Shape" fill="currentColor" opacity="0.3"></path>
                                                <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" id="Combined-Shape" fill="currentColor"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <h1 class="font-medium mb-4 mt-2">Improve Employee Experience</h1>
                                </button>
                                <div class="w-full overflow-hidden duration-300 ps-16">
                                    <p class="text-gray-700 dark:text-gray-300">
                                        Before we dive into why companies must invest in employee experience (EX), it’s important to understand what this concept entails.
                                    </p>
                                    <div class="mt-7 flex items-center">
                                        <a href="#" class="text-primary">Learn more <i class="fa-solid fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>

                                <div class="border-b my-6"></div>

                                <!-- 2 -->
                                <button class="pt-2 inline-flex items-center gap-x-4 w-full font-medium text-left text-gray-800 transition hover:text-gray-500 dark:text-gray-200 dark:hover:text-gray-400" data-fc-type="collapse">
                                    <div class="bg-green-500/10 rounded-lg flex items-center justify-center h-12 w-12">
                                        <svg class="h-6 w-6 text-green-500" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                                                <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" id="Combined-Shape" fill="currentColor" opacity="0.3"></path>
                                                <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" id="Mask-Copy" fill="currentColor"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <h1 class="font-medium mb-4 mt-2">Hiring & Onboarding</h1>
                                </button>
                                <div class="hidden w-full overflow-hidden duration-300 ps-16">
                                    <p class="text-gray-700 dark:text-gray-300">
                                        Post your job, interview candidates and make offers, all on Prompt. Start hiring today.
                                    </p>
                                    <div class="mt-7 flex items-center">
                                        <a href="#" class="text-primary">Learn more <i class="fa-solid fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>

                                <div class="border-b my-6"></div>

                                <!-- 3 -->
                                <button class="pt-2 inline-flex items-center gap-x-4 w-full font-medium text-left text-gray-800 transition hover:text-gray-500 dark:text-gray-200 dark:hover:text-gray-400" data-fc-type="collapse">
                                    <div class="bg-orange-500/10 rounded-lg flex items-center justify-center h-12 w-12">
                                        <svg class="h-6 w-6 text-orange-500" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                <rect id="Rectangle-62-Copy" fill="currentColor" opacity="0.3" x="7" y="4" width="3" height="13" rx="1.5"></rect>
                                                <rect id="Rectangle-62-Copy-2" fill="currentColor" opacity="0.3" x="12" y="9" width="3" height="8" rx="1.5"></rect>
                                                <path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" id="Path-95" fill="currentColor"></path>
                                                <rect id="Rectangle-62-Copy-4" fill="currentColor" opacity="0.3" x="17" y="11" width="3" height="6" rx="1.5"></rect>
                                            </g>
                                        </svg>
                                    </div>
                                    <h1 class="font-medium mb-4 mt-2">People Data & Analytics</h1>
                                </button>
                                <div class="hidden w-full overflow-hidden duration-300 ps-16">
                                    <p class="text-gray-700 dark:text-gray-300">
                                        Finding committed employees is one of public and private organizations’ top priorities.
                                    </p>
                                    <div class="mt-7 flex items-center">
                                        <a href="#" class="text-primary">Learn more <i class="fa-solid fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div>
                    <div class="grid lg:grid-cols-2 grid-cols-1n gap-6 items-center">
                        <div class="order-2 lg:order-1 2xl:w-9/12" data-aos="fade-up" data-aos-duration="500">

                            <div class="h-12 w-12 bg-primary/10 flex items-center justify-center rounded-lg">
                                <svg class="h-7 w-7 text-primary" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                        <path d="M10.8226874,8.36941377 L12.7324324,9.82298668 C13.4112512,8.93113547 14.4592942,8.4 15.6,8.4 C17.5882251,8.4 19.2,10.0117749 19.2,12 C19.2,13.9882251 17.5882251,15.6 15.6,15.6 C14.5814697,15.6 13.6363389,15.1780547 12.9574041,14.4447676 L11.1963369,16.075302 C12.2923051,17.2590082 13.8596186,18 15.6,18 C18.9137085,18 21.6,15.3137085 21.6,12 C21.6,8.6862915 18.9137085,6 15.6,6 C13.6507856,6 11.9186648,6.9294879 10.8226874,8.36941377 Z" id="Combined-Shape" fill="currentColor" opacity="0.3"></path>
                                        <path d="M8.4,18 C5.0862915,18 2.4,15.3137085 2.4,12 C2.4,8.6862915 5.0862915,6 8.4,6 C11.7137085,6 14.4,8.6862915 14.4,12 C14.4,15.3137085 11.7137085,18 8.4,18 Z" id="Oval-14-Copy" fill="currentColor"></path>
                                    </g>
                                </svg>
                            </div>

                            <h1 class="text-3xl/tight font-medium mt-6 mb-4">Smart Payroll. Paying your people couldn't be easier</h1>
                            <p class="text-gray-500">You can modify your pages with drag-dropping , can import demos with just ” One Click” and can modify theme setting easy-to-use options panel.</p>
                            <div class="flex items-center mt-12">
                                <a href="#" class="text-primary">Learn more <i class="fa-solid fa-arrow-right ms-2"></i> </a>
                            </div>
                        </div>

                        <div class="relative order-1 lg:order-2">
                            <div class="hidden sm:block">
                                <div class="after:w-20 after:h-20 after:absolute after:-top-8 after:-end-8 2xl:after:-end-8 after:bg-[url('https://coderthemes.com/prompt/images/pattern/dot2.svg')]"></div>
                                <div class="before:w-20 before:h-20 before:absolute before:-bottom-8 before:-start-8 before:bg-[url('https://coderthemes.com/prompt/images/pattern/dot5.svg')]"></div>
                            </div>

                            <img src="{{asset('landingassets/images/hero/saas2.png')}}" alt="saas2" data-aos="fade-left" data-aos-duration="400">
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="xl:py-24 py-16">
            <div class="container" data-aos="fade-up" data-aos-duration="600">

                <div class="text-center">
                    <h1 class="text-2xl font-medium">Any many more powerful features</h1>
                </div>

                <div class="py-16">
                    <div class="grid xl:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-5">
                        <div class="order-1">
                            <div class="flex flex-col gap-5">
                                <p class="flex items-center gap-3"> <i class="fa-solid fa-check text-green-500 text-xl"></i> Hire and Retain Top Talent</p>
                                <p class="flex items-center gap-3"> <i class="fa-solid fa-check text-green-500 text-xl"></i> Team Management</p>
                            </div>
                        </div>

                        <div class="order-3 xl:order-2">
                            <div class="flex flex-col gap-5">
                                <p class="flex items-center gap-3"> <i class="fa-solid fa-check text-green-500 text-xl"></i> Stay Compliant</p>
                                <p class="flex items-center gap-3"> <i class="fa-solid fa-check text-green-500 text-xl"></i> Improve Productivity</p>
                                <p class="flex items-center gap-3"> <i class="fa-solid fa-check text-green-500 text-xl"></i> Improve Experience</p>
                            </div>
                        </div>

                        <div class="order-4 xl:order-3">
                            <div class="flex flex-col gap-5">
                                <p class="flex items-center gap-3"> <i class="fa-solid fa-check text-green-500 text-xl"></i> Self-service Time Tracking</p>
                                <p class="flex items-center gap-3"> <i class="fa-solid fa-check text-green-500 text-xl"></i> Performance Management</p>
                                <p class="flex items-center gap-3"> <i class="fa-solid fa-check text-green-500 text-xl"></i> Expert HR</p>
                            </div>
                        </div>

                        <div class="order-2 xl:order-4">
                            <div class="flex flex-col gap-5">
                                <p class="flex items-center gap-3"> <i class="fa-solid fa-check text-green-500 text-xl"></i> New Hire Checklist</p>
                                <p class="flex items-center gap-3"> <i class="fa-solid fa-check text-green-500 text-xl"></i> Tax Calculator</p>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="flex items-center justify-center mx-auto">
                    <a href="#" class="bg-primary text-white rounded-lg text-sm font-semibold flex-none hover:shadow-lg  hover:shadow-primary/30 focus:shadow-none focus:outline focus:outline-primary/40 px-6 py-3">Sign Up Now <i class="fa-solid fa-arrow-right ms-2"></i> </a>
                </button>

            </div>
        </div>

    </section>
    <!-- =========== feature Section end =========== -->

    <!-- =========== clients Section Start =========== -->
    <section class="bg-gradient-to-r from-gray-100/70 to-gray-100 relative xl:py-24 py-16">

        <div class="absolute top-0 inset-x-0 hidden sm:block">
            <img src="{{asset('landingassets/images/shapes/white-wave.svg')}}" alt="svg" class="w-full -scale-x-100">
        </div>

        <div class="py-5">
            <div class="container" data-aos="fade-up" data-aos-duration="300">

                <div class="text-center">
                    <span class="text-sm font-medium py-1 px-3 rounded-full text-primary bg-primary/10">Clients</span>
                    <h1 class="text-3xl/tight font-medium mt-3 mb-4">The smart people management you need</h1>
                    <p class="text-gray-500">21,000+ organizations trust <span class="text-primary">Prompt</span> to drive perfomance & engagement</p>
                </div>

                <div class="flex flex-wrap items-center justify-center lg:gap-24 gap-10 mt-14">
                    <div>
                        <img src="{{asset('landingassets/images/brands/amazon.svg')}}" class="h-8">
                    </div>
                    <div>
                        <img src="{{asset('landingassets/images/brands/google.svg')}}" class="h-8">
                    </div>
                    <div>
                        <img src="{{asset('landingassets/images/brands/paypal.svg')}}" class="h-8">
                    </div>
                    <div>
                        <img src="{{asset('landingassets/images/brands/spotify.svg')}}" class="h-8">
                    </div>
                    <div>
                        <img src="{{asset('landingassets/images/brands/shopify.svg')}}" class="h-8">
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- =========== clients Section end =========== -->

    <!-- =========== testimonial Section Start =========== -->
    <section class="py-16 sm:py-24 overflow-x-hidden">
        <div class="container" data-aos="fade-up" data-aos-duration="600">

            <div class="grid xl:grid-cols-4 grid-cols-3 gap-6">
                <div class="col-span-3 lg:col-span-1">
                    <span class="text-sm font-medium py-1 px-3 rounded-full text-primary bg-primary/10">Feedback</span>
                    <h1 class="text-3xl/tight font-medium mt-3 mb-4">What people say</h1>
                    <p class="text-gray-500">Few valuables words from our customers</p>

                    <div class="flex gap-4 mt-10">
                        <div class="button-prev text-xl transition-all duration-300 hover:text-primary"><i class="fa-solid fa-arrow-left"></i></div>
                        <div class="button-next text-xl transition-all duration-300 hover:text-primary"><i class="fa-solid fa-arrow-right"></i></div>
                    </div>
                </div>

                <div class="col-span-3 lg:col-span-2 xl:col-span-3">
                    <div class="relative">

                        <div class="hidden sm:block">
                            <div class="before:w-24 before:h-24 before:absolute before:-top-8 before:-end-8 before:bg-[url('https://coderthemes.com/prompt/images/pattern/dot5.svg')]"></div>
                            <div class="after:w-24 after:h-24 after:absolute after:-bottom-8 after:-start-8 after:bg-[url('https://coderthemes.com/prompt/images/pattern/dot2.svg')]"></div>
                        </div>

                        <div id="swiper_one" class="swiper relative">
                            <div class="swiper-wrapper z-10">

                                <!-- 1 -->
                                <div class="swiper-slide p-10 border rounded-xl bg-white shadow">
                                    <i class="fa-solid fa-quote-left text-gray-500 text-5xl"></i>
                                    <p class="my-4">It is one of the very convenient to use project manager ever! I have tried many project management apps for my daily tasks, but this one is far better than others. Simply loved it!</p>
                                    <div class="border-b border-gray-200 w-full my-7"></div>
                                    <div class="flex items-center gap-2">
                                        <img src="{{asset('landingassets/images/avatars/img-1.jpg')}}" alt="avatar" class="h-10 w-10 rounded-full">
                                        <div>
                                            <h1 class="text-sm mb-1">Cersei Lannister</h1>
                                            <p class="text-gray-500 text-xs">Senior Project Manager</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- 2 -->
                                <div class="swiper-slide p-10 border rounded-xl bg-white shadow">
                                    <i class="fa-solid fa-quote-left text-gray-500 text-5xl"></i>
                                    <p class="my-4">It is one of the very convenient to use project manager ever! I have tried many project management apps for my daily tasks, but this one is far better than others. Simply loved it!</p>
                                    <div class="border-b border-gray-200 w-full my-7"></div>
                                    <div class="flex items-center gap-2">
                                        <img src="{{asset('landingassets/images/avatars/img-2.jpg')}}" alt="avatar" class="h-10 w-10 rounded-full">
                                        <div>
                                            <h1 class="text-sm mb-1">Cersei Lannister</h1>
                                            <p class="text-gray-500 text-xs">Senior Project Manager</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- 3 -->
                                <div class="swiper-slide p-10 border rounded-xl bg-white shadow">
                                    <i class="fa-solid fa-quote-left text-gray-500 text-5xl"></i>
                                    <p class="my-4">It is one of the very convenient to use project manager ever! I have tried many project management apps for my daily tasks, but this one is far better than others. Simply loved it!</p>
                                    <div class="border-b border-gray-200 w-full my-7"></div>
                                    <div class="flex items-center gap-2">
                                        <img src="{{asset('landingassets/images/avatars/img-3.jpg')}}" alt="avatar" class="h-10 w-10 rounded-full">
                                        <div>
                                            <h1 class="text-sm mb-1">Cersei Lannister</h1>
                                            <p class="text-gray-500 text-xs">Senior Project Manager</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========== testimonial Section end =========== -->

    <!-- =========== pricing Section Start =========== -->
    <section class="bg-gradient-to-r from-gray-100/70 to-gray-100 relative py-16 sm:py-24">

        <div class="absolute top-0 inset-x-0 hidden sm:block">
            <img src="{{asset('landingassets/images/shapes/white-wave.svg')}}" alt="svg" class="w-full -scale-x-100">
        </div>

        <div class="py-5">
            <div class="container relative">

                <div class="text-center">
                    <h1 class="text-3xl/tight font-medium mb-4">Pricing</h1>
                    <p class="text-gray-500">Pricing that <span class="text-primary">works </span> for everyone</p>
                </div>

                <div class="grid xl:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-7 mt-14">
                    <!-- 1 -->
                    <div data-aos="fade-up" data-aos-duration="500">
                        <div class="transition-all duration-300 pointer-events-auto hover:shadow-[0_0_1.5rem_0_rgba(0,0,0,.12)] hover:-translate-y-1">
                            <div class="border border-gray-300 bg-white rounded w-full h-full text-center p-5">
                                <span class="text-lg text-primary">Starter</span>
                                <h1 class="text-3xl/tight font-semibold mt-3"><sup class="text-gray-500 text-sm font-normal">$</sup> 49 <sub class="text-gray-500 text-sm font-normal">/month</sub></h1>
                                <div class="border-b border-gray-200 w-full my-7"></div>
                                <div>
                                    <div class="flex flex-col gap-4">
                                        <p class="flex items-center text-gray-600 gap-4"><i class="fa-solid fa-check text-green-500 text-lg"></i>Up to 600 minutes usage time</p>
                                        <p class="flex items-center text-gray-600 gap-4"><i class="fa-solid fa-check text-green-500 text-lg"></i>Use for personal only</p>
                                        <p class="flex items-center text-gray-600 gap-4"><i class="fa-solid fa-check text-green-500 text-lg"></i>Add up to 10 attendees</p>
                                        <p class="flex items-center text-gray-600 gap-4"><i class="fa-solid fa-check text-green-500 text-lg"></i>Technical support via email</p>
                                    </div>
                                    <div class="flex mt-[120px]">
                                        <a href="#" class="bg-primary/10 text-primary/90 w-full py-3 rounded-lg border border-transparent hover:border hover:border-primary/20 transition-all duration-300">Purchase Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2 -->
                    <div data-aos="fade-up" data-aos-duration="700">
                        <div class="transition-all duration-300 pointer-events-auto hover:shadow-[0_0_1.5rem_0_rgba(0,0,0,.12)] hover:-translate-y-1">
                            <div class="border border-gray-300 bg-white rounded w-full h-full text-center p-5">
                                <span class="text-lg text-primary">Professional</span>
                                <h1 class="text-3xl/tight font-semibold mt-3"><sup class="text-gray-500 text-sm font-normal">$</sup> 99 <sub class="text-gray-500 text-sm font-normal">/month</sub></h1>
                                <div class="border-b border-gray-200 w-full my-7"></div>
                                <div>
                                    <div class="flex flex-col gap-4">
                                        <p class="flex items-center text-gray-600 gap-4"><i class="fa-solid fa-check text-green-500 text-lg"></i>Up to 6000 minutes usage time</p>
                                        <p class="flex items-center text-gray-600 gap-4"><i class="fa-solid fa-check text-green-500 text-lg"></i>Use for personal or a commercial</p>
                                        <p class="flex items-center text-gray-600 gap-4"><i class="fa-solid fa-check text-green-500 text-lg"></i>Add up to 100 attendees</p>
                                        <p class="flex items-center text-gray-600 gap-4"><i class="fa-solid fa-check text-green-500 text-lg"></i>Up to 5 teams</p>
                                        <p class="flex items-center text-gray-600 gap-4"><i class="fa-solid fa-check text-green-500 text-lg"></i>Technical support via email</p>
                                    </div>
                                    <div class="flex mt-20">
                                        <a href="#" class="bg-primary text-white w-full py-3 rounded-lg border border-transparent hover:shadow-lg hover:shadow-primary/30 focus:shadow-none focus:outline focus:outline-primary/40 hover:border hover:border-primary transition-all duration-300">Purchase Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 3 -->
                    <div data-aos="fade-up" data-aos-duration="900">
                        <div class="transition-all duration-300 pointer-events-auto hover:shadow-[0_0_1.5rem_0_rgba(0,0,0,.12)] hover:-translate-y-1">
                            <div class="border border-gray-300 bg-white rounded w-full h-full text-center p-5">
                                <span class="text-lg text-primary">Enterprise</span>
                                <h1 class="text-3xl/tight font-semibold mt-3"><sup class="text-gray-500 text-sm font-normal">$</sup> 599 <sub class="text-gray-500 text-sm font-normal">/month</sub></h1>
                                <div class="border-b border-gray-200 w-full my-7"></div>
                                <div>
                                    <div class="flex flex-col gap-4">
                                        <p class="flex items-center text-gray-600 gap-4"><i class="fa-solid fa-check text-green-500 text-lg"></i>Unlimited usage time</p>
                                        <p class="flex items-center text-gray-600 gap-4"><i class="fa-solid fa-check text-green-500 text-lg"></i>Use for personal or a commercial</p>
                                        <p class="flex items-center text-gray-600 gap-4"><i class="fa-solid fa-check text-green-500 text-lg"></i>Add Unlimited attendees</p>
                                        <p class="flex items-center text-gray-600 gap-4"><i class="fa-solid fa-check text-green-500 text-lg"></i>24x7 Technical support via phone</p>
                                        <p class="flex items-center text-gray-600 gap-4"><i class="fa-solid fa-check text-green-500 text-lg"></i>Technical support via email</p>
                                    </div>
                                    <div class="flex mt-20">
                                        <a href="#" class="bg-primary/10 text-primary/90 w-full py-3 rounded-lg border border-transparent hover:border hover:border-primary/20 transition-all duration-300">Purchase Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="absolute bottom-0 inset-x-0 hidden sm:block">
            <img src="{{asset('landingassets/images/shapes/white-wave.svg')}}" alt="svg" class="w-full scale-x-100 -scale-y-100">
        </div>

    </section>
    <!-- =========== pricing Section end =========== -->

    <!-- =========== faq Section start =========== -->
    <section class="py-16 sm:py-24">
        <div class="container" data-aos="fade-up" data-aos-duration="2000">

            <div class="text-center">
                <span class="text-sm font-medium py-1 px-3 rounded-full text-primary bg-primary/10">FAQs</span>
                <h1 class="text-3xl/tight font-medium mt-3 mb-4">Frequently Asked Questions</h1>
                <p class="text-gray-500">Here are some of the basic types of questions for our customers</p>
            </div>

            <div data-fc-type="accordion" class="mt-14 lg:w-3/4 lg:mx-auto 2xl:w-2/3">
                <!-- 1 -->
                <div class="border border-gray-300 rounded-lg">
                    <bu p-5tton class="inline-flex p-5 items-center justify-between w-full font-semibold text-left transition" data-fc-type="collapse">
                        Can I use this template for my client?
                        <span class="material-symbols-rounded text-xl block transition-all fc-collapse-open:rotate-180">
                            <i class="fa-solid fa-angle-down"></i>
                        </span>
                    </bu>
                    <div class="w-full overflow-hidden transition-[height] duration-300">
                        <p class="text-gray-700 dark:text-gray-300 pt-3 p-5">
                            Yup, the marketplace license allows you to use this theme in any end products. For more information on licenses, please refere license terms on marketplace.
                        </p>
                    </div>
                </div>

                <!-- 2 -->
                <div class="border border-gray-300 rounded-lg mt-4">
                    <button class="p-5 inline-flex items-center justify-between w-full font-semibold text-left transition" data-fc-type="collapse">
                        Can this theme work with WordPress?
                        <span class="material-symbols-rounded text-xl block transition-all fc-collapse-open:rotate-180">
                            <i class="fa-solid fa-angle-down"></i>
                        </span>
                    </button>
                    <div class="hidden w-full overflow-hidden transition-[height] duration-300">
                        <p class="text-gray-700 dark:text-gray-300 pt-3 p-5">
                            No. This is a HTML template. It won't directly with WordPress, though you can convert this into WordPress compatible theme.
                        </p>
                    </div>
                </div>

                <!-- 3 -->
                <div class="border border-gray-300 rounded-lg mt-4">
                    <button class="p-5 inline-flex items-center justify-between w-full font-semibold text-left transition" data-fc-type="collapse">
                        How do I get help with the theme?
                        <span class="material-symbols-rounded text-xl block transition-all fc-collapse-open:rotate-180">
                            <i class="fa-solid fa-angle-down"></i>
                        </span>
                    </button>
                    <div class="hidden w-full overflow-hidden transition-[height] duration-300">
                        <p class="text-gray-700 dark:text-gray-300 pt-3 p-5">
                            Use our dedicated support email (support@coderthemes.com) to send your issues or feedback. We are here to help anytime.
                        </p>
                    </div>
                </div>

                <!-- 4 -->
                <div class="border border-gray-300 rounded-lg mt-4">
                    <button class="p-5 inline-flex items-center justify-between w-full font-semibold text-left transition" data-fc-type="collapse">
                        Will you regularly give updates of Prompt ?
                        <span class="material-symbols-rounded text-xl block transition-all fc-collapse-open:rotate-180">
                            <i class="fa-solid fa-angle-down"></i>
                        </span>
                    </button>
                    <div class="hidden w-full overflow-hidden transition-[height] duration-300">
                        <p class="text-gray-700 dark:text-gray-300 pt-3 p-5">
                            Yes, We will update the Prompt regularly. All the future updates would be available without any cost.
                        </p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-14">
                <p class="inline-flex flex-wrap gap-1 bg-gray-100 text-sm rounded-lg py-2 px-5">Still have unanswered questions?<a href="#" class="hover:text-primary transition-all"> Contact Us</a></p>
            </div>

        </div>
    </section>
    <!-- =========== faq Section end =========== -->

    <!-- =========== footer Section start =========== -->
    @include('landingcomponents.footer')
    <!-- =========== footer Section end =========== -->

    <!-- =========== Back To Top Start =========== -->
    <button data-toggle="back-to-top" class="fixed text-sm rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-primary/20 text-primary flex justify-center items-center">
        <i class="fa-solid fa-arrow-up text-base"></i>
    </button>
    <!-- =========== Back To Top End =========== -->

    <!-- Frost Plugin Js -->
    <script src="{{asset('landingassets/libs/%40frostui/tailwindcss/frostui.js')}}"></script>

    <!-- Swiper Plugin Js -->
    <script src="{{asset('landingassets/libs/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Animation on Scroll Plugin Js -->
    <script src="{{asset('landingassets/libs/aos/aos.js')}}"></script>

    <!-- Theme Js -->
    <script src="{{asset('landingassets/js/theme.min.js')}}"</script>

</body>


<!-- Mirrored from coderthemes.com/prompt/tailwind/home-saas.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Mar 2024 19:27:27 GMT -->
</html>