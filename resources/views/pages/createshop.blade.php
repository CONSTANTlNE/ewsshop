<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/myStyle.css')}}">

</head>
<body>
<dialog  style="height: 500px!important;text-align: center;position: relative" class="dialog" data-modal>
    <form action="{{route('shop.store')}}" method="post">
        @csrf
        <h2>შექმენი მაღაზია</h2>

        <label for="shop">მაღაზიის სახელი</label>
        <input class="form-input" type="text" name="shop" id="shop" placeholder="">
        @error('shop')
        <p style="color: red">{{$message}}</p>
        @enderror
        <label for="address">მისამართი</label>
        <input class="form-input" type="text" name="address" id="address" placeholder="არასავალდებულო">
        @error('address')
        <p style="color: red">{{$message}}</p>
        @enderror
        <label for="description">აღწერა</label>
        <textarea class="form-input" name="description" id="description" placeholder="არასავალდებულო"></textarea>
        @error('description')
        <p style="color: red">{{$message}}</p>
        @enderror
        <div style="margin-top: 20px;position: absolute;bottom: 10px;left: 35%" class="flex-row align-items-center ">
            <button STYLE="width: min-content;margin-left: 20px;border-radius: 15px" type="submit" class="button-31 ">
                შექმნა
            </button>
        </div>
    </form>
</dialog>
<script>
    document.querySelector("[data-modal]").showModal()
</script>
</body>
</html>