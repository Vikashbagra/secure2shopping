<?php
session_start();
session_unset();
if(session_destroy()){
    header('location:login.php');
}


?>