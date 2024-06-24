function convertToWebPmain() {
    const inputElement = document.querySelector("[data-mainbanner-image]")

    document.getElementById('mainbannerfilename').textContent =
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
            document.querySelector(".mainbannerhidden").value = base64WebP;

            // Submit the form
            // document.getElementById("existingForm").submit();

        };
        image.src = event.target.result;
    };

    reader.readAsDataURL(file);
}