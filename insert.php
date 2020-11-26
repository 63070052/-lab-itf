<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'testlabitf.mysql.database.azure.com', 'test@testlabitf', 'YHVexv86', 'ITF', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$Id = $_POST['id'];
$AAA = $_POST['a'];
$BBB = $_POST['b'];
// $c = $_POST['c'];



$sql = "INSERT INTO guestbook (A , B, C) VALUES ('$AAA', '$BBB', '$AAA+$BBB')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
