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

    <form action="update_product_image.php" method="post" enctype="multipart/form-data">

        <table align="center" width="850" border="2" bgcolor="black" cellpadding="15px">

            <tr align="center">
                <td colspan="8"><h2>Update Image</h2></td>
            </tr>

            <tr>
                <td align="right"><b>Product Title<b/></td>
                <td><input type="text" name="product_title" size="60" required/></td>
            </tr>

            <tr>
                <td align="right"><b>Product Image<b/></td>
                <td><input type="file" name="product_image" required/></td>
            </tr>


            <tr align="center">
                <td colspan="8"><input type="submit" name="update_image" value="Update Image Now"/></td>
            </tr>



        </table>


    </form>

    </body>


    </html>


<?php

//Getting the text data from the fields
if (isset($_POST['update_image'])) {

    $product_title = $_POST['product_title'];



    //Getting the image data from the fields
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp = $_FILES['product_image']['tmp_name'];

    move_uploaded_file($product_image_tmp , "product_images/$product_image");


    $update_image = "UPDATE products set product_image =  '$product_image' WHERE product_title = '$product_title'";
    $update_pro = mysqli_query($con , $update_image);



    if($update_pro)
    {
        echo  "<script>alert('Product Image has been Updated!')</script>";
        echo "<script>window.open('update_description','self')</script>" ;
    }



}


?>