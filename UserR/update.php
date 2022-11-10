<?php
    include("login_db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<body>
<form action="login_db.php" method="post">
<div class="mb-4">
        <label for="password" class="form-label">OldPassword</label>
        <input type="password" class="form-control" name="password">
    </div>
    <div class="mb-4">
        <label for="password" class="form-label">NewPassword</label>
        <input type="password" class="form-control" name="newpassword">
    </div>
    <div class="mb-4">
        <label for="password" class="form-label">ConfirmPassword</label>
        <input type="password" class="form-control" name="repassword">
    </div>
    <div class="d-grid gap-2 mb-4">
        <button type="submit" name="reset" class="btn btn-warning ">reset</button>
    </div>
</form>
</body>
</html>