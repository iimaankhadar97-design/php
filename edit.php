<?php
include "db.php";
$id = $_GET['id'];
$result = mysqli_query($layskuxidho, "SELECT * FROM people WHERE id=$id");
$data = mysqli_fetch_assoc($result);
?>

<h2>Update Record</h2>

<form method="POST" action="update.php">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
    id: <input type="number" name="id" value="<?php echo $data['id']; ?>"><br><br>
    magac: <input type="text" name="magac" value="<?php echo $data['magac']; ?>"><br><br>
    tell: <input type="number" name="tell" value="<?php echo $data['tell']; ?>"><br><br>
    xafad: <input type="text" name="xafad" value="<?php echo $data['xafad']; ?>"><br><br>
    <button type="submit">Update</button>
</form>
