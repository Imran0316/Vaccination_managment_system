<?php
session_start();
if(isset($_SESSION['email'])){
  header('location: index.php');
}

if(isset($_POST["login"])){
  $email=$_POST["email"];
  $password=$_POST["password"];
  
  $connection=mysqli_connect("localhost","root","","vaccine");
  $quer="SELECT * FROM signup_det WHERE email = '$email'";
  $result=mysqli_query($connection,$quer);
  if(mysqli_num_rows($result) > 0){
    $row=mysqli_fetch_assoc($result);
    $dbpass=$row['password'];
    $_SESSION['name']=$row['name'];
    $_SESSION['email']=$row['email'];
    $_SESSION['password']=$row['password'];
    if($password == $dbpass){
      echo "<script>alert('login successfully')</script>";
      header("location: index.php");
    }else{
      echo "Invalid Password";
    }
  }else{
    
    echo 'invalid email';
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="assets/img/kaiadmin/favicon.ico"
      type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />
    <link rel="stylesheet" href="assets/css/signup.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css" />
  </head>
  <body>

<div class="container">
  <div class="row d-flex justify-content-center  mt-5">
    <div class="col-6 signup_form ">

        <form action="" method="post">
            <h1 class="text-center">
                Login Now!
            </h1>

        <label for="email" class="form-label"> Email: </label> <br>
        <input type="email" class="form-control" name="email" placeholder=" Email">  <br>
        

        <label for="password" class="form-label"> Password: </label> <br>
        <input type="password" class="form-control" name="password" placeholder="Password"> <br>

        
        
        <input type="submit" value="log in" name="login" class="mt-5  btn btn-primary ">
        <a   href="signup.php" class="mt-5  btn btn-primary ">register now</a>
    </form>
    </div>
  </div>
</div>

</body>
</html>