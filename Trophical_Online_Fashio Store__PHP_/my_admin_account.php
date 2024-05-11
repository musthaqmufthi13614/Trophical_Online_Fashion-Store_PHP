<?php

session_start();


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name= "viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-compatible" content="ie=edge">

        <!--small png extension icon comes to the title head bar-->  
        <link rel="icon" href="img/Logo/logo_test1_1.png" type="image/png">  

        <title> Admin Panel  - Trophical</title>

        <link rel="stylesheet" href="css/bootstrap.css">  

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="css/styles.css">

 
        <style>

        #my_account_icon{
            width: 4.7rem;
            height:4.7rem;
            border: 2px solid rgb(164, 164, 187);
            color: rgb(235, 233, 242);
            

        }

        #my_account_icon:hover{
            color: var(--yellow-solid);
            border: 2px solid rgb(242, 171, 36);
            background-color: rgb(18, 101, 140);
    
        }

        


        </style>



      
                
        
    </head>

    <body>
        <header class="header">
            <div class="container">
                <nav class="nav">
    
                    <a href="my_admin_account.php" class="logo">
                        <img src="img/Logo/logo_test1_1.png" alt="Logo not Found">
                    </a>
                
                    <div class="hamburger-menu">
                        <i class="fa fa-bars"></i>
                        <i class="fa fa-times"></i>
                    </div>
    
                <ul class="nav-list">

                        <!-- <li class="nav-item">
                                <a href="index.php" class="nav-link">Home</a>
                        </li> -->
                        
                        <!-- <li class="nav-item">
                                <a href="products.php" class="nav-link">Products</a>
                        </li> -->
                        
                        <!-- <li class="nav-item">
                                <a href="cart.php" class="nav-link">Cart</a>
                        </li> -->

                        <li class="nav-item">
                                
                                <a href="my_admin_account.php" class= "sm-link" id = "my_account_icon"> 

                                <i class="fa fa-user"></i></a>

                        </li>

                        <!-- <li class="nav-item">
                                <a href="contact.html" class="nav-link">Contact</a>
                        </li> -->
                                            
                </ul>
    
                </nav>         
            </div>
        </header>

    <br><br><br><br><br>
<!-- /////////////////////////////////////////////////////// -->
    




<h1 style = "padding:20px; line-height: 1.4">
    Welcome <b>
    
        <?php 
                echo $_SESSION['username'] ;
                
        ?> </b> You're an Admin or General Manager on the executive Level,  
<!-- <br> -->
        <?php 
                // echo $_SESSION['password'] ;
               
        ?>
<!-- <br> -->
        <?php 
                
                // echo $_SESSION['userid'];
        ?>
    <br>
        you're always being informed about new requsted updates, products details and prices, Discounts,
        Policy and terms and conditions via your email, 
         <b>
        <?php 
                
                echo $_SESSION['useremail'];
        ?>
        </b> , then as an admin you should be able to control them through the Admin panel of this website.


    <br>
        
    
  </h1>    






<!-- /////////to view customer info /////////// -->
<div style = "padding-left:20px;" >
        <a href = "admin_customers.php">

        <button type = "button" id = "er-snup-btn" class="btn btn-success" style = "text-transform:initial" >       
                          View Customers
                    <i style = "margin-left:10px; font-size:30px;" class = "fa fa-group"></i>
        </button>

        </a>
 
    </div>

    <br>

<!-- /////////CRUD on Products /////////// -->
<div style = "padding-left:20px; ">
        <a href = "admin_products.php">

        <button type = "button" id = "er-snup-btn" class="btn btn-info" style = "text-transform:initial" >       
                         Get Products
                    <i style = "margin-left:10px; font-size:30px;" class = "fa fa-mail-reply-all"></i>
        </button>

        </a>
 
    </div>

    <br>


    <!-- /////////LOGOUT /////////// -->
  
  <div style = "padding-left:20px;">
        <a href = "logout.php">

        <button type = "button" id = "er-snup-btn" class="btn btn-danger" style = "text-transform:initial" >       
                         Logout 
                    <i style = "margin-left:10px; font-size:30px;" class = "fa fa-power-off"></i>
        </button>

        </a>
       
    </div>







<!-- ///////////////////////////////////////////////////////// -->
<br> <br> <br> <br> <br> 
        

   <!-- Footer section starts here -->
   <footer class="footer" style="background-image: url('img/Logo/logo_test3_2.png');">
    <div class="container">
        <div class="footer-content">
            <div class="footer-content-brand">
                <a href="my_admin_account.php" class="logo">
                    <img class="logo-image" src="img/Logo/logo_test1_2.png" alt="image not found">
                </a>
                <br><br>
                    <div class="paragraph" >
                        
                    
                    <p><b>Trophical Code is one of the Best & well-reputed Stores for Clothing in Sri lanka, which partnership with Louis Vuitton which provides supreme Branded Products and facilities
                        for their customers with very attractive Prices.</b><br><br>
                        <b>Visit us at:<br>
                        Trophical Code partnership with Louis Vuitton <br>
                        Atlanta Lenox Square,<br>
                        3393, Peachtree Rd, Level 3,<br>
                        Atlanta, GA 30326,<br>
                        USA</b> <br><br>
                        <b>Contact us:</b><br><br>
                        <span>
                                <img src="img/phone.png" alt="phone number">
                                    <a href="tel:0756499655 " style="margin-left: 20px; font-weight: bold;" class="footer-link2">
                                       Contact Number :   0756499655 </a>
                                    
                        </span> <br><br>
                        
                        <span class="email-add"><img src="img/email.png" alt="email address">
                            <a href="mailto:musthaqmufthi13614@gmail.com" style="margin-left: 20px; font-weight: bold;" class="footer-link2">
                                musthaqmufthi13614@gmail.com </a>
                    
                        </span>

                    </p>
                    
                            
                    </div>
            </div>
            <div class="social-media-wrap">
                <h4 class="footer-heading"><b>Follow us</b></h4>
                <div class="social-media">
                            <!-- facebook and other social media links come under here... -->
                            <a href="https://web.facebook.com/LouisVuitton/?_rdc=1&_rdr"    class="sm-link"><i class="fa fa-facebook-square"></i></a>
                            <a href="https://www.instagram.com/louisvuitton/"               class="sm-link"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/company/louis-vuitton"        class="sm-link"><i class="fa fa-linkedin-square"></i></a>
                            <a href="https://www.youtube.com/user/LOUISVUITTON"             class="sm-link"><i class="fa fa-youtube-square"></i></a>
                            <a href="https://twitter.com/louisvuitton"                      class="sm-link"><i class="fa fa-twitter-square"></i></a>
                            <a href="https://www.pinterest.com/alilamb2345/louis-vuitton/"  class="sm-link"><i class="fa fa-pinterest-square"></i></a>


                        </div><br><br>
                       
               
            </div>
        </div>
    </div>

    <div class="footer-bot-wrapper">
        
            
                © 2020 <b> Trophical Code (PVT) Ltd. </b>  All Rights Reserved<br>
                Website Designed and Developed by <a href="mailto:musthaqmufthi13614@gmail.com" target="_blank" class="footer-link2">
                    <b> Musthaq Mufthi, Department of Computer Science - Harvard University </b></a>
            
            
    
    </div>
</footer>
        
    <!-- Footer section Ends here -->

        
        <script src="js/main.js"></script>
    </body>
</html>












