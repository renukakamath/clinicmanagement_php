<?php include 'staffheader.php';
$did=$_SESSION['did'];

extract($_GET);



if(isset($_POST['btn'])){
	extract($_POST);
	$q="INSERT INTO `fees` VALUES(null,'$did','$fee')";
	$ids=insert($q);
  alert('inserted successfully');
  return redirect('staffscheduletime.php');



}


if (isset($_GET['did'])) {
 extract($_GET);


 $q="delete  from fees where fee_id='$did'";

delete($q);

  alert('deleted successfully');
  return redirect('staffscheduletime.php');



}
?> 

<section id="hero">

<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center" style="display: flex;align-items: center;justify-content:center">
      <div data-aos="zoom-out" style="width: 400px;box-sizing: content-box;padding: 50px; border: 2px solid black; box-shadow: 2px 4px 16px white;" >
      <center>
      <h1>Manage Fees</h1>
    <form action="" method="POST">
        <table class="table" style="color: white;">
       
        <tr>
            <th>Fee Amount</th>
            <td><input class="form-control" required type="number" name="fee" id=""></td>
        </tr>
        <tr>

            <td colspan="2" align="center"><input class="btn btn-danger" type="submit" name="btn" id=""></td>
        </tr>

        </table>
    </form>  
      </center>
        </div>
      </div>
    </div>
    
  </div>
</div>

<svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
  <defs>
    <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
  </defs>
  <g class="wave1">
    <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
  </g>
  <g class="wave2">
    <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
  </g>
  <g class="wave3">
    <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
  </g>
</svg>

</section><!-- End Hero -->

<center>
  <h1>View Fees</h1>
<table>
  <tr>
    <th>Slno</th>
    <th>Amount</th>
  </tr>



<?php 
$q="select * from fees";
$res=select($q);
$slno=1;

foreach ($res as $row) {

  ?>

  <tr>
    <td><?php echo $slno++ ?></td>
    <td><?php echo $row['feeamount'] ?></td>
    <td><a href="?did=<?php echo $row['fee_id'] ?>">Delete</a></td>
  </tr>
  <?php 
}

 ?>

  
</table>
    
     </center>

<?php include 'footer.php' ?> 