<?php

include "authorize.php";
include "../main/connection.php";

$pid=$_GET['pid'];

$status=mysqli_query($conn, "delete from product where pid=$pid");

if($status){
    echo "Deleted Successfully !";
    header("location:view.php");
}
else{
    echo mysqli_error($conn);
}

?>