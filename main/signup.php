<?php

$uname=$_POST['uname'];
$upass=$_POST['upass1'];
$usertype=$_POST['usertype'];

include "../main/connection.php";

$status=mysqli_query($conn,"insert into user(username,password,usertype) values('$uname','$upass','$usertype')");
if($status){
    header("location:login.html"); 
}
else{
    echo "Error !";
    echo mysqli_error($conn);
}

?>