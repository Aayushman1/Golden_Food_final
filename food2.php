<?php
$servername="localhost";
$username="Aayushman";
$password="Aayushman1234$";
$dbName="golden_food";
$db=new mysqli($servername, $username, $password,$dbName);

if($db->connect_error){
    die("Connection failed!");
}else{
    echo "<h1>Connection successful!</h1>";
}
?>