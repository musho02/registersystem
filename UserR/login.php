<?php  session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="p-3 mb-2 bg-dark text-white text-center">
        <a href="Home">Home</a>
    </div>

    <div class="container my-3">
    <h2 class="text-center">Login</h2>
        <form action="login_db.php" method="post">
            <?php 
                if(isset($_SESSION['username'])):?>
                    <div class="error">
                        <?php
                             $_SESSION['error'];
                            unset($_SESSION['erorr']);
                        ?>
                    </div>
                <?php endif ?>
                
            <div class="mb-1">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="d-grid gap-2 mb-4">
            <button type="submit" name="login_user" class="btn btn-success ">Login</button>
            </div>
        </form>
            <a href="register.php"> สมัครสมาชิก </a>
            <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>