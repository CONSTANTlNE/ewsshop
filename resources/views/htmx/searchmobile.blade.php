@foreach($products as $product)
    <li>
        <a
           data-bs-target="#exampleModal"
           data-bs-toggle="modal"
           hx-target="#quickviewtarget"
           hx-get="{{route('quickView', ['shop'=>request()->segment(1),'product' => $product->id])}}"
        >
        <div class="d-flex justify-content-start align-items-center mb-1">
            @foreach($product->media as $media)
                @if($loop->first)
                    <img style="width: 70px;height: 70px;margin:5px;border-radius: 7px" src="{{$media->getUrl()}}">
                @endif
            @endforeach
            <div class="d-flex flex-column gap-1">
                <span>    {{$product->name}}</span>
                <span>  ₾  {{$product->price}}</span>
            </div>
        </div>
        </a>
    </li>
@endforeach