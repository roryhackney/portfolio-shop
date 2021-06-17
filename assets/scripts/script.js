//detail page code
if(window.location.pathname === '/detail.php'){
    if(localStorage.cart) {
        console.log('current cart: ' + localStorage.getItem("cart"));
    } else {
        localStorage.setItem("cart", JSON.stringify([]));
        // console.log('set cart to:' + JSON.parse(localStorage.getItem("cart")));
    }

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
    let cartIcon = document.getElementById("cart-icon");
    let cartNumber = document.getElementById("cart-number");
    cartIcon.addEventListener("click", displayCart);
    cartNumber.addEventListener("click", displayCart);

    let confirm = document.getElementById("addedMessage");

    function displayCart() {
        console.log("DISPLAY");
        let cartDisplay = document.getElementById("cart");
        cartDisplay.classList.toggle("hidden");
    }

    function incrementCart(e) {
        console.log("ADDITEM");
        let prodId = getQuery();
        let format = e.target.innerText;
        cartNumber.innerText = parseInt(cartNumber.innerText) + 1;
        let cart = [];
        cart = JSON.parse(localStorage.getItem("cart")) || [];
        cart.push({id: prodId, format: format});
        // console.log('added cart:' + JSON.stringify(cart));
        localStorage.setItem("cart", JSON.stringify(cart));
        // console.log('new session cart: ' + localStorage.getItem("cart"));
        confirm.classList.toggle("hidden");
        setTimeout(function(){confirm.classList.toggle("hidden")}, 4000);
        return;
    }
} //end detail page code

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
