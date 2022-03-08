<?php
include 'Travelheader.php';
include 'Traveldb.php';


$a = $_GET['ID'];
$result = mysqli_query($conn,"SELECT * FROM SignUp WHERE ID= '$a'");
$row= mysqli_fetch_array($result);
?>


<form method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
Firstname: <br>
<input type="text" name="Firstname"  value="<?php echo $row['Firstname']; ?>">
<br>
Lastname :<br>
<input type="text" name="Lastname" value="<?php echo $row['Lastname']; ?>">
<br>
Email :<br>
<input type="text" name="Email" value="<?php echo $row['Email']; ?>">
<br>

City :<br>
<input type="text" name="City" value="<?php echo $row['City']; ?>">
<br>

Country:<br>
<input type="text" name="Country" value="<?php echo $row['Country']; ?>">
<br>

Password:<br>
<input type="text" name="Pasword" value="<?php echo $row['Password']; ?>">
<br>


<input type="submit" name="submit" value="Delete" >
</form>
<?php 
if(isset($_POST['submit'])){
    $query = mysqli_query($conn,"DELETE FROM studentsinfo where id='$a'");
    if($query){
        echo "Record Deleted with id: $a <br>";
        echo "<a href='update.php'> Check your updated List </a>";
        // if you want to redirect to update page after updating
        //header("location: update.php");
    }
    else { echo "Record Not Deleted";}
    }
$conn->close();
include 'Travelfooter.php';
?