<?php
include('./config/db_connection.php'); // Adjust the path as needed to include your database connection

if (isset($_POST['email']) && isset($_POST['number'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['number']);

    // Check if email and mobile number match
    $sql = "SELECT * FROM users WHERE email='$email' AND contact_number='$mobile'";
    $res = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res) == 1) {
        $row = mysqli_fetch_assoc($res);
        $password = $row['password'];

        //popup alert
        echo "<script>alert('Your password is: $password');</script>";
        //location
        echo "<script>location.href='register.html';</script>";

        } else {
            //popup alert
            echo "<script>alert('Email and mobile number do not match our records.');</script>";
            echo "<script>location.href='register.html';</script>";
            //echo "<p>Email and mobile number do not match our records.</p>";
        }
    } else {
        echo "<script>alert('Email and mobile number do not match our records.');</script>";
        echo "<script>location.href='register.html';</script>";
    }

?>
