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

if($_SESSION['usertype']!='Buyer'){
    echo "Unauthorized attempt ! Forbidden Access";
}

//echo "Welcome $_SESSION[username]";

?>