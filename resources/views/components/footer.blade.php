<div style="background-color: #252525!important;" class="footer-area">
    <div class="footer-container">
        <div style="padding-bottom: 0!important;padding-top: 20px" class="footer-top">
            <div class="container">
                <div class="row">
                    <!-- Start single blog -->
                    <div class="col-md-6 col-lg-3 mb-md-30px mb-lm-30px">
                        <div class="single-wedge d-flex flex-column justify-content-center align-items-center">
                            @if($shop->settings->first()->show_description===1)
                                <input type="hidden" id="shopid" value="{{$shop->id}}">
                                @auth
                                    <button id="editshopdescription" hx-get="{{route('shop.desctription.edit')}}"
                                            hx-target="#descrtarget">
                                        <img style="height: 30px;width: 30px;margin-bottom: 20px; cursor:pointer"
                                             src="{{asset('assets/icons/edit_icon.svg')}}" alt="">
                                    </button>
                                @endauth
                                <div id="descrtarget"
                                     class="d-flex flex-column justify-content-center align-items-center">

                                    <p id="shopdescription" style="color: white!important" class="about-text">
                                        @if(auth()->check() && $shop->description!==null )
                                            {{$shop->description}}
                                        @else
                                            მაღაზიის აღწერა
                                        @endif

                                    </p>
                                </div>
                            @endif

                            @if($shop->settings->first()->use_socials===1)
                                @include('components.socials')
                            @endif
                        </div>
                    </div>
                    <!-- End single blog -->
                    <!-- Start single blog -->
                    <div class="col-md-6 col-lg-3 col-sm-6 mb-lm-30px pl-lg-60px">

                    </div>
                    <!-- End single blog -->
                    <!-- Start single blog -->
                    <div class="col-md-6 col-lg-3 col-sm-6 mb-lm-30px pl-lg-40px">

                    </div>
                    <!-- End single blog -->
                    <!-- Start single blog -->
                    <div class="col-md-6 col-lg-3 col-sm-12">
                        <div class="single-wedge  mt-auto">
                            {{--                            <h4 style="color: white!important" class="footer-herading">საკონტაქტო</h4>--}}
                            <div class="footer-links">
                                @if($shop->address!==null)
                                    <a style="color: white!important" class="address"
                                       href="https://www.google.com/maps/search/?api=1&query={{$shop->address}}"
                                       target="_blank">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                             viewBox="0 0 256 256">
                                            <path fill="currentColor"
                                                  d="M208 20H64a20 20 0 0 0-20 20v20H32a12 12 0 0 0 0 24h12v32H32a12 12 0 0 0 0 24h12v32H32a12 12 0 0 0 0 24h12v20a20 20 0 0 0 20 20h144a20 20 0 0 0 20-20V40a20 20 0 0 0-20-20m-4 192H68V44h136Zm-103.2-40.63a48 48 0 0 1 70.4 0a12 12 0 0 0 17.6-16.32a72 72 0 0 0-19.21-14.68a44 44 0 1 0-67.19 0a72.1 72.1 0 0 0-19.2 14.68a12 12 0 0 0 17.6 16.32M116 112a20 20 0 1 1 20 20a20 20 0 0 1-20-20"/>
                                        </svg>
                                        : {{$shop->address}}
                                    </a>

                                @endif

                                <p style="color: white!important" class="phone">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                         viewBox="0 0 32 32">
                                        <path fill="currentColor"
                                              d="M26 29h-.17C6.18 27.87 3.39 11.29 3 6.23A3 3 0 0 1 5.76 3h5.51a2 2 0 0 1 1.86 1.26L14.65 8a2 2 0 0 1-.44 2.16l-2.13 2.15a9.37 9.37 0 0 0 7.58 7.6l2.17-2.15a2 2 0 0 1 2.17-.41l3.77 1.51A2 2 0 0 1 29 20.72V26a3 3 0 0 1-3 3M6 5a1 1 0 0 0-1 1v.08C5.46 12 8.41 26 25.94 27a1 1 0 0 0 1.06-.94v-5.34l-3.77-1.51l-2.87 2.85l-.48-.06c-8.7-1.09-9.88-9.79-9.88-9.88l-.06-.48l2.84-2.87L11.28 5Z"/>
                                    </svg>
                                    :<a style="color: white!important"
                                        href="tel:{{$shop->user->mobile}}"> {{$shop->user->mobile}}</a>
                                </p>


                            </div>
                        </div>
                    </div>
                    <!-- End single blog -->
                </div>
            </div>
        </div>
        <div style="background-color: #252525!important;" class="footer-bottom">
            <div class="container">
                <div class="line-shape-top line-height-1">
                    <div class="row flex-md-row-reverse justify-content-center align-items-center">
                        {{--                        <div class="col-md-6 text-center text-md-end">--}}
                        {{--                            <div class="payment-mth"><a href="#"><img class="img img-fluid" src="assets/images/icons/payment.png" alt="payment-image"></a></div>--}}
                        {{--                        </div>--}}
                        <div class="col-md-6 text-center text-md-start">
                            <p style="color:white!important;" class="copy-text text-center">
                                <strong></strong> შექმნილია
                                <a class="company-name" href="">
                                    <strong style="color:white!important;"> EasyWebSolutions </strong></a>მიერ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>