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
        background-image: url("black-and-red-abstract-desktop-background.jpg");
    }

#ul {
    list-style: none;
    text-align: center;
    margin-top: 14%;
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
    <li id="li" class="color1"><a id="a" class="color1" href="insert_all.php">Insert</a></li>
    <li id="li" class="color2"><a id="a" href="delete_all.php">Delete</a></li>
    <li id="li" class="color3"><a id="a" href="update_all.php">Update</a></li>

    <!--<li class="color2"><a href="#">Delete Product</a></li>
    <li class="color3"><a href="#">Create New Admin</a></li>-->

</ul>

</body>

</html>