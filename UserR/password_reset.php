<?php
include("db_connect.php");
if(isset($_POST("reset"))){
    $oldpassword = $_SESSION['password'];
    $password = $_SESSION["newpassword"];
    $repassword = $_SESSION["repassword"];

    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysql_query($sql);
    $num = mysql_num_rows($result);

    if ($num==0){
        die("<script>
            alert('Old password incorrect');
            history.back();
            </script>");
    }
    if ($newpassword != $repassword){
        die("<script>
            alert('Password is not same');
            history.back();
            </script>");
    }
    $password = md5($password);
    $sql = "UPDATE member SET password='$password' WHERE username='$username'";
    $result = mysql_query($sql) or die("Err : $sql");

    echo "<script> 
        alert('Update Password');
        window.location='login.php';
        </script>";
}
?>