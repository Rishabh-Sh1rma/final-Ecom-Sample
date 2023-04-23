<?php

// Create connection
// $con =mysqli_connect('localhost', 'root', '','site');
// if(isset($_POST['sb']))

// $con =mysqli_connect('localhost', 'root', '','site');
// if(isset($_POST['sb']))
// {
//     $username=$_POST['username'];
//     $Email=$_POST['Email'];
//     $paswd=$_POST['paswd'];
//     $confirmpaswd=$_POST['confirmpaswd'];
//   $sql = "INSERT INTO  signupb(username, Email,paswd,confirmpaswd) VALUE('$username, $Email, $paswd ,$confirmpaswd');";
//   $run = mysqli_query($con, $sql);}


  $username=$_POST['username'];
$Email=$_POST['Email'];
$paswd=$_POST['paswd'];
$confirmpaswd=$_POST['confirmpaswd'];

$conn = new mysqli('localhost','root','','site');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
  $sql = $conn->prepare("INSERT INTO signupb(username, Email,paswd,confirmpaswd)
  VALUES (?,?,?,?)");
  $sql->bind_param("ssss",$username,$Email,$paswd,$confirmpaswd);
  
  if($paswd==$confirmpaswd){
    $sql->execute();
    echo "regitration done successfully!";
    header("Location:login.php");
    die();
    $sql->close();
  
     $conn->close();
  }
  else{
    echo "password dosen't match!";}}


?>












 