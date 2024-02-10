<?php

include "authorize.php";
include "../main/connection.php";

$userid=$_SESSION['userid'];
$pid=$_GET['pid'];

$status=mysqli_query($conn, "insert into cart(userid, pid) values($userid, $pid)");

if($status){
    echo "Added to Cart Successfully !";
    header ("location:viewcart.php");
}
else{
    echo mysqli_error($conn);
}

?>