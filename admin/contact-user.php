<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Contact Users</h1>
        <br><br>


        <!-- Table to display users -->
        <table class="tbl-full">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Contact Number</th>
                <th>Email</th>
                <th>Message</th>
            </tr>

            <?php 
                // SQL query to get all users
                $sql = "SELECT * FROM contact_user";
                $res = mysqli_query($conn, $sql);
                if($res == TRUE) {
                    $count = mysqli_num_rows($res);
                    if($count > 0) {
                        while($row = mysqli_fetch_assoc($res)) {
                            $id = $row['id'];
                            $name = $row['full_name'];
                            $number = $row['phone'];
                            $email = $row['email'];
                            $message = $row['message'];
                            
                            ?>
                            <tr>
                                <td><?php echo $id; ?></td>
                                <td><?php echo $name; ?></td>
                                <td><?php echo $number; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $message; ?></td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo "<tr><td colspan='6' class='error'>No Users Added Yet.</td></tr>";
                    }
                }
            ?>
        </table>
    </div>
</div>

<?php include('partials/footer.php'); ?>
