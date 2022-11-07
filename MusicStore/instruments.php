<!DOCTYPE html>
<html lang="en">
<head>
<title>Instrument</title>
    <link rel="stylesheet" href="styles.css">

    <script src="https://kit.fontawesome.com/a7b1c41974.js" crossorigin="anonymous"></script>
    <title>Instruments</title>
</head>
<body>

<!-- nav baar -->
<nav class="nav-bar">
  <!-- <a href="#" class="side-btn"><i class="fa-solid fa-alarm-plus"></i></a> -->
      <a class="nav-btns" href="website.php">Home</a>
      <a class="nav-btns" href="instruments.php"> Instruments</a>
      <a class="nav-btns" href="aboutus.php">About us</a>
      <div class="cart">
      <a class="c" href="cart.php"><i class="fas fa-cart-plus"></i><span>0</span></a>
  </div>
</nav>
<div class="search">
<input type="text" name="search" class="sbar">
<button class="btn-search">Search</button>
</div>

<!-- menu toggler -->

<div class="menu-btn">
  <button class="btn" data-id="All">All</button>
  <button class="btn" data-id="Tabla">Tabla</button>
  <button class="btn" data-id="Guitar">Guitar</button>
  <button class="btn" data-id="Keyboard">Keyboard</button>
</div>

<!-- instrument -->
    <div class="Instruments">
        <!-- containter -->
        <div class="container">
            <h2>Tabla</h2>
           <!-- box -->
           <div class="contains">
            <!-- <div class="tabla-img"> -->
                   <img class= "t1" src="pic/tabla1.jpg" alt="Tabla">
               <div class="detail-box">
                   <div class="title-inst">
                       <p> Tabla</p>
                    </div>
                   <a href="#" class="price">Price: Rs7500</a>
                   <br><button href="#" class="add-too-cart" > Add to cart</button>
               </div> 
            <!-- </div> -->
         </div>
 
 </div>
 
         </div>
   
</body>
<!-- <script src="cart.js"></script> -->
<script src="instrument.js"></script>
<script src="Menuu.js"></script>
<script src="cart n purchase.js"></script>
</html>