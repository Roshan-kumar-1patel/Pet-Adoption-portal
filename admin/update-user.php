<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update User</h1>
        <br><br>

        <?php
            // Check whether id is set or not
            if(isset($_GET['id'])) {
                $id = $_GET['id'];

                // SQL query to get the user details
                $sql = "SELECT * FROM users WHERE id=$id";
                $res = mysqli_query($conn, $sql);

                if($res == TRUE) {
                    $count = mysqli_num_rows($res);
                    if($count == 1) {
                        $row = mysqli_fetch_assoc($res);
                        $fname = $row['first_name'];
                        $lname = $row['last_name'];
                        $number = $row['contact_number'];
                        $email = $row['email'];
                        $address = $row['address'];
                    } else {
                        header('location:'.SITEURL.'admin/manage-user.php');
                    }
                }
            } else {
                header('location:'.SITEURL.'admin/manage-user.php');
            }
        ?>

        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>First Name: </td>
                    <td>
                        <input type="text" name="first_name" value="<?php echo $fname; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Last Name: </td>
                    <td>
                        <input type="text" name="last_name" value="<?php echo $lname; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Contact Number: </td>
                    <td>
                        <input type="text" name="contact_number" value="<?php echo $number; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td>
                        <input type="email" name="email" value="<?php echo $email; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Address: </td>
                    <td>
                        <textarea name="address" cols="30" rows="5"><?php echo $address; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update User" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>

        <?php
            if(isset($_POST['submit'])) {
                $id = $_POST['id'];
                $fname = $_POST['first_name'];
                $lname = $_POST['last_name'];
                $number = $_POST['contact_number'];
                $email = $_POST['email'];
                $address = $_POST['address'];

                // SQL query to update user details
                $sql2 = "UPDATE users SET 
                    first_name = '$fname',
                    last_name = '$lname',
                    contact_number = '$number',
                    email = '$email',
                    address = '$address'
                    WHERE id=$id
                ";

                $res2 = mysqli_query($conn, $sql2);

                if($res2 == TRUE) {
                    $_SESSION['update'] = "<div class='success'>User Updated Successfully.</div>";
                    header('location:'.SITEURL.'admin/manage-user.php');
                } else {
                    $_SESSION['update'] = "<div class='error'>Failed to Update User.</div>";
                    header('location:'.SITEURL.'admin/manage-user.php');
                }
            }
        ?>
    </div>
</div>

<?php include('partials/footer.php'); ?>
