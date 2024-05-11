<?php

    session_start();

    if( !isset($_SESSION['username']) ){

        header('location:account.php');

    }

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

        <title>Home - Trophical  </title>

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

                <a href="index.php" class="logo">
                    <img src="img/Logo/logo_test1_1.png" alt="Logo not Found">
                </a>
            
                <div class="hamburger-menu">
                    <i class="fa fa-bars"></i>
                    <i class="fa fa-times"></i>
                </div>

                <ul class="nav-list">
                    <li class="nav-item">
                            <a href="index.php" class="nav-link">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="products.php" class="nav-link">Products</a>
                    </li>

                    <li class="nav-item">
                        <a href="cart.php" class="nav-link">Cart</a>
                     </li>

                     <li class="nav-item">
                        
                        <a href="my_account.php" class= "sm-link" id = "my_account_icon"> 

                            <i class="fa fa-user"></i></a>

                     </li>
                    
                    <li class="nav-item">
                            <a href="contact.html" class="nav-link">Contact</a>
                    </li>
                  
                    
                </ul>

            </nav>         
        </div>
        
    </header>


    <!-- the entire contents below to this break, belongs uniquely to the index.php( index-home page only>!) -->
    <main>
    
        <!-- main startup HQ image-background body starts here..! -->
       <div class="hero" style="background: url('./img/landing_img/m5_1.jpg') center no-repeat"; >
           <div class="container">
               <div class="main-heading">
                    <h1 class="title">Discover</h1>
                    <h2 class="subtitle">Visit and Get Your Outfit</h2>
                </div>
                <a href="products.php" class="btn btn-gradient">Check it out for more Products !
                    <span class="dots"><i class="fa fa-ellipsis-h"></i></span>
                </a>  
            </div>     
        </div>
        <!-- main startup HQ image-background body Ends here..! -->

      

        <section class="hotels">
                <div class="container">
                    <h5 class="section-head">
                        <span class="heading">Explore Trophical's Trending Brands</span>
                        <span class="sub-heading">Most top Searched, expensive Costumes in Trophical's</span>
                    </h5>
                    <div class="grid">
                        <div class="grid-item featured-hotel" style="height: 260px; width:390px;">
                            <img src="img/watches/w10.jpg" alt="image not found" class="hotel-image" style="height: 256px; width:384px;">
                            <h5 class="hotel-name">Swatch Persian X12Y21 </h5>
                            <span class="hotel-price">Starting From Rs.95,000/- Special Edition</span>
                            <div class="hotel-rating">
                                <i class="fa fa-star rating"></i>
                                <i class="fa fa-star rating"></i>
                                <i class="fa fa-star rating"></i>
                                <i class="fa fa-star rating"></i>
                                <i class="fa fa-star rating"></i>

                            </div>
                                 <div>
                                        <!-- <a href="account.php" class="btn btn-gradient"> Buy now
                                            <span class="dots"><i class="fa fa-ellipsis-h"></i></span>
                                        </a> -->
                                        <a href="products_watch.php" class="btn btn-gradient"> See more
                                            <span class="dots"><i class="fa fa-ellipsis-h"></i></span>
                                        </a>
                                </div>
                        </div>

                        <div class="grid-item featured-hotel"  style="height: 260px; width:390px;">
                                <img src="img/Shoes/sh7.jpg" alt="image not found" class="hotel-image" style="height: 256px; width:384px;">
                                <h5 class="hotel-name">Louis Vuitton - Check Wood </h5>
                                <span class="hotel-price">From Rs.55,000/- 2020-Mid year</span>
                                <div class="hotel-rating">
                                    <i class="fa fa-star rating"></i>
                                    <i class="fa fa-star rating"></i>
                                    <i class="fa fa-star rating"></i>
                                    <i class="fa fa-star rating"></i>
                                    <i class="fa fa-star rating"></i>
    
                                </div>
                                    <div>
                                        <!-- <a href="account.php" class="btn btn-gradient"> Buy now
                                            <span class="dots"><i class="fa fa-ellipsis-h"></i></span>
                                        </a> -->
                                        <a href="products_shoe.php" class="btn btn-gradient"> See more
                                            <span class="dots"><i class="fa fa-ellipsis-h"></i></span>
                                        </a>
                                    </div>
                            </div>

                            <div class="grid-item featured-hotel"  style="height: 260px; width:390px;">
                                    <img src="img/Sunglasses/sg4.jpg" alt="image not found" class="hotel-image" style="height: 256px; width:384px;">
                                    <h5 class="hotel-name"> RayBan M23N32 VIP </h5>
                                    <span class="hotel-price">From Rs.65,000/- Premium</span>
                                    <div class="hotel-rating">
                                        <i class="fa fa-star rating"></i>
                                        <i class="fa fa-star rating"></i>
                                        <i class="fa fa-star rating"></i>
                                        <i class="fa fa-star rating"></i>
                                        <i class="fa fa-star-half rating"></i>
                                        
        
                                    </div>

                                        <div>
                                            <!-- <a href="account.php" class="btn btn-gradient"> Buy now
                                                <span class="dots"><i class="fa fa-ellipsis-h"></i></span>
                                                
                                            </a>
                                             -->
                                            <a href="products_eyewear.php" class="btn btn-gradient"> See more
                                                <span class="dots"><i class="fa fa-ellipsis-h"></i></span>
                                        </a>
                                        </div>
                                </div>

                                <div class="grid-item featured-hotel"  style="height: 260px; width:390px;">
                                    <img src="img/Shirts/s9.jpg" alt="image not found" class="hotel-image" style="height: 256px; width:384px;">
                                    <h5 class="hotel-name"> Calvin Klein-Denim Shirt </h5>
                                    <span class="hotel-price">From Rs.18,000/- L.M.S</span>
                                    <div class="hotel-rating">
                                        <i class="fa fa-star rating"></i>
                                        <i class="fa fa-star rating"></i>
                                        <i class="fa fa-star rating"></i>
                                        <i class="fa fa-star rating"></i>
                                        <i class="fa fa-star-half rating"></i>
                                        
        
                                    </div>

                                        <div>
                                            <!-- <a href="account.php" class="btn btn-gradient"> Buy now
                                                <span class="dots"><i class="fa fa-ellipsis-h"></i></span>
                                                
                                            </a>
                                             -->
                                            <a href="products.php" class="btn btn-gradient"> See more
                                                <span class="dots"><i class="fa fa-ellipsis-h"></i></span>
                                        </a>
                                        </div>
                                </div>

                                <div class="grid-item featured-hotel"  style="height: 260px; width:390px;">
                                    <img src="img/Pants/p7.jpg" alt="image not found" class="hotel-image" style="height: 256px; width:384px;">
                                    <h5 class="hotel-name"> Louis Vuitton - Denim, Black </h5>
                                    <span class="hotel-price">From Rs.15,000/- L.M</span>
                                    <div class="hotel-rating">
                                        <i class="fa fa-star rating"></i>
                                        <i class="fa fa-star rating"></i>
                                        <i class="fa fa-star rating"></i>
                                        <i class="fa fa-star rating"></i>
                                        <i class="fa fa-star-half rating"></i>
                                        
        
                                    </div>

                                        <div>
                                            <!-- <a href="account.php" class="btn btn-gradient"> Buy now
                                                <span class="dots"><i class="fa fa-ellipsis-h"></i></span>
                                                
                                            </a> -->
                                            
                                            <a href="products_pant.php" class="btn btn-gradient"> See more
                                                <span class="dots"><i class="fa fa-ellipsis-h"></i></span>
                                        </a>
                                        </div>
                                </div>

                                <div class="grid-item featured-hotel"  style="height: 260px; width:390px;">
                                    <img src="img/Shirts/s7.jpg" alt="image not found" class="hotel-image" style="height: 256px; width:384px;">
                                    <h5 class="hotel-name"> Louis Vuitton - TCurve Flora </h5>
                                    <span class="hotel-price">From Rs 15,000/- Medium</span>
                                    <div class="hotel-rating">
                                        <i class="fa fa-star rating"></i>
                                        <i class="fa fa-star rating"></i>
                                        <i class="fa fa-star rating"></i>
                                        <i class="fa fa-star rating"></i>
                                        <i class="fa fa-star rating"></i>
                                        
        
                                    </div>

                                        <div>
                                            <!-- <a href="account.php" class="btn btn-gradient"> Buy now
                                                <span class="dots"><i class="fa fa-ellipsis-h"></i></span>
                                                
                                            </a> -->
                                            
                                            <a href="products.php" class="btn btn-gradient"> See more
                                                <span class="dots"><i class="fa fa-ellipsis-h"></i></span>
                                        </a>
                                        </div>
                                </div>


                    </div>
                </div>
        </section>


                

       

           
                <h5 class="section-head">
                    <span class="heading">Brands</span>
                    <span class="sub-heading">Global Customers</span>
                </h5>

                <!-- <div class="contact-content">
                    <div > 
                        <img src = "img/Logo/logo15_1.jpg" alt = "image not found">
                    </div>
                    <div>
                     <img  src = "img/Logo/logo9_1.jpg" alt = "image not found">
                    </div> 
                    <div>
                    <img  src = "img/Logo/logo6_1.png" alt = "image not found">
                    </div> 
                </div> -->

                <div class="brands">
                    <div class="small-container">

                        <div class="row">
                                <div class="col-3">
                                    <img src= "img/Logo/brands/ck.png" alt="Image Not Found">
                                </div>
                                <div class="col-3">
                                    <img src= "img/Logo/brands/lv.png" alt="Image Not Found">
                                </div>
                                <div class="col-3">
                                    <img src= "img/Logo/brands/gucci.png" alt="Image Not Found" >
                                </div>
                                <div class="col-3">
                                    <img src= "img/Logo/brands/nike.jpg" alt="Image Not Found" >
                                </div>
                        </div>

                        <br> <br>

                        <div class="row">
                                <div class="col-3">
                                    <img src= "img/Logo/brands/rado.png" alt="Image Not Found">
                                </div>
                                <div class="col-3">
                                    <img src= "img/Logo/brands/rayban.png" alt="Image Not Found">
                                </div>
                                <div class="col-3">
                                    <img src= "img/Logo/brands/rolex.png" alt="Image Not Found">
                                </div>
                                <div class="col-3">
                                    <img src= "img/Logo/brands/swatch.png" alt="Image Not Found" >
                                </div>
                        </div>
                           
                    </div>
                </div>




                <br/>
                <br/>
                    <h5 class="section-head">
                        <span class="heading">Payment Facilities</span>
                        <span class="sub-heading">avaialable always.!</span>
                    </h5>

                <div class="contact-content">
                            <div class="col-4">
                            <img  src = "img/Logo/logo13_test.jpg" alt = "image not found">
                        </div> 
                        
                        <div class="col-4">
                            <img  src = "img/Logo/logo17_test1.png" alt = "image not found">
                        </div> 
                </div>

                <br> <br>

            
                <!-- <div class="container">
                    <ul class="pagination">
                                <li class="disabled"><a href="#">«</a></li>
                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">»</a></li>
                    </ul>
                </div> -->
               
                <!-- <nav aria-label="Page navigation example">
                        <ul class="pagination">
                                <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                    <span class="sr-only">Next</span>
                                </a>
                                </li>
                        </ul>
                </nav> -->
                                
    </main>



    <br> <br>




    <!-- Footer section starts here -->
    <footer class="footer" style="background-image: url('img/Logo/logo_test3_2.png');">
        <div class="container">
            <div class="footer-content">
                <div class="footer-content-brand">
                    <a href="index.php" class="logo">
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