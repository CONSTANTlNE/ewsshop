
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> <i class="pe-7s-close"></i></button>
<div class="row">
    <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
        <!-- Swiper -->
        <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">
                @foreach($product->media as $img)
                <div style="border-radius: 15px!important" class="swiper-slide">
                    <img style="border-radius: 15px!important" class="img-responsive m-auto quiviewmainimg" src="{{$img->getUrl()}}" alt="">
                </div>
                @endforeach
            </div>
        </div>
        <div class="swiper-container gallery-thumbs mt-20px slider-nav-style-1 small-nav">
            <div class="swiper-wrapper">
                @foreach($product->media as $media)
                <div class="swiper-slide">
                    <img class="img-responsive m-auto quickviewsmallimg" src="{{$media->getUrl()}}" alt="">
                </div>
                @endforeach
            </div>
            <!-- Add Arrows -->
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
        <div class="product-details-content quickview-content">
            <h2>{{$product->name}}</h2>
            <div class="pricing-meta">
                <ul class="d-flex">
                    <li class="new-price">₾ {{$product->price}}</li>
                </ul>
            </div>

            <p class="mt-30px">
                {{$product->description}}
            </p>
            @if($product->SKU!==null)
            <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                <span>კოდი:</span>
                <ul class="d-flex">
                    <li>
                        <a>{{$product->SKU}}</a>
                    </li>
                </ul>
            </div>
            @endif
            <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                <span>კატეგორია: </span>
                <ul class="d-flex">
                    <li>
                        <a href="{{route('categories',['shop'=>request()->segment(1),'category'=>$product->category->slug])}}">{{$product->category->name}}</a>
                    </li>

                </ul>
            </div>
            <div class="specs">
                @if($product->specs)
                 @foreach($product->specs as $spec)

                        <p class="mb-1"><span>{{$spec->name}}</span> {{$spec->value}}</p>
                 @endforeach
                @endif

            </div>

        </div>
    </div>
</div>

<script>
if(typeof galleryThumb !== 'undefined' ){
    galleryThumb.destroy();
}

galleryThumb = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        slidesPerView: 3,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        centerMood:true,
    });


if(typeof galleryTop !== 'undefined' ){
    galleryTop.destroy();
}

 galleryTop = new Swiper('.gallery-top', {
    spaceBetween: 0,
    loop: true,
    slidesPerView: 1,
    centerMood:true,
    thumbs: {
        swiper: galleryThumb
    }
});
</script>