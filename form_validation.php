<?php

include("db.php");

?>


<!DOCTYPE HTML>
<html>
<head>
    <style>
        .error {color: #FF0000;}

        body{
            background-image: url("white_scal.jpg");
        }
        
        div{
            margin-top: 10%;
            margin-left: 40%;
            /*background-image: url("green.jpg");*/
        }

        h2{
            margin-left: 7%;
            color: darkred;
        }

    </style>
</head>
<body>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["website"])) {
        $website = "";
    } else {
        $website = test_input($_POST["website"]);
        // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = "Invalid URL";
        }
    }

    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    $password = $_POST['password'];
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<div>


    <h2>Admin Panel</h2>
    <p><span class="error">* required field.</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name" value="<?php echo $name;?>">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        E-mail: <input type="text" name="email" value="<?php echo $email;?>">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>

        Password: <input type="password" name="password" required>

        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>


</div>



<?php



    global $con;

    $get_admin = "select * from admin_panel";

    $run_admin = mysqli_query($con, $get_admin);

    while ($row_admin = mysqli_fetch_array($run_admin)) {

        $name_db = $row_admin['name'];
        $email_db = $row_admin['email'];
        $password_db = $row_admin['password'];

        if(($name == $name_db) && ($email == $email_db) && ($password == $password_db )){

            header("Location: /storm2/insert_or_delete.php");
            exit;

        }
        else {

            echo "Incorrect name/email/password" ;

        }





    }



?>



<?php
/*echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";
echo $password;
*/?>


</body>
</html>