<?php

if(isset($_POST['child_update'])){
  $ch_id=$_POST["id"];
  $c_name=$_POST["ch_name"];
  $p_name=$_POST["a_pname"];
  $p_email=$_POST["pa_email"];
  $c_age=$_POST["ch_age"];
  $c_address=$_POST["ch_address"];
  $vac_date=$_POST["vac_date"];
  $c_dob=$_POST["ch_dob"];
  $vac_name=$_POST["vac_name"];
  $hos_name=$_POST["hos_name"];
  $a_message=$_POST["a_message"];

  $connection=mysqli_connect("localhost","root","","vaccine");

  $quer="UPDATE `child_detail` SET `ch_name`='$c_name',`pa_name`='$p_name',`pa_email`='$p_email',`ch_age`='$c_age',`ch_address`='$c_address',`vac_date`='$vac_date',`ch_dob`='$c_dob',`vac_name`='$vac_name',`hos_name`='$hos_name',`pa_massege`='$a_message' WHERE id = '{$ch_id}'";

  $run=mysqli_query($connection,$quer);
  if($run){
    header('location: show_child_det.php');
  }
}

?>