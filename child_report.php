<?php
include("shared/header.php");

$connection=mysqli_connect("localhost","root","","vaccine");
$id=$_POST['submit'];
$sql="SELECT * FROM child_detail WHERE id = 1";
$run=mysqli_query($connection,$sql);
if(mysqli_num_rows($run)>0){
?>

<div class="card ">
    <?php
    while($data=mysqli_fetch_assoc($run)){
    ?>
<h1 class="text-center text-uppercase">
    <?php echo $data["ch_name"]; ?>
</h1>
<?php }?>

</div>

<?php }?>
</body>
</html>

<script>
    
</script>