<?php

include("db.php");

?>


    <html>


    <head>

        <style type="text/css">

            body {
                background-image: url("ZoQxhRh.jpg");
            }

            b {
                color: greenyellow;
                font-size: 20px;
            }

            h2 {
                color: yellow;
                font-size: 35px;
            }

            table{
                margin-top: 15%;
            }

        </style>


        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({selector: 'textarea'});</script>


    </head>


    <body bgcolor="black">

    <form action="update_keywords.php" method="post" enctype="multipart/form-data">

        <table align="center" width="850" border="2" bgcolor="black" cellpadding="15px">

            <tr align="center">
                <td colspan="8"><h2>Update Keywords</h2></td>
            </tr>

            <tr>
                <td align="right"><b>Product Title<b/></td>
                <td><input type="text" name="product_title" size="60" required/></td>
            </tr>

            <tr>
                <td align="right"><b>Product Keywords<b/></td>
                <td><input type="text" name="product_keywords" size="60" required/></td>
            </tr>


            <tr align="center">
                <td colspan="8"><input type="submit" name="update_keywords" value="Update Keywords Now"/></td>
            </tr>



        </table>


    </form>

    </body>


    </html>


<?php

//Getting the text data from the fields
if (isset($_POST['update_keywords'])) {

    $product_title = $_POST['product_title'];
    $product_keywords = $_POST['product_keywords'];


    //Getting the image data from the fields


    $update_product = "UPDATE products set product_keywords = '$product_keywords' WHERE product_title = '$product_title'";
    $update_pro = mysqli_query($con , $update_product);



    if($update_pro)
    {
        echo  "<script>alert('Product Keywords has been Updated!')</script>";
        echo "<script>window.open('update_description','self')</script>" ;
    }



}


?>