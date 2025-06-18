<?php
include 'connect.php';

$id = $_GET['updateid'];
$sql = "SELECT * FROM `crud` WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "UPDATE `crud` SET name='$name', email='$email', mobile='$mobile', password='$password' WHERE id=$id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header("Location: display.php");
        exit();
    } else {
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD OPERATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container my-5">
        <form method="POST" class="d-flex flex-column gap-3">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value="<?php echo htmlspecialchars($name); ?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value="<?php echo htmlspecialchars($email); ?>">
            </div>
            <div class="form-group">
                <label for="">Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your mobile" name="mobile" autocomplete="off" value="<?php echo htmlspecialchars($mobile); ?>">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password" value="<?php echo htmlspecialchars($password); ?>">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
