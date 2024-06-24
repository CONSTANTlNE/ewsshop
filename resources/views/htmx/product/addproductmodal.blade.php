@if($shop->settings->first()->use_category)
    <select id="category_id" name="category" class="form-input line-height-1">
        @foreach($shop->categories as $index => $category)
            <option name="category_id"
                    value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>
@endif