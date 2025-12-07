<?php

include '../config.php'; 
$admin = new Admin();

if(isset($_POST['register'])){
    $orph = $_POST['Orph'];
    $add = $_POST['add'];
    $num = $_POST['num'];

    $profile_path = 'profile/'.basename($_FILES['profile']['name']);
    move_uploaded_file($_FILES['profile']['tmp_name'],$profile_path);

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $lid = $_POST['lid'];

    $stmt=$admin->ret("SELECT * FROM `orphanage` WHERE `o_email`='$email'");
    $n = $stmt->rowCount();

    $stmt2=$admin->ret("SELECT * FROM `donor` WHERE `d_email`='$email'");
    $n2 = $stmt2->rowCount();

    $stmt3=$admin->ret("SELECT * FROM `admin` WHERE `email`='$email'");
    $n3 = $stmt3->rowCount();

    if($n>0 || $n2>0 || $n3>0){
        echo "<script> alert('email already exist!!!'); window.location='../login/register.php';  </script>";

    }
    else{

        $stmt=$admin->cud("INSERT INTO `orphanage`( `o_name`, `o_address`, `o_phn`, `o_status`, `o_photo`, `l_id`, `o_email`, `o_password`) VALUES ('$orph','$add','$num','pending','$profile_path','$lid','$email','$pass')","insert");

        echo "<script> alert('register successfull'); window.location='../login/index.php';  </script>";

    }

   
       

    

}


?>