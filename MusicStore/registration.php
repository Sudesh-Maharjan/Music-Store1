<?php
//server
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$gender = $_POST['gender'];
$Email = $_POST['Email'];
$number = $_POST['number'];
$country = $_POST['country'];
$state = $_POST['state'];
$password = $_POST['password'];

//Connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "musicstore";

//Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

//database connection success or not
if(!$conn)
{
    die("Sorry could not connect". mysqli_connect_error());
}
else{
    // echo "Connection successful";
    $sql = "INSERT INTO `music store` (`First Name`, `Last Name`, `Gender`, `Email`, `Mobile Number`, `Country`, `State`, `Password`) VALUES ('$Fname', '$Lname', '$gender', '$Email', '$number', '$country', '$state', '$password')";
    $result = mysqli_query($conn, $sql);


if($result){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your entry has been submitted successfully!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>';
}
else{
    // echo "dffd ---> " .mysqli_error($conn);
    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry was not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
          </div>';
        }

    }
}

// //creating a database in admin
// $sql = "CREATE DATABASE MusicStore";
// mysqli_query($conn, $sql);
//}
?>