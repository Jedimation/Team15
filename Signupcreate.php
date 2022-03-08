<?php
include 'Traveldb.php';


$Firstname = $_POST ['Firstname'];
$Lastname= $_POST ['Lastname'];
$Email = $_POST ['Email'];
$Street = $_POST ['Street'];
$City = $_POST ['City'];
$Street = $_POST ['Street'];
$City = $_POST ['City'];
$Country = $_POST ['Country'];
$Password = $_POST ['Password'];

if (empty ($_POST [ 'Email'])) {
    echo "<h1> Please input Details </h1>" ;


}
else {
$sql = "insert into SignUp (Firstname, Lastname, Email, Street, City, Country, Password) 
values ('$Firstname', '$Lastname', '$Email', '$Street', '$City', '$Country', '$Password') " ;

if ($conn -> query ($sql) === TRUE) {

    echo " Data added";
   
}
else {
    echo "ERROR :" .sql. "<br>" . $conn->error;
}
$conn->close();
}
?>