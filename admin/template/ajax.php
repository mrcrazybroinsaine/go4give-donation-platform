<?php
include '../../config.php';
$admin = new Admin();

$start= $_GET['s'];
$end= $_GET['e'];
?>



<div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          
                          <th>Donor Profile</th>
                          <th>Donor Name</th>
                          <th>Phone</th>
                          <th>Type</th>
                          <th>Amount</th>
                          <th>Description</th>
                          <th>Date</th>
                                      
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                       $stmt=$admin->ret("SELECT * FROM `donation` inner join `donor` on donation.d_id=donor.d_id where `do_date` between '$start' and '$end'");
                       while($row=$stmt->fetch(PDO::FETCH_ASSOC)){ 
                         
                     ?>
                     <tr>
              
                         <td>   <img src="../../controller/<?php echo $row['d_profile']; ?>" style="height:100px; width:100px" alt="no image">      </td>
                         <td><?php echo $row['d_name']; ?></td>
                       <td><?php echo $row['d_phone']; ?></td>
                          <td><?php echo $row['do_type']; ?></td>
                          <td><?php echo $row['do_amount']; ?></td>
                          <td><?php echo $row['do_description']; ?></td>
                         
                          <td><?php echo $row['do_date']; ?></td>
</tr>
 <?php } ?>
                      </tbody>
          
                    </table>
                  </div>



                  <br><br>


                  <div class="table-responsive">
                    <table class="table">
                      <thead>

                      <tr>
                          <th>Donor Id</th>
                          <th>Donor profile</th>
                          <th>Name</th>
                          <th>phone No.</th>
                          <th>Age</th>
                          <th>E mail</th>   
                          <th>Address</th>
                          <th>Date</th>            
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                       $stmt=$admin->ret("SELECT * FROM `donor`  where `d_date` between '$start' and '$end'");
                       while($row=$stmt->fetch(PDO::FETCH_ASSOC)){ 
                         
                     ?>
                     <tr> 
                       <td><?php echo $row['d_id']; ?></td>
                       <td>   <img src="../../controller/<?php echo $row['d_profile']; ?>" style="height:100px; width:100px" alt="no image">      </td>
                       <td><?php echo $row['d_name']; ?></td>
                          <td><?php echo $row['d_phone']; ?></td>
                          <td><?php echo $row['d_age']; ?></td>
                          <td><?php echo $row['d_email']; ?></td>
                          <td><?php echo $row['d_address']; ?></td>
                          <td><?php echo $row['d_date']; ?></td>
</tr>
 <?php } ?>
                      </tbody>
                    </table>
                  </div>