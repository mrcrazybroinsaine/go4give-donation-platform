<?php

include '../config.php'; 
$admin = new Admin();

    session_destroy();
    unset($_SESSION['d_id']);

    
    echo "<script> alert('logout successfull'); window.location='../login/index.php';  </script>";



?>