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
<dialog style="height: 370px!important;text-align: center" class="dialog" data-modal>
    <form   action="{{route('shop.store')}}" method="post">
        @csrf
        <h2>შექმენი მაღაზია</h2>
        <label for="">მაღაზიის სახელი</label>
        <input class="form-input" type="text" name="shop" placeholder="">
        <label for="">მისამართი</label>
        <input class="form-input" type="text" name="address" placeholder="">

        <div class="flex-row align-items-center ">
            <button  STYLE="width: min-content;margin-left: 20px;border-radius: 15px" type="submit" class="button-31 ">შექმნა</button>
        </div>

    </form>


</dialog>
<script>
    document.querySelector("[data-modal]").showModal()
</script>
</body>
</html>