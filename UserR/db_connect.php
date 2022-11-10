<?php 

    $conn = mysqli_connect('localhost','root', '','user');

    if(!$conn){
        die("ไม่สามารถเชื่อมต่อกับฐานข้อมูลได้".mysqli_connect_error($conn));
    }

?>