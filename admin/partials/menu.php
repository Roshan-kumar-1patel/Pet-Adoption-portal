<?php 
    include('../config/db_connection.php'); 
    include('login-check.php');

?>
<html>
    <head>
        <title>Pet Adoption Portal - Home Page</title>

        <link rel="stylesheet" href="../css/admin.css">
    </head>
    
    <body>
        <!-- Menu Section Starts -->
        <div class="menu text-center">
            <div class="wrapper">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="manage-admin.php">Admin</a></li>
                    <li><a href="manage-category.php">Category</a></li>
                    <li><a href="manage-pet.php">Pet</a></li>
                    <li><a href="manage-user.php">Users</a></li>
                    <li><a href="contact-user.php">Contact Us</a></li>
                    <li><a href="manage-order.php">Order</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <!-- Menu Section Ends -->