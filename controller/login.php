<?php

include '../config.php'; 
$admin = new Admin();

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $stmt = $admin->ret("select * from `admin` where `email`='$email' and `password`='$pass'");
    $n= $stmt->rowCount();

    $stmt2 = $admin->ret("select * from `orphanage` where `o_email`='$email' and `o_password`='$pass'");
    $n2= $stmt2->rowCount();

    $stmt3 = $admin->ret("select * from `donor` where `d_email`='$email' and `password`='$pass'");
    $n3= $stmt3->rowCount();


    if($n>0){
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        $id = $row['a_id'];
        $_SESSION['a_id'] = $id;
        echo "<script> alert('login successfully'); window.location='../admin/template/index.php';  </script>";

    }

    if($n2>0){
        $row2=$stmt2->fetch(PDO::FETCH_ASSOC);
        $id = $row2['o_id'];
        $_SESSION['o_id'] = $id;
        echo "<script> alert('login successfully'); window.location='../orphanage/template/index.php';  </script>";

    }

    if($n3>0){
        $row3=$stmt3->fetch(PDO::FETCH_ASSOC);
        $id = $row3['d_id'];
        $_SESSION['d_id'] = $id;
        echo "<script> alert('login successfully'); window.location='../donor/index.php';  </script>";

    }

    else{
        echo "<script> alert('email or password is wrong'); window.location='../login/index.php';  </script>";

    }

}


?>