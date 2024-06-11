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
    <h1>View Skin Disease</h1>
    <table  class="table" style="width: 500px">
      <tr>
        <th>Slno</th>
        <th>skin disease</th>
        <th> Description</th>
        <th>Date</th>
      </tr>

      <?php 

$q="select * from skindisease  where  patient_id='$pid' ";
$res=select($q);
$slno=1;

foreach ($res as $key) {
  ?>
<tr>
       <td><?php echo $slno++ ?></td>
       <td><?php echo $key['skin_disease'] ?></td>
       <td><?php echo $key['details'] ?></td>
       <td><?php echo $key['date'] ?></td>
      </tr>

  <?php  
}

       ?>


      <tr>
        
      </tr>
    </table>
  </center>

<?php include 'footer.php' ?> 