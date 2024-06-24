<div style="max-width: 300px;margin: auto " id="errors"></div>
<textarea name="description" id="" cols="30" rows="3" placeholder="აღწერა">{{$shop->description}}</textarea>

<input type="hidden" id="token2" name="_token" value="{{ csrf_token() }}">
<button
        hx-post="{{route('shop.desctription.update',['shop'=>request()->segment(1)])}}"
        hx-include="[name='description'],#token2"
        hx-target="#descrtarget"
        hx-target-error="#errors"
        style="display: inline-block;padding: 0;width: 50px;margin: auto;color: white" type="button">
    შეცვლა
</button>