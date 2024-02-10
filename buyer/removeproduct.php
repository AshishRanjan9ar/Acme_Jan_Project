<?php

include "authorize.php";
include "../main/connection.php";

$cartid=$_GET['cartid'];

$status=mysqli_query($conn, "delete from cart where cartid=$cartid");

if($status){
    echo "Removed from Cart Successfully !";
    header("location:viewcart.php");
}
else{
    echo mysqli_error($conn);
}
?>