<?php
// echo $_GET['id'];
$patient_id= $_GET['id'];
$conn = mysqli_connect("localhost","root","","vaccine");
$sql= "DELETE FROM contactus WHERE id= $patient_id";
$run=mysqli_query($conn,$sql);

    header("Location: messages.php");




?>