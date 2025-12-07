<?php
    include '../config.php'; 
    $admin = new Admin();

    if(isset($_POST['add'])){
        $location = $_POST['loc'];

        $stmt = $admin->cud("INSERT INTO `location`( `l_name`, `l_status`) VALUES ('$location','active')","inserted");

        echo "<script> alert('location added successfully'); window.location='../admin/template/View_Location.php';  </script>";
    }   

?>