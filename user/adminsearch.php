<?php
session_start();
?>

<?php
//fetch.php

include("../../utilities/dbconnect.php");

$output = '';
$query="SELECT * FROM reg_user where status='active';";
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query = " SELECT * FROM reg_user
  WHERE (fullname LIKE '%".$search."%'
  OR aadhar LIKE '%".$search."%'
  OR orgname LIKE '%".$search."%'
  OR designation LIKE '%".$search."%'
  OR stylespecification LIKE '%".$search."%'
  OR status LIKE '%".$search."%')";
}
else
{
 $query = "SELECT * FROM reg_user where status='active';";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{

  ?>
  <table id="mytable1" class="table table-bordred table-striped">
  <thead>
    <th>User Id	</th>
    <th>Full Name	</th>
     <th>Aadhar Card No</th>
     <th>Organization Name/College Name	</th>
     <th>Designation</th>
     <th>Action</th>
    
   </thead>
   <br>
<tbody>

  <?php
 while($rs_res = mysqli_fetch_array($result))
 {
    ?>

   <tr>

   <td><?php echo $rs_res["userid"]?></td>
   <td><?php echo $rs_res["fullname"]?></td>
   <td><?php echo $rs_res["aadhar"]?></td>
   <td><?php echo $rs_res["orgname"]?></td>
   <td><?php echo $rs_res["designation"]?></td>
   <td><?php echo $rs_res["status"]?></td>
   </tr>
 </tbody>

 <?php } } ?>
