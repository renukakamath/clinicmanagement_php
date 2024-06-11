<?php include 'staffheader.php';?>

<div  style="width: 100%;background-image: url('assets/img/bacf.jpg');background-size: cover;margin-bottom: 20px;height: auto;">


  <br><br><br><br> <br><br><br>

<center>
    <h2>Booked Patients</h2>
<table style='width:1500px' class="table"> 
    <tr>
        <th>Name </th>
        <th>Phone </th>
        <th>Email </th>
        <th>Blood group </th>
        <th>Gender </th>
        <th>DOB </th>
       
        
    </tr>
    <?php 
  $q="SELECT * FROM  patients ";
  $res=select($q);
	
		$i=1;
		foreach ($res as $r) { ?>
    <tr align="center">
       <td><?php echo $r['firstname'].$r['lastname']?></td>
       <td><?php echo $r['phone']?></td>
       <td><?php echo $r['email']?></td>
       <td><?php echo $r['bloodgroup']?></td>
       <td><?php echo $r['gender']?></td>
       <td><?php echo $r['dob']?></td>
      
       
     

        
       <td><a class="btn btn-secondary"  href="addskindisease.php?pid=<?php echo $r['patient_id'] ?>">Add skin disease details</a></td>

       
      
    </tr>
   <?php } ?>
   
</table>

</center></div>

<?php include 'footer.php' ?> 