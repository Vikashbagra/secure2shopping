<?php

include('./partials/dbconnection.php');
$id = $_GET['id'];
$query = "DELETE FROM `product` WHERE `id`='$id'";

$result =  mysqli_query($Connection,$query);
if(isset($result)){
    header("location:product's.php");
}

?>