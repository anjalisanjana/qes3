<?php
$conn = new mysqli('localhost','root','','csdept');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
$sql = "INSERT INTO registerForm (Email,pass)
VALUES ('likhi@example.com','testpass2')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
