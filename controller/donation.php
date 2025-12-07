<?php

include '../config.php'; 
$admin = new Admin();

if(isset($_POST['donate'])){
    $dtype = $_POST['dtype'];
    $amt = $_POST['amount'];
    $des = $_POST['des'];
    $d_id = $_SESSION['d_id'];
    $o_id = $_POST['o_id'];
    
   
        $stmt=$admin->cud("INSERT INTO `donation`(`do_type`, `d_id`, `do_amount`, `do_description`,`o_id`) VALUES ('$dtype','$d_id','$amt','$des','$o_id')","insert");

        echo "<script> alert('donate successfull'); window.location='../donor/index.php';  </script>";

}


?>