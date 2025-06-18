<?php
$success = 0;
$user = 0;
$invalid = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "connect.php";

    $username = mysqli_real_escape_string($con, $_POST["username"]);
    $password = mysqli_real_escape_string($con, $_POST["password"]);
    $cpassword = mysqli_real_escape_string($con, $_POST["cpassword"]);

    if ($password !== $cpassword) {
        $invalid = 1;
    } else {
        $sql = "SELECT * FROM `registration` WHERE username='$username'";
        $result = mysqli_query($con, $sql);

        if ($result) {
            $num = mysqli_num_rows($result);
            if ($num > 0) {
                $user = 1;
            } else {
                $sql = "INSERT INTO `registration` (username, password) VALUES ('$username', '$password')";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    $success = 1;
                    header("Location: login.php");
                    exit;
                } else {
                    die("Error: " . mysqli_error($con));
                }
            }
        } else {
            die("Error: " . mysqli_error($con));
        }
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container mt-5">
        <h1 class="text-center">Sign Up</h1>

        <!-- Success Alert -->
        <?php if ($success): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Sign Up Successful.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?>

        <!-- User Already Exists Alert -->
        <?php if ($user): ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Oh No Sorry!</strong> Username already exists.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?>

        <!-- Invalid Password Match Alert -->
        <?php if ($invalid): ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Oh No Sorry!</strong> Password and Confirm Password do not match.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?>

        <!-- Signup Form -->
        <form action="sign.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter Your Username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Sign Up</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
