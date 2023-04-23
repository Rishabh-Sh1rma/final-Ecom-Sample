<?php
$username=$_POST['username'];
$paswd=$_POST['paswd'];

$conn = new mysqli('localhost','root','','site');
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql =  $conn->prepare("SELECT * FROM signupb Where username = ? ");
$sql->bind_param("s",$username);
$sql->execute();
$sql_result = $sql->get_result();

// echo "<link rel='stylesheet' type='text/css' href='sapribha.css' />";



if ( $sql_result -> num_rows > 0) {
  // output data of each row
  $data = $sql_result->fetch_assoc();
 if($data['paswd']===$paswd){
    echo "login successfully!";
    // session_start();
    // $_SESSION['loggedin']=true;
    // $_SESSION['user_name']=$username;
    header("Location:index.php");
    die();
    
    
  }else{
    echo '<script>alert("invalid username or password")</script>';
  }

  // if(session_destroy()==true){
  //   echo '<script>alert("your account has been logged out!")</script>';
  // }
} 
mysqli_close($conn);



?>  