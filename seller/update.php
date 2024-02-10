<?php

include "authorize.php";
include "../main/connection.php";

    $userid=$_SESSION['userid'];
    $pid='$_GET[pid]';

    $source_path=$_FILES['pdtimg']['tmp_name'];
    $target_path="../main/images/" . $_FILES['pdtimg']['name'];

    move_uploaded_file($source_path,$target_path);
    
    $status=mysqli_query($conn,"update product set name='$_POST[name]',price='$_POST[price]',detail='$_POST[detail]',impath='$target_path',ownerid='$_SESSION[userid]' where pid=$pid");
    
    if($status){
        echo "Product Updated Successully !";
        header("location:view.php");
    }
    else{
        echo mysqli_error($conn);
    }

?>