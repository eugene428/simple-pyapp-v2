<?php

$conn = mysqli_connect("testsql", "root","yohan12345", "mantap");

if ($conn->connect_error){
	die("Connection Failed: " . $conn->connect_error);
}

echo "Connected to mySQL Successfully";

$sql = "select name from account where id = '1' ";
$result = $conn->query($sql);


$row = $result->fetch_assoc();
	echo "<br>Hello, " . $row["name"] . "the great cleric!!! <br> Kami siswa mantap, <br> berjiwa satria, <br> tidak pernah mengenal keluh kesah, <br> hadapi rintangan tak jadi masalah, <br> maju terus pantang mundur demi kehormatan!!!!!";

?>
