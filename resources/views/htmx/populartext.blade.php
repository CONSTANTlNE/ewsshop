<div  style="max-width: 300px;margin: auto " id="errors"></div>
<input  style="max-width: 300px " class="form-input" type="text" name="title" placeholder="სასურველი ტექსტი" @if($header) value="{{$header->name}}" @endif>
<input type="hidden" id="token2" name="_token" value="{{ csrf_token() }}">
    <button
            hx-post="{{route('shop.populartext.update',['shop'=>request()->segment(1)])}}"
            hx-include="[name='title'],#token2"
            hx-target="#populartext"
            hx-target-error="#errors"
        style="display: inline-block;padding: 0;width: 50px" type="button" class="button-31">
        <svg style="pointer-events: none" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
            <path fill="white" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z"></path>
        </svg>
    </button>
