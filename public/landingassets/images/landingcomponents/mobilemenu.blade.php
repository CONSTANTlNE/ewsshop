<div id="mobileMenu" class="fc-offcanvas-open:translate-x-0 translate-x-full fixed top-0 end-0 transition-all duration-200 transform h-full w-full max-w-md z-50 bg-white border-s hidden">
    <div class="flex flex-col h-full divide-y-2 divide-gray-200">
        <!-- Mobile Menu Topbar Logo (Header) -->
        <div class="p-6 flex items-center justify-between">
            <a href="index.html">
                <img src="{{asset('landingassets/images/logo-dark.png')}}" class="h-8" alt="Logo">
            </a>

            <button data-fc-dismiss class="flex items-center px-2">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
        </div>

        <!-- Mobile Menu Link List -->
        <div class="p-6 overflow-scroll h-full">
            <ul class="navbar-nav flex flex-col gap-2" data-fc-type="accordion">
                <!-- Home Page Link -->
                <li class="nav-item">

                    <a class="nav-link" href="{{route('register')}}">რეგისტრაცია</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">ავტორიზაცია</a>
                </li>


                <!-- Contact Page Link -->
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact us</a>
                </li>
            </ul>
        </div>

{{--        <!-- Mobile Menu Download Button (Footer) -->--}}
{{--        <div class="p-6 flex items-center justify-center">--}}
{{--            <a href="https://1.envato.market/prompt-tailwind" target="_blank" class="bg-primary w-full text-white p-3 rounded flex items-center justify-center text-sm">Download</a>--}}
{{--        </div>--}}
    </div>
</div>
