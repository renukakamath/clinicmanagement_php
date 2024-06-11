<?php include 'staffheader.php';

$did=$_SESSION['did'];

extract($_GET);



if(isset($_POST['sub'])){
	extract($_POST);

	$qry="INSERT INTO `skindisease` VALUES(null,'$pid','$did','$med','$pre',curdate())";
	insert($qry);
  alert("inserted successfully");
  return redirect("addskindisease.php?pid=$pid");
}

?>

<section id="hero">

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center" style="display: flex;align-items: center;justify-content:center">
          <div data-aos="zoom-out" style="width: 400px;box-sizing: content-box;padding: 50px; border: 2px solid black; box-shadow: 2px 4px 16px white;" >
          <center>

          <form  method="post">

    <h2>Add Skin Disease</h2>
<table style="color: white;" class="table">
    <tr>
        <th>Skin Disease </th>
        <td><input type="text" class="form-control" required name="med" id=""></td>
    </tr>
    <tr>
        <th> Description</th>
        <td><input type="text" class="form-control" required name="pre" id=""></td>
    </tr>
   
    <tr>
        <td colspan="2" align="center">
            <input type="submit" class="btn btn-primary"  name="sub" id="">
        </td>
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

  </section>


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

$q="select * from skindisease  where doctor_id='$did'  and patient_id='$pid' ";
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