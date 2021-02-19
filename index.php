<?php

$conn=new mysqli("172.17.0.2","root","apa","trucoorp");

if($conn->connect_error){
die("Error". $conn->connect_error);
}

$sql= "SELECT * FROM users";
$result=$conn->query($sql);

while($row=$result->fetch_assoc())
{
echo $row["ID"];
echo "<br>";
echo $row["Nama"];
echo "<br>";
echo $row["Kantor"];
echo "<br>";

}
echo $result->num_rows;
$conn->close();
?>
