<?php

include "authorize.php";
include "../main/connection.php";
include "getproduct.php";

$userid=$_SESSION['userid'];
//$pid=$_GET['pid'];

$status=mysqli_query($conn, "insert into orders(userid, pid) values($userid, $pid)");

if($status){
    echo "Added to Order Successfully !";
    header("location:myorder.php");
}
else{
    echo mysqli_error($conn);
}

?>