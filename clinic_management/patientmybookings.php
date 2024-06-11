<?php include 'patientheader.php';
    $pid=$_SESSION['pid'];
    extract($_GET);




?>


<div  style="width: 100%;height: 350px;background-image: url('assets/img/bacf.jpg');background-size: cover;margin-bottom: 20px;">

</div>
 <center>
    <h2>Booked Doctors</h2>
<table style='width:1400px;margin-bottom: 50px;' class="table"> 
    <tr>
        <th>DOCTOR Name </th>
        <th>Patient Name </th>
        <th>Status </th>
        <th>Amount </th>
        <th>Date </th>
       
    
    </tr>
    <?php 
  $q="SELECT *,CONCAT(patients.firstname,' ',patients.lastname)  AS fname,CONCAT (doctor.firstname,' ',doctor.lastname)  AS lname FROM `booking`  INNER JOIN `doctor`  USING (doctor_id) INNER JOIN `patients`  USING (`patient_id`) ";
  $res=select($q);
  
    $i=1;
    foreach ($res as $r) { ?>
    <tr align="center">
       <td><?php echo $r['lname']?></td>
       <td><?php echo $r['fname']?></td>
       <td><?php echo $r['status']?></td>
       <td><?php echo $r['amount']?></td>
       <td><?php echo $r['date']?></td>

       <td><a class="btn btn-warning" href="patientviewprescription.php?bid=<?php echo $r['booking_id'] ?>"> Medicine Details</a></td>

       <?php 

if ($r['status']=="pending") {
  ?>
<td><a class="btn btn-warning" href="patientmedpayment.php?bid=<?php echo $r['booking_id'] ?>&amt=<?php echo $r['amount'] ?>">Make Payment</a></td>

  <?php  
}

        ?>
     
     


       
     
   </tr>
   <?php } ?>
 
   
</table>

<?php include 'footer.php' ?> 