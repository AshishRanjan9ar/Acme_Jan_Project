<?php

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['login_status'])){
    echo "<h1>Skipped Login altogether; please login first</h1>";
    echo "<a href='../main/login.html'>Login Here</a>";
    die;
}

if($_SESSION['login_status']==false){
    echo "<h1>Login with proper credentials</h1>";
    echo "<a href='../main/login.html'>Login Here</a>";
    die;
}

if($_SESSION['usertype']!='Seller'){
    echo "Unauthorized attempt ! Forbidden Access";
}

//echo "
        //<div style='background-color:#C2DEDC;padding:15px;margin-top:0;color:#116A7B;'>
            //<h1 style='margin-left: 450px;'>Welcome <span style='text-transform: capitalize;'>$_SESSION[username]</span> to the Vendor Profile</h1>
        //</div>
    //";

?>