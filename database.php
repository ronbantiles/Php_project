<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "login_register";
try{
    $conn=new mysqli($hostName,$dbUser,$dbPassword,$dbName);
}catch( mysqli_sql_exception){
    echo "Connection Failed";
}
if($conn){
    echo"Connection complete";
}
?>