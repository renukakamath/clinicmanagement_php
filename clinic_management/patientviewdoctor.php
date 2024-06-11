<?php include 'patientheader.php';




?> 

<div  style="width: 100%;height: 350px;background-image: url('assets/img/bacf.jpg');background-size: cover;margin-bottom: 20px;">

</div>
<style>
    table td{
        height: 70px;
    }
</style>
<center>
    <h2>View Doctor</h2>
<table style='width:1300px' class="table"> 
    <tr align="center">
        <th>Index No</th>
        <th>Name </th>
        <th>Phone </th>
        <th>Email </th>
        <th>qualification</th>
        <th>Place</th>
        <th>Gender </th>
        <th>Fees</th>
        
      
       
    
    </tr>
    <?php 
  $q="select * from doctor  inner join login using (login_id)  inner join fees using(doctor_id)";
  $res=select($q);
  
    $i=1;
    foreach ($res as $r) { ?>
    <tr align="center">
    <td><?php echo $i ?></td>
       <td><?php echo $r['firstname'].$r['lastname'] ?></td>
       <td><?php echo $r['phone'] ?></td>
       <td><?php echo $r['email'] ?></td>
       <td><?php echo $r['qualification'] ?></td>
       <td><?php echo $r['place'] ?></td>
       <td><?php echo $r['gender'] ?></td>
       <td><?php echo $r['feeamount'] ?></td>
       <td><a  class="btn btn-success" href="bookdoctor.php?did=<?php echo $r['doctor_id'] ?>&amt=<?php echo $r['feeamount'] ?>">BOOK NOW</a></td>
     
     
      


    </tr>
    <?php
 $i++;
 }?>
   
</table>

<?php include 'footer.php' ?> 