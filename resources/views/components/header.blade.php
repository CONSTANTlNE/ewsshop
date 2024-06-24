<header>

    <div style="background-color: #252525!important" class="header-bottom d-lg-none sticky-nav style-1">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div style="max-width: min-content" class="col">
                    <div  class="header-logo d-flex justify-content-start align-items-center">
                        @if($shop->settings->first()->use_logo==1)
                        <div class="d-flex">
                            <a class="d-flex justify-content-center align-items-center"
                               href="{{ route('home',['shop' => request()->segment(1)])}}">
                                {{--                                <h2 style="min-width: 150px!important;color: white;font-size: 30px;white-space: nowrap;margin-bottom: 0">Easy Web Solutions</h2>--}}
                                @foreach($shop->media as $logo)
                                    <img style="width: auto; max-height: 50px"
                                         src="{{$logo->getUrl()}}" alt="Site Logo"/>

                                @endforeach
                                @if($shop->media->isEmpty())
                                    <img style="width: auto; max-height: 50px"
                                         src="{{asset('assets/images/logo/logonobg.png')}}" alt="Site Logo"/>
                                @endif
                            </a>
                            @auth
                                <input style="display: none" type="file" data-logo-imagefile>
                                <form class="logoform" style="margin:auto; height: 30px;width: 30px;"
                                      action="{{route('update.logo')}}"
                                      method="post">
                                    @csrf
                                    <input type="hidden" data-converted-logoimage name="logoimg">
                                    <button type="button" data-logo-image>

                                        <img style="height: 30px;width: 30px;margin-bottom: 20px; cursor:pointer"
                                             src="{{asset('assets/icons/edit_icon.svg')}}" alt="">

                                    </button>
                                </form>
                            @endauth
                        </div>
                        @endif
                    </div>
                </div>
                <div  style="padding: 0!important;max-width: 250px" class="mobile-search-box d-lg-none">
                    <div style="padding: 0!important;" class="container">
                        <!-- mobile search start -->
                        <div style="position: relative ; padding-bottom: 0!important" class="search-element max-width-100">

                            <form>
                                <input
                                        id="searchinputmobile"
                                        hx-trigger="keyup delay:800ms,paste delay:800ms"
                                        hx-get="{{route('product.searchmobile', ['shop' => request()->segment(1)])}}"
                                        hx-target="#searchtargetmobile"
                                        name="search" type="text" placeholder="ძებნა"/>

                                <button
                                        id="searchinputmobile2"
                                        hx-trigger="click"
                                        hx-get="{{route('product.searchmobile', ['shop' => request()->segment(1)])}}"
                                        hx-target="#searchtargetmobile"
                                        hx-include="#searchinputmobile"

                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256"><path fill="currentColor" d="M232.49 215.51L185 168a92.12 92.12 0 1 0-17 17l47.53 47.54a12 12 0 0 0 17-17ZM44 112a68 68 0 1 1 68 68a68.07 68.07 0 0 1-68-68"/></svg>
                                </button>
                            </form>

                            <ul id="searchtargetmobile"
                                style="max-width:450px;display:  none;border-radius:5px;border:0.5px solid black;position:absolute;top:50px;left: 0;right: 0;background-color: #ffffff; z-index: 6000">
                                <li>
                                    <div class="d-flex justify-content-start align-items-center">

                                    </div>
                                </li>

                            </ul>

                        </div>
                        <!-- mobile search start -->
                    </div>
                </div>
                <div  style="max-width: min-content" class="col-lg-3 col">
                    <div class="header-actions ">
                        @auth
                            <a href="#offcanvas-settings" class="header-action-btn offcanvas-toggle">
                                <span class="material-symbols-outlined">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                         viewBox="0 0 24 24"><path fill="white"
                                                                   d="m9.25 22l-.4-3.2q-.325-.125-.612-.3t-.563-.375L4.7 19.375l-2.75-4.75l2.575-1.95Q4.5 12.5 4.5 12.338v-.675q0-.163.025-.338L1.95 9.375l2.75-4.75l2.975 1.25q.275-.2.575-.375t.6-.3l.4-3.2h5.5l.4 3.2q.325.125.613.3t.562.375l2.975-1.25l2.75 4.75l-2.575 1.95q.025.175.025.338v.674q0 .163-.05.338l2.575 1.95l-2.75 4.75l-2.95-1.25q-.275.2-.575.375t-.6.3l-.4 3.2zM11 20h1.975l.35-2.65q.775-.2 1.438-.587t1.212-.938l2.475 1.025l.975-1.7l-2.15-1.625q.125-.35.175-.737T17.5 12t-.05-.787t-.175-.738l2.15-1.625l-.975-1.7l-2.475 1.05q-.55-.575-1.212-.962t-1.438-.588L13 4h-1.975l-.35 2.65q-.775.2-1.437.588t-1.213.937L5.55 7.15l-.975 1.7l2.15 1.6q-.125.375-.175.75t-.05.8q0 .4.05.775t.175.75l-2.15 1.625l.975 1.7l2.475-1.05q.55.575 1.213.963t1.437.587zm1.05-4.5q1.45 0 2.475-1.025T15.55 12t-1.025-2.475T12.05 8.5q-1.475 0-2.488 1.025T8.55 12t1.013 2.475T12.05 15.5M12 12"></path></svg>
                                </span>
                            </a>
                            <a href="#offcanvas-shop"
                               class="header-action-btn d-flex align-items-center offcanvas-toggle">
                                <svg style="height: 24px; width: 24px" xmlns="http://www.w3.org/2000/svg" width="1em"
                                     height="1em" viewBox="0 0 24 24">
                                    <path fill="white"
                                          d="M10 4a4 4 0 0 0-4 4a4 4 0 0 0 4 4a4 4 0 0 0 4-4a4 4 0 0 0-4-4m7 8a.26.26 0 0 0-.26.21l-.19 1.32c-.3.13-.59.29-.85.47l-1.24-.5c-.11 0-.24 0-.31.13l-1 1.73c-.06.11-.04.24.06.32l1.06.82a4.2 4.2 0 0 0 0 1l-1.06.82a.26.26 0 0 0-.06.32l1 1.73c.06.13.19.13.31.13l1.24-.5c.26.18.54.35.85.47l.19 1.32c.02.12.12.21.26.21h2c.11 0 .22-.09.24-.21l.19-1.32c.3-.13.57-.29.84-.47l1.23.5c.13 0 .26 0 .33-.13l1-1.73a.26.26 0 0 0-.06-.32l-1.07-.82c.02-.17.04-.33.04-.5s-.01-.33-.04-.5l1.06-.82a.26.26 0 0 0 .06-.32l-1-1.73c-.06-.13-.19-.13-.32-.13l-1.23.5c-.27-.18-.54-.35-.85-.47l-.19-1.32A.236.236 0 0 0 19 12zm-7 2c-4.42 0-8 1.79-8 4v2h9.68a7 7 0 0 1-.68-3a7 7 0 0 1 .64-2.91c-.53-.06-1.08-.09-1.64-.09m8 1.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5c-.84 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5"></path>
                                </svg>
                            </a>
                            <form style="margin-bottom: 0!important" action="{{route('logout')}}" method="post">
                                @csrf
                                <button class="d-flex align-items-center header-action-btn ">
                                    <svg style="height: 24px; width: 24px" xmlns="http://www.w3.org/2000/svg"
                                         width="1em" height="1em" viewBox="0 0 24 24">
                                        <path fill="white"
                                              d="M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h7v2H5v14h7v2zm11-4l-1.375-1.45l2.55-2.55H9v-2h8.175l-2.55-2.55L16 7l5 5z"></path>
                                    </svg>
                                </button>
                            </form>
                        @endauth

                        <!-- Single Wedge End -->
                        {{--                        <a href="#offcanvas-cart"--}}
                        {{--                           class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">--}}
                        {{--                            <i class="pe-7s-shopbag"></i>--}}
                        {{--                            <span class="header-action-num">01</span>--}}
                        {{--                            <!-- <span class="cart-amount">€30.00</span> -->--}}
                        {{--                        </a>--}}
                        <a href="#offcanvas-mobile-menu"
                           class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 16 16"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.75 12.25h10.5m-10.5-4h10.5m-10.5-4h10.5"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- header navigation area LARGE SCREEN  start -->
    <div class="header-nav-area d-none d-lg-block sticky-nav">
        <div style="background-color: #252525!important" class="header-bottom  d-none d-lg-block">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-3 col">
                        <div class="header-logo d-flex justify-content-start align-items-center">
                            @if($shop->settings->first()->use_logo==1)
                            <div class="d-flex">
                                <a class="d-flex justify-content-center align-items-center"
                                   href="{{ route('home',['shop' => request()->segment(1)])}}">
                                    {{--                                <h2 style="min-width: 150px!important;color: white;font-size: 30px;white-space: nowrap;margin-bottom: 0">Easy Web Solutions</h2>--}}
                                   @foreach($shop->media as $logo)
                                    <img style="width: auto; max-height: 50px"
                                         src="{{$logo->getUrl()}}" alt="Site Logo"/>

                                    @endforeach
                                    @if($shop->media->isEmpty())
                                    <img style="width: auto; max-height: 50px"
                                         src="{{asset('assets/images/logo/logonobg.png')}}" alt="Site Logo"/>
                                    @endif
                                </a>
                                @auth
                                    <input style="display: none" type="file" data-logo-imagefile>
                                    <form class="logoform" style="margin:auto; height: 30px;width: 30px;"
                                          action="{{route('update.logo')}}"
                                          method="post">
                                        @csrf
                                        <input type="hidden" data-converted-logoimage name="logoimg">
                                        <button type="button" data-logo-image>
                                            <img style="height: 30px;width: 30px;margin-bottom: 20px; cursor:pointer"
                                                 src="{{asset('assets/icons/edit_icon.svg')}}" alt="">
                                        </button>
                                    </form>
                                @endauth
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block">
                        <div style="position: relative" class="search-element">
                            <form>
                                <input
                                        id="searchinput"
                                        hx-trigger="keyup delay:800ms,paste delay:800ms"
                                        hx-get="{{route('product.search', ['shop' => request()->segment(1)])}}"
                                        hx-target="#searchtarget"
                                        name="search" type="text" placeholder="ძებნა"/>

                                <button
                                        id="searchinput2"
                                        hx-trigger="click"
                                        hx-get="{{route('product.search', ['shop' => request()->segment(1)])}}"
                                        hx-target="#searchtarget"
                                        hx-include="#searchinput"

                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256"><path fill="currentColor" d="M232.49 215.51L185 168a92.12 92.12 0 1 0-17 17l47.53 47.54a12 12 0 0 0 17-17ZM44 112a68 68 0 1 1 68 68a68.07 68.07 0 0 1-68-68"/></svg>
                                </button>
                            </form>

                            <ul id="searchtarget"
                                style="max-width:450px;display:  none;border-radius:5px;border:0.5px solid black;position:absolute;top:50px;left: 0;right: 0;background-color: #ffffff; z-index: 6000">
                                <li>
                                    <div class="d-flex justify-content-start align-items-center">

                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col">
                        <div class="header-actions">
                            @auth
                                <a href="#offcanvas-settings" class="header-action-btn offcanvas-toggle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                         viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                              d="m9.25 22l-.4-3.2q-.325-.125-.612-.3t-.563-.375L4.7 19.375l-2.75-4.75l2.575-1.95Q4.5 12.5 4.5 12.338v-.675q0-.163.025-.338L1.95 9.375l2.75-4.75l2.975 1.25q.275-.2.575-.375t.6-.3l.4-3.2h5.5l.4 3.2q.325.125.613.3t.562.375l2.975-1.25l2.75 4.75l-2.575 1.95q.025.175.025.338v.674q0 .163-.05.338l2.575 1.95l-2.75 4.75l-2.95-1.25q-.275.2-.575.375t-.6.3l-.4 3.2zM11 20h1.975l.35-2.65q.775-.2 1.438-.587t1.212-.938l2.475 1.025l.975-1.7l-2.15-1.625q.125-.35.175-.737T17.5 12t-.05-.787t-.175-.738l2.15-1.625l-.975-1.7l-2.475 1.05q-.55-.575-1.212-.962t-1.438-.588L13 4h-1.975l-.35 2.65q-.775.2-1.437.588t-1.213.937L5.55 7.15l-.975 1.7l2.15 1.6q-.125.375-.175.75t-.05.8q0 .4.05.775t.175.75l-2.15 1.625l.975 1.7l2.475-1.05q.55.575 1.213.963t1.437.587zm1.05-4.5q1.45 0 2.475-1.025T15.55 12t-1.025-2.475T12.05 8.5q-1.475 0-2.488 1.025T8.55 12t1.013 2.475T12.05 15.5M12 12"/>
                                    </svg>
                                </a>

                                <a href="#offcanvas-shop"
                                   class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                         viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                              d="M12 14v2a6 6 0 0 0-6 6H4a8 8 0 0 1 8-8m0-1c-3.315 0-6-2.685-6-6s2.685-6 6-6s6 2.685 6 6s-2.685 6-6 6m0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4s-4 1.79-4 4s1.79 4 4 4m2.595 7.811a3.5 3.5 0 0 1 0-1.622l-.992-.573l1-1.732l.992.573A3.5 3.5 0 0 1 17 14.645V13.5h2v1.145c.532.158 1.012.44 1.405.812l.992-.573l1 1.732l-.991.573a3.5 3.5 0 0 1 0 1.622l.991.573l-1 1.732l-.992-.573a3.5 3.5 0 0 1-1.405.812V22.5h-2v-1.145a3.5 3.5 0 0 1-1.405-.812l-.992.573l-1-1.732zM18 19.5a1.5 1.5 0 1 0 0-3a1.5 1.5 0 0 0 0 3"/>
                                    </svg>
                                </a>

                                <form style="margin-bottom: 0!important" action="{{route('logout')}}"
                                      method="post">
                                    @csrf
                                    <button style="padding:0" class="d-flex align-items-center header-action-btn ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                             viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                  d="M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h7v2H5v14h7v2zm11-4l-1.375-1.45l2.55-2.55H9v-2h8.175l-2.55-2.55L16 7l5 5z"/>
                                        </svg>
                                    </button>
                                </form>
                            @endauth


                            <!-- Single Wedge End -->
                            <a href="#offcanvas-cart"
                               class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                          d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1M9 9H5V5h4zm11 4h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1m-1 6h-4v-4h4zM17 3c-2.206 0-4 1.794-4 4s1.794 4 4 4s4-1.794 4-4s-1.794-4-4-4m0 6c-1.103 0-2-.897-2-2s.897-2 2-2s2 .897 2 2s-.897 2-2 2M7 13c-2.206 0-4 1.794-4 4s1.794 4 4 4s4-1.794 4-4s-1.794-4-4-4m0 6c-1.103 0-2-.897-2-2s.897-2 2-2s2 .897 2 2s-.897 2-2 2"/>
                                </svg>                                <!-- <span class="cart-amount">€30.00</span> -->
                            </a>
                            <a href="#offcanvas-mobile-menu"
                               class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.75 12.25h10.5m-10.5-4h10.5m-10.5-4h10.5"/></svg>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
    <!-- header navigation area end -->
{{--    <div class="mobile-search-box d-lg-none">--}}
{{--        <div class="container">--}}
{{--            <!-- mobile search start -->--}}
{{--            <div style="position: relative" class="search-element max-width-100">--}}

{{--                <form>--}}
{{--                    <input--}}
{{--                            id="searchinputmobile"--}}
{{--                            hx-trigger="keyup delay:800ms,paste delay:800ms"--}}
{{--                            hx-get="{{route('product.searchmobile', ['shop' => request()->segment(1)])}}"--}}
{{--                            hx-target="#searchtargetmobile"--}}
{{--                            name="search" type="text" placeholder="ძებნა"/>--}}

{{--                    <button--}}
{{--                            id="searchinputmobile2"--}}
{{--                            hx-trigger="click"--}}
{{--                            hx-get="{{route('product.searchmobile', ['shop' => request()->segment(1)])}}"--}}
{{--                            hx-target="#searchtargetmobile"--}}
{{--                            hx-include="#searchinputmobile"--}}

{{--                    ><i class="pe-7s-search"></i></button>--}}
{{--                </form>--}}

{{--                <ul id="searchtargetmobile"--}}
{{--                    style="max-width:450px;display:  none;border-radius:5px;border:0.5px solid black;position:absolute;top:50px;left: 0;right: 0;background-color: #ffffff; z-index: 6000">--}}
{{--                    <li>--}}
{{--                        <div class="d-flex justify-content-start align-items-center">--}}

{{--                        </div>--}}
{{--                    </li>--}}

{{--                </ul>--}}

{{--            </div>--}}
{{--            <!-- mobile search start -->--}}
{{--        </div>--}}
{{--    </div>--}}
</header>