<?php 
    include('db_connect.php');
    session_start();
    $errors = array();

if(isset($_POST['login_user'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordenc = md5($password);

    if(empty($username)){
        array_push($errors, "Username is required");
    }
    if(empty($password)){
        array_push($errors, "Password is required");
    }
    
    if(count($errors) == 0){
        $password = md5($password);
        $query = "SELECT * FROM user WHERE username = '$username' AND password = '$passwordenc'";
        
        $result = mysqli_query($conn ,$query);

        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);

            $_SESSION['userid'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['status'] = $row['status'];

            if($_SESSION['status'] == 'a'){
                header("location: admin_page.php");
            }
            if($_SESSION['status'] == 'u'){
                header("location: user_page.php")
            }
        } else {
            array_push($errors ,"Username or password is wrong");
            $_SESSION['error'] = "Username or password is wrong";
            header("location: login.php");
        }        
    } 
}
?>
