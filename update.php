<?php
include "db.php";

$id = $_POST['id'];
$magac = $_POST['magac'];
$tell = $_POST['tell'];
$xafad = $_POST['xafad'];

mysqli_query($layskuxidho , "UPDATE people SET id='$id', magac='$magac', tell='$tell', xafad='$xafad' WHERE id=$id");
header("Location:index.php");
?>