<?php include 'patientheader.php';

   $pid=$_SESSION['pid'];

extract($_GET);



if(isset($_POST['sub'])){
	extract($_POST);

  $q="select * from booking where doctor_id='$did' and date='$date'";
  $res=select($q);

  if (sizeof($res)>0) {

    alert('already booked');
   
  }else{

	$qry="INSERT INTO `booking` VALUES(null,'$did','$pid','pending','$amt','$date')";
	insert($qry);
  alert("inserted successfully");
  return redirect('patientmybookings.php');
}
}

?>

<section id="hero">

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center" style="display: flex;align-items: center;justify-content:center">
          <div data-aos="zoom-out" style="width: 400px;box-sizing: content-box;padding: 50px; border: 2px solid black; box-shadow: 2px 4px 16px white;" >
          <center>

          <form  method="post">

    <h2>BOOK NOW</h2>
<table style="color: white;" class="table">
    <tr>
        <th>Date </th>
        <td><input type="date" class="form-control" required name="date" id=""></td>
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


 
  
<?php include 'footer.php' ?> 