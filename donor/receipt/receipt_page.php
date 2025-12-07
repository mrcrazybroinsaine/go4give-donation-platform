<?php
include '../../config.php';
$admin = new Admin();

if(!isset($_SESSION['d_id'])){
    $admin->redirect('../../login/index.php');
}

$do_id=$_GET['do_id'];

$stmt = $admin->ret("SELECT * FROM `donation` inner join `donor` on donation.d_id=donor.d_id inner join `orphanage` on donation.o_id=orphanage.o_id  where `do_id`='$do_id'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);




?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>Receipt page - Bootdey.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    	body{
    margin-top:10px;
    background:#eee;    
}
    </style>
</head>
<body>
<div class="container bootdey">
<div class="row invoice row-printable">
<div class="col-md-10">

<div class="panel panel-default plain" id="dash_0">

<div class="panel-body p30">
<div class="row">

<div class="col-lg-6">

<div class="invoice-logo"><img width="100" src="../../controller/<?php echo $row['o_photo']; ?>" alt="Invoice logo"></div>
</div>

<div class="col-lg-6">

<div class="invoice-from">
<ul class="list-unstyled text-right">
<li><?php echo $row['o_name']; ?></li>
<li><?php echo $row['o_phn']; ?></li>
<li><?php echo $row['o_address']; ?></li>


</ul>
</div>
</div>

<div class="col-lg-12">

<div class="invoice-details mt25">
<div class="well">
<ul class="list-unstyled mb0">
<li><strong>Paid By:</strong> </li>
<li><strong>Name</strong> <?php echo $row['d_name']; ?></li>
<li><strong>Phone Date:</strong> <?php echo $row['d_phone']; ?></li>
<li><strong>Email:</strong> <?php echo $row['d_email']; ?></li>
<li><strong>Address:</strong> <?php echo $row['d_address']; ?></li>
</ul>
</div>
</div>
<div class="invoice-to mt25">
<!-- <ul class="list-unstyled">
<li><strong>Paid By</strong></li>
<li>Jakob Smith</li>
<li>Roupark 37</li>
<li>New York, NY, 2014</li>
<li>USA</li> -->
</ul>
</div>
<div class="invoice-items">
<div class="table-responsive" style="overflow: hidden; outline: none;" tabindex="0">
<table class="table table-bordered">
<thead>
<tr>
<th class="per70 text-center">Donation Type</th>
<th class="per70 text-center">Description</th>
<!-- <th class="per5 text-center">Qty</th> -->
<th class="per25 text-center">Amount</th>
</tr>
</thead>
<tbody>
<tr>
<td><?php echo $row['do_type']; ?></td>
<td><?php echo $row['do_description']; ?></td>
<!-- <td class="text-center">1</td> -->
<td class="text-center">Rs. <?php echo $row['do_amount']; ?></td>
</tr>

</tbody>
<tfoot>
<!-- <tr>
<th colspan="2" class="text-right">Sub Total:</th>
<th class="text-center">$237.00 USD</th>
</tr>
<tr>
<th colspan="2" class="text-right">20% VAT:</th>
<th class="text-center">$47.40 USD</th>
</tr>
<tr>
<th colspan="2" class="text-right">Credit:</th>
<th class="text-center">$00.00 USD</th>
</tr> -->
<tr>
<th colspan="2" class="text-right">Total:</th>
<th class="text-center">Rs. <?php echo $row['do_amount']; ?></th>
</tr>
</tfoot>
</table>
</div>
</div>
<div class="invoice-footer mt25">
<p class="text-center"> <a href="../index.php" class="btn btn-default ml15"><i class="fa fa-print mr5"></i> Home</a></p>
</div>
</div>

</div>

</div>
</div>

</div>

</div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>