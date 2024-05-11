

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name= "viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-compatible" content="ie=edge">

        <!--small png extension icon comes to the title head bar-->  
        <link rel="icon" href="img/Logo/logo_test1_1.png" type="image/png">  

        <title> Account Login - Trophical</title>

        <link rel="stylesheet" href="css/bootstrap.css">  

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="css/styles.css">




        <!-- <style>
                div.gallery {
                  border: 1px solid #ccc;
                }
                
                div.gallery:hover {
                  border: 1px solid #777;
                }
                
                div.gallery img {
                  width: 100%;
                  height: auto;
                }
                
                div.desc {
                  padding: 15px;
                  text-align: center;
                }
                
                * {
                  box-sizing: border-box;
                }
                
                .responsive {
                  padding: 0 6px;
                  float: left;
                  width: 24.99999%;
                }
                
                @media only screen and (max-width: 700px) {
                  .responsive {
                    width: 49.99999%;
                    margin: 6px 0;
                  }
                }
                
                @media only screen and (max-width: 500px) {
                  .responsive {
                    width: 100%;
                  }
                }
                
                .clearfix:after {
                  content: "";
                  display: table;
                  clear: both;
                }

                /* trying for contact us details starts here */
                .contact-left-block {
                    float: left;
                    display: block;
                    width: 50%;
                    height: auto;
                }

                .contact-left-block p {
                    color: #7E7E7E;
                    display: inline;
                    /* float: left; */
                    font-size: 13px;
                    line-height: 20px;
                    /* margin-top: 24px; */
                    /* text-align: justify; */
                    clear: both;
                }

                .contact-left-block .heading-underline {
                    clear: both;
                    display: block;
                    float: left;
                    height: 1px;
                    border-bottom: #989898 1px solid;
                    width: 50%;
                    margin-top: 13px;
                }

                @media only screen and (max-width: 768px){
                .contact-left-block {
                    width: 100%;
                    }
                } -->
             <!-- trying for contact us details ends here  -->

             <!-- styles for reponsive contact info divs starts here     -->

            









             <!-- styles for reponsive contact info divs ends here     -->

        <!-- </style> -->
                
        
        <style>

            body{
            background : linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(img/landing_img/m5_1.jpg);
            /* background-size: cover; */
            /* background-position: center; */
            
            }


        </style>



    </head>

    <body>
        <header class="header">
            <div class="container">
                <nav class="nav">
    
                    <a href="index.php" class="logo">
                        <img src="img/Logo/logo_test1_1.png" alt="Logo not Found">
                    </a>
                
                    <div class="hamburger-menu">
                        <i class="fa fa-bars"></i>
                        <i class="fa fa-times"></i>
                    </div>
    
                    <ul class="nav-list">
                        

                        <li class="nav-item">
                            <a href="account.php" class="nav-link">Account</a>
                        </li>
                        
                        
                        <!-- <li class="nav-item">
                                <a href="contact.html" class="nav-link">Contact</a>
                        </li> -->

                    </ul>
    
                </nav>         
            </div>
        </header>


    <!-- the entire contents below to this break, belongs uniquely to the contact.html( contact page only>!) -->
<br> <br> <br> <br> <br> <br> <br> <br> <br> 
  
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 style = "color:#c4b8c4; font-size:30px;"> Login</h1>

                            <form action="validation.php" method="post" style = "color: grey">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name = "username" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name = "userpassword" class="form-control" required>
                                </div>
                                <button class="btn btn-primary" style = "text-transform:initial">Login</button>
                            </form>

                            <br>
                            <a href= "signup.php" style = "color:#c4b8c4; font-size:13px;"> Don't Have an Account? Register Here</a>
                            <br>
                            <a href= "admin_account.php" style = "color:grey; font-size:13px;"> Are you an Admin? Admin Login Here</a>

                        </div>
                    </div>
                </div>


    
<br> <br> <br> <br> <br> <br> <br> <br> <br> 
        

   <!-- Footer section starts here -->
   <footer class="footer" style="background-image: url('img/Logo/logo_test3_2.png');">
    <div class="container">
        <div class="footer-content">
            <div class="footer-content-brand">
                <a href="account.php" class="logo">
                    <img class="logo-image" src="img/Logo/logo_test1_2.png" alt="image not found">
                </a>
                <br><br>
                    <div class="paragraph" >
                        
                    
                    <p><b>Trophical Code is one of the Best & well-reputed Stores for Clothing in Sri lanka, which partnership with Louis Vuitton which provides supreme Branded Products and facilities
                        for their customers with very attractive Prices.</b><br><br>
                        <b>Visit us at:<br>
                        Trophical Code partnership with Louis Vuitton <br>
                        Atlanta Lenox Square,<br>
                        3393 Peachtree Rd Level 3<br>
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
