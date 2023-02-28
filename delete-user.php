<?php
include('connect.php');

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM `tbl_users` WHERE id = $id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo 'Date Inserted';
        header('location:user.php');
    } else {
        die(mysqli_error($con));
    }
}
?>