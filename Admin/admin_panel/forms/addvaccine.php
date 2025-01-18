<?php
if(isset($_POST["add_vac"])){
    $vacname=$_POST["vac_name"];
    $vacstoke=$_POST["vac_stoke"];

$connection=mysqli_connect("localhost","root","","vaccine");

$query="INSERT INTO `add_vaccine`(`vaccine_name`, `vac_stoke`) VALUES ('$vacname','$vacstoke')";    
$run=mysqli_query($connection,$query);
}

?>