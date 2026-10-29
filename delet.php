<?php
include "db.php";

$id = $_GET['id'];

mysqli_query($layskuxidho, "DELETE FROM people WHERE id=$id");
header("Location:index.php");
?>