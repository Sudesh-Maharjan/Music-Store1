<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/a7b1c41974.js" crossorigin="anonymous"></script>
   
</head>
<body class="login-page">

    <!-- nav baar -->
<nav class="nav-bar">
    <a class="nav-btns" href="website.php">Home</a>
    <a class="nav-btns" href="instruments.php"> Instruments</a>
    <a class="nav-btns" href="Aboutus.php">About us</a>
    <div class="cart">
    <a class="c" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
</div>
 
 </nav>
 <div class="search">
 <input type="text" name="search" class="sbar">
 <button class="btn-search">Search</button>
 </div>
 <!-- login -->
 <form action="log-result.php" method ='POST'>
    <div class="signup-login">
            <h2 class="h2">Login</h2>
            <div class="email" ><div class="signup-icon"><i class="fas fa-envelope"></i></div><input class="input" type="input" name='user_name'></div>
            
            <?php if(isset($username_error)) { ?>
              <p class='login_error'> <?php echo $username_error ?></p>
            <?php } ?>
            
            <div class="password" ><div class="signup-icon"><i class="fas fa-lock"></i></div><input class="input" type="password"placeholder="password" name ='password'></div>
            
            <?php if(isset($password_error)) { ?>
              <p class='login_error'> <?php echo $password_error ?></p>
            <?php } ?>
            <div class="register"><button class="register-login">Login</button></div>
    </div>
    </form>
</body>
</html>