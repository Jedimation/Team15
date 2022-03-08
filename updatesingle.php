<?php
include 'Travelheader.php';
include 'Traveldb.php';
$a = $_GET['ID'];
$result = mysqli_query($conn,"SELECT * FROM SignUp WHERE ID= '$a'");
$row= mysqli_fetch_array($result);
?>

<h1>Update  Data</h1>
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


<input type="submit" name="submit" value="Submit" >
</form>
<?php 
if(isset($_POST['submit'])){
    # it now updates only fname, your task is to update all other fields in your team
    $Firstname = $_POST['Firstname'];
    $query = mysqli_query($conn,"UPDATE SignUp set Firstname='$Firstname' where id='$a'");
    if($query){
        echo "Record Modified Successfully <br>";
        echo "<a href='update.php'> Check your updated List </a>";
        // if you want to redirect to update page after updating
        //header("location: update.php");
    }
    else { echo "Record Not modified";}
    }
$conn->close();
include 'Travelfooter.php';
?