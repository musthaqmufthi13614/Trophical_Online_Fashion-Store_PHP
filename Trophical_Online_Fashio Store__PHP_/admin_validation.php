<?php
//validation for user login 

    session_start();


    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con,'ecommerce');

    $name =     $_POST['username'];
    $email =    $_POST['useremail'];
    $password = $_POST['userpassword'];
    
    $query = "select * from tbl_user where username = '$name' && password = '$password' ";
                                //username, password (attribute names in db) field belongs to ecommerce database 

    // $query = "select uid, email from tbl_user where username = '$name' ";

    $result = mysqli_query($con, $query);

    $num = mysqli_num_rows($result);

        if($num == 1){

            
          

            header('Location: my_admin_account.php');
           
            $_SESSION['username'] = $name;

            $_SESSION['password'] = $password; 

            // $_SESSION['pspsss'] = $password; 

            
             $sql = "select uid, email from tbl_user where username = '$name' ";
                 $stmt = mysqli_prepare($con, $sql);

                mysqli_stmt_bind_result($stmt, $id, $email);

                 mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
             if(mysqli_stmt_affected_rows($stmt) > 0){
            
                    while(mysqli_stmt_fetch($stmt)){
                // echo "<tr>
                //         <td>".$id."</td>
                //         <td>".$email."</td>
                
                //     </tr>";

                $_SESSION['userid'] = $id;
                $_SESSION['useremail'] = $email;

            }
        }

        
            }else{


            header('Location: error_login.php');
            
        }
        
?>