<?php
$Fname=$Lname=$gender=$email=$number=$country=$state=$password="";
$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$number = $_POST['number'];
$country = $_POST['country'];
$state = $_POST['state'];
$password = $_POST['password'];

//nikesh ko code
$server='localhost';
$username='root';
$pass='';


//Connecting to the server
$conn=mysqli_connect($server,$username,$pass);

if(!$conn){
  die("Connection failed");
}

//Creating database if not exists
$sql="CREATE DATABASE IF NOT EXISTS  Musicstore";

$result=mysqli_query($conn,$sql);
if(!$result){
    die("Database creation failed");
}

//Connecting to the database
 //mysqli_select_db() function select which database to connect with
mysqli_select_db($conn,'Musicstore');

//Creating table if not exists
$st="CREATE TABLE IF NOT EXISTS Signup(
id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Fname VARCHAR(30) NOT NULL,
Lname VARCHAR(30) NOT NULL,
gender VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
number INT(30) NOT NULL,
country VARCHAR(30) NOT NULL,
state VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL

)";

$resultT=mysqli_query($conn,$st);
if(!$resultT){
    die("Table creation failed");
}

$server='localhost';
$username='root';
$pass='';
$dbName='Musicstore';


//Connecting to the server
$conn=mysqli_connect($server,$username,$pass,$dbName);

if(!$conn){
  die("Connection failed");
}

$sqlI="SELECT * FROM Signup WHERE Fname='$Fname' OR password='$password'";
$result=mysqli_query($conn,$sqlI);

//to check whether the enter credentials are already been used or not 
 $row=mysqli_num_rows($result);
 if($row==1){
    echo "Duplicated data"."<br>";
    header("Location:login.php");
 }
 else{
    $sqlI="INSERT INTO Signup(id,Fname,Lname,gender,email,number,country,state,password)
    VALUES('','$Fname','$Lname','$gender', '$email','$number','$country','$state','$password')";

    $resultC=mysqli_query($conn,$sqlI);

    // $sqlC="SELECT * FROM Signup WHERE email='$email' AND password='$password'";

    // $result=mysqli_query($conn,$sqlC);

    if($resultC){
    echo "data insertion successful";
        }
    }
//yeta samma




//code to check this variable should not be empty
// if (!empty($Fname) ||!empty($Lname) || !empty($gender)|| !empty($Email) || !empty($number) || !empty($country) || !empty($state) || !empty($password)){
// #code...
// }else{
//     echo "All field are required";
//     die();
// }

//Connecting to the database
// $host = "localhost";
// $dbusername = "root";
// $dbpassword = "";
// $dbname = "Musicstore";

//Create a connection
// $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

//database connection success or not
// if(mysqli_connect_error()){
// die('Connect Error ('.mysqli_connect_errno().')'. mysqli_connect_error());
// }
// else{
    // echo "Connection successful";
    //inserting data using MySQL into table
//     $SELECT = "SELECT email from register where email = ? Limit 1";
//     $INSERT = "INSERT INTO register (FName, LName, Gender, Email ,Number, Country, State, Password) VALUES (?,?,?,?,?,?,?,?)";
//     // $result = mysqli_query($conn, $Insert); 

// //prepare statement
// $stmt = $conn->prepare($SELECT);
// $stmt->bind_param("s", $email);
// $stmt->execute();
// $stmt->bind_result($email);
// $stmt->store_result();
// $rnum = $stmt->num_rows;

// if($rnum==0){
//     $stmt->close();

//     $stmt = $conn->prepare($INSERT);
//     echo $Fname . $Lname . $number;
//     $stmt->bind_param("ssssssss",$FName, $LName, $Gender, $email ,$Number, $Country, $State, $Password);
//     $stmt->execute();
//     echo "New record inserted successfully";
// }else{
//     echo"Someone has already registed using this email";
// }
// $stmt->close();
// $conn->close();
// }
?>