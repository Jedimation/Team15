
<?php
session_start();
include 'Traveldb.php';
    
if (isset($_POST['SignUp'])) {
$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$Email = $_POST['Email'];
$Street = $_POST['Street'];
$City = $_POST['City'];
$Country = $_POST['Country'];
$Password = $_POST['Password'];
$Password_hash = Password_hash($Password, PASSWORD_BCRYPT);
$query = $connection->prepare("SELECT * FROM SignUp WHERE Email=:Email");
$query->bindParam("Email", $Email, PDO::PARAM_STR);
$query->execute();
if ($query->rowCount() > 0) {
echo '<p class="error"> Email Already Exists!</p>';
}
if ($query->rowCount() == 0) {
$query = $connection->prepare("INSERT INTO SignUp(Firstname, Lastname, Email, Street, City, Country, Password,) VALUES (:Firstname, :Lastname, :Email, :Street, :City, :Country, Password_hash,)");
$query->bindParam("Firstname", $Firstname, PDO::PARAM_STR);
$query->bindParam("Lastname", $Lastname, PDO::PARAM_STR);
$query->bindParam("Email", $Email, PDO::PARAM_STR);
$query->bindParam("Street", $Street, PDO::PARAM_STR);
$query->bindParam("City", $City, PDO::PARAM_STR);
$query->bindParam("Country", $Country, PDO::PARAM_STR);
$query->bindParam("Password_hash", $Password_hash, PDO::PARAM_STR);
$query->bindParam("email", $email, PDO::PARAM_STR);
$result = $query->execute();
if ($result) {
echo '<p class="success">SignUP successful!</p>';
} 
else 
{
echo '<p class="error">Check Your Input!</p>'; }
 }
 }
?>