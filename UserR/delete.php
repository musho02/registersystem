<?php 
    include("db_connect.php");
    $sql = "DELETE FROM user WHERE id = '$id' ";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "<script> alert('ลบข้อมูลเรียบร้อยแล้ว')</script>";
        header("Location:show_user.php");

    }else{
        echo "<script> alert('ไม่สามารถลบข้อมูลได้')</script>";
        header("Location:show_user.php");
    }






?>