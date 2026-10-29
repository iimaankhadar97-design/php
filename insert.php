<?php
include "db.php";
$id = $_POST['id'];
$magac= $_POST['magac'];
$tell = $_POST['tell'];
$xafad = $_POST['xafad'];

mysqli_query($layskuxidho, "INSERT INTO people (id,magac,tell, xafad) VALUES ('$id','$magac', '$tell', '$xafad')");
header("Location:index.php");
?>