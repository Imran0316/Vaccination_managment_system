<?php
if(isset($_POST['id']) && isset($_POST['action'])) {
    $id = $_POST['id'];
    $action = $_POST['action'];

    $connection = mysqli_connect("localhost", "root", "", "vaccine");

    if ($action == 'approve') {
        $query = "UPDATE child_detail SET child_status='approved' WHERE id='$id'";
       
    } elseif ($action == 'reject') {
        $query = "UPDATE child_detail SET child_status='rejected' WHERE id='$id'";
    }

    $result = mysqli_query($connection, $query);

    if ($result) {
        header('location: show_child_det.php');
    } else {
        echo "Error updating status.";
    }
}

?>
