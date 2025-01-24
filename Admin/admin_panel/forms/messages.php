<?php
include("../f_shared/f_header.php");
include("../f_shared/f_sidebar.php");


$con= mysqli_connect("localhost","root","","vaccine");
$sql="SELECT * FROM contactus";
$run=mysqli_query($con,$sql);
if(mysqli_num_rows($run)>0){



?>
<div>
<div class="main-panel">
   <?php 
include('../f_shared/f_nav.php');
   
   ?>
    <style>
        /* Centering the container */
        .container {
            width: 80%;
            margin: 0 auto; /* This will center the table */
            padding-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse; /* Makes the borders look cleaner */
            margin: 20px 0;
        }

        th, td {
            padding: 15px;
            text-align: left; /* Align text to the left */
            border: 1px solid #ddd; /* Adds borders to cells */
        }

        th {
            background-color: black; /* Light gray background for headers */
            color:white;
        }

        td a {
            color: red;
            text-decoration: none; /* Removes underline from links */
        }

        td a:hover {
            text-decoration: underline; /* Adds underline on hover */
        }
    </style>

        <div class="container scroll-container  d-flex justify-content-center">
          <table border="1" cellpadding="20px" cellspacing="0" class="content-item">
            <thead>
                <tr>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Message</th>
                  <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            while($data = mysqli_fetch_assoc($run)){
            ?>
            <tr>
               
                <td><?php echo $data['username'];?></td>
                <td><?php echo $data['email'];?></td>
                <td><?php echo $data['subject'];?></td>
                <td><?php echo $data['message'];?></td>
                <td>
                    <a href="cont_delete.php?id=<?php echo $data['id']; ?>"><i class="fa-solid fa-trash text-danger"></i></a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>

   
            </tbody>

          </table>
        
        </div>

        <?php }?>

<?php
include("../f_shared/f_footer.php");
?>