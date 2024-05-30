
    <?php include('partials-front/menu.php'); ?>

    <!-- pet sEARCH Section Starts Here -->
    <section class="pet-search text-center">
        <div class="container">
            <?php 

                //Get the Search Keyword
                // $search = $_POST['search'];
                $search = mysqli_real_escape_string($conn, $_POST['search']);
            
            ?>


            <h2>Pets on Your Search <a href="#" class="text-white">"<?php echo $search; ?>"</a></h2>

        </div>
    </section>
    <!-- pet sEARCH Section Ends Here -->



    <!-- pet MEnu Section Starts Here -->
    <section class="pet-menu">
        <div class="container">
            <h2 class="text-center">Pet Menu</h2>

            <?php 

                //SQL Query to Get pets based on search keyword
                //$search = burger '; DROP database name;
                // "SELECT * FROM tbl_pet WHERE title LIKE '%burger'%' OR description LIKE '%burger%'";
                $sql = "SELECT * FROM tbl_pet WHERE title LIKE '%$search%' OR description LIKE '%$search%'";

                //Execute the Query
                $res = mysqli_query($conn, $sql);

                //Count Rows
                $count = mysqli_num_rows($res);

                //Check whether pet available of not
                if($count>0)
                {
                    //pet Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the details
                        $id = $row['id'];
                        $title = $row['title'];
                        $price = $row['price'];
                        $description = $row['description'];
                        $image_name = $row['image_name'];
                        ?>

                        <div class="pet-menu-box">
                            <div class="pet-menu-img">
                                <?php 
                                    // Check whether image name is available or not
                                    if($image_name=="")
                                    {
                                        //Image not Available
                                        echo "<div class='error'>Image not Available.</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/pet/<?php echo $image_name; ?>" alt="pet img" class="img-responsive img-curve">
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

                                <a href="#" class="btn btn-primary">Order Now</a>
                            </div>
                        </div>

                        <?php
                    }
                }
                else
                {
                    //pet Not Available
                    echo "<div class='error'>Pet not found.</div>";
                }
            
            ?>

            

            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- pet Menu Section Ends Here -->

    <?php include('partials-front/footer.php'); ?>