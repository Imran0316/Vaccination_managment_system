<?php
include("../f_shared/f_header.php");
include("../f_shared/f_sidebar.php");

$connection=mysqli_connect("localhost","root","","vaccine");
$quer="SELECT * FROM child_detail WHERE vac_report='vaccinated'";
$run=mysqli_query($connection,$quer);
if(mysqli_num_rows($run)>0){


?>
  <style>
    
    table th, td{
     border-bottom: 1px solid gray;
     text-align: center;
     padding: 10px;
     
    }
    th, td{
     padding: 10px;
    }
    th{
     background-color: black;
     color: white;
     border-right-color: white !important;
    }


 </style>
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
                  <a href="#">Add Hospitals</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Hospiatls detail form</a>
                </li>
              </ul>
            </div>
              <div class="show_hosp d-flex justify-content-center scroll-container">
            <table border="1px"   class="content-item">
              <thead >
                <tr >
                    <th>Child Name</th>
                    <th>Parent Name</th>
                    <th>Parent Email</th>
                    <th>Vaccine Name</th>
                    <th>vaccine status</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                    while($data=mysqli_fetch_assoc($run)){
                ?>
                <tr >
                <td><?php echo $data['ch_name']; ?></td>
                <td><?php echo $data['pa_name']; ?></td>
                <td><?php echo $data['pa_email']; ?></td>
                <td><?php echo $data['vac_name']; ?></td>
                <td><?php echo $data['vac_report']; ?></td>
                
                
                </tr>
                <?php }?>
              </tbody>
            </table>
            <?php }?>
          </div>
        </div>


        <?php
include("../f_shared/f_footer.php");

?>


