
    <?php include('partials-front/menu.php'); ?>

    <!-- pet sEARCH Section Starts Here -->
    <section class="pet-search text-center">
        <div class="container">
            
            <form action="<?php echo SITEURL; ?>dashbord/pet-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Pet.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- pet sEARCH Section Ends Here -->



    <!-- pet MEnu Section Starts Here -->
    <section class="pet-menu">
        <div class="container">
            <h2 class="text-center">Pet Menu</h2>

            <?php 
                //Display pets that are Active
                $sql = "SELECT * FROM tbl_pet WHERE active='Yes'";

                //Execute the Query
                $res=mysqli_query($conn, $sql);

                //Count Rows
                $count = mysqli_num_rows($res);

                //CHeck whether the pets are availalable or not
                if($count>0)
                {
                    //pets Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the Values
                        $id = $row['id'];
                        $title = $row['title'];
                        $description = $row['description'];
                        $price = $row['price'];
                        $image_name = $row['image_name'];
                        ?>
                        
                        <div class="pet-menu-box">
                            <div class="pet-menu-img">
                                <?php 
                                    //CHeck whether image available or not
                                    if($image_name=="")
                                    {
                                        //Image not Available
                                        echo "<div class='error'>Image not Available.</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/pet/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                                        <?php
                                    }
                                ?>
                                
                            </div>

                            <div class="pet-menu-desc">
                                <h4><?php echo $title; ?></h4>
                                <p class="pet-price">₹<?php echo $price; ?></p>
                                <p class="pet-detail">
                                    <?php echo $description; ?>
                                </p>
                                <br>

                                <a href="<?php echo SITEURL; ?>dashbord/order.php?pet_id=<?php echo $id; ?>" class="btn btn-primary">Order Now</a>
                            </div>
                        </div>

                        <?php
                    }
                }
                else
                {
                    //pet not Available
                    echo "<div class='error'>Pet not found.</div>";
                }
            ?>

            

            

            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- pet Menu Section Ends Here -->

    <?php include('partials-front/footer.php'); ?>