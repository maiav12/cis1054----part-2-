<?php include('partials-front/menu.php'); ?>
    <!--food search section starts here -->
<section class = "food-search text-center">
    <div class = "container">
        <form action =""> 
            <input type ="search" name ="search" placeholder="Search here">
            <input type = "Submit" name="Submit" value="Search" class="btn btn-primary">
        </form>

</div>
</section>
    <!--food search section ends here -->
    <!--categories section starts here -->
<section class = "categories">
<div class= "container"> 
    <h2 class ="text-center">Explore Food</h2>

   

    <div class="boxes float-container"> 
        <img src="images/pizza.jpg"alt="Pizza" class="img-responsive img-curve">
        <h3 class="float-text text-white">Pizza</h3>
    </div>


   
    <div class="boxes float-container"> 
        <img src="images/pasta.jpg"alt="Pasta" class="img-responsive img-curve">
        <h3 class="float-text text-white">Pasta</h3> 
    </div>
    
    
    <div class="boxes float-container"> 
        <img src="images/burger.jpg"alt="Burgers" class="img-responsive img-curve">
        <h3 class="float-text text-white">Burgers</h3> 
    </div>
    

    <div class="clearfix"></div>
    
</div>
</section>
    <!--categories section ends here -->
       <!-- fOOD MEnu Section Starts Here -->
       <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <?php 
            
            //Getting Foods from Database that are active 
            //SQL Query
            $sql2 = "SELECT * FROM tbl_food WHERE active='Yes' AND featured='Yes' LIMIT 6";

            //Execute the Query
            $res2 = mysqli_query($conn, $sql2);

            //Count Rows
            $count2 = mysqli_num_rows($res2);

            //CHeck whether food available or not
            if($count2>0)
            {
                //Food Available
                while($row=mysqli_fetch_assoc($res2))
                {
                    //Get all the values
                    $id = $row['Id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $image_name = $row['image_name'];
                    ?>

                    <div class="food-menu-box">
                        <div class="food-menu-img">
                            <?php 
                                //Check whether image available or not
                                if($image_name=="")
                                {
                                    //Image not Available
                                    echo "<div class='error'>Image not available.</div>";
                                }
                                else
                                {
                                    //Image Available
                                    ?>
                                    <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" class="img-responsive img-curve">
                                    <?php
                                }
                            ?>
                            
                        </div>

                        <div class="food-menu-desc">
                            <h4><?php echo $title; ?></h4>
                            <p class="food-price">€<?php echo $price; ?></p>
                            <p class="food-detail">
                                <?php echo $description; ?>
                            </p>
                            <br>

                            <a href="<?php echo SITEURL; ?>favourites.php?food_id=<?php echo $id; ?>" class="btn btn-primary">Add to Favourites</a>
                        </div>
                    </div>

                    <?php
                }
            }
            else
            {
                //Food Not Available 
                echo "<div class='error'>Food not available.</div>";
            }
            
            ?>

            

 

            <div class="clearfix"></div>

            
        

         <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-burger.jpg" alt="Chicken Burger" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Chicken Burger</h4>
                    <p class="food-price">€15.00</p>
                    <p class="food-detail">
                        ade with crispy chicken, lettuce, tomatoes and onions.
                    </p>
                    <br>

                    <a href="favourites.php" class="btn btn-primary">Add to Favourites</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-pasta.jpg" alt="Chicken Pasta" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Chicken Pasta</h4>
                    <p class="food-price">€12.00</p>
                    <p class="food-detail">
                        Made with white sauce, chicken pieces, mushrooms and peas.
                    </p>
                    <br>

                    <a href="favourites.php" class="btn btn-primary">Add to Favourites</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-Meat.jpg" alt="Meat" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Meat</h4>
                    <p class="food-price">€20.00</p>
                    <p class="food-detail">
                        Meat served with sauce of your choice together with chips and bowl of salad.
                    </p>
                    <br>

                    <a href="favourites.php" class="btn btn-primary">Add to Favourites</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-chicken.jpg" alt="Chicken" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Chicken</h4>
                    <p class="food-price">€14.00</p>
                    <p class="food-detail">
                        Chicken served with sauce of your choice together with chips and a bowl of salad
                    </p>
                    <br>

                    <a href="favourites.php" class="btn btn-primary">Add to Favourites</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-cheeseBurger.png" alt="Cheese Burger" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Cheese Burger</h4>
                    <p class="food-price">€13.00</p>
                    <p class="food-detail">
                        Made with Cheese burger, tomatoes, letuce and onions.
                    </p>
                    <br>

                    <a href="favourites.php" class="btn btn-primary">Add to Favourites</a>
                </div>
            </div>


        <p class="text-center">
            <a href="foods.php">See All Foods</a>
        </p>
    </section>
    <!-- fOOD Menu Section Ends Here -->
 <?php include ('partials-front/footer.php');?>

</body>
</html>