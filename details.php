<!doctype>

<?php

include("functions/functions.php");

?>


<?php

$con = mysqli_connect("127.0.0.1" , "root" , "" , "product_show") ;


if (mysqli_connect_errno()) {

    echo "failed to connect mysqli". mysqli_connect_errno();

}

if (isset($_GET['pro_id'])) {

    $product_id = $_GET['pro_id'];

    $query = "update products set value = value+1 where product_id = $product_id";

    $run_query = mysqli_query($con, $query);

    $result = "Select *from statistics where name='hits'";

    $run_result = mysqli_query($con, $result);

    /*while ($row_result = mysqli_fetch_array($run_result)) {
        echo "Hits: " . $row_result['value'];
    }*/

}

?>








<html>

<head>
    <title>NR Computers</title>
    <link rel="stylesheet" href="style.css" media="all"/>
    <style type="text/css">
        
        body{
            background-image: url("stylish-red-and-black-wallpapers.jpg");
        }
        
    </style>
</head>


<body>

<!--Main container starts here-->



<div class="main_wrapper">




    <!-- COntent wrapper starts here -->
    <div class="content_wrapper">



        <div id="content_area_detail">


            <div id="products_box">


                <?php
                if (isset($_GET['pro_id'])) {

                    $product_id = $_GET['pro_id'];

                    $get_pro = "select *from products WHERE product_id='$product_id'";

                    $run_pro = mysqli_query($con, $get_pro);

                    while ($row_pro = mysqli_fetch_array($run_pro)) {

                        $pro_id = $row_pro['product_id'];
                        $pro_title = $row_pro['product_title'];
                        $pro_price = $row_pro['product_price'];
                        $pro_image = $row_pro['product_image'];
                        $pro_desc = $row_pro['product_desc'];

                        echo "<div id='single_product'>

             <h3>$pro_title</h3>
             <img src='admin_area/product_images/$pro_image' width='400' height='300'/>

             <p><b>Price: $pro_price taka</b></p>

             <p>$pro_desc</p>

             <a href='index.php' style='float: left'>Go back</a>



             </div>";

                    }
                }
                ?>


            </div>

        </div>



    </div>
    <!-- COntent wrapper ENDS here -->


    

</div>

<!--Main container Ends here-->

</body>


</html>

