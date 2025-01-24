<?php
  if(isset($_POST["contactsubmit"])){
    $username=$_POST['name'];
    $useremail=$_POST['email'];
    $sub=$_POST['subject'];
    $usermessage=$_POST['message'];

    $conn=mysqli_connect('localhost','root','','vaccine');
   
    $q="INSERT INTO `contactus`(`username`, `email`, `subject`, `message`) VALUES ('$username','$useremail','$sub','$usermessage')";
    $run=mysqli_query($conn,$q);
    if($run){
      header("location: ../index.php");
   

    } else {
      echo "Failed to submit form";
    }
    


  }
?>
