<?php
include 'connect.php';

if (isset($_POST['nameSend']) && isset($_POST['emailSend']) && isset($_POST['mobileSend']) && isset($_POST['placeSend'])) {

    $sql = "INSERT INTO `crud` (name, email, mobile, place) VALUES (?, ?, ?, ?)";

    $stmt = mysqli_prepare($con, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssss", $_POST['nameSend'], $_POST['emailSend'], $_POST['mobileSend'], $_POST['placeSend']);

        $result = mysqli_stmt_execute($stmt);

        if (!$result) {
            die(mysqli_error($con));
        }

        mysqli_stmt_close($stmt);
    } else {
        die(mysqli_error($con));
    }
}
?>