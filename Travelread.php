<?php

include 'Traveldb.php';
$sql = "select * from SignUp";
$result = $conn -> query ($sql) ;
if ($result -> num_rows > 0)
{
// fetch_assoc () : it fetches result as an associative array.

echo "<table class=\"table\"><tr><th>ID</th><th>Firstname</th><th>Lastname</th><th>Email</th><th>Street</th><th>City</th><th>Country</th><th>Password</th> </tr>";
while ($row = $result -> fetch_assoc ()){

    echo "<tr><td>" . $row ["ID"] . "</td><td>" .  $row ["Firstname"] . "</td><td>" . $row ["Lastname"]. "</td><td>"
    . $row ["Email"] ."</td><td>" .$row ["Street"] ."</td><td>"  .$row ["City"] ."</td><td>" .$row ["Country"] . "</td><td>" . $row ["Password"] . "<t/d></tr>";
}
echo "<table>";

}
else {
echo "no results";

}





?>

