<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <title>Shop.Ews.Ge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="შექმენით თქვენი პროდუქციის ონლაინ კატალოგი უფასოდ"
          name="description"/>
    <meta name="keywords" content="ციფრული კატალოგი,ონლაინ მაღაზია">
    <link rel="canonical" href="https://shop.ews.ge/">
    <meta name="robots" content="index, follow">


    <meta content="ews.ge" name="author"/>
    <meta property="og:title" content="უფასო ციფრული კატალოგი">
    <meta property="og:description" content="გინდათ ონლაინ მაღაზია მაგრამ არ გაქვთ ბიუჯეტი? შექმენით ციფრული კატალოგი მსგავსი ფუნქციონალით">
    <meta property="og:url" content="https://shop.ews.ge/">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{asset('landingassets/landingimages/og.png')}}">
    <meta property="og:site_name" content="Shop.Ews.Ge">

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
    <script type="module">
        import BugsnagPerformance from '//d2wy8f7a9ursnm.cloudfront.net/v1/bugsnag-performance.min.js'

        BugsnagPerformance.start({apiKey: 'edc3d7c94b8f7fb25a4e9a7aa9432ff4'})
    </script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
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
                            თქვენი პროდუქციის
                            <span class="relative z-0 after:bg-green-500/50 after:-z-10 after:absolute md:after:h-6 after:h-4 after:w-full after:bottom-0 after:end-0">უფასო</span>
                            ციფრული კატალოგი
                        </h1>
                        <p class="sm:text-lg text-gray-500">გინდათ ონლაინ მაღაზია მაგრამ არ გაქვთ ბიუჯეტი? შექმენით
                            ციფრული კატალოგი მსგავსი ფუნქციონალით</p>


                    </div>
                </div>

                <div class="order-1 lg:order-2">
                    <div class="relative">

                        <div class="hidden sm:block">
                            <div class="before:w-24 before:h-24 before:absolute before:-bottom-8 before:-start-8 before:bg-[url('https://coderthemes.com/prompt/images/pattern/dot2.svg')]"></div>
                            <div class="after:w-24 after:h-24 after:absolute after:-top-10 after:end-10 2xl:after:end-0 after:rotate-45 after:bg-[url('https://coderthemes.com/prompt/images/pattern/dot5.svg')]"></div>
                        </div>

                        <div id="swiper_one" class="swiper border-[6px] border-white bg-white 2xl:w-[140%]"
                             data-aos="fade-left" data-aos-duration="1000">
                            <div class="swiper-wrapper">
                                <div style="max-height: 370px!important" class="swiper-slide">
                                    <img style="height: 100%!important"
                                         src="{{asset('landingassets/landingimages/1.png')}}" alt="saas1"
                                         class=" rounded-md">
                                </div>
                                <div style="max-height: 370px!important" class="swiper-slide">
                                    <img style="height: 100%!important"
                                         src="{{asset('landingassets/landingimages/2.png')}}" alt="saas1"
                                         class="w-full h-full rounded-md">
                                </div>
                                <div style="max-height: 370px!important" class="swiper-slide">
                                    <img style="height: 100%!important"
                                         src="{{asset('landingassets/landingimages/3.png')}}" alt="saas1"
                                         class="w-full h-full rounded-md">
                                </div>
                                <div style="max-height: 370px!important" class="swiper-slide">
                                    <img style="height: 100%!important"
                                         src="{{asset('landingassets/landingimages/sort.png')}}" alt="saas1"
                                         class="w-full h-full rounded-md">
                                </div>
                                <div style="max-height: 370px!important" class="swiper-slide">
                                    <img style="height: 100%!important"
                                         src="{{asset('landingassets/landingimages/single.png')}}" alt="saas1"
                                         class="w-full h-full rounded-md">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="absolute bottom-0 inset-x-0 hidden sm:block">
        <img src="{{asset('landingassets/images/shapes/white-wave.svg')}}" alt="white-wave-svg"
             class="w-full -scale-x-100 -scale-y-100">
    </div>

</section>
<!-- =========== Hero Section End =========== -->

