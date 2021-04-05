<?php
header('Content-type: text/plain; charset=utf-8');
header('Cache-Control: no-store, no-cache');
include 'config.php';  

    $data['obj'] = array();
    
    $sql = "SELECT * FROM `message`; ";
    $res = mysqli_query($conn, $sql);
    for($myrow = mysqli_fetch_array($res); $myrow==true; $myrow = mysqli_fetch_array($res))
    { $data['obj'][] = array('id'=>$myrow['id'],'name'=>$myrow['name'],'email'=>$myrow['email'],'message'=>$myrow['message']); }

echo json_encode($data);

mysqli_close($conn); 
unset($conn); 
?>