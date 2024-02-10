<?php

try{
    $conn=new mysqli("localhost","root","","acmegrade",3306);
    if($conn->connect_error){
        echo "Connection Failed !";
        die;
    }
}
catch(Exception $err){
    print_r($err);
}

?>