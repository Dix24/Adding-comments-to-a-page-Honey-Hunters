<?php
header('Content-type: text/plain; charset=utf-8');
header('Cache-Control: no-store, no-cache');
include 'config.php';  

// Получаем объект с информацией
$data['information'] = $_POST['information'];

// Собираем данные для работы. Блокируем HTML сущности, обрезаем теги.
$data['name']    = htmlspecialchars(strip_tags(trim($data['information']['name'])),ENT_QUOTES);
$data['email']   = htmlspecialchars(strip_tags(trim($data['information']['email'])),ENT_QUOTES);
$data['message'] = htmlspecialchars(strip_tags(trim($data['information']['message'])),ENT_QUOTES);

// Записываем данные
    $sql = "INSERT INTO `message`(`name`, `email`, `message`) VALUES ('".$data['name']."','".$data['email']."','".$data['message']."'); ";
    if(!mysqli_query($conn, $sql)){ echo $sql; }

echo json_encode($data);

mysqli_close($conn); 
unset($conn); 
?>