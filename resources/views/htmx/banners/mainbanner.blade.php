<form style="height: 100%" action="{{route('main.banner.update')}}" method="post">
    @csrf

        <div class="d-flex flex-row gap-2 align-items-center justify-content-center mt-1">
           <input type="hidden" name="id" value="{{$banner->id}}">
            <input type="hidden" class="mainbanneredithidden" name="mainbanner_image" data-converted-mainbanner>
            <input style="display: none" type="file" data-mainbanner-editimage
                   onchange="convertToWebPmainEdit()" class="imageInput">

           @foreach($banner->media as $media)
            <img style="width: 100px;height: 150px;border-radius: 10%" class="imagePreview" src="{{$media->getUrl()}}">
            @endforeach

            <br>


            <div class="d-flex flex-column justify-content-center align-items-center">
            <input class="form-input" type="text" name="bannertext" value="{{$banner->title}}"  placeholder="სასურველი სათაური">
            <div style="width: max-content">
                <button style="width: max-content" type="button" data-mainbanner-editimgbtn
                        class="button-31 uploadimages" >ფოტო
                </button>
                <br>
                <p style="width: 200px!important;white-space: normal" id="mainbannereditfilename"></p>
            </div>
            </div>

        </div>






    <div class="d-flex flex-column gap-2 align-items-center justify-content-center mt-1">

    </div>
    <div class="flex-row align-items-center mt-5">
        <button STYLE="width: min-content;margin-right: 20px" type="button"
                data-mainbanner-closeedit class="button-31">დახურვა
        </button>
        <button STYLE="width: min-content;margin-left: 20px" type="submit"
                class="button-31">

            შენახვა

        </button>
    </div>
</form>





<script>
     editclosebanner=document.querySelector("[data-mainbanner-closeedit]")


    editclosebanner.addEventListener('click',()=>{
        document.querySelector("[data-mainbanner-editmodal]").close()
        document.body.style.overflow = 'auto';
    })

</script>

<script>

    editimg=document.querySelector("[data-mainbanner-editimgbtn]")


    editimg=document.querySelector('[data-mainbanner-editimgbtn]')
    editimg.addEventListener('click',()=>{
        document.querySelector("[data-mainbanner-editimage]").click()
    })









    function convertToWebPmainEdit() {
        const inputElement = document.querySelector("[data-mainbanner-editimage]")

        document.getElementById('mainbannereditfilename').textContent =
            inputElement.files[0].name

        // თუ ფაილი არჩეული არაა
        if (inputElement.files.length === 0) {
            console.error("No file selected.");
            return;
        }

        const file = inputElement.files[0];
        const reader = new FileReader();

        reader.onload = function (event) {
            const image = new Image();
            image.onload = function () {
                const canvas = document.createElement("canvas");
                const ctx = canvas.getContext("2d");

                // Set canvas dimensions
                canvas.width = image.width;
                canvas.height = image.height;

                // Draw image on canvas
                ctx.drawImage(image, 0, 0, image.width, image.height);

                // Convert canvas to base64 string (WebP format)
                const base64WebP = canvas.toDataURL("image/webp",0.7);

                // Set the base64 string as the value of the hidden input field
                document.querySelector(".mainbanneredithidden").value = base64WebP;

                // Submit the form
                // document.getElementById("existingForm").submit();
                console.log('conversion finished')
            };
            image.src = event.target.result;
        };

        reader.readAsDataURL(file);
    }

</script>

{{--Image Preview--}}
<script>


    uploadProfileImage = document.querySelectorAll('.uploadimages');
    imagePreview = document.querySelectorAll('.imagePreview')
    imageInput = document.querySelectorAll('.imageInput')


    if (uploadProfileImage !== null) {

        uploadProfileImage.forEach((el, index) => {
            el.addEventListener('click', function () {
                console.log(imageInput[index])
                // imageInput[index].click()
                console.log('clicked')
                imageInput[index].addEventListener('change', function () {
                    const input = this;
                    if (input.files && input.files[0]) {
                        const reader = new FileReader();
                        reader.onload = function (e) {
                            imagePreview[index].src = e.target.result;
                            imagePreview[index].style.display = 'block';
                        }
                        reader.readAsDataURL(input.files[0]);
                    }
                })
            });


        });
    }
</script>