<?php
$child_id=$_GET['id'];
$connection=mysqli_connect("localhost","root","","vaccine");
$del_sql="DELETE FROM child_detail WHERE id = $child_id";
$del_run=mysqli_query($connection,$del_sql);
if($del_run){
  header("location: show_child_det.php");
}else{
    echo "not working";
}
?>