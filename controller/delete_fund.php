<?php
    include '../config.php'; 
    $admin = new Admin();

    $id = $_GET['id'];
    
        $stmt = $admin->cud("DELETE FROM `fundraiser` WHERE `fu_id`='$id' ","deleted");

        echo "<script> alert('fundraisers deleted successfully'); window.location='../admin/template/View_Fundraisers.php';  </script>";
    

?>