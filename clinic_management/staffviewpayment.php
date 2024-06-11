<?php include 'staffheader.php';




?> 

<div  style="width: 100%;height: 350px;background-image: url('assets/img/bacf.jpg');background-size: cover;margin-bottom: 20px;">

</div>
<style>
    table td{
        height: 70px;
    }
</style>
<center>
<h2>View Booking Payments</h2>
<table class="table"> 
    <tr align="center">
        <th>Amount </th>
        <th>Date </th>
     
     
    
    </tr>
    <?php 
  $q="SELECT * FROM `payments`  where  booking_id='$bid'";
  $res=select($q);
  
    $i=1;
    foreach ($res as $r) { ?>
    <tr align="center">
       <td><?php echo $r['amount']?></td>
       <td><?php echo $r['paymentdate']?></td>
       
     
    </tr>
   <?php } ?>
   
</table>


<?php include 'footer.php' ?> 