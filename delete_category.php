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
                margin-top: 15%;
            }

        </style>



    </head>


    <body bgcolor="black">

    <form action="delete_category.php" method="post" enctype="multipart/form-data">

        <table id="height" align="center" width="900" border="2" bgcolor="black" cellpadding="35px">

            <tr align="center">
                <td colspan="8"><h2>Delete Categories</h2></td>
            </tr>

            <tr>
                <td align="right"><b>Category Title<b/></td>
                <td><input type="text" name="cat_title" size="60" required/></td>
            </tr>




            <tr align="center">
                <td colspan="8"><input type="submit" name="delete_cat" value="Delete Category Now"/></td>
            </tr>

        </table>


    </form>

    </body>


    </html>


<?php

//Getting the text data from the fields
if (isset($_POST['delete_cat'])) {

    $cat_title = $_POST['cat_title'];

    $delete_cat = "delete from categories WHERE cat_title='$cat_title'";

    $delete_pro = mysqli_query($con , $delete_cat);

    if($delete_pro)
    {
        echo  "<script>alert('Category has been Deleted!')</script>";
        echo "<script>window.open('delete','self')</script>" ;
    }

}

?>