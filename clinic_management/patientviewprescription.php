<?php include 'patientheader.php';
    $pid=$_SESSION['pid'];
    extract($_GET);





?> 

<div  style="width: 100%;height: 350px;background-image: url('assets/img/bacf.jpg');background-size: cover;margin-bottom: 20px;">

</div>
<style>
    table td{
        height: 70px;
    }
</style>
<center>
    <h1>View Prescription</h1>
    <table  class="table" style="width: 500px">
      <tr>
        <th>Slno</th>
        <th>Medicine Name </th>
        <th>Prescription Description</th>
      </tr>

      <?php 

$q="select * from prescription  where booking_id='$bid' ";
$res=select($q);
$slno=1;

foreach ($res as $key) {
  ?>
<tr>
       <td><?php echo $slno++ ?></td>
       <td><?php echo $key['medicine_name'] ?></td>
       <td><?php echo $key['pres_description'] ?></td>
      </tr>

  <?php  
}

       ?>


      <tr>
        
      </tr>
    </table>
  </center>
   
</table>

<?php include 'footer.php' ?> 