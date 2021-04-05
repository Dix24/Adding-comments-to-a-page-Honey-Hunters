<?php
// Подключаемся к БД
$base_n = "testing";
$base_s = "localhost";
$base_l = "root";
$base_p = "";

$conn = mysqli_connect("$base_s","$base_l","$base_p","$base_n"); 
mysqli_query($conn,"SET NAMES UTF8");

unset($base_s,$base_l,$base_p); 
?>