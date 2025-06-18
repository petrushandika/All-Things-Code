<?php
include 'connect.php';

if (isset($_POST['deletesend'])) {
    $unique_id = $_POST['deletesend'];

    $sql = "DELETE FROM `crud` WHERE id=?";
    
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "i", $unique_id);
    
    $result = mysqli_stmt_execute($stmt);

    if (!$result) {
        die(mysqli_error($con));
    }

    mysqli_stmt_close($stmt);
}
?>