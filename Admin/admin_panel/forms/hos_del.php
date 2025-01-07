<?php
$hos_id=$_GET['id'];
$connection=mysqli_connect("localhost","root","","vaccine");
$del_sql="DELETE FROM hospital_det WHERE id = $hos_id";
$del_run=mysqli_query($connection,$del_sql);
if($del_run){
  header("location: showhospital.php");
}else{
    echo "not working";
}
?>