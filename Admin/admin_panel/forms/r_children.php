<?php
include("../f_shared/f_header.php");
include("../f_shared/f_sidebar.php");

$connection=mysqli_connect("localhost","root","","vaccine");

$search = isset($_GET['search']) ? $_GET['search'] : '';


if (!empty($search)) {
    $quer = "SELECT * FROM child_detail WHERE 
        ch_name LIKE '%$search%' OR 
        pa_name LIKE '%$search%' OR 
        vac_name LIKE '%$search%'";
} else {
    $quer="SELECT * FROM child_detail WHERE vac_report='vaccinated'";
}

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
              <h3 class="fw-bold mb-3">vaccinated Children</h3>
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
                  <a href="r_children.php">vaccinated cildren</a>
                </li>
               
              </ul>
            </div>
                 <!-- Search Form -->
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
                              <a href="show_child_det.php" class="btn btn-success m-1" ><i class="fa-solid fa-arrow-rotate-right"></i></a>
                      </div>
                  </form>
                </div>
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


