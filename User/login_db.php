<?php 
    session_start();
    $errors = array();

if(isset($_POST['login_user'])){
    $username = mysqli_real_escape_string($conn ,$_POST['username']);
    $password = mysqli_real_escape_string($conn ,$_POST['password']);

    if(empty($username)){
        array_push($errors, "Username is required");
    }
    if(empty($password)){
        array_push($errors, "Password is required");
    }
    if(count($errors) == 0){
        $password = md5($password);
        $query = "SELECT * FROM User WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn ,$query);

        if(mysqli_num_rows($result) == 1){
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Login successful";
            header("location: index.php");
        } else {
            array_push($errors ,"Username or password is wrong")
            $_SESSION['error'] = "Username or password is wrong";
            header("location: login.php");
        }
    } 
}


?>