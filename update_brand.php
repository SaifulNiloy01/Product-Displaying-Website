<?php

include("db.php");

?>


    <html>


    <head>

        <style type="text/css">

            body {
                background-image: url("stylish-red-and-black-wallpapers.jpg");
            }

            b {
                color: greenyellow;
                font-size: 20px;
            }

            h2 {
                color: yellow;
                font-size: 35px;
            }

            #height{
                margin-top: 12%;
            }

        </style>



    </head>


    <body bgcolor="black">

    <form action="update_brand.php" method="post" enctype="multipart/form-data">

        <table id="height" align="center" width="900" border="2" bgcolor="black" cellpadding="35px">

            <tr align="center">
                <td colspan="8"><h2>Update Brand</h2></td>
            </tr>

            <tr>
                <td align="right"><b>Brand Title<b/></td>
                <td><input type="text" name="brand_title" size="60" required/></td>
            </tr>


            <tr>
                <td align="right"><b>New Brand Title<b/></td>
                <td><input type="text" name="new_brand_title" size="60" required/></td>
            </tr>




            <tr align="center">
                <td colspan="8"><input type="submit" name="update_brand" value="Update Brand Now"/></td>
            </tr>

        </table>


    </form>

    </body>


    </html>


<?php

//Getting the text data from the fields
if (isset($_POST['update_brand'])) {

    $brand_title = $_POST['brand_title'];

    $new_brand_title = $_POST['new_brand_title'];

    $update_brand = "UPDATE brands set brand_title = '$new_brand_title' WHERE brand_title = '$brand_title'" ;

    $update_pro = mysqli_query($con , $update_brand);

    if($update_pro)
    {
        echo  "<script>alert('Brand has been Updated!')</script>";
        echo "<script>window.open('delete','self')</script>" ;
    }

}

?>