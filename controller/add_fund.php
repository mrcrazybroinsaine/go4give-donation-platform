<?php
    include '../config.php'; 
    $admin = new Admin();
    if(isset($_POST['btn'])){
        $location = $_POST['loc'];
        $cause = $_POST['cause'];
        $ldate = $_POST['ldate'];
        $des = $_POST['des'];
        $amt = $_POST['amt'];
        $poster_path = 'poster/'.basename($_FILES['poster']['name']);
        move_uploaded_file($_FILES['poster']['tmp_name'],$poster_path);

        $stmt = $admin->cud("INSERT INTO `fundraiser`(`fu_amt`, `fu_desc`, `lst_date`, `poster`, `cause`, `location`) VALUES ('$amt','$des','$ldate','$poster_path','$cause','$location')","inserted");

        echo "<script> alert('fund added successfully'); window.location='../admin/template/View_Fundraisers.php';  </script>";
    }
?>