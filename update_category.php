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

    <form action="update_category.php" method="post" enctype="multipart/form-data">

        <table id="height" align="center" width="900" border="2" bgcolor="black" cellpadding="35px">

            <tr align="center">
                <td colspan="8"><h2>Update Category</h2></td>
            </tr>

            <tr>
                <td align="right"><b>Category Title<b/></td>
                <td><input type="text" name="category_title" size="60" required/></td>
            </tr>


            <tr>
                <td align="right"><b>New Category Title<b/></td>
                <td><input type="text" name="new_category_title" size="60" required/></td>
            </tr>




            <tr align="center">
                <td colspan="8"><input type="submit" name="update_category" value="Update Category Now"/></td>
            </tr>

        </table>


    </form>

    </body>


    </html>


<?php

//Getting the text data from the fields
if (isset($_POST['update_category'])) {

    $category_title = $_POST['category_title'];

    $new_category_title = $_POST['new_category_title'];

    $update_category = "UPDATE categories set cat_title = '$new_category_title' WHERE cat_title = '$category_title'" ;

    $update_pro = mysqli_query($con , $update_category);

    if($update_pro)
    {
        echo  "<script>alert('Category has been Updated!')</script>";
        echo "<script>window.open('delete','self')</script>" ;
    }

}

?>