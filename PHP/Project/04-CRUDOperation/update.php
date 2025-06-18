<?php
include 'connect.php';

if(isset($_POST['updateid'])){
    $user_id = $_POST['updateid'];

    $sql = "SELECT * FROM `crud` WHERE id=?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "i", $user_id);
    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
    $response = array();
    
    if($row = mysqli_fetch_assoc($result)){
        $response = $row;
    }
    
    echo json_encode($response);
    mysqli_stmt_close($stmt);
} 
else if(isset($_POST['hidden_user_id'])) {
    $id = $_POST['hidden_user_id'];
    $name = $_POST['updatename'];
    $email = $_POST['updateemail'];
    $mobile = $_POST['updatemobile'];
    $place = $_POST['updateplace'];

    $sql = "UPDATE `crud` SET name=?, email=?, mobile=?, place=? WHERE id=?";
    
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "ssssi", $name, $email, $mobile, $place, $id);
    
    $result = mysqli_stmt_execute($stmt);
    
    if (!$result) {
        die(mysqli_error($con));
    }
    
    mysqli_stmt_close($stmt);
}
?>