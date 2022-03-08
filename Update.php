<?php
include_once 'Travelheader.php';
require_once 'Traveldb.php'; 
$sql = "select * from SignUp";
$result = $conn->query($sql);?>
<table class="table">
<tr>
<th>Firstname</th><th>Lastname</th><th>Email</th> <th>Street</th><th>City</th>
<th>Country</th><th>Password</th> <th>Edit</th>
<th>Delete</th>
</tr>
<?php 
if($result ->num_rows > 0) {
    while($row = $result ->fetch_assoc()){
?>
<tr>
<td><?php echo $row["ID"]; ?></td>
<td><?php echo $row["Firstname"]; ?></td>
<td><?php echo $row["Lastname"]; ?></td>
<td><?php echo $row["Street"]; ?></td>
<td><?php echo $row["City"]; ?></td>
<td><?php echo $row["Country"]; ?></td>
<td><?php echo $row["Password"]; ?></td>

<td><a href="updatesingle.php?id=<?php echo $row['ID']; ?>">Update</a></td>
<td><a href="delete.php?id=<?php echo $row['ID']; ?>">Delete</a></td>
</tr>

<?php 
}
}
else
{
    echo "no results";
}
$conn->close();
?>
</table>
<?php include 'Travelfooter.php' ?>