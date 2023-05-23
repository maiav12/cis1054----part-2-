<?php include('partials-front/menu.php'); ?>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-pizza.jpg" alt="BBQ Chicken pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>BBQ Chicken Pizza</h4>
                    <p class="food-price">€14.00</p>
                    <p class="food-detail">
                        Made with Italian sauce, chicken, sweet corn, coloured peper and onions.
                    </p>
                    <br>

                    <a href="favourites.php" class="btn btn-primary">Add to Favourites</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-burger.jpg" alt="Chicken Burger" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Chicken Burger</h4>
                    <p class="food-price">€15.00</p>
                    <p class="food-detail">
                        Made with crispy chicken, lettuce, tomatoes and onions.
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
                    <img src="images/menu-meat.jpg" alt="Meat" class="img-responsive img-curve">
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
                    <img src="images/menu-cheeseBurger.png" alt="Cheese Burger" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Cheese Burger</h4>
                    <p class="food-price">€13.00</p>
                    <p class="food-detail">
                        Made with Cheese burger, tomatoes, lettuce and onions.
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
                <img src="images/menu-icecream.jpg" alt="Chocolate ice cream" class="img-responsive img-curve">
            </div>

            <div class="food-menu-desc">
                <h4>Chocolate ice-cream</h4>
                <p class="food-price">€4.00</p>
                <p class="food-detail">
                </p>
                <br>

                <a href="favourites.php" class="btn btn-primary">Add to Favourites</a>
            </div>
        </div>
            <div class="clearfix"></div>

            
            <div class="food-menu-box">
            <div class="food-menu-img">
                <img src="images/menu-cake.jpg" alt="Chocolate cake" class="img-responsive img-curve">
            </div>

            <div class="food-menu-desc">
                <h4>Chocolate cake</h4>
                <p class="food-price">€5.00</p>
                <p class="food-detail">

                </p>
                <br>

                <a href="favourites.php" class="btn btn-primary">Add to Favourites</a>
            </div>
        </div>
        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    <!-- social Section Starts Here -->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/color/48/null/facebook-new.png"/></a>
                </li>
                <li>
                <a href="#"><img src="https://img.icons8.com/color/48/null/instagram-new--v1.png"/></a>
                </li>
                <li>
                  <a href="#" ><img src="https://img.icons8.com/fluency/48/null/apple-mail.png"/></a>
               </li>
                
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By Zalika and Maia</p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>