<?php

$source_path=$_FILES['pdtimg']['tmp_name'];
$target_path="../main/images/" . $_FILES['pdtimg']['name'];

move_uploaded_file($source_path,$target_path);

include "authorize.php";
include "../main/connection.php";

$status=mysqli_query($conn,"insert into product(name,price,detail,impath,ownerid) values('$_POST[name]','$_POST[price]','$_POST[detail]','$target_path','$_SESSION[userid]')");

if($status){
    echo "Product Uploaded Successully !";
    header("location:view.php");
}
else{
    echo mysqli_error($conn);
}

?>