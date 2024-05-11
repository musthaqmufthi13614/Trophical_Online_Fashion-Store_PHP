<?php

    session_start();

    // header('location:account.php');
    // header('location:index.php');

    //to get back to the page from re-directing process.

    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con,'ecommerce');

    $name =     $_POST['username'];
    $email =    $_POST['useremail'];
    $password = $_POST['userpassword'];
    
    $query = "select * from tbl_user where username = '$name' ";
                                //username (attribute name in db) field belongs to ecommerce database 

    $result = mysqli_query($con, $query);

    $num = mysqli_num_rows($result);

        if($num == 1){

            // echo "Username Already Taken, Please Try Another unique Username for Signup Process..!";

            header('location:error_signup.php');

        }else{

             $reg = "insert into tbl_user (username , email , password)  values ('$name','$email','$password')";

             mysqli_query($con,$reg);

             header('location:index.php');

            //  echo "Registration Successfully..!";

        }


?>