
<?php include('partials-front/menu.php'); ?>

    <?php 
        //CHeck whether pet id is set or not
        if(isset($_GET['pet_id']))
        {
            //Get the pet id and details of the selected pet
            $pet_id = $_GET['pet_id'];

            //Get the DEtails of the SElected pet
            $sql = "SELECT * FROM tbl_pet WHERE id=$pet_id";
            //Execute the Query
            $res = mysqli_query($conn, $sql);
            //Count the rows
            $count = mysqli_num_rows($res);
            //CHeck whether the data is available or not
            if($count==1)
            {
                //WE Have DAta
                //GEt the Data from Database
                $row = mysqli_fetch_assoc($res);

                $title = $row['title'];
                $price = $row['price'];
                $image_name = $row['image_name'];
            }
            else
            {
                //pet not Availabe
                //REdirect to Home Page
                header('location:'.SITEURL);
            }
        }
        else
        {
            //Redirect to homepage
            header('location:'.SITEURL);
        }
    ?>

    <!-- pet sEARCH Section Starts Here -->
    <section class="pet-search">
        <div class="container ">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="" method="POST" class="order">
                <fieldset>
                    <legend class="text-white">Selected Pet</legend>

                    <div class="pet-menu-img">
                        <?php 
                        
                            //CHeck whether the image is available or not
                            if($image_name=="")
                            {
                                //Image not Availabe
                                echo "<div class='error'>Image not Available.</div>";
                            }
                            else
                            {
                                //Image is Available
                                ?>
                                <img src="<?php echo SITEURL; ?>images/pet/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                                <?php
                            }
                        
                        ?>
                        
                    </div>
    
                    <div class="pet-menu-desc">
                        <h3 class="text-white"><?php echo $title; ?></h3>
                        <input type="hidden" name="pet" value="<?php echo $title; ?>">

                        <p class="pet-price text-white">₹ <?php echo $price; ?></p>
                        <input class="text-white" type="hidden" name="price" value="<?php echo $price; ?>">

                        <div class="order-label text-white">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend class="text-white">Delivery Details</legend>
                    <div class="order-label text-white">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. Roshan Patel" class="input-responsive" required>

                    <div class="order-label text-white">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 9843xxxxxx" class="input-responsive" required>

                    <div class="order-label text-white">Email</div>
                    <input type="email" name="email" placeholder="E.g. roshankumar1patel@gmail.com" class="input-responsive" required>

                    <div class="order-label text-white">Address</div>
                    <textarea name="address" rows="5" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>

            <?php 

                //CHeck whether submit button is clicked or not
                if(isset($_POST['submit']))
                {
                    // Get all the details from the form
                    if(isset($_SESSION['userID']))
                    {
                        $userID = $_SESSION['userID'];
                    }
                    else
                    {
                        $userID = 0;
                    }

                    $pet = $_POST['pet'];
                    $price = $_POST['price'];
                    $qty = $_POST['qty'];

                    $total = $price * $qty; // total = price x qty 

                    $order_date = date("Y-m-d h:i:sa"); //Order DAte

                    $status = "Ordered";  // Ordered, On Delivery, Delivered, Cancelled

                    $customer_name = $_POST['full-name'];
                    $customer_contact = $_POST['contact'];
                    $customer_email = $_POST['email'];
                    $customer_address = $_POST['address'];

                    

                    //Save the Order in Databaase
                    //Create SQL to save the data
                    $sql2 = "INSERT INTO tabl_order SET
                        user_id = $userID, 
                        pet = '$pet',
                        price = $price,
                        qty = $qty,
                        total = $total,
                        order_date = '$order_date',
                        status = '$status',
                        customer_name = '$customer_name',
                        customer_contact = '$customer_contact',
                        customer_email = '$customer_email',
                        customer_address = '$customer_address'
                    ";

                    //echo $sql2; die();

                    //Execute the Query
                    $res2 = mysqli_query($conn, $sql2);

                    //Check whether query executed successfully or not
                    if($res2==true)
                    {
                        //Query Executed and Order Saved
                        $_SESSION['order'] = "<div class='success text-center'>Pet Ordered Successfully.</div>";
                        #header('location:'.SITEURL."dashbord");
                        echo "<script>window.location.href='http://localhost:82/drool_demo/dashbord/';</script>";
                    }
                    else
                    {
                        //Failed to Save Order
                        $_SESSION['order'] = "<div class='error text-center'>Failed to Order Pet.</div>";
                        #header('location:'.SITEURL."dashbord");
                        echo "<script>window.location.href='http://localhost:82/drool_demo/dashbord/';</script>";
                    }

                }
            
            ?>

        </div>
    </section>
    <!-- pet sEARCH Section Ends Here -->

    <?php include('partials-front/footer.php'); ?>