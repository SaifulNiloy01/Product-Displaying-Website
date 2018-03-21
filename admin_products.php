<?php

include("functions/functions.php");

?>





<html>

<head>
  <title>Employee Data</title>
  <style type="text/css">
      table{
          margin-left: 30%;
      }

      form{

          margin-left: 50%;
      }

  </style>
</head>


<body>

<div id="form">
    <form method="get" action="details.php" enctype="multipart/form-data">
        <input type="text" name="user_query" placeholder="Search a Product"/>
        <input type="submit" name="search" value="search"/>
    </form>
</div>

<table width="600" border="1" cellpadding="1" cellspacing="1">

    <tr>
        <!--<th>Id</th>-->
        <th>Title</th>
        <th>Price</th>
        <th>Image</th>
        <th>Category</th>
        <th>Brand</th>



    </tr>


<?php

$get_pro = "select *from products ORDER BY product_title ASC ";
$run_pro = mysqli_query($con, $get_pro);

while ($row_pro = mysqli_fetch_array($run_pro)) {

    $pro_id = $row_pro['product_id'];
    $pro_cat = $row_pro['product_cat'];
    $pro_brand = $row_pro['product_brand'];
    $pro_title = $row_pro['product_title'];
    $pro_price = $row_pro['product_price'];
    $pro_image = $row_pro['product_image'];

    echo "<tr>" ;

        /*echo"<td>$pro_id</td>" ;*/
        echo"<td>$pro_title</td>" ;
        echo"<td>$pro_price</td>" ;
        echo "<td><img src='admin_area/product_images/$pro_image' width='180' height='180'/></td>";
        echo"<td>$pro_cat</td>" ;
        echo"<td>$pro_brand</td>" ;



    echo "<tr/>";
}
?>


</table>


<div id="products_box">
    <?php

    if(isset($_GET['search'])) {

        $search_query = $_GET['user_query'];

        $get_pro = "select *from products WHERE product_keywords like '%$search_query%'";

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
    }
    ?>
</div>

</body>


</html>
