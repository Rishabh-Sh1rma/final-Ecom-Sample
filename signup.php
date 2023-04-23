





<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>



<section id = "header" >
        <a href="index.html"><img src="photos/bg1.png" length="50" width="100" class = "logo" alt=""></a>
            <div class="contioner">
            <ul id = "navbar">
                <li><a class="active" href="index.php"> HOME</a></li>
                <li><a href="shop.php">  SHOP</a></li>
                <li><a href="login.php" class="lgn-bt">LOGIN</a></li>
                <!--<li><a href="login.html" class="lgn-bt"> LOGIN</a></li>-->
                <li><a href="about.php">  ABOUT</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fas fa-shopping-bag"></i></a></li>
                  <a href="#" id="close"><i class="fas fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
          <a href="cart.php"><i class="fas fa-shopping-bag"></i></a>
          <i id="bar" class="fas fa-outdent"> </i>
        </div>
    </section>

    <div class="container">
        <h1>Sign up</h1>
        <form action="connect.php" method="post">
            <input type="text" placeholder="Username" name="username" required>
            <input type="email" placeholder="Email" name="Email" required>
            <input type="password" placeholder="Password" name="paswd" required>
            <input type="password" placeholder="Confirm Password" name="confirmpaswd" required>
            <input type="submit" value="Sign up">
        </form>
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
    <style>
        body {
    background-color: #f3f3f3;
    font-family: Arial, sans-serif;
}

.container {
    background-color: #fff;
    width: 300px;
    padding: 20px;
    margin: 0 auto;
    margin-top: 100px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

h1 {
    text-align: center;
}

form input {
    display: block;
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

form input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    cursor: pointer;
}

form input[type="submit"]:hover {
    background-color: #0056b3;
}

p {
    text-align: center;
    margin-top: 10px;
}

p a {
    color: #007bff;
    text-decoration: none;
}

    </style>

<section id="newsletter" class="sectionp1  sectionm1">
    <div class="newstext">
        
        <h3>sign-up for Newsletters</h3>
        <p>Get E-mail updates about our latest shop and <span>Speical Offers</span></p>
    </div>
    <div class="form">
        <form action="newslettercon.php" method="post">
        <input type="text" placeholder= "Your email address" id="email" name="email"><br>
        <button type="submit" class="normal" name="sb">Sign Up</button><br>
    </form>
    </div>

</section>
<footer class="sectionp1">
<div class="col">
    <img class="logo" src="photos/bg1.png"length="150" width="150" alt="">
    <h4>Contact</h4>
    <p><strong>Address: </strong>2583-84, ghee walo ka rasta, Johri Bazar, Jaipur</p>
    <p><strong>phone: </strong>(+91) 9784352249,9664078593</p>
    <p><strong>hours: </strong>10:00 to 18:00, Mon-Sat</p>
    <div class="follow">
        <h4>Follow Us</h4>
        <div class="icon">
            <i class = "fab fa-facebook-f"></i>
            <i class = "fab fa-instagram"></i>
            <i class = "fab fa-twitter"></i>
            <i class = "fab fa-pinterest-p"></i>
            <i class = "fab fa-youtube"></i>
        </div>  
    </div>
</div>

        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Privacy policy</a>
            <a href="#">Delivery Information</a>
            <a href="#">Terms and Conditions</a>
            <a href="#">Contact us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign in</a>
            <a href="#">View Carta</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track my order</a>
            <a href="#">Help</a>
        </div>
        
        <div class="col install">
            <h4>Install app</h4>
            <p>From app store or Google Play</p>
            <div class="row">
                <img src="photos/apple-app-store-logo.jpg"length="100" width="100" alt="">
                <img src="photos/Google-Play-Logo.png" length="100" width="120" alt="">
            </div>
            <h4>Secured payment gateways</h4>
            <img src="photos/gt.jpeg" length="300" width="300" alt="">
        </div>
        
        <div class="copywright">
            <p>©2023 Shree Ji Gems Limited - Registered in India - Registered office: 2583-84, ghee walo ka rasta, Johri Bazar, Jaipur Phone number: +91 9664078593</p>
        </div>
</footer>

<?php

?>

<?php

// Create connection
// $con =mysqli_connect('localhost', 'root', '','site');
// if(isset($_POST['sb']))
// {
//     $username=$_POST['username'];
//     $Email=$_POST['Email'];
//     $paswd=$_POST['paswd'];
//     $confirmpaswd=$_POST['confirmpaswd'];
//   $sql = "INSERT INTO  signupb(username, Email,paswd,confirmpaswd) VALUE('$username, $Email, $paswd ,$confirmpaswd');";
//   $run = mysqli_query($con, $sql);}

?>

</body>
</html>