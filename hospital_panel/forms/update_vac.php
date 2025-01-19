<?php
if(isset($_POST['id']) && isset($_POST['action'])) {
    $id = $_POST['id'];
    $action = $_POST['action'];

    $connection = mysqli_connect("localhost", "root", "", "vaccine");

    if ($action == 'vaccinated') {
        $query = "UPDATE child_detail SET vac_report='vaccinated' WHERE id='$id'";
       
    } elseif ($action == 'not vaccinated') {
        $query = "UPDATE child_detail SET vac_report='not vaccinted' WHERE id='$id'";
    }

    $result = mysqli_query($connection, $query);

    if ($result) {
        header('location: child_status.php');
    } else {
        echo "Error updating status.";
    }
}

?>
