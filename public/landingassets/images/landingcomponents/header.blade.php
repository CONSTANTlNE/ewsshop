<header id="navbar" class="light fixed top-0 inset-x-0 flex items-center z-40 w-full lg:bg-transparent bg-white transition-all py-5">
    <div class="container">
        <nav class="flex items-center">
            <!-- Navbar Brand Logo -->
            <a href="{{route('index')}}">
                <img src="{{asset('assets/images/logo/logonobg.png')}}" class="h-8 logo-dark" alt="Logo Dark">
                <img src="{{asset('assets/images/logo/logonobg.png')}}" class="h-8 logo-light" alt="Logo Light">
            </a>

            <!-- Nevigation Menu -->
            <div class="hidden lg:block ms-auto">
                <ul class="navbar-nav flex gap-x-3 items-center justify-center">
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


            <!-- Moblie Menu Toggle Button (Offcanvas Button) -->
            <div class="lg:hidden flex items-center ms-auto px-2.5">
                <button type="button" data-fc-target="mobileMenu" data-fc-type="offcanvas">
                    <i class="fa-solid fa-bars text-2xl text-gray-500"></i>
                </button>
            </div>
        </nav>
    </div>
</header>
