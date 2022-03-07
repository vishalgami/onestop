<!DOCTYPE html>
<html>

<head>
    <title>Solid Round Neck T-shirt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="../css/subproduct.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/header.js"></script>
</head>

<body>
    <div class="container-fluid">
        <!--Header-->
        <?php
        include("header.php")
        ?>
        <!-- End of header -->

        <!-- Product details section -->
        <div class="row product-main-section">
            <div class="col-lg-2 product-list">
                <!-- Image list-->
                <div class="image-list-section">
                    <div id="image-list"></div>
                </div>
                <!--End of Image list-->
            </div>
            <div class="col-lg-4 product-image-slider">

                <!--Main image preview section-->


                <div id="main-img"></div>

                <div class="navigation-button">
                    <button class="leftBtn" onclick="left()"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></button>

                    <button class="rightBtn" onclick="right()"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                </div>


                <!-- End of Main image preview section-->




            </div>
            <div class="col-lg-4 product-details-section">
                <div class="product-brand">Puma</div>
                <div class="product-title text-muted">Men Black Solid Round Neck T-shirt</div>
                <hr />
                <div class="product-price">$17 <span class="product-subprice text-muted"><del>$25</del></span></div>
                <br />
                <div class="product-size-title">SELECT SIZE</div>
                <div class="product-size-main">
                    <span class="product-size">S</span>
                    <span class="product-size">M</span>
                    <span class="product-size">L</span>
                    <span class="product-size">XL</span>
                </div><br />
                <div class="product-btn">
                    <a href="cart_items.php"><button type="button" class="product-cart" onclick="addCart()"><i class="fa fa-shopping-bag" style="color:#fff;"></i> ADD TO CART</button></a>
                    <a href="wishlist_items.php"><button type="button" class="product-wishlist" onclick="addList()"> <i class="fa fa-heart-o" style="color:#000;"></i> WISHLIST</button></a>
                </div>
                <hr />
                <div class="product-details">
                    <div class="product-details-title">PRODUCT DETAILS</div>
                    <div class="product-description">Black solid T-shirt, has a round neck, and short sleeves</div>
                    <div class="product-details-subtitle">Specifications</div>
                    <div class="specification-details">
                        <ul>
                            <li>Fabric: <span class="specification-info">Cotton</span></li>
                            <li>Length: <span class="specification-info">Regular</span></li>
                            <li>Fit: <span class="specification-info">Regular Fit</span></li>
                            <li>Occasion: <span class="specification-info">Casual</span></li>
                            <li>Pattern: <span class="specification-info">Solid</span></li>
                            <li>Wash Care: <span class="specification-info">Machine Wash</span></li>
                            <li>Weave Type: <span class="specification-info">Knitted</span></li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>

        <!--footer-->
        <div class="row footer">
            <div class="col footer-column">
                <div class="footer-main-heading">
                    OneStop
                </div>

                <div class="footer-content">
                    If you would like to experience the best of online shopping for men, women and kids, you are at the right place. OneStop is the ultimate destination for fashion and lifestyle. It is time to redefine your style statement with our treasure-trove of trendy items.
                </div>
            </div>
            <div class="col footer-column">
                <div class="footer-heading">
                    Shop By
                </div>
                <br />
                <div class="footer-links">
                    <ul type="none">
                        <li><a href="men.php" class="footer-link">Men</a></li>
                        <li><a href="women.php" class="footer-link">Women</a></li>
                        <li><a href="kids.php" class="footer-link">Kids</a></li>
                        <li><a href="collections.php" class="footer-link">Collections</a></li>
                        <li><a href="new_arrivals.php" class="footer-link">New Arrivals</a></li>
                    </ul>
                </div>
            </div>
            <div class="col footer-column">
                <div class="footer-heading">
                    Useful Links
                </div>
                <br />
                <div class="footer-links">
                    <ul type="none">
                        <li><a href="profile.php" class="footer-link">Account</a></li>
                        <li><a href="orders.php" class="footer-link">Orders</a></li>
                        <li><a href="wishlist.php" class="footer-link">Wishlist</a></li>
                        <li><a href="cart.php" class="footer-link">Shopping Bag</a></li>
                        <li><a href="contact.php" class="footer-link">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--End of footer-->

    </div>
    <script src="../js/product-image.js"></script>
</body>

</html>