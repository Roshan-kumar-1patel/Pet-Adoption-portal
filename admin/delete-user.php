<?php
    include('../config/db_connection.php');

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE FROM users WHERE id=$id";
        $res = mysqli_query($conn, $sql);

        if($res == TRUE) {
            $_SESSION['update'] = "<div class='success'>User Deleted Successfully.</div>";
            header('location:'.SITEURL.'admin/manage-user.php');
        } else {
            $_SESSION['update'] = "<div class='error'>Failed to Delete User.</div>";
            header('location:'.SITEURL.'admin/manage-user.php');
        }
    } else {
        header('location:'.SITEURL.'admin/manage-user.php');
    }
?>
