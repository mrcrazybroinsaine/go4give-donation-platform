<?php

include '../config.php'; 
$admin = new Admin();

if(isset($_POST['donate'])){
    $dtype = $_POST['dtype'];
    $amt = $_POST['amount'];
    $des = $_POST['des'];
    $d_id = $_SESSION['d_id'];
    $fu_id = $_POST['fu_id'];
   
        $stmt=$admin->cud("INSERT INTO `donation`(`do_type`, `d_id`, `do_amount`, `do_description`, `fu_id`) VALUES ('$dtype','$d_id','$amt','$des','$fu_id')","insert");

        echo "<script> alert('donate successfull'); window.location='../donor/index.php';  </script>";

}


?>