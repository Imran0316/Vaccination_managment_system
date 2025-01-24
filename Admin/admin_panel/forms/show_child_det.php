<?php
include("../f_shared/f_header.php");
include("../f_shared/f_sidebar.php");
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

<?php
$connection = mysqli_connect("localhost", "root", "", "vaccine");


$search = isset($_GET['search']) ? $_GET['search'] : '';


if (!empty($search)) {
    $quer = "SELECT * FROM child_detail WHERE 
        ch_name LIKE '%$search%' OR 
        pa_name LIKE '%$search%' OR 
        pa_email LIKE '%$search%' OR 
        ch_address LIKE '%$search%' OR 
        vac_name LIKE '%$search%' OR 
        hos_name LIKE '%$search%'";
} else {
    $quer = "SELECT * FROM child_detail";
}

$run = mysqli_query($connection, $quer);
?>

<div class="main-panel">
    <?php include("../f_shared/f_nav.php"); ?>
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Children Detail</h3>
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
                        <a href="show_child_det.php">children</a>
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

            <!-- Data Table -->
            <div class="show_hosp d-flex justify-content-center scroll-container">
                <table border="1px" class="content-item">
                    <thead>
                        <tr>
                            <th>Child Name</th>
                            <th>Parent Name</th>
                            <th>Parent Email</th>
                            <th>Child Age</th>
                            <th>Address</th>
                            <th>Vaccination Date</th>
                            <th>Date Of Birth</th>
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
                        if (mysqli_num_rows($run) > 0) {
                            while ($data = mysqli_fetch_assoc($run)) { ?>
                                <tr>
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
                                    <td><a href="child_edit.php?id=<?= $data['id']; ?>"><i class="fa-solid fa-pen-to-square text-success"></i></a></td>
                                    <td><a href="child_delete.php?id=<?= $data['id']; ?>"><i class="fa-solid fa-trash text-danger"></i></a></td>
                                </tr>
                            <?php } 
                        } else { ?>
                            <tr>
                                <td colspan="13">No records found</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include("../f_shared/f_footer.php"); ?>
</div>
