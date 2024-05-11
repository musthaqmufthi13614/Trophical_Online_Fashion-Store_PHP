
<?php


        session_start();

        $con = mysqli_connect('localhost','root','');

        mysqli_select_db($con,'ecommerce');




// for add to cart action in products.php page or many more products pages.!

if (isset($_POST["add_to_cart"]))
    {
        if (isset($_SESSION["shopping_cart"]))
        {
            $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");

                if (!in_array($_GET["id"], $item_array_id)) 
                {
                    $count = count($_SESSION["shopping_cart"]);
                    $item_array = array(

                    'item_id' =>       $_GET["id"],
                    'item_name' =>     $_POST["hidden_name"],
                    'item_price' =>    $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"]

                    );
                        $_SESSION["shopping_cart"][$count] = $item_array;


                        
                            # code...
                            
                           
                            header("location: products.php?#product-section-3 ");
                  
                        // header("location: products.php?#product-section-'item_id'");

                    

                     
                        
                }
                else
                {
                        // echo '<script>alert("Item Already Added.!")</script>';
                        // echo '<script>window.location = "products.php"</script>';

                        /////////////////
                        // header("location: products.php?#product-section-5 ");
                            header("location: products.php?#product-section-6 ");


                }
        }
        else
        {
            $item_array = array(
                'item_id' =>       $_GET["id"],
                'item_name' =>     $_POST["hidden_name"],
                'item_price' =>    $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"]
            );

            $_SESSION["shopping_cart"][0] = $item_array;

        }

    }




// // for remove action at the cart page...!
// if (isset($_GET["action"])) 
//     {

//         if($_GET["action"] == "delete")
//         {
//             foreach($_SESSION["shopping_cart"] as $keys => $values)
//             {
//                 if($values["item_id"] == $_GET["id"])
//                 {
//                     unset($_SESSION["shopping_cart"][$keys]);

//                     // echo '<script> alert("Item Removed.!") </script>';

//                     echo '<script> window.location = "cart.php" </script>';
//                 }
//             }
//         }
//     }







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

        <title> Products - Trophical</title>

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
     

        <!-- </style> -->
                
        
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

    <br> <br> <br> <br> <br> 
    <!-- ///////////////////////////////////////////////////// -->

    
        <div class="container" style = "width:700px;">

                    <!-- <h1 style="text-align: center;font-size: 50px; font-family: san serif;"> Shopping Cart</h1> -->
                        <br>
                    <h1 style="text-align: center;font-size: 50px; font-family: san serif;"> Store</h1>
                 

                    <h4 class="h4" style="text-align: center;font-family: Monotype Corsiva; font-size: 25px; color: #aaa4a4;"> Get Your Outfit Now.!</h4>
                    <br>
                    <h1 style="text-align: center;font-size: 40px; font-family: san serif; color: teal;"> Branded Clothes</h1>
                    <br>
                            <?php
                        
                        $query = "select * from tbl_products where product_type = 'clothes' ";
                        
                        $result = mysqli_query($con,$query);

                        if(mysqli_num_rows($result) > 0 ){

                            while($row = mysqli_fetch_array($result))
                            {
                             ?>

                    <div id = "product-section-<?php echo $row["pid"]; ?>">
                             <div class="col-md-8">
                             
                                <form method ="post" action="products.php?action=add&id=<?php echo $row["pid"];?>">
                                
                                    <div style = "border: 1px solid #333; background-color:#f1f1f1; border-radius:5px;">
                                        <img src = " img/<?php echo $row["product_img"];?>" class= "img-responsive" alt="Img not Found"
                                                        style = "margin-left: 80px;" />
                                        <br><br>
                                            <h4 style = "text-align: center; font-family:sans serif; font-size: 35px;" class = ""><?php echo $row["product_name"];?> </h4>
                                            <h4 style = "text-align: center; font-size: 20px;" class = "">Rs.<?php echo $row["product_price"];?> </h4>
                                            

                                        <input type="number" name="quantity" class="form-control" value="1" style="width:25%; font-size: 15px; margin-left: 150px;">                                          
                                        <input type="hidden" name = "hidden_name" value = "<?php echo $row["product_name"];?>">
                                        <input type="hidden" name = "hidden_price" value = "<?php echo $row["product_price"];?>">

                                        
                                        <input type="submit" name="add_to_cart" style="border-radius:70px;
                                                                                             text-transform: initial; 
                                                                                             display: block;  
                                                                                             margin-top:5px; 
                                                                                             margin-left:35px;
                                                                                             font-size: 1.5rem;
                                                                                            margin-left: 125px;
                                                                                            margin-top: 10px;"
                                                                                         class="btn btn-success" 
                                                                                            value="Add to Cart" >
                                            
                                            <?php
                                             
                                                // $_SESSION["sectionid"] = $row["pid"];
                                                // echo $_SESSION["sectionid"];
                                                
                                            ?>


                                    <br>

                                    </div>
                                    <br>
                                </form>
                             
                             </div>  
                        </div>

                             <?php

                            }

                        }
                        
                        ?>

                    

            </div>

            
        <div class="row">
            <div class="col-3">
                <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                    <!-- <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">«</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    </li> -->
                                    <li class="page-item active pagination-lg"><a class="page-link" href="products.php">1</a></li>
                                    <li class="page-item pagination-lg"><a class="page-link" href="products_pant.php">2</a></li>
                                    <li class="page-item pagination-lg"><a class="page-link" href="products_shoe.php">3</a></li>
                                    <li class="page-item pagination-lg"><a class="page-link" href="products_watch.php">4</a></li>
                                    <li class="page-item pagination-lg"><a class="page-link" href="products_eyewear.php">5</a></li>
                                    <li class="page-item pagination-lg">
                                    <a class="page-link" href="products_pant.php" aria-label="Next">
                                        <span aria-hidden="true">»</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    </li>
                            </ul>
                    </nav>
            </div>
        </div>





    <!-- ////////////////////////////////////////////////////// -->
<br> <br> <br> <br> <br> 
        
<section id = "section-footer">
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
</section>
        
    <!-- Footer section Ends here -->

        <script src="js/jquery-3.5.1.slim.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        
    </body>
</html>