<?php

include "authorize.php";
include "../main/connection.php";

$userid=$_SESSION['userid'];

$status=mysqli_query($conn, "select pid from cart where userid=$userid");

while($row=mysqli_fetch_assoc($status)){
    $pid=$row['pid'];
    echo "<br>";
}


?>