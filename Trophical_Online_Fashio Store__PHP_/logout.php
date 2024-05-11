
<?php

        //for Logout the user account

    session_start();

    session_destroy();
     //session will destroy from here.

    header('location: account.php');
        // this will redirect to the login page, when logout clicked or activated. 

?>