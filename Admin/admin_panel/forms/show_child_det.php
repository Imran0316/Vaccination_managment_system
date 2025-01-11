<?php
include("../f_shared/f_header.php");
include("../f_shared/f_sidebar.php");
?>
  <style>
     table th, td{
      border:1px solid black;
      text-align: center;
      padding: 2px;
      
     }
     th, td{
      /* padding: 10px; */
     }
     th{
      background-color: black;
      color: white;
      border-right-color: white !important;
     }

 
  </style>
  <?php

$connection=mysqli_connect("localhost","root","","vaccine");

$quer="SELECT * FROM child_detail";
$run=mysqli_query($connection,$quer);
if(mysqli_num_rows($run) > 0){



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
              <div class="show_hosp d-flex justify-content-center ">
            <table border="1px"  >
              <thead >
                <tr >
                    <th>Child Name</th>
                    <th>Parent Name</th>
                    <th>Parent Email</th>
                    <th>Child Age</th>
                    <th>Address</th>
                    <th>Vaccination Date</th>
                    <th> Date Of Birth</th>
                    <th>Vaccine Name</th>
                    <th>Hospital Name</th>
                    <th>Message</th>
                    <th>Child Status</th>
                    <th>Edit</th>
                    <th style="border-right-color: black !important;">Delete</th>
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
                <td><?php echo $data['ch_age']; ?></td>
                <td><?php echo $data['ch_address']; ?></td>
                <td><?php echo $data['vac_date']; ?></td>
                <td><?php echo $data['ch_dob']; ?></td>
                <td><?php echo $data['vac_name']; ?></td>
                <td><?php echo $data['hos_name']; ?></td>
                <td><?php echo $data['pa_massege']; ?></td>
                <td><?php echo $data['child_status']; ?></td>
                <td><a href="child_edit.php?id=<?php echo $data['id'];?>"><i class="fa-solid fa-pen-to-square text-success"></i></a></td>
                <td><a href="child_delete.php?id=<?php echo $data['id'];?>"><i class="fa-solid fa-trash text-danger"></i></a> </td>
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