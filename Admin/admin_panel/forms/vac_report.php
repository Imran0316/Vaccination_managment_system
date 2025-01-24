<?php 

include("../f_shared/f_header.php");
include("../f_shared/f_sidebar.php");

$connection = mysqli_connect("localhost", "root", "", "vaccine");

if (isset($_GET['child_id'])) {
    $child_id = $_GET['child_id'];
} else {
    echo "<script>alert('Child ID is missing!');</script>";
    exit; // Stop further execution if child_id is not provided.
}

$quer = "
SELECT 
    child_detail.ch_name AS child_name,
    add_vaccine.vaccine_name AS vaccine_name,
    vaccine_records.date_of_vaccination, 
    hospital_det.hosp_name AS hospital_name
FROM vaccine_records
    JOIN child_detail ON vaccine_records.child_id = child_detail.id
    JOIN add_vaccine ON vaccine_records.vaccine_name = add_vaccine.vaccine_name
    JOIN hospital_det ON vaccine_records.hospital_id = hospital_det.id
WHERE vaccine_records.child_id 
";

$result = mysqli_query($connection, $quer) or die(mysqli_error($connection));

if (mysqli_num_rows($result) > 0) {
?>
<div class="main-panel">

<?php
include("../f_shared/f_nav.php");
?>

<style>
    table th, td {
        border-bottom: 1px solid gray;
        text-align: center;
        padding: 10px;
    }
    th, td {
        padding: 10px;
    }
    th {
        background-color: black;
        color: white;
        border-right-color: white !important;
    }
</style>

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Vaccination Report</h3>
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
                    <a href="vac_report.php">Reports</a>
                </li>
            </ul>
        </div>
        <div class="show_hosp d-flex justify-content-center scroll-container">
            <table border="1px" class="content-item">
                <thead>
                    <tr>
                        <th>Child Name</th>
                        <th>Vaccine Name</th>
                        <th>Vaccination Date</th>
                        <th>Hospital Name</th>
                        <th style="border-right-color: black !important;">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    while ($data = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $data['child_name']; ?></td>
                        <td><?php echo $data['vaccine_name']; ?></td>
                        <td><?php echo $data['date_of_vaccination']; ?></td>
                        <td><?php echo $data['hospital_name']; ?></td>
                        <td>
                            <form method='POST' action='update_status.php'>
                                <input type='hidden' name='id' value="<?php echo $data['id']; ?>">
                                <button type='submit' name='action' value="approve" class="btn btn-success">Approve</button>
                                <button type='submit' name='action' value="reject" class="btn btn-danger">Reject</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        <?php 
        } else {
            echo "<script>alert('No records found!');</script>";
        }
        ?>
        </div>
    </div>
</div>

<?php
include("../f_shared/f_footer.php");
?>
