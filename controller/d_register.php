<?php

include '../config.php'; 
$admin = new Admin();

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $add = $_POST['add'];
    $num = $_POST['num'];

    $profile_path = 'profile/'.basename($_FILES['profile']['name']);
    move_uploaded_file($_FILES['profile']['tmp_name'],$profile_path);

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $age = $_POST['age'];

    $stmt=$admin->ret("SELECT * FROM `orphanage` WHERE `o_email`='$email'");
    $n = $stmt->rowCount();

    $stmt2=$admin->ret("SELECT * FROM `donor` WHERE `d_email`='$email'");
    $n2 = $stmt2->rowCount();

    $stmt3=$admin->ret("SELECT * FROM `admin` WHERE `email`='$email'");
    $n3 = $stmt3->rowCount();

    if($n>0 || $n2>0 || $n3>0){
        echo "<script> alert('email already exist!!!'); window.location='../login/donor_register.php';  </script>";

    }
    else{

        $stmt=$admin->cud("INSERT INTO `donor`( `d_email`, `password`, `d_name`, `d_phone`, `d_age`, `d_address`, `d_profile`) VALUES ('$email','$pass','$name','$num','$age','$add','$profile_path')","insert");

        echo "<script> alert('register successfull'); window.location='../login/index.php';  </script>";

    }

   
       

    

}


?>