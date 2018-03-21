<?php

$con = mysqli_connect("127.0.0.1" , "root" , "" , "product_show") ;


if (mysqli_connect_errno()) {

    echo "failed to connect mysqli". mysqli_connect_errno();

}

$query = "update statistics set value = value+1 where name = 'hits'";

$run_query = mysqli_query($con , $query);

$result = "Select *from statistics where name='hits'";

$run_result = mysqli_query($con , $result);

while($row_result = mysqli_fetch_array($run_result)) {
    echo "Hits: " . $row_result['value'];
}

?>




