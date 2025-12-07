<?php
include '../config.php';
$admin = new Admin();

?>

<!doctype html>
<html lang="en">

<head>
    <title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(images/bg.jpg); backgorund-size:100% 100%">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Donation Register</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Have an account?</h3>
                        <form action="../controller/d_register.php" method='post' enctype="multipart/form-data"
                            class="signin-form">



                            <!-- <div class="form-group">
                          <select class="form-control" name="lid" required>
                            <option style="color:black" value="">Select Location</option>
                            
                            <?php
                            $stmt = $admin->ret("SELECT * FROM `location`");
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                ?>

                                <option style="color:black" value="<?php echo $row['l_id']; ?>"><?php echo $row['l_name']; ?></option>

                            <?php } ?>

                        </select>
                        
                      </div> -->
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" required>

                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="add" placeholder="Address" required>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="num" placeholder="Phone No." required>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Image <label>
                                        <input type="file" class="form-control" id="exampleInputPassword1"
                                            name="profile">
                            </div>

                            <div class="form-group">
                                <input type="number" class="form-control" name="age" placeholder="Age." required>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>


                            <div class="form-group">
                                <input id="password-field" type="password" class="form-control" name="pass"
                                    placeholder="Password" required>
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>

                            <div class="form-group">
                                <button type="submit" name="register"
                                    class="form-control btn btn-primary submit px-3">Register</button>
                            </div>
                            <!-- <div class="form-group d-md-flex">
                    <div class="w-50">
                        <label class="checkbox-wrap checkbox-primary">Remember Me
                                      <input type="checkbox" checked>
                                      <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#" style="color: #fff">Forgot Password</a>
                                </div>
                </div> -->
                        </form>
                        <!-- <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p> -->
                        <!-- <div class="social d-flex text-center">
                  <a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
                  <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
              </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>