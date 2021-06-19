//set cart variable in local storage (array of objects)
if(localStorage.cart) {
    console.log('current cart: ' + localStorage.getItem("cart"));
} else {
    localStorage.setItem("cart", JSON.stringify([]));
    // console.log('set cart to:' + JSON.parse(localStorage.getItem("cart")));
}

//set cartTotal variable in local storage (integer)
if(localStorage.cartTotal) {
    console.log('current cart total: ' + localStorage.getItem("cartTotal"));
} else {
    localStorage.setItem("cartTotal", 0);
}

//select DOM elements and add click events (detail page buttons)
let pdfButton = document.getElementById("pdf");
if(pdfButton !== null){
    pdfButton.addEventListener("click", incrementCart);
}
let origButton = document.getElementById("orig");
if(origButton !== null){
    origButton.addEventListener("click", incrementCart);
}
let printButton = document.getElementById("print");
if(printButton !== null){
    printButton.addEventListener("click", incrementCart);
}
let confirm = document.getElementById("addedMessage");


//select DOM elements and add click events (site wide cart icons)
let cartIcon = document.getElementById("cart-icon");
let cartNumber = document.getElementById("cart-number");
cartNumber.innerText = localStorage.getItem("cartTotal");
cartIcon.addEventListener("click", displayCart);
cartNumber.addEventListener("click", displayCart);
//DOM elements click events on cart menu
let clearCart = document.getElementById("clear");
clearCart.addEventListener("click", clearCartStorage);

function clearCartStorage() {
    localStorage.setItem("cart", JSON.stringify([]));
    localStorage.setItem("cartTotal", 0);
    cartNumber.innerText = localStorage.getItem("cartTotal");
    document.getElementById("checkoutButton").classList.add("hidden");
    console.log("Cart cleared: " + localStorage.getItem("cart") + localStorage.getItem("cartTotal"));
}
//toggle visibility of cart
function displayCart() {
    let cartDisplay = document.getElementById("cart");
    cartDisplay.classList.toggle("hidden");
    if(localStorage.getItem("cartTotal") > 0) {
        document.getElementById("checkoutButton").classList.remove("hidden");
    }
}

//add clicked product to cart array and increase cart total (int) by 1
function incrementCart(e) {
    let prodId = getQuery();
    let format = e.target.innerText;
    let cartNum = parseInt(localStorage.getItem("cartTotal")) + 1;
    cartNumber.innerText = cartNum;
    let cart = [];
    cart = JSON.parse(localStorage.getItem("cart")) || [];
    cart.push({id: prodId, format: format});
    // console.log('added cart:' + JSON.stringify(cart));
    localStorage.setItem("cart", JSON.stringify(cart));
    localStorage.setItem("cartTotal", cartNum);
    // console.log('new session cart: ' + localStorage.getItem("cart"));
    confirm.classList.remove("hidden");
    document.getElementById("checkoutButton").classList.remove("hidden");
    setTimeout(function(){confirm.classList.add("hidden")}, 3000);
    return;
}

//if there's a filter OR id, return its value
function getQuery(){
    let query = window.location.search;
    let params = new URLSearchParams(query);
    if(params.has("filter")){
        return params.get("filter");
    } else if(params.has("id")) {
        return params.get("id");
    } else {
        return;
    }
}

//check data type and value > 0 of integer
function cleanInt(value) {
    if(Number.isInteger(value) === true) {
        console.log('true');
    } else {
        console.log('false');
        return 0;
    }
    if (value < 0) {
        return 0;
    } else {
        return value;
    }
}
