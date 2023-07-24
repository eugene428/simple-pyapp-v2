<?php

$conn = mysqli_connect("testsql", "root","Mantap@18", "Mantap");

if ($conn->connect_error){
	die("Connection Failed: " . $conn->connect_error);
}

echo "Connected to mySQL Successfully";

$sql = "select name from account where id = '1' ";
$result = $conn->query($sql);


$row = $result->fetch_assoc();
	echo "<br>Hello, " . $row["name"] . "the great cleric!!!";

?>
