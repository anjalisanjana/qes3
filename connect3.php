<?php
$conn = new mysqli('localhost','root','','csdept');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else
{
    $ans = "SELECT Answer FROM eeedept";
    $result = $conn->query($ans);
    $res = $result->fetch_array()[0]??'';
    echo "Correct answer is " . $res ;
}
$conn->close();
?>
