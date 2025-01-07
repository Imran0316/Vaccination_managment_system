<?php
if(isset($_POST["hos_update"])){
    $ho_id=$_POST["id"];
    $ho_name=$_POST["hos_name"];
    $ho_email=$_POST["hos_email"];
    $ho_address=$_POST["hos_address"];
    $ho_cont=$_POST["hos_cont"];
    $ho_city=$_POST["hos_city"];
    $ho_optime=$_POST["hos_opt"];
    $ho_clotime=$_POST["hos_clot"];
    $himage_name=$_FILES["hos_img"]["name"];
    $himage_path=$_FILES["hos_img"]["tmp_name"];
    // move_uploaded_file($himage_path,"../admin_panel/imgs/". $himage_name);
    $upload_dir = "../admin_panel/imgs/";
    $target_file = $upload_dir . basename($himage_name);
    $upload_ok = 1;
 

    $connection=mysqli_connect("localhost","root","","vaccine");
   
    $update_quer="UPDATE `hospital_det` SET `hosp_name`='{$ho_name}',`hosp_email`='{$ho_email}',`hosp_address`='{$ho_address}',`hosp_contact`='{$ho_cont}',`hosp_city`='{$ho_city}',`hosp_opt`='{$ho_optime}',`hosp_clot`='{$ho_clotime}',`hosp_image`='{$himage_name}' WHERE id = '{$ho_id}'";

    $update_run=mysqli_query($connection,$update_quer);
    if($update_run){
       header("location: showhospital.php");
    }else{
        echo "update error";
    }




}
?>