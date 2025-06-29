<?php

include 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into `crud` (name, email, mobile, password) values ('$name', '$email', '$mobile', '$password')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Data inserted successfully";
        header("Location: display.php");
    } else {
        die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD OPERATION</title>
  </head>
  <body>
    <div class="container my-5">
        <form method="POST" class="d-flex flex-column gap-3">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="o">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="o">
            </div>
            <div class="form-group">
                <label for="">Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your mobile" name="mobile" autocomplete="o">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>