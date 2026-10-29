<?php include "db.php"; ?>

<form method="POST" action="insert.php">
    ID  : <input type="text" name="id"><br><br>
    Magac: <input type="text" name="magac"><br><br>
    tell: <input type="number" name="tell"><br><br>
    xafad: <input type="text" name="xafad"><br><br>
    <button type="submit">Save</button>
</form>

<hr>

<h2>Read (All Records)</h2>

<?php
$result = mysqli_query($layskuxidho, "SELECT * FROM people");

echo "<table border='1' cellpadding='10'>";
echo "<tr>
        <th>ID</th>
        <th>magac</th>
        <th>tell</th>
        <th>xafad</th>
        <th> Action</th>
      </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['magac']."</td>";
    echo "<td>".$row['tell']."</td>";
    echo "<td>".$row['xafad']."</td>";
    echo "<td>
            <a href='edit.php?id=".$row['id']."'>Update</a> |
            <a href='delete.php?id=".$row['id']."'>Delete</a>
          </td>";
    echo "</tr>";
}

echo"</table>";
?>
