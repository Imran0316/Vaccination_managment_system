<?php

if(isset($_POST['ap_submit'])){
  $c_name=$_POST["a_cname"];
  $p_name=$_POST["a_pname"];
  $p_email=$_POST["a_pemail"];
  $c_age=$_POST["a_cage"];
  $c_address=$_POST["a_address"];
  $vac_type=$_POST["vac_date"];
  $c_dob=$_POST["dob"];
  $vac_name=$_POST["vaccine_names"];
  $hos_name=$_POST["hosp_name"];
  $a_message=$_POST["a_message"];

  $connection=mysqli_connect("localhost","root","","vaccine");

  $quer="INSERT INTO `child_detail`(`ch_name`, `pa_name`, `pa_email`, `ch_age`, `ch_address`, `vac_date`, `ch_dob`, `vac_name`, `hos_name`, `pa_massege`) VALUES ('$c_name','$p_name','$p_email','$c_age','$c_address','$vac_type','$c_dob','$vac_name','$hos_name','$a_message')";

  $run=mysqli_query($connection,$quer);
  if($run){
    header('location: ../index.php');
  }
}




?>

