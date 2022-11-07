if(document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded', ready)
}   else{
    ready()
}

function ready(){
//to remove the product items from the cart
var removebtn = document.getElementsByClassName("remove-cart")
console.log(removebtn)
for(var i = 0; i < removebtn.length; i++){
    var button = removebtn[i]
    button.addEventListener('click', removeCartItem)
}

var quantityInputs = document.getElementsByClassName('quantity-cart')
for(var i = 0; i < removebtn.length; i++){
var input = quantityInputs[i]
input.addEventListener('change', quantityChanged)
}
var addToCartButtons = document.getElementsByClassName('add-too-cart');
for(var i = 0; i < addToCartButtons.length; i++){
var button = addToCartButtons[i]
button.addEventListener('click', addToCartClicked)
}
}

function removeCartItem(event){
    var buttonClicked =  event.target
    buttonClicked.parentElement.parentElement.remove()
    updatecartTotal();
}


function quantityChanged(event){
    var input = event.target
    if(isNaN(input.value) ||input.value <= 0){
        input.value = 1
    }
    updatecartTotal(); 
}

function addItemToCart(title, price, imagesrc){
    var addcartRow = document.createElement('div');
    // cartRow = document.add('cart-row');
    addcartRow.classList.add('cart-row');
    const cartItems = document.getElementsByClassName('cart-items')[0]
    var cartRowContents = `
    <div class="cart-row">
    <div class="cart-item cart-column">
        <img class="cart-image" src="${imagesrc}" alt="#">
        <span class="cart-item-title">${title}</span>
        <span class="cart-price">${price}</span>
        <span><input class="quantity-cart" type="number" value="2"></span>
        <span><button class="remove-cart" type="button">Remove</button></span>
        </div>
    </div>
    `
    addcartRow.innerHTML = cartRowContents;
    cartItems.append(addcartRow);
}
function addToCartClicked(event){
    var button = event.target;
    var shopItem = button.parentElement.parentElement;
    var title = shopItem.getElementsByClassName('title-inst')[0].innerText;
    var price = shopItem.getElementsByClassName('price')[0].innerText;
    var imagesrc = shopItem.getElementsByClassName('t1')[0].src;
    console.log(title,price, imagesrc);
    addItemToCart(title, price, imagesrc);
    // console.log("working");
}



function updatecartTotal(){
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    var total = 0
    for(var i = 0; i < cartRows.length; i++){
var cartRow = cartRows[i]
var priceElement = cartRow.getElementsByClassName('cart-price')[0]
var quantityElement = cartRow.getElementsByClassName('quantity-cart')[0]
// console.log(priceElement, cartRows);
var price =parseFloat(priceElement.innerText.replace('Rs', ''))
var quantity = quantityElement.value
total = total + (price * quantity)
    }
    total = Math.round(total * 100)/ 100
    document.getElementsByClassName('cart-total-price')[0].innerText = 'Rs ' + total
}