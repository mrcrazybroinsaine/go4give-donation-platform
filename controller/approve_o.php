<?php
    include '../config.php'; 
    $admin = new Admin();
        $oid = $_GET['id'];
        $stmt = $admin->cud("UPDATE `orphanage` SET `o_status`='approved' WHERE `o_id`='$oid'","update");
        echo "<script> alert('approved successfully'); window.location='../admin/template/Orphanages.php';  </script>";
    
    ?>
