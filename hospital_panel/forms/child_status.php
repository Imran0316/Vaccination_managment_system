<?php 

include("../f_shared/f_header.php");
include("../f_shared/f_sidebar.php");

$connection=mysqli_connect("localhost","root","","vaccine");

$sql="SELECT * FROM child_detail WHERE child_status = 'approved'";
$run=mysqli_query($connection,$sql);
if(mysqli_num_rows($run)>0){

?>
<div class="main-panel">

<?php
include("../f_shared/f_nav.php");
?>

<style>

table th, td{
      border:1px solid black;
      text-align: center;
      padding: 2px;
      
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
                    <th>Child Id</th>
                    <th>Child Name</th>
                    <th>Parent Name</th>
                    <th>Parent Email</th>
                    <th>Vaccine Name</th>
                    <th style="border-right-color: black !important;">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                    while($data=mysqli_fetch_assoc($run)){
                ?>
                <tr >
                  
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['ch_name']; ?></td>
                <td><?php echo $data['pa_name']; ?></td>
                <td><?php echo $data['pa_email']; ?></td>
                <td><?php echo $data['vac_name']; ?></td>
                <td>
                <form method='POST' action='update_vac.php'>
                <input type='hidden' name='id' value="<?php echo $data['id']; ?>">
                <button type='submit' name='action' value="vaccinated" class="btn btn-success">Vaccinated</button>
                
            </form>
            </td>
                
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