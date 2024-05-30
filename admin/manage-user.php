<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Users</h1>
        <br><br>

        <?php 
            // Display session message if set
            if(isset($_SESSION['update'])) {
                echo $_SESSION['update'];
                unset($_SESSION['update']);
            }
        ?>

        <!-- Table to display users -->
        <table class="tbl-full">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Contact Number</th>
                <th>Email</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>

            <?php 
                // SQL query to get all users
                $sql = "SELECT * FROM users";
                $res = mysqli_query($conn, $sql);
                if($res == TRUE) {
                    $count = mysqli_num_rows($res);
                    if($count > 0) {
                        while($row = mysqli_fetch_assoc($res)) {
                            $id = $row['id'];
                            $fname = $row['first_name'];
                            $lname = $row['last_name'];
                            $number = $row['contact_number'];
                            $email = $row['email'];
                            $address = $row['address'];
                            $name = $fname . " " . $lname;

                            ?>
                            <tr>
                                <td><?php echo $id; ?></td>
                                <td><?php echo $name; ?></td>
                                <td><?php echo $number; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $address; ?></td>
                                <td>
                                    <a href="update-user.php?id=<?php echo $id; ?>" class="btn-secondary">Update User</a>
                                    <a href="delete-user.php?id=<?php echo $id; ?>" class="btn-danger">Delete User</a>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo "<tr><td colspan='5' class='error'>No Users Added Yet.</td></tr>";
                    }
                }
            ?>
        </table>
    </div>
</div>

<?php include('partials/footer.php'); ?>
