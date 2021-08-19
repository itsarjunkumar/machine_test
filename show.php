<?php
$con=mysqli_connect("localhost","root","","machine_test");
include 'header.php';
?>
<div class="col-sm-12">
  <div class="row text-center">
    <h3 class="text-primary text-center">Details</h3>
  </div>
<form action="db.php" method="post">
<table class="table table-hover">  
  <thead>
    <tr class="bg-primary">
    <th scope="col"><input type="checkbox" onclick="selectAll(this)" ></th>
      <th scope="col">FIrstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Email</th>
      <th scope="col">Designation</th>
      <th scope="col">Dob</th>
      <th scope="col">Gender</th>
      <th scope="col">Male</th>
      <th scope="col">Hobbies</th>
      

    </tr>
  </thead>
  <tbody>
  <?php
   $sql="SELECT * FROM user_info";
   $res=mysqli_query($con,$sql);
  foreach($res as $row)
  {
    $fnm=$row['firstname'];
    $lnm=$row['lastname'];
    $eml=$row['email'];
    $dob=$row['dob'];
    $mob=$row['mobile'];
    $deg= $row['designation'];
    $gen= $row['gender'];
    $hob= $row['hobbies'];
   
    
  ?>
    <tr class="table-hover">
      <th><input type="checkbox" id=""></th>
      <td> <?php echo $fnm; ?></td>
      <td> <?php echo $lnm; ?></td>
      <td> <?php echo $eml; ?></td>
      <td> <?php echo $dob; ?></td>
      <td> <?php echo $mob; ?></td>
      <td> <?php echo $deg; ?></td>
     <td> <?php echo $gen; ?></td>
     <td> <?php echo $hob; ?></td>
    </tr>
  <?php
  }
  ?>
  </tbody>
</table>
</form>
</div>
<?php 
    include 'footer.php';
?>
