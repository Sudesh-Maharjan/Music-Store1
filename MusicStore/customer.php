<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}
.row {
  display: -ms-flexbox; 
  display: flex;
  -ms-flex-wrap: wrap; 
  flex-wrap: wrap;
  margin: 0 16px;
  width: 50%;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

/* .col-50 {
  width: 50%;
} */

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
  width: 50%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input {
  width: 150%;
  margin-bottom: 10px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 7px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn-checkout {
  background-color: #0486aa;
  color: white;
  padding: 12px;
  margin: 10px 53px;
  border: none;
  width: 80%;
  border-radius: 6px;
  cursor: pointer;
  font-size: 17px;
}

.btn-checkout:hover {
  background-color: #106a74;
}
.checkout-btn{
    color:white;
    text-decoration:none;
}
a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}
form{
    margin-left: 33%;
width: 35%;
margin-top: 3%;
background-color: #d8d2d2;
border-radius: 7px;

}
/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

    <nav class="nav-bar">
        <a class="nav-btns" href="website.php">Home</a>
        <a class="nav-btns" href="instruments.php"> Instruments</a>
        <a class="nav-btns" href="">About us</a>
        <div class="cart">
        <a class="c" href="cart.php"><i class="fas fa-cart-plus"></i><span>0</span></a>
</div>
     
     </nav>


      <form action="">
      
        <div class="row">
          

          <div class="col-50">
            <h3>Your Details</h3>
            <br>
            <br>
            <label >Full Name</label>
            <input type="text" name="Name" placeholder="Name">

            <label >Phone number</label>
            <input type="text" name="Number" placeholder="xxxxxxxxxx">

            <label >Province</label>
            <input type="text" name="Province" placeholder="Province">

            <label >City</label>
            <input type="text" name="City" placeholder="City">

            <label >Area</label>
            <input type="text" name="Area" placeholder="Area">

            <label >Address</label>
            <input type="text" name="Address" placeholder="Address">


            
            <!-- <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Month"> -->
            <!-- <div class="row"> -->
              <!-- <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="xxxx">
              </div> -->
              <!-- <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="xxx">
              </div> -->
            <!-- </div> -->
          </div>
        

        </div>
        <button type="submit" class="btn-checkout" ><a class="checkout-btn"href="checkout.php">Continue to checkout</a>   
</button>
      </form>
    </div>
  </div>
  <div class="col-25">
  </div>
</div>

</body>
</html>
