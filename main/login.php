<?php

session_start();
$_SESSION['login_status']=false;

$uname=$_POST['uname'];
$upass=$_POST['upass'];

include "../main/connection.php";

$sql_result=mysqli_query($conn,"select * from user where username='$uname' and password='$upass'");

$row=mysqli_fetch_assoc($sql_result);

$rows=mysqli_num_rows($sql_result);
if($rows>0){
    echo "Login Success !";
    $_SESSION['login_status']=true;
    $_SESSION['usertype']=$row['usertype'];
    $_SESSION['username']=$row['username'];
    $_SESSION['userid']=$row['userid'];

    if($row['usertype']=='Seller'){
        header("location:../seller/home.php");
    }
    else if($row['usertype']=='Buyer'){
        header("location:../buyer/home.php");
    }
}
else{
    echo '<script type ="text/JavaScript">';  
    echo 'alert(" Login Unsuccessful ! Try Again ! ")';  
    echo '</script>';
    exit; 
}

?>