<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "projek_web";

    $conn = new mysqli( $hostname, $username, $password,$database);

if ($conn->connect_error){
    die("connect field:". $conn->connect_error);
} else{
    echo "";
}
?>