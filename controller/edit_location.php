<?php
    include '../config.php'; 
    $admin = new Admin();

    if(isset($_POST['edit'])){
        $location = $_POST['loc'];
        $lid = $_POST['lid'];

        $stmt = $admin->cud("UPDATE `location` SET `l_name`='$location' WHERE `l_id`='$lid'","update");

        echo "<script> alert('location updated successfully'); window.location='../admin/template/View_Location.php';  </script>";
    }
    ?>
