<?php

include '../config.php';
$admin = new Admin();

if (isset($_POST['feed'])) {

    $d_id = $_SESSION['d_id'];
    $o_id = $_POST['o_id'];
    $msg = $_POST['message'];


    $stmt = $admin->cud("INSERT INTO `feedback`(`f_msg`, `o_id`, `d_id`) VALUES ('$msg','$o_id','$d_id')", "insert");

    echo "<script> alert('feedback sent successfull'); window.location='../donor/orphanage.php';  </script>";

}


?>