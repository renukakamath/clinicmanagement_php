<?php include 'adminheader.php';

if (isset($_GET['aid'])) {
extract($_GET);

echo$q="update login set usertype='staff' where login_id='$aid'";
update($q);
alert('accepted successfully');
return redirect('admin_viewstaff.php');
}



if (isset($_GET['rid'])) {
extract($_GET);

$q="update login set usertype='reject' where login_id='$rid'";
update($q);
alert('Rejected successfully');
return redirect('admin_viewstaff.php');
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
        
        <th>DOB </th>
       
    
    </tr>
    <?php 
  $q="select * from doctor  inner join login using (login_id)";
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
     
       <td><?php echo $r['dob'] ?></td>

       <?php 

if ($r['usertype']=="pending") {
 ?>


 <td><a  class="btn btn-success" href="?aid=<?php echo $r['login_id'] ?>">Accept</a></td>
         <td><a class="btn btn-success" href="?rid=<?php echo $r['login_id'] ?>">Reject</a></td>

 <?php 
}
        ?>
      

    </tr>
    <?php
 $i++;
 }?>
   
</table>

<?php include 'footer.php' ?> 