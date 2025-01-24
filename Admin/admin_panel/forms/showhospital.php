<?php
include("../f_shared/f_header.php");
include("../f_shared/f_sidebar.php");
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
  <?php

$connection=mysqli_connect("localhost","root","","vaccine");

$search = isset($_GET['search']) ? $_GET['search'] : '';


if (!empty($search)) {
    $quer = "SELECT * FROM hospital_det WHERE 
        hosp_name LIKE '%$search%' OR 
        hosp_email LIKE '%$search%' OR 
        hosp_address LIKE '%$search%' OR 
        hosp_contact LIKE '%$search%' OR 
        hosp_city LIKE '%$search%'";
} else {
    $quer = "SELECT * FROM hospital_det";
}

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
              <h3 class="fw-bold mb-3">Hospiatls Detail</h3>
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
                  <a href="#">Hospitals</a>
                </li>
                
              </ul>
            </div>
            <div class="row">
              <div class="col-md-8">
                  <form method="GET" class="d-flex mb-4">



                              <input
                              type="text"
                              name="search"
                              placeholder="Search ..."
                              class="form-control"
                              value="<?= htmlspecialchars($search) ?>"
                              />
                              <button type="submit" class="btn btn-search btn-primary m-1">
                                  <i class="fa fa-search search-icon"></i>
                              </button>
                              <a href="showhospital.php" class="btn btn-success m-1" ><i class="fa-solid fa-arrow-rotate-right"></i></a>
                      </div>
                  </form>
                </div>
            </div>

              <div class="show_hosp d-flex justify-content-center scroll-container">
                
            <table border="1px" class="content-item">
              <thead >
                <tr >
                    <th>H_Name</th>
                    <th>H_Email</th>
                    <th>H_Address</th>
                    <th>H_Contact</th>
                    <th>H_City</th>
                    <th>H_Opening time</th>
                    <th>H_Closing time</th>
                    <th>H_Image</th>
                    <th>Edit</th>
                    <th style="border-right-color: black !important;">Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                    while($data=mysqli_fetch_assoc($run)){
                ?>
                <tr >
                <td><?php echo $data['hosp_name']; ?></td>
                <td><?php echo $data['hosp_email']; ?></td>
                <td><?php echo $data['hosp_address']; ?></td>
                <td><?php echo $data['hosp_contact']; ?></td>
                <td><?php echo $data['hosp_city']; ?></td>
                <td><?php echo $data['hosp_opt']; ?></td>
                <td><?php echo $data['hosp_clot']; ?></td>
                <td><img src="../gallery/<?=  $data['hosp_image']; ?>" alt="<?= $data['hosp_name']; ?>" srcset=""  width="50" height="50"></td>
                <td><a href="edit.php?id=<?php echo $data['id'];?>"><i class="fa-solid fa-pen-to-square text-success"></i></a></td>
                <td><a href="hos_del.php?id=<?php echo $data['id'];?>"><i class="fa-solid fa-trash text-danger"></i></a> </td>
                </tr>
                <?php }?>
              </tbody>
            </table>
            <?php } else { ?>
              <tr>
                  <td colspan="13">No records found</td>
              </tr>
             <?php } ?>
          </div>
        </div>

        <?php
include("../f_shared/f_footer.php");

?>