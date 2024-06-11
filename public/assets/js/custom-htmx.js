
//reinitialize htmx , because its not working on datatables pagination
// document.getElementById('example').addEventListener('mouseover', () => {
//     htmx.process(document.getElementById('example'))
// })

document.addEventListener('htmx:afterOnLoad', function (event) {

    let response = event.detail.xhr.response;

    // for debugging
    console.log(response)
    const initiator = event.target;

    const xhr = event.detail.xhr;

    if (xhr.status === 200) {


        if(initiator.id === 'linktosomepage') {
       const element = document.getElementById('someelement');
        }

    }

});

