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


<dialog style="height: 500px!important;text-align: center" class="dialog" data-mobile-dialog>
    <form  action="{{route('mobile.store')}}" method="post">
        @csrf
    <h2>ვერიფიკაცია</h2>
    <label for="">მობილური</label>
    <br>

    <input style="width: 150px" value="{{$user->mobile}}"  class="form-input" type="text" name="mobile" placeholder="">
    <br>
    <br>
    <div class="flex-row align-items-center mb-2">
        <button  STYLE="width:  max-content;border-radius: 15px;" type="submit" class="button-31 ">კოდის მიღება</button>
    </div>
    </form>

    <form  style="margin-top: 20px" action="{{route('confirm.mobile2')}}" method="post">
        @csrf
        <label for="">სმს კოდი</label>
        <br>

        <input style="width: 150px"  class="form-input" type="text" name="code" placeholder="">
        <br>
        <br>
        <div class="flex-row align-items-center mb-2">
            <button  STYLE="width:  max-content;border-radius: 15px;" type="submit" class="button-31 ">დადასტურება</button>
        </div>
    </form>


{{--    <div style="margin-top: 20px" class="flex-row align-items-cente">--}}
{{--        <button  STYLE="width: max-content;border-radius: 15px" type="submit" class="button-31 ">ნომრის შეცვლა</button>--}}
{{--    </div>--}}


</dialog>
<script>
    document.querySelector("[data-mobile-dialog]").showModal()
</script>
</body>
</html>