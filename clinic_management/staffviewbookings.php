<?php include 'staffheader.php';

if(isset($_GET['bid'])){
    extract($_GET);

    $q="update booking set status='accepted' where booking_id='$bid'";
    update($q);
    return redirect("staffviewbookings.php");
}

if(isset($_GET['did'])){
    extract($_GET);

    $q="update booking set status='rejected' where booking_id='$did'";
    update($q);
    return redirect("staffviewbookings.php");
}

?>
<div  style="width: 100%;height: 350px;background-image: url('assets/img/bacf.jpg');background-size: cover;margin-bottom: 20px;">

</div>
<style>
    table td{
        height: 70px;
    }
</style>
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

        <?php 
if ($r['status']=="pending") {

  ?>
       <td><a  class="btn btn-success" href="?bid=<?php echo $r['booking_id'] ?>">Accepted</a></td>
       <td><a  class="btn btn-success" href="?did=<?php echo $r['booking_id'] ?>">Rejected</a></td>

<?php } ?>
       <?php 
if ($r['status']=="accepted") {

  ?>
<td><a class="btn btn-primary"  href="addprescription.php?bid=<?php echo $r['booking_id'] ?>">Add  prescription </a></td>
  <td><a href="staffviewpayment.php?bid=<?php echo $r['booking_id'] ?>">View Payment</a></td>

  <?php  
 
}

        ?>
     
     


      
   </tr>
   <?php } ?>
  
   
</table>

<?php include 'footer.php' ?> 