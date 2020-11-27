<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'testlabitf.mysql.database.azure.com', 'test@testlabitf', 'YHVexv86', 'itf', 3306);
if(mysqli_connect_errno($conn)){
    echo "connect fail".mysqli_connect_error();
}
?>