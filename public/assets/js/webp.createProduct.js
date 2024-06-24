// Upload button 1
const uploadbuttom=document.querySelector('[data-product-newopload]')
uploadbuttom.addEventListener('click',()=>{
    document.querySelector("[data-newprod-image]").click()
})

function convertToWebP() {
    const inputElement = document.querySelector("[data-newprod-image]")

    document.getElementById('newfilename').textContent =
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
            document.querySelector(".newproductimage").value = base64WebP;

            // Submit the form
            // document.getElementById("existingForm").submit();

        };
        image.src = event.target.result;
    };

    reader.readAsDataURL(file);
}

// Upload button 2
const uploadbuttom2=document.querySelector('[data-product-newopload2]')
uploadbuttom2.addEventListener('click',()=>{
    document.querySelector("[data-newprod-image2]").click()
})

function convertToWebP2() {
    const inputElement = document.querySelector("[data-newprod-image2]")

    document.getElementById('newfilename2').textContent =
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
            document.querySelector(".newproductimage2").value = base64WebP2;

            // Submit the form
            // document.getElementById("existingForm").submit();

        };
        image.src = event.target.result;
    };

    reader.readAsDataURL(file);
}


// Upload button 3
const uploadbuttom3=document.querySelector('[data-product-newopload3]')
uploadbuttom3.addEventListener('click',()=>{
    document.querySelector("[data-newprod-image3]").click()
})

function convertToWebP3() {
    const inputElement = document.querySelector("[data-newprod-image3]")

    document.getElementById('newfilename3').textContent =
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
            document.querySelector(".newproductimage3").value = base64WebP3;

            // Submit the form
            // document.getElementById("existingForm").submit();

        };
        image.src = event.target.result;
    };

    reader.readAsDataURL(file);
}




// Upload button 4
const uploadbuttom4=document.querySelector('[data-product-newopload4]')
uploadbuttom4.addEventListener('click',()=>{
    document.querySelector("[data-newprod-image4]").click()
})

function convertToWebP4() {
    const inputElement = document.querySelector("[data-newprod-image4]")

    document.getElementById('newfilename4').textContent =
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
            document.querySelector(".newproductimage4").value = base64WebP4;

            // Submit the form
            // document.getElementById("existingForm").submit();

        };
        image.src = event.target.result;
    };

    reader.readAsDataURL(file);
}



