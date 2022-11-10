<?php 
    session_start();
    include('db_connect.php')

    $errors = array();

    if(isset($_POST['reg_user'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
        
        if(empty('username')){
            array_push($errors ,"Username is empty.");
        }
        if(empty('email')){
            array_push($errors ,"Email is empty.");
        }
        if(empty('password_1')){
            array_push($errors ,"Password is empty.");
        }
        if($password_1 != $password_2){
            array_push($errors ,"Password do not match.");
        }

        $user_check_query = "SELECT * FROM User WHERE username = '$username' OR email = '$email' ";
        $query = mysqli_query($conn , $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if($result){
            if($result['username'] === $username){
                array_push($errors, "username is already used!");
            }
            if($result['email'] === $email){
                array_push($errors, "email is already used!")
            }
        }
        if(count($errors) == 0){
            $password = md5($password_1);
            $sql = "INSERT INTO User (username ,email ,password) VALUES ('$username' , '$email' , '$password')";
            mysqli_query($conn , $sql);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Login successful";
            header('location: index.php'); 
        } else {
            array_push($errors ,"Username or email is already used!")
            $_SESSION['error'] = "Username or email is already used!";
            header("location: register.php");
        }
    }

