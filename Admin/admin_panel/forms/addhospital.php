<?php
include("../f_shared/f_header.php");
include("../f_shared/f_sidebar.php");
?>
  <?php 
if(isset($_POST["hos_sub"])){
    $ho_name=$_POST["hos_name"];
    $ho_email=$_POST["hos_email"];
    $ho_address=$_POST["hos_address"];
    $ho_cont=$_POST["hos_cont"];
    $ho_city=$_POST["hos_city"];
    $ho_optime=$_POST["hos_opt"];
    $ho_clotime=$_POST["hos_clot"];
    $himage_name=$_FILES["hos_img"]["name"];
    $himage_path=$_FILES["hos_img"]["tmp_name"];
    move_uploaded_file($himage_path, "../gallery/" .$himage_name);
  
  $error="";
 

    $connection=mysqli_connect("localhost","root","","vaccine");
   
   
    $quer="INSERT INTO `hospital_det`(`hosp_name`, `hosp_email`, `hosp_address`, `hosp_contact`, `hosp_city`, `hosp_opt`, `hosp_clot`, `hosp_image`) VALUES ('$ho_name','$ho_email','$ho_address','$ho_cont','$ho_city','$ho_optime','$ho_clotime','{$himage_name}')";
    
    $run=mysqli_query($connection,$quer);
    if($run){
      $error = "running" ;
    }else{
     $error = "not run";
    }

  


}
  ?>


      <div class="main-panel">
      <?php
include("../f_shared/f_nav.php");
?>

        <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Add Hospiatls</h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                  <a href="../index.php">
                    <i class="icon-home"></i>
                  </a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="addhospital.php">Hospital form</a>
                </li>
                
              </ul>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
              <div class="card">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Hospital details</div>
                    <span><?php echo $error; ?></span>
                  </div>
                  <div class="card-body">
                    <div class="row">
                     
                      <div class="col-lg-6 col-md-8">
                        <label for="hos_name" class="form-label text-dark">Hospital Name:</label>
                        <input type="text" class="form-control" placeholder="Hospital Name" name="hos_name"> <br>

                        <label for="hos_email" class="form-label text-dark">Hospital Email:</label>
                        <input type="email" class="form-control" placeholder=" Hospital Email" name="hos_email"> <br>
                        
                        <label for="hos_address" class="form-label text-dark">Hospital Address:</label>
                        <input type="text" class="form-control" placeholder=" Hospital Address" name="hos_address"> <br>

                        <label for="hos_cont" class="form-label text-dark">Hospital Contact:</label>
                        <input type="tel" class="form-control" placeholder="Hospital Contact" name="hos_cont"> <br>

                        
                        


                      </div>
                      <div class="col-lg-6 col-md-8">
                        <label for="hos_city" class="form-label text-dark" >City Name:</label><br> 
                        <input type="text" class="form-control" name="hos_city" placeholder="City Name"><br>

                        <label for="hos_opt" class="form-label text-dark" >Opening Time:</label><br> 
                        <input type="time" class="form-control" name="hos_opt" placeholder="Opening Time"><br>

                        <label for="hos_clot" class="form-label text-dark" >Closing Time:</label><br> 
                        <input type="time" class="form-control" name="hos_clot" placeholder="Closing Time"><br>

                        <label for="hos_img" class="form-label text-dark" >Hospital Image:</label><br> 
                        <input type="file" class="form-control" name="hos_img" ><br>

                        
                      </div>
                     </div>
                    </div>
                  </div>
                  <div class="card-action">
                    
                   <a href="showhospital.php"> <input type="submit" value="submit" name="hos_sub" class="btn btn-primary"></a>
                    <button class="btn btn-danger">Cancel</button>
                  </div>
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>

        
        <?php
include("../f_shared/f_footer.php");

?>        