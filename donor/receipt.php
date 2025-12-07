<?php
include '../config.php';
$admin = new Admin();


if (!isset($_SESSION['d_id'])) {
    $admin->redirect('../login/index');
}

$d_id = $_SESSION['d_id'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .receipt-container {
    width: 60%;
    margin: 30px auto;
    padding: 20px;
    border: 2px solid #000;
    box-shadow: 4px 4px 12px rgba(0, 0, 0, 0.2);
    background: #fff;
    font-family: Arial, sans-serif;
}

.receipt-header {
    text-align: center;
    border-bottom: 2px solid #000;
    padding-bottom: 10px;
    margin-bottom: 20px;
}

.receipt-title {
    font-size: 24px;
    font-weight: bold;
}

.receipt-details {
    margin-bottom: 20px;
}

.receipt-details p {
    font-size: 16px;
    margin: 5px 0;
}

.receipt-footer {
    text-align: center;
    font-size: 14px;
    margin-top: 20px;
    border-top: 1px solid #000;
    padding-top: 10px;
}
</style>
    <title>Unicare - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">


    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <p class="mb-0 phone pl-md-2">
                        <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> 9876543210</a>
                        <a href="#"><span class="fa fa-paper-plane mr-1"></span>go4give@gmail.com</a>
                    </p>
                </div>
                <div class="col-md-6 d-flex justify-content-md-end">
                    <div class="social-media">
                        <p class="mb-0 d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'header.php'; ?>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <!-- <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact us <i class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-0 bread">Contact us</h1>
                </div>
            </div>
        </div> -->
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">

                        <div class="row no-gutters">
                            <table class='table'>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Ophanage Name</th>
                                    <th>View</th>
                                </tr>
                                <?php
                                $stmt2 = $admin->ret("SELECT * FROM `donation` inner join `orphanage` on donation.o_id=orphanage.o_id where `d_id`='$d_id' and `do_status` ='receipt'");
                                $c=1;
                                while($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)){
                                ?>

                                <tr>
                                    <td><?php echo $c++; ?></td>
                                    <td><?php echo $row2['o_name']; ?></td>
                                    <td> <a class="btn btn-primary" href="receipt/receipt_page.php?do_id=<?php echo $row2['do_id']; ?>">View</a> </td>
                                </tr>
                                    
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-12">
                    <div id="map" class="map"></div>
                </div> -->
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>




    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>