<!-- =========== feature Section Start =========== -->
<section class="overflow-hidden">
    <div class="xl:py-24 py-16">
        <div class="container">

            <div class="text-center">
                <span class="text-sm font-medium py-1 px-3 rounded-full text-primary bg-primary/10">ფუნქციონალი</span>
                {{--                <h1 class="text-3xl/tight font-medium mt-3 mb-4">Better Management. Better Performance</h1>--}}
                {{--                <p class="text-gray-500">Start working with <span class="text-primary">Prompt</span> to manage your--}}
                {{--                    workforce better</p>--}}
            </div>
            {{--text Right side Categories--}}
            <div class="xl:pt-16 xl:pb-28 py-16">
                <div class="grid lg:grid-cols-2 grid-cols-1 gap-6 items-center">

                    <div class="relative">
                        <div class="hidden sm:block">
                            <div class="after:w-20 after:h-20 after:absolute after:-top-8 after:-start-8 2xl:after:end-0 after:bg-[url('https://coderthemes.com/prompt/images/pattern/dot5.svg')]"></div>
                            <div class="before:w-20 before:h-20 before:absolute before:-bottom-8 before:-end-8 before:bg-[url('https://coderthemes.com/prompt/images/pattern/dot2.svg')]"></div>
                        </div>
                        <a href="{{asset('landingassets/landingimages/categories.png')}}" class="glightbox">
                        <img style="border-radius: 15px" src="{{asset('landingassets/landingimages/categories.png')}}"
                             alt="saas1"
                             data-aos="fade-right"
                             data-aos-duration="400">
                        </a>
                    </div>

                    <div class="lg:ms-24">
                        <div class="order-2 lg:order-1 2xl:w-9/12 aos-init aos-animate" data-aos="fade-up"
                             data-aos-duration="500">

                            <h1 class="text-3xl/tight font-medium mt-6 mb-4">კატეგორიები</h1>
                            <p style="text-align: justify" class="text-gray-500">შეგიძლიათ დაამატოთ შეუზღუდავი რაოდებოის
                                კატეგორიები, ასევე მართვის
                                პანელიდან შეგიძლიათ ჩართოთ/გამორთოთ კატეგორიების გამოყენება, ასეთ შემთხვევაში მთვარ
                                გვერდზე მხოლოდ თქვენს მიერ "მთავარ გალერეაში" მითითებული პროდუქტი გამოჩნდება, ხოლო
                                კატეგორიების განყოფილებაში მხოლოდ "ყველა პროდუქტი"ს სექცია იქნება ნაჩვენები </p>
                            <div class="flex items-center mt-12">
                                {{--                                <a href="#" class="text-primary">Learn more <i class="fa-solid fa-arrow-right ms-2"></i>--}}
                                {{--                                </a>--}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            {{-- text left side Products--}}
            <div class="mt-7">
                <div class="grid lg:grid-cols-2 grid-cols-1n gap-6 items-center">
                    <div class="order-2 lg:order-1 2xl:w-9/12" data-aos="fade-up" data-aos-duration="500">


                        <h1 class="text-3xl/tight font-medium mt-6 mb-4">პროდუქტები</h1>
                        <p style="text-align: justify" class="text-gray-500 ">თქვენ შეგიძლიათ დაამატოთ შეუზღუდავი
                            რაოდენობის პროდუქტები, მიუთითოთ
                            პროდუქტის სახელი, ფასი, კოდი (სურვილის შემთხვევაში), აღწერა, სპეციფიკაციები (მაგ: ზომა, წონა
                            ა.შ) დაამატოთ 4 ფოტოსურათი თითო პროდუქტზე, მიუთითოთ კატეგორია და მიუთითოთ გსურთ თუ არა
                            მთავარ გვერდზე საერთო გალერეაში დამატება </p>
                        {{--                        <div class="flex items-center mt-12">--}}
                        {{--                            <a href="#" class="text-primary">Learn more <i class="fa-solid fa-arrow-right ms-2"></i>--}}
                        {{--                            </a>--}}
                        {{--                        </div>--}}
                    </div>

                    <div class="relative order-1 lg:order-2">
                        <div class="hidden sm:block">
                            <div class="after:w-20 after:h-20 after:absolute after:-top-8 after:-end-8 2xl:after:-end-8 after:bg-[url('https://coderthemes.com/prompt/images/pattern/dot2.svg')]"></div>
                            <div class="before:w-20 before:h-20 before:absolute before:-bottom-8 before:-start-8 before:bg-[url('https://coderthemes.com/prompt/images/pattern/dot5.svg')]"></div>
                        </div>
                        <a href="{{asset('landingassets/landingimages/product.png')}}" class="glightbox">
                        <img style="border-radius: 15px" src="{{asset('landingassets/landingimages/product.png')}}"
                             alt="saas2"
                             data-aos="fade-left"
                             data-aos-duration="400">
                        </a>
                    </div>

                </div>
            </div>

            {{--text Right side quickview--}}
            <div class="xl:pt-16 xl:pb-28 py-16">
                <div class="grid lg:grid-cols-2 grid-cols-1 gap-6 items-center">

                    <div class="relative">
                        <div class="hidden sm:block">
                            <div class="after:w-20 after:h-20 after:absolute after:-top-8 after:-start-8 2xl:after:end-0 after:bg-[url('https://coderthemes.com/prompt/images/pattern/dot5.svg')]"></div>
                            <div class="before:w-20 before:h-20 before:absolute before:-bottom-8 before:-end-8 before:bg-[url('https://coderthemes.com/prompt/images/pattern/dot2.svg')]"></div>
                        </div>
                        <a href="{{asset('landingassets/landingimages/1.png')}}" class="glightbox">

                        <img style="border-radius: 15px" src="{{asset('landingassets/landingimages/1.png')}}"
                             alt="saas1"
                             data-aos="fade-right"
                             data-aos-duration="400">
                        </a>
                    </div>

                    <div class="lg:ms-24">
                        <div class="order-2 lg:order-1 2xl:w-9/12 aos-init aos-animate" data-aos="fade-up"
                             data-aos-duration="500">

                            <h1 class="text-3xl/tight font-medium mt-6 mb-4">პროდუქტის დეტალები</h1>
                            <p style="text-align: justify" class="text-gray-500">ფოტოსურათზე დაკლიკების შემდეგ
                                იხსნება დეტალური ინფორმაციის ფანჯარა, გახსნილი პროდუქტით დაინტერესების შემთხვევაში,
                                მომხმარებელს შეუძლია პირდაპირ მოგწეროთ თქვენს ფბ გვერდზე, რა დროსაც პროდუქტის ლინკი
                                ავტომატურად
                                კოპირდება მესენჯერში, მომხმარებელს ასევე შეუძლია პროდუქტი გააზიაროს საკუთარ ფეისბუქ
                                გვერდზე ან დააკოპიროს ლინკი. მესენჯერის ფუნქციის გამოსაყენებლად საჭიროა მიუთითოთ თქვენი
                                გვერდის ID და მართვის პანელში მონიშნოთ "გამოვიყენო Messenger"
                            </p>
                            <div class="flex items-center mt-12">
                                {{--                                <a href="#" class="text-primary">Learn more <i class="fa-solid fa-arrow-right ms-2"></i>--}}
                                {{--                                </a>--}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            {{-- text left side Sorting--}}
            <div class="mt-7">
                <div class="grid lg:grid-cols-2 grid-cols-1n gap-6 items-center">
                    <div class="order-2 lg:order-1 2xl:w-9/12" data-aos="fade-up" data-aos-duration="500">

                        <h1 class="text-3xl/tight font-medium mt-6 mb-4">სორტირება</h1>
                        <p style="text-align: justify" class="text-gray-500 ">
                            კატეგორიების გვერდიდან მომხმარებელს შეუძლილა პროდუქტების სორტირება ფასისა და თარიღის
                            ზრდადობის ან კლებადობის მიხედვით.
                        </p>

                    </div>

                    <div class="relative order-1 lg:order-2">
                        <div class="hidden sm:block">
                            <div class="after:w-20 after:h-20 after:absolute after:-top-8 after:-end-8 2xl:after:-end-8 after:bg-[url('https://coderthemes.com/prompt/images/pattern/dot2.svg')]"></div>
                            <div class="before:w-20 before:h-20 before:absolute before:-bottom-8 before:-start-8 before:bg-[url('https://coderthemes.com/prompt/images/pattern/dot5.svg')]"></div>
                        </div>
                        <a href="{{asset('landingassets/landingimages/sort.png')}}" class="glightbox">

                        <img style="border-radius: 15px" src="{{asset('landingassets/landingimages/sort.png')}}"
                             alt="saas2"
                             data-aos="fade-left"
                             data-aos-duration="400">

                        </a>
                    </div>

                </div>
            </div>
            {{--text Right side Search--}}
            <div class="xl:pt-16 xl:pb-28 py-16">
                <div class="grid lg:grid-cols-2 grid-cols-1 gap-6 items-center">

                    <div class="relative">
                        <div class="hidden sm:block">
                            <div class="after:w-20 after:h-20 after:absolute after:-top-8 after:-start-8 2xl:after:end-0 after:bg-[url('https://coderthemes.com/prompt/images/pattern/dot5.svg')]"></div>
                            <div class="before:w-20 before:h-20 before:absolute before:-bottom-8 before:-end-8 before:bg-[url('https://coderthemes.com/prompt/images/pattern/dot2.svg')]"></div>
                        </div>
                        <a href="{{asset('landingassets/landingimages/3.png')}}" class="glightbox">

                        <img style="border-radius: 15px" src="{{asset('landingassets/landingimages/3.png')}}"
                             alt="saas1"
                             data-aos="fade-right"
                             data-aos-duration="400">

                        </a>
                    </div>

                    <div class="lg:ms-24">
                        <div class="order-2 lg:order-1 2xl:w-9/12 aos-init aos-animate" data-aos="fade-up"
                             data-aos-duration="500">

                            <h1 class="text-3xl/tight font-medium mt-6 mb-4">პროდუქტის ძებნა</h1>
                            <p style="text-align: justify" class="text-gray-500">
                                საძიებო ველში პროდუქტის ჩაწერისას მომხმარებელს დინამიურად გამოუჩნდება მსგავსი
                                დასახელების ყველა პროდუქტი
                            </p>
                            <div class="flex items-center mt-12">
                                {{--                                <a href="#" class="text-primary">Learn more <i class="fa-solid fa-arrow-right ms-2"></i>--}}
                                {{--                                </a>--}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            {{-- text left side Socials--}}
            <div class="mt-7">
                <div class="grid lg:grid-cols-2 grid-cols-1n gap-6 items-center">
                    <div class="order-2 lg:order-1 2xl:w-9/12" data-aos="fade-up" data-aos-duration="500">

                        <h2 class="text-3xl/tight font-medium mt-6 mb-4">სოც გვერდები და სხვა</h2>
                        <p style="text-align: justify" class="text-gray-500 mb-2">
                            თქვენ შეგიძლიათ დაამატოთ :
                        </p>
                        <ul style=" list-style-type: disc;">
                            <li class="mb-1">Facebook გვერდი</li>
                            <li class="mb-1">Instagram გვერდი</li>
                            <li class="mb-1">Youtube არხი</li>
                        </ul>
                        <p style="text-align: justify" class="text-gray-500 mt-3 mb-3">
                            სხვა
                        </p>
                        <ul style=" list-style-type: disc;">
                            <li class="mb-1">
                                მომხმარებელს შესაძლებლობა აქვს მოგწეროთ WhatsApp ის მეშვეობით (შეგიძლიათ გამორთოთ მართვის პანელიდან)
                            </li>
                            <li class="mb-1">
                                თუ გაქვთ ფიზიკური მაღაზიაც და მიუთითებთ მისამართს, მისამართზე დაკლიკების შემთხვევაში მომხმარებელს ავტომატურად გაეხსნება Google Map ლოკაცია (ფუნქციის გასათიშად უბრალოდ წაშალით მისამართი)</li>


                        </ul>

                    </div>

                    <div class="relative order-1 lg:order-2">
                        <div class="hidden sm:block">
                            <div class="after:w-20 after:h-20 after:absolute after:-top-8 after:-end-8 2xl:after:-end-8 after:bg-[url('https://coderthemes.com/prompt/images/pattern/dot2.svg')]"></div>
                            <div class="before:w-20 before:h-20 before:absolute before:-bottom-8 before:-start-8 before:bg-[url('https://coderthemes.com/prompt/images/pattern/dot5.svg')]"></div>
                        </div>
                        <a href="{{asset('landingassets/landingimages/socials.png')}}" class="glightbox">

                        <img style="border-radius: 15px" src="{{asset('landingassets/landingimages/socials.png')}}"
                             alt="saas2"
                             data-aos="fade-left"
                             data-aos-duration="400">

                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>

{{--    <div class="xl:py-24 py-16">--}}
{{--        <div class="container" data-aos="fade-up" data-aos-duration="600">--}}

{{--            <div class="text-center">--}}
{{--                <h1 class="text-2xl font-medium">Any many more powerful features</h1>--}}
{{--            </div>--}}

{{--            <div class="py-16">--}}
{{--                <div class="grid xl:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-5">--}}
{{--                    <div class="order-1">--}}
{{--                        <div class="flex flex-col gap-5">--}}
{{--                            <p class="flex items-center gap-3"><i class="fa-solid fa-check text-green-500 text-xl"></i>--}}
{{--                                Hire and Retain Top Talent</p>--}}
{{--                            <p class="flex items-center gap-3"><i class="fa-solid fa-check text-green-500 text-xl"></i>--}}
{{--                                Team Management</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="order-3 xl:order-2">--}}
{{--                        <div class="flex flex-col gap-5">--}}
{{--                            <p class="flex items-center gap-3"><i class="fa-solid fa-check text-green-500 text-xl"></i>--}}
{{--                                Stay Compliant</p>--}}
{{--                            <p class="flex items-center gap-3"><i class="fa-solid fa-check text-green-500 text-xl"></i>--}}
{{--                                Improve Productivity</p>--}}
{{--                            <p class="flex items-center gap-3"><i class="fa-solid fa-check text-green-500 text-xl"></i>--}}
{{--                                Improve Experience</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="order-4 xl:order-3">--}}
{{--                        <div class="flex flex-col gap-5">--}}
{{--                            <p class="flex items-center gap-3"><i class="fa-solid fa-check text-green-500 text-xl"></i>--}}
{{--                                Self-service Time Tracking</p>--}}
{{--                            <p class="flex items-center gap-3"><i class="fa-solid fa-check text-green-500 text-xl"></i>--}}
{{--                                Performance Management</p>--}}
{{--                            <p class="flex items-center gap-3"><i class="fa-solid fa-check text-green-500 text-xl"></i>--}}
{{--                                Expert HR</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="order-2 xl:order-4">--}}
{{--                        <div class="flex flex-col gap-5">--}}
{{--                            <p class="flex items-center gap-3"><i class="fa-solid fa-check text-green-500 text-xl"></i>--}}
{{--                                New Hire Checklist</p>--}}
{{--                            <p class="flex items-center gap-3"><i class="fa-solid fa-check text-green-500 text-xl"></i>--}}
{{--                                Tax Calculator</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <button class="flex items-center justify-center mx-auto">--}}
{{--                <a href="#"--}}
{{--                   class="bg-primary text-white rounded-lg text-sm font-semibold flex-none hover:shadow-lg  hover:shadow-primary/30 focus:shadow-none focus:outline focus:outline-primary/40 px-6 py-3">Sign--}}
{{--                    Up Now <i class="fa-solid fa-arrow-right ms-2"></i> </a>--}}
{{--            </button>--}}

{{--        </div>--}}
{{--    </div>--}}

</section>
<!-- =========== feature Section end =========== -->

<!-- =========== clients Section Start =========== -->

<!-- =========== clients Section end =========== -->

<!-- =========== testimonial Section Start =========== -->

<!-- =========== testimonial Section end =========== -->

<!-- =========== pricing Section Start =========== -->

<!-- =========== pricing Section end =========== -->

<!-- =========== faq Section start =========== -->
{{--<section class="py-16 sm:py-24">--}}
{{--    <div class="container" data-aos="fade-up" data-aos-duration="2000">--}}

{{--        <div class="text-center">--}}
{{--            <span class="text-sm font-medium py-1 px-3 rounded-full text-primary bg-primary/10">FAQs</span>--}}
{{--            <h1 class="text-3xl/tight font-medium mt-3 mb-4">Frequently Asked Questions</h1>--}}
{{--            <p class="text-gray-500">Here are some of the basic types of questions for our customers</p>--}}
{{--        </div>--}}

{{--        <div data-fc-type="accordion" class="mt-14 lg:w-3/4 lg:mx-auto 2xl:w-2/3">--}}
{{--            <!-- 1 -->--}}
{{--            <div class="border border-gray-300 rounded-lg">--}}
{{--                <bu p-5tton--}}
{{--                    class="inline-flex p-5 items-center justify-between w-full font-semibold text-left transition"--}}
{{--                    data-fc-type="collapse">--}}
{{--                    Can I use this template for my client?--}}
{{--                    <span class="material-symbols-rounded text-xl block transition-all fc-collapse-open:rotate-180">--}}
{{--                            <i class="fa-solid fa-angle-down"></i>--}}
{{--                        </span>--}}
{{--                </bu>--}}
{{--                <div class="w-full overflow-hidden transition-[height] duration-300">--}}
{{--                    <p class="text-gray-700 dark:text-gray-300 pt-3 p-5">--}}
{{--                        Yup, the marketplace license allows you to use this theme in any end products. For more--}}
{{--                        information on licenses, please refere license terms on marketplace.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- 2 -->--}}
{{--            <div class="border border-gray-300 rounded-lg mt-4">--}}
{{--                <button class="p-5 inline-flex items-center justify-between w-full font-semibold text-left transition"--}}
{{--                        data-fc-type="collapse">--}}
{{--                    Can this theme work with WordPress?--}}
{{--                    <span class="material-symbols-rounded text-xl block transition-all fc-collapse-open:rotate-180">--}}
{{--                            <i class="fa-solid fa-angle-down"></i>--}}
{{--                        </span>--}}
{{--                </button>--}}
{{--                <div class="hidden w-full overflow-hidden transition-[height] duration-300">--}}
{{--                    <p class="text-gray-700 dark:text-gray-300 pt-3 p-5">--}}
{{--                        No. This is a HTML template. It won't directly with WordPress, though you can convert this into--}}
{{--                        WordPress compatible theme.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- 3 -->--}}
{{--            <div class="border border-gray-300 rounded-lg mt-4">--}}
{{--                <button class="p-5 inline-flex items-center justify-between w-full font-semibold text-left transition"--}}
{{--                        data-fc-type="collapse">--}}
{{--                    How do I get help with the theme?--}}
{{--                    <span class="material-symbols-rounded text-xl block transition-all fc-collapse-open:rotate-180">--}}
{{--                            <i class="fa-solid fa-angle-down"></i>--}}
{{--                        </span>--}}
{{--                </button>--}}
{{--                <div class="hidden w-full overflow-hidden transition-[height] duration-300">--}}
{{--                    <p class="text-gray-700 dark:text-gray-300 pt-3 p-5">--}}
{{--                        Use our dedicated support email (support@coderthemes.com) to send your issues or feedback. We--}}
{{--                        are here to help anytime.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- 4 -->--}}
{{--            <div class="border border-gray-300 rounded-lg mt-4">--}}
{{--                <button class="p-5 inline-flex items-center justify-between w-full font-semibold text-left transition"--}}
{{--                        data-fc-type="collapse">--}}
{{--                    Will you regularly give updates of Prompt ?--}}
{{--                    <span class="material-symbols-rounded text-xl block transition-all fc-collapse-open:rotate-180">--}}
{{--                            <i class="fa-solid fa-angle-down"></i>--}}
{{--                        </span>--}}
{{--                </button>--}}
{{--                <div class="hidden w-full overflow-hidden transition-[height] duration-300">--}}
{{--                    <p class="text-gray-700 dark:text-gray-300 pt-3 p-5">--}}
{{--                        Yes, We will update the Prompt regularly. All the future updates would be available without any--}}
{{--                        cost.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="text-center mt-14">--}}
{{--            <p class="inline-flex flex-wrap gap-1 bg-gray-100 text-sm rounded-lg py-2 px-5">Still have unanswered--}}
{{--                questions?<a href="#" class="hover:text-primary transition-all"> Contact Us</a></p>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</section>--}}
<!-- =========== faq Section end =========== -->

<!-- =========== footer Section start =========== -->
{{--@include('landingcomponents.footer')--}}
<!-- =========== footer Section end =========== -->

<!-- =========== Back To Top Start =========== -->
<button data-toggle="back-to-top"
        class="fixed text-sm rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-primary/20 text-primary flex justify-center items-center">
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
<script src="{{asset('landingassets/js/theme.min.js')}}"></script>


<script>
    const lightbox = GLightbox({
        touchNavigation: true,
        loop: true,
        autoplayVideos: true
    });

</script>

</body>


</html>