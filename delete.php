<?php
%conn = mysqli_init();
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$id = $_POST['id'];
$sql = 'DELETE FROM guestbook WHERE id = $id';

if (mysql_query($conn, $sql)){
    echo 'จ้า'
} else {
    echo 'Error: '. $sql . '<br>' . mysqli_error($conn);
}
mysqli_close($conn);

?>