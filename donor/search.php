
<?php

include '../config.php';
$admin = new Admin();

$value=$_GET['value'];

$stmt6 = $admin->ret("SELECT * FROM `orphanage` inner join `location` on location.l_id=orphanage.l_id where location.l_id='$value'");
$n=$stmt6->rowCount();
if($n>0){
while ($row6 = $stmt6->fetch(PDO::FETCH_ASSOC)) {
    
    ?>

    
    <div class="col-md-6 col-lg-3">
        <div class="causes causes-2 text-center ftco-animate">
            <a href="#" class="img w-100" style="background-image: url('../controller/<?php echo $row6['o_photo']; ?>');"></a>
            <div class="text p-3">
                <h2><a href="#">
                        <?php echo $row6['o_name']; ?>
                    </a></h2>
                <p>
                    <?php echo $row6['o_email']; ?>
                </p>
                <p>
                    <?php echo $row6['o_phn']; ?>
                </p>
                <p>
                    <?php echo $row6['o_address']; ?>
                </p>

                <p><a href="donation.php?o_id=<?php echo $row6['o_id']; ?>" class="btn btn-light w-100">Donate Now</a></p>
            </div>
        </div>
    </div>

    


<?php } }
else{?>
No value
<?php } ?>

