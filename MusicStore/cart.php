<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="cart n purchasee.css">
    <script src="cart n purchase.js" async></script>
    <script src="cart.js"></script>
</head>
<body>
    <style>
        .cart-item-title{
    display:flex;
    margin-top: -8%;
margin-left: 22%;
        }
.cart-price{
    display: flex;
margin-top: -4%;
margin-left: 44%;
}
.item-titlee{
    margin-left: 25%;
    font-family: cursive;
    font-size: 16px;
    text-decoration: underline;
}

    </style>

    <nav class="nav-bar">
        <a class="nav-btns" href="website.php">Home</a>
        <a class="nav-btns" href="instruments.php"> Instruments</a>
        <a class="nav-btns" href="">About us</a>
        <div class="cart">
        <a class="c" href="cart.php"><i class="fas fa-cart-plus"></i><span>0</span></a>
</div>
     
     </nav>


    <div class="cart-main-box">
        <h2 class="cart-heading">CART</h2>
        <div class="item-heading-column">
            <span class="item-heading" >Item</span>
            <span class="item-titlee" >Title</span>
            <span class="item-price" >Price</span>
            <span class="item-quantity" >Quantity</span>
        </div>
        <div class="cart-items">
            <div class="cart-row">
                <div class="cart-item cart-column">
                    <img class="cart-image" src="pic/tabla1.jpg" alt="#">
                    <span class="cart-item-title">Tabla</span>
                    <span class="cart-price" >Rs 40000</span>
                    <span><input class="quantity-cart" type="number" value="2"></span>
                    <span><button class="remove-cart" type="button">Remove</button></span>
                    </div>
            </div>

                <div class="cart-row">
                <div class="cart-item cart-column">
                    <img class="cart-image" src="pic/tabla2.png" alt="#">
                    <span class="cart-item-title">Digital Tabla</span>
                    <span class="cart-price">Rs 33450</span>
                    <span><input class="quantity-cart" type="number" value="2"></span>
                    <span><button class="remove-cart" type="button">Remove</button></span>
                    </div>
                </div>

                </div>
            <br>
        <div class="cart-total">
            <span class="cart-total-title">Total Price:  </span>
            <span class="cart-total-price"></span>

        </div>
    </div>
   
    <button class="purchase"><a class="purchase-checkout" href="customer.php">Purchase</a> </button>
    
</body>
</html>