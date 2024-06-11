// Upload button 1
 edituploadbutton=document.querySelector('[data-product-editnewopload]')
edituploadbutton.addEventListener('click',()=>{
    document.querySelector("[data-newprod-editimage]").click()
})

function editconvertToWebP() {
    const inputElement = document.querySelector("[data-newprod-editimage]")

    document.getElementById('editnewfilename').textContent =
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
            document.querySelector(".editnewproductimage").value = base64WebP;

            // Submit the form
            // document.getElementById("existingForm").submit();
            console.log('conversion finished')
        };
        image.src = event.target.result;
    };

    reader.readAsDataURL(file);
}

// Upload button 2
 edituploadbutton2=document.querySelector('[data-product-editnewopload2]')
edituploadbutton2.addEventListener('click',()=>{
    document.querySelector("[data-newprod-editimage2]").click()
})

function editconvertToWebP2() {
    const inputElement = document.querySelector("[data-newprod-editimage2]")

    document.getElementById('editnewfilename2').textContent =
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
            const base64WebP2 = canvas.toDataURL("image/webp",0.7);

            // Set the base64 string as the value of the hidden input field
            document.querySelector(".editnewproductimage2").value = base64WebP2;

            // Submit the form
            // document.getElementById("existingForm").submit();
            console.log('conversion finished')
        };
        image.src = event.target.result;
    };

    reader.readAsDataURL(file);
}


// Upload button 3
 edituploadbutton3=document.querySelector('[data-product-editnewopload3]')
edituploadbutton3.addEventListener('click',()=>{
    document.querySelector("[data-newprod-editimage3]").click()
})

function editconvertToWebP3() {
    const inputElement = document.querySelector("[data-newprod-editimage3]")

    document.getElementById('editnewfilename3').textContent =
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
            const base64WebP3 = canvas.toDataURL("image/webp",0.7);

            // Set the base64 string as the value of the hidden input field
            document.querySelector(".editnewproductimage3").value = base64WebP3;

            // Submit the form
            // document.getElementById("existingForm").submit();
            console.log('conversion finished')
        };
        image.src = event.target.result;
    };

    reader.readAsDataURL(file);
}



// Upload button 4
 edituploadbutton4=document.querySelector('[data-product-editnewopload4]')
edituploadbutton4.addEventListener('click',()=>{
    document.querySelector("[data-newprod-editimage4]").click()
})

function editconvertToWebP4() {
    const inputElement = document.querySelector("[data-newprod-editimage4]")

    document.getElementById('editnewfilename4').textContent =
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
            const base64WebP4 = canvas.toDataURL("image/webp",0.7);

            // Set the base64 string as the value of the hidden input field
            document.querySelector(".editnewproductimage4").value = base64WebP4;

            // Submit the form
            // document.getElementById("existingForm").submit();
            console.log('conversion finished')
        };
        image.src = event.target.result;
    };

    reader.readAsDataURL(file);
}



