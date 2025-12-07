<?php
    include '../config.php'; 
    $admin = new Admin();

    $id = $_GET['id'];
    
        $stmt = $admin->cud("DELETE FROM `location` WHERE `l_id`='$id' ","deleted");

        echo "<script> alert('location deleted successfully'); window.location='../admin/template/View_Location.php';  </script>";
    

?>