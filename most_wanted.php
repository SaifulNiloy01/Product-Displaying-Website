<!doctype>

<?php

include("functions/functions.php");

?>

<html>

<head>
    <title>NR Computers</title>
    <link rel="stylesheet" href="style.css" media="all"/>
    <style type="text/css">
        body {
            background-image: url("Sign_Templat.jpg");
        }
    </style>
</head>


<body>

<!--Main container starts here-->

<div class="main_wrapper">

    <!--Header starts here-->

    <div class="header_wrapper">


        <a href="index.php"><img id="logo" src="NR shop.png" height="148" width="500"/></a>
        <img id="banner" src="insearch.jpg" height="148" width="500"/>

    </div>

    <!--Header ends here-->

    <!-- Navigation bar starts here !-->
    <div class="menubar">
        <ul id="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="all_products">All products</a></li>
            <!--<li><a href="#">My Account</a></li>
            <li><a href="#">Sign Up</a></li>-->
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="login.php">Admin</a></li>
        </ul>

        <div id="form">
            <form method="get" action="results.php" enctype="multipart/form-data">
                <input type="text" name="user_query" placeholder="Search a Product"/>
                <input type="submit" name="search" value="search"/>
            </form>
        </div>


    </div>

    <!-- Navigation bar Ends here !-->

    <!-- COntent wrapper starts here -->
    <div class="content_wrapper">

        <div id="sidebar">

            <div id="cats_background">Categories</div>

            <ul id="cats">
                <!--<li><a href="#">Laptops</a></li>
                <li><a href="#">Computers</a></li>
                <li><a href="#">Cameras</a></li>
                <li><a href="#">iPads</a></li>
                <li><a href="#">Laptops</a></li>
                <li><a href="#">Tablets</a></li>-->

                <?php

                getCats();

                ?>

            </ul>


            <div id="brands_background">Brands</div>

            <ul id="cats">
                <!--<li><a href="#">HP</a></li>
                <li><a href="#">DELL</a></li>
                <li><a href="#">Samsung</a></li>
                <li><a href="#">Sony Eracson</a></li>
                <li><a href="#">LG</a></li>
                <li><a href="#">Apple</a></li>-->

                <?php

                getBrands();

                ?>


            </ul>


        </div>


        <div id="content_area"><!--This is content area-->


            <div id="shopping_cart">

                <span
                    style="float: none; font-size: 18px; padding: 5px; line-height: 40px; margin-left: 250px; color: yellow">Welcome to our Computershop!</span>

            </div>

            <div id="products_box">
                <?php

                $get_pro = "select *from products order by value desc limit 9";

                $run_pro = mysqli_query($con, $get_pro);

                while ($row_pro = mysqli_fetch_array($run_pro)) {

                    $pro_id = $row_pro['product_id'];
                    $pro_cat = $row_pro['product_cat'];
                    $pro_brand = $row_pro['product_brand'];
                    $pro_title = $row_pro['product_title'];
                    $pro_price = $row_pro['product_price'];
                    $pro_image = $row_pro['product_image'];

                    echo "<div id='single_product'>

             <h3>$pro_title</h3>
             <img src='admin_area/product_images/$pro_image' width='180' height='180'/>

             <p><b>Price: $pro_price taka</b></p>

             <a id='detail' href='details.php?pro_id=$pro_id'>Details</a>



             </div>";

                }

                ?>
            </div>

        </div>

    </div>
    <!-- COntent wrapper ENDS here -->


    <div id="footer"><!--This is the footer-->

        <h2 style="text-align: center; padding-top: 20px;">&copy; 2016 by www.NRcomputershop.com </h2>

    </div>

</div>

<!--Main container Ends here-->

</body>


</html>
