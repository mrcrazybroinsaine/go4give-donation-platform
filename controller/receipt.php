<?php
    include '../config.php'; 
    $admin = new Admin();

    if(isset($_GET['do_id'])){
       
        $do_id = $_GET['do_id'];

        $stmt = $admin->cud("UPDATE `donation` SET `do_status`='receipt' WHERE `do_id`='$do_id'","update");

        echo "<script> alert('receipt send successfully'); window.location='../orphanage/template/index.php';  </script>";
    }
    ?>
