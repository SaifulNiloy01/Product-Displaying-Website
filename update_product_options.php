<html>

<head>
    <style>

        .color1{
            background-color: #13ff27;
        }

        .color2{
            background-color: #fff423;
        }

        .color3{
            background-color: #ffaffe;
        }

        body{
            background-image: url("blue.jpg");
        }

        #ul {
            list-style: none;
            text-align: center;
            margin-top: 9%;
            margin-left: 30%;
            font-size: 50px;
        }

        #li{
            border: 2px solid red;
            /*background-color: #19ff17;*/
            width: 500px;
            padding: 30px;
            color: red;
        }


        #a{
            color: #ff0b00;
            text-decoration: none;
        }


        a:hover{
            background-color: black;
        }




    </style>
</head>

<body>

<ul id="ul">
    <li id="li" class="color1"><a id="a" class="color1" href="update_product.php">Update Price</a></li>
    <li id="li" class="color2"><a id="a" href="update_description.php">Update Description</a></li>
    <li id="li" class="color3"><a id="a" href="update_keywords.php">Update Keywords</a></li>
    <li id="li" class="color1"><a id="a" href="admin_area/update_product_image.php">Update Image</a></li>


    <!--<li class="color2"><a href="#">Delete Product</a></li>
    <li class="color3"><a href="#">Create New Admin</a></li>-->

</ul>

</body>

</html>