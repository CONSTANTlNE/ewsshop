//reinitialize htmx , because its not working on datatables pagination
// document.getElementById('example').addEventListener('mouseover', () => {
//     htmx.process(document.getElementById('example'))
// })

document.addEventListener('htmx:afterOnLoad', function (event) {

    let response = event.detail.xhr.response;

    let initiator = event.detail.elt;

    // console.log(initiator.id)

    // for debugging
    // console.log(response)


    // const initiator = event.target;
    // console.log(event.detail)
    const xhr = event.detail.xhr;


    if (xhr.status === 200) {


        if (initiator.id === 'editproductform') {

            Swal.fire({
                position: "center",
                icon: "success",
                title: "პროდუქტი წარმატებით შეიცვალა",
                showConfirmButton: false,
                timer: 5000
            });


            document.querySelector("[data-edit-modal]").close()



            console.log('editproductform')

        }


        if (initiator.id === 'productform') {
            document.querySelector("[data-modal]").close()
            document.body.style.overflow = 'auto';
            document.getElementById('productform').reset();
            document.getElementById('newfilename').innerHTML = '';
            document.getElementById('newfilename2').innerHTML = '';
            document.getElementById('newfilename3').innerHTML = '';
            document.getElementById('newfilename4').innerHTML = '';
            document.getElementById('producterrors5').innerHTML = '';
            document.querySelector("[data-converted-newprodimg]").value = '';
            document.querySelector("[data-converted-newprodimg2]").value = '';
            document.querySelector("[data-converted-newprodimg3]").value = '';
            document.querySelector("[data-converted-newprodimg4]").value = '';

        }

        if (initiator.id === 'searchinput' || initiator.id === 'searchinput2') {
            const search = document.getElementById('searchtarget');

            search.style.display = 'block';


            document.addEventListener('click', function (event) {
                search.style.display = 'none';

                // Check if the click is outside the search input element
                // if (!search.contains(event.target)) {
                //     search.style.display = 'none';
                // }
            });

        }


        if (initiator.id === 'searchinputmobile' || initiator.id === 'searchinputmobile2') {
            const search = document.getElementById('searchtargetmobile');

            search.style.display = 'block';


            document.addEventListener('click', function (event) {
                search.style.display = 'none';

                // Check if the click is outside the search input element
                // if (!search.contains(event.target)) {
                //     search.style.display = 'none';
                // }
            });

        }
    }

});


