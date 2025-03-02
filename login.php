<?php

    include("connection.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>

    <style>

        .login-form{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 400px;
        }
    </style>

</head>


<body class="bg-light">

    <div class="login-form text-center rounded bg-white shadow-lg overflow-hidden">
        <form action="">
            <h4 class="bg-dark text-white py-3">ADMIN LOGIN PANEL</h4>
        </form>
    <div class="p-4">

    <div class="mb-4">
        <input name="Admin_Name" type="text" class="form-control  text-center" placeholder="Admin Name">
    </div>
    <div class="mb-4">
        <input name="Admin_Password" type="password" class="form-control  text-center" placeholder="Password">
    </div>

    <button name="Login" type="submit" class="btn text-white custom  bg-success ">LOGIN</button>
    

    </form>
</div>
</div>
</body>
</html>