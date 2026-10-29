<?php
$servername = 'localhost';
$username = 'root';
$password= ""; 
$database = 'arday';

$layskuxidho = mysqli_connect($servername, $username, $password, $database);

if(!$layskuxidho){
    die("layskuma xidhin" . mysqli_connect_error());
}
?>