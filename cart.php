<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Cart</title>
</head>
<body>
<section id = "header" >
        <a href="index.html"><img src="photos/bg1.png" length="50" width="100" class = "logo" alt=""></a>
            <div class="contioner">
            <ul id = "navbar">
                <li><a  href="index.php"> HOME</a></li>
                <li><a href="shop.php">  SHOP</a></li>
                <li><a href="login.php" class="lgn-bt">LOGIN</a></li>
                <!--<li><a href="login.html" class="lgn-bt"> LOGIN</a></li>-->
                <li><a href="about.php">  ABOUT</a></li>
                <li  class="active" id="lg-bag"><a href="cart.php"><i class="fas fa-shopping-bag"></i></a></li>
                  <a href="#" id="close"><i class="fas fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
          <a href="cart.php"><i class="fas fa-shopping-bag"></i></a>
          <i id="bar" class="fas fa-outdent"> </i>
        </div>
    </section>


    <section id="page-header">
        <div class="slider">
            <div class="slider-images">
              <img src="https://wallpaperset.com/w/full/0/b/0/364488.jpg" alt="Image 1">
              <img src="https://cdn.pixabay.com/photo/2015/03/09/13/56/colorful-665704__340.jpg" alt="Image 2">
              <img src="https://images.unsplash.com/photo-1613843351058-1dd06fda7c02?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Z2Vtc3RvbmV8ZW58MHx8MHx8&w=1000&q=80" alt="Image 3">
              <img src="https://cdn.pixabay.com/photo/2014/05/10/18/51/purpurit-341399__340.jpg" alt="Image 4">
            </div>
            <div class="slider-buttons">
              <button class="prev-btn">Prev</button>
              <button class="next-btn">Next</button>
            </div>
          </div>
       </section>

      <section id="cart" class="sectionp1">
        <table width = "100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>image</td>
                    <td>product</td>
                    <td>price</td>
                    <td>quantity</td>
                    <td>subtotal</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><i class="fas fa-times-circle"></i></td>
                    <td><img src="https://wallpaperset.com/w/full/0/b/0/364488.jpg" alt=""></td>
                    <td>Cytrien Amethyist</td>
                    <td>$780</td>
                    <td><input type="num" value="1"></td>
                    <td>$780</td>

                    
                </tr>
                <style>
                    #cart table{
                        width: 100%;
                        border-collapse: collapse;
                        table-layout: fixed;
                        white-space:  nowrap;
                    }
                    #cart table img{
                        width: 70px;
                    }
                    #cart table td:nth-child(1){
                        width: 100px;
                        text-align: center;
                    }
                    
                    #cart table td:nth-child(2){
                        width: 150px;
                        text-align: center;
                    }
                    #cart table td:nth-child(3){
                        width: 250px;
                        text-align: center;
                    }
                    #cart table td:nth-child(4)
                    #cart table td:nth-child(5)
                    #cart table td:nth-child(6){
                        width: 150px;
                        text-align: center;
                    }
                    #cart table td:nth-child(5) input{
                        width: 70px;
                        padding: 10px 5px 10px 15px ;
                    }
                    
                    
                    


                </style>
            </tbody>

        </table>

      </section> 

    
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
    <script src="script.js"></script>
</body>
</html>