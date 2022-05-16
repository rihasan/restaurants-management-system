// // Chart.js
// let ctx = document.getElementById('donught').getContext('2d');
// let abc = document.getElementById('donught2').getContext('2d');
// let chart = new Chart(ctx, {
//     // The type of chart we want to create
//     type: 'doughnut',

//     // The data for our dataset
//     data: {
//     labels: ['red', 'green', 'blue', 'yellow'],
//     datasets: [{
//         label: 'My First dataset',
//         backgroundColor: ["#f00", '#0f0', '#00f', '#ff0'],
//         borderColor: 'rgb(222, 212, 200)',
//         data: [40, 25, 20, 15]
//     }]
// },

// // Configuration options go here
// options: {}
// });

// MINUS FUNCTION
function minus() {
    let beefStack = document.getElementById('beefStack');
    let quantityCounter = beefStack.textContent;

    let x = parseInt(quantityCounter, 10);
    if(x > 1) {
        beefStack.innerHTML = --x;
    } else {
        beefStack.innerHTML = x;
    }
}

// PLUS FUNCTION
function plus() {
    let beefStack = document.getElementById('beefStack');
    let quantityCounter = beefStack.textContent;

    let x = parseInt(quantityCounter, 10);
    beefStack.innerHTML = ++x;
}

// ADD ORDER FUNCTION
function addOrder() {
    let beefStack = document.getElementById('beefStack').textContent;
    let foodName = document.getElementById('foodName').textContent;
    let foodPrice = document.getElementById('foodPrice').textContent;
    let itemPrice = foodPrice * beefStack;

    let orderData = `<div class=" d-flex justify-content-between">
                        <p>${beefStack} x ${foodName}</p>
                        <p>$ ${itemPrice}</p>
                    </div>`;
    
    document.getElementById('orderList').innerHTML = orderData;
}

