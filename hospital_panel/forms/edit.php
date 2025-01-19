
  <?php 

include("../f_shared/f_header.php");
include("../f_shared/f_sidebar.php");


$hos_id=$_GET['id'];
$connection=mysqli_connect("localhost","root","","vaccine");
$edit_quer="SELECT * FROM hospital_det WHERE id = '{$hos_id}'";
$edit_run=mysqli_query($connection,$edit_quer);
$edit_row=mysqli_fetch_assoc($edit_run);
  ?>
  

     

      <div class="main-panel">
      <?php
include("../f_shared/f_nav.php");
?>

        <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Hospiatls</h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                  <a href="#">
                    <i class="icon-home"></i>
                  </a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">update hospital details</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Hospiatls detail</a>
                </li>
              </ul>
            </div>
            <form action="update.php" method="post" enctype="multipart/form-data">
              <div class="card">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Update Hospital details</div>
                    
                  </div>
                  <div class="card-body">
                    <div class="row">
                     
                      <div class="col-lg-6 col-md-8">
                      <input type="hidden" class="form-control"  name="id" value="<?php echo $edit_row['id'];?>"> <br>
                       
                        <label for="hos_name" class="form-label text-dark">Hospital Name:</label>
                        <input type="text" class="form-control"  name="hos_name" value="<?php echo $edit_row['hosp_name'];?>"> <br>

                        <label for="hos_email" class="form-label text-dark">Hospital Email:</label>
                        <input type="email" class="form-control"  value="<?php echo $edit_row['hosp_email'];?>" name="hos_email"> <br>
                        
                        <label for="hos_address" class="form-label text-dark">Hospital Address:</label>
                        <input type="text" class="form-control" value="<?php echo $edit_row['hosp_address'];?>" name="hos_address"> <br>

                        <label for="hos_cont" class="form-label text-dark">Hospital Contact:</label>
                        <input type="tel" class="form-control" value="<?php echo $edit_row['hosp_contact'];?>" name="hos_cont"> <br>

                        
                        


                      </div>
                      <div class="col-lg-6 col-md-8">
                        <label for="hos_city" class="form-label text-dark" >City Name:</label><br> 
                        <input type="text" class="form-control" name="hos_city"  value="<?php echo $edit_row['hosp_city'];?>"><br>

                        <label for="hos_opt" class="form-label text-dark" >Opening Time:</label><br> 
                        <input type="time" class="form-control" name="hos_opt" value="<?php echo $edit_row['hosp_opt'];?>"><br>

                        <label for="hos_clot" class="form-label text-dark" >Closing Time:</label><br> 
                        <input type="time" class="form-control" name="hos_clot" value="<?php echo $edit_row['hosp_clot'];?>"><br>

                        <label for="hos_img" class="form-label text-dark" >Hospital Image:</label><br> 
                        <input type="file" class="form-control" value="<?php echo $edit_row['hosp_image'];?>" name="hos_img" ><br>

                        
                      </div>
                     </div>
                    </div>
                  </div>
                  <div class="card-action">
                    
                    <input type="submit" value="update" name="hos_update" class="btn btn-primary">
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