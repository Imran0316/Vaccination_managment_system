<?php

$connection=mysqli_connect("localhost","root","","vaccine");
$vac_id=$_GET["vac_id"];
$quer="DELETE FROM add_vaccine WHERE vac_id = $vac_id";
$run=mysqli_query($connection,$quer);
if($run){
    header("location: ../index.php");
}else{
    header("location: vac_delete.php");

}
?>