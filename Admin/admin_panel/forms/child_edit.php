<?php
include("../f_shared/f_header.php");
include("../f_shared/f_sidebar.php");
?>
  <?php 
$child_id=$_GET['id'];
$connection=mysqli_connect("localhost","root","","vaccine");
$edit_quer="SELECT * FROM child_detail WHERE id = '{$child_id}'";
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
                  <a href="#">update Child details</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Child detail</a>
                </li>
              </ul>
            </div>
            <form action="child_update.php" method="post" enctype="multipart/form-data">
              <div class="card">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Update Child details</div>
                    
                  </div>
                  <div class="card-body">
                    <div class="row">
                     
                      <div class="col-lg-6 col-md-8">
                      <input type="hidden" class="form-control"  name="id" value="<?php echo $edit_row['id'];?>"> <br>
                       
                        <label for="ch_name" class="form-label text-dark">Child Name:</label>
                        <input type="text" class="form-control"  name="ch_name" value="<?php echo $edit_row['ch_name'];?>"> <br>

                        <label for="a_pname" class="form-label text-dark">Parent Name:</label>
                        <input type="text" class="form-control"  value="<?php echo $edit_row['pa_name'];?>" name="a_pname"> <br>
                        
                        <label for="pa_email" class="form-label text-dark">Parent Email:</label>
                        <input type="email" class="form-control" value="<?php echo $edit_row['pa_email'];?>" name="pa_email"> <br>

                        <label for="ch_age" class="form-label text-dark">Child Age:</label>
                        <input type="number" class="form-control" value="<?php echo $edit_row['ch_age'];?>" name="ch_age"> <br>

                        
                        


                      </div>
                      <div class="col-lg-6 col-md-8">
                        <label for="ch_address" class="form-label text-dark" >Child Address:</label><br> 
                        <input type="text" class="form-control" name="ch_address"  value="<?php echo $edit_row['ch_address'];?>"><br>

                        <label for="vac_date" class="form-label text-dark" >Vaccination Date:</label><br> 
                        <input type="date" class="form-control" name="vac_date" value="<?php echo $edit_row['vac_date'];?>"><br>

                        <label for="ch_dob" class="form-label text-dark" >Date of birth:</label><br> 
                        <input type="date" class="form-control" name="ch_dob" value="<?php echo $edit_row['ch_dob'];?>"><br>

                        <label for="vaccine_name" class="form-label" >Vaccine Name:</label> <br>
              <select name="vac_name" id="department" class="form-select" required="" value="<?php echo $edit_row['vac_name'];?>">
                <option value="">Select Vaccine</option>
                <option value="corona">corona</option>
                <option value="hepatitis">hepatitis</option>
                <option value="polio">polio</option>
              </select>
              <label for="hospital_name" class="form-label" >Hospital Name:</label> <br>
              <select name="hos_name" id="doctor" value="<?php echo $edit_row['hos_name'];?>" class="form-select" required="">
                <option value="">Select Hospital</option>
                <option value="Agha Khan Hospital">Agha Khan Hospital</option>
                <option value="ziauddin Hospital">ziauddin Hospital</option>
                <option value="saifee Hospital">saifee Hospital</option>
              </select> <br>

              <textarea class="form-control" name="a_message" rows="5" placeholder="Message (Optional)"></textarea>

                        
                      </div>
                     </div>
                    </div>
                  </div>
                  <div class="card-action">
                    
                    <input type="submit" value="update" name="child_update" class="btn btn-primary">
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