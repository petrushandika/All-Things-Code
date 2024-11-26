<?php
session_start();
$login = 0;
$invalid = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "connect.php";

    $username = mysqli_real_escape_string($con, $_POST["username"]);
    $password = mysqli_real_escape_string($con, $_POST["password"]);

    $sql = "SELECT * FROM `registration` WHERE username='$username' AND password='$password'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $login = 1;
            $_SESSION["login_status"] = "success";
            header("Location: home.php"); 
            exit;
        } else {
            $invalid = 1;
        }
    } else {
        die("Error: " . mysqli_error($con));
    }
}

if (isset($_SESSION["login_status"]) && $_SESSION["login_status"] === "success") {
    $login = 1;
    unset($_SESSION["login_status"]); 
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container mt-5">
        <h1 class="text-center">Login</h1>
        
        <!-- Success Login -->
        <?php if ($login): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Login Successful.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?>

        <!-- Invalid Login -->
        <?php if ($invalid): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Invalid!</strong> Username or Password is incorrect.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?>
        
        <!-- Login Form -->
        <form action="home.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter Your Username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
