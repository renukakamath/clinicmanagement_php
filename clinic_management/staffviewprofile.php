<?php include 'staffheader.php';

$did=$_SESSION['did'];
 ?> 


<?php 

if (isset($_POST['update'])) {

  extract($_POST);


  $q="update doctor set firstname='$fname',lastname='$lname',phone='$phone',email='$email',place='$place',qualification='$qul',gender='$gen',dob='$dob' where doctor_id='$did'";
  update($q);
 
}


 ?>

<?php 
    extract($_GET);
          
			$qq="SELECT * from doctor where doctor_id='".$_SESSION['did']."' ";
	        $rs=select($qq);
	
		$i=1;
		foreach ($rs as $r) { ?>
     
     
     <section id="hero">

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center" style="display: flex;align-items: center;justify-content:center">
          <div data-aos="zoom-out" style="width: 400px;box-sizing: content-box;padding: 50px; border: 2px solid black; box-shadow: 2px 4px 16px white;" >
          <center>
          <h1>My Profile</h1>

          <form  method="post">
    <table style="color: black;" class="table">
    <tr align='right'>
        <th>First Name :</th>
        <td><input type="text"  value="<?php echo $r['firstname'] ?>" name="fname" id=""></td>
    </tr>
    <tr align='right'>
        <th>Last Name :</th>
        <td><input type="text"  value="<?php echo $r['lastname'] ?>" name="lname" id=""></td>
    </tr>
    <tr align='right'>
        <th>Phone :</th>
        <td> <input type="text"  value="<?php echo $r['phone'] ?>" name="phone" id=""></td>
    </tr>
    <tr align='right'>
        <th>Email :</th>
        <td><input type="text"  value="<?php echo $r['email'] ?>" name="email" id=""></td>
    </tr>

     <tr align='right'>
        <th>Place : </th>
        <td><input type="text"  value="<?php echo $r['place'] ?>" name="place" id=""></td>
    </tr>
    <tr align='right'>
        <th>Qualification :</th>
        <td><input type="text"  value="<?php echo $r['qualification'] ?>" name="qul" id=""></td>
    </tr>
     <tr align='right'>
        <th>Gender :</th>
        <td><input type="text"  value="<?php echo $r['gender'] ?>" name="gen" id=""></td>
    </tr>
   
    <tr align='right'>
        <th>DOB :</th>
        <td><input type="text"  value="<?php echo $r['dob'] ?>" name="dob" id=""></td>
    </tr>
    <tr>
        <td>
            <input type="submit" name="update" id="">
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

  </section><!-- End Hero -->



<?php } ?>
</center>    
    <?php include 'footer.php' ?>