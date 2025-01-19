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
  <?php
if(isset($_POST["signup"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $rpassword=$_POST["rpassword"];
    $role=$_POST["role"];

    $error=$email_error=$signup="";

    $connection=mysqli_connect("localhost","root","","vaccine");
  
    $email_check = "SELECT * FROM signup_det WHERE email = '$email'";
    $email_exist =mysqli_query($connection,$email_check);
    if(mysqli_num_rows($email_exist) > 0){
        $email_error="email already exist";
    }else{
        if($password === $rpassword){
        $quer="INSERT INTO `signup_det`( `name`, `email`, `password`, `rpassword`, `role`) VALUES ('$name','$email','$password','$rpassword','$role')";
            
        if($quer){
            $signup="Register Successfully";
        }else{
            echo "<script>alert('registeration failed')</script>";
            
        }
        $run=mysqli_query($connection,$quer);
    }else{
        $error="password does not match";
    }
    }
    
}

?>
<div class="container">
  <div class="row d-flex justify-content-center  mt-5">
    <div class="col-6 signup_form ">

        <form action="signup.php" method="post">
            <h1 class="text-center">
                Register Now!
            </h1>
        <label for="name" class="form-label"> Name: </label> <br>
        <input type="text" class="form-control" name="name" placeholder="User Name"> <br>

        <label for="email" class="form-label"> Email: </label> <br>
        <input type="email" class="form-control" name="email" placeholder=" Email">  <br>
        <span class="text-danger"><?php echo $email_error; ?></span><br>
        <br>

        <label for="password" class="form-label"> Password: </label> <br>
        <input type="password" class="form-control" name="password" placeholder="Password"> <br>

        <label for="rpassword" class="form-label"> Confirm Password: </label> <br>
        <input type="password" class="form-control" name="rpassword" placeholder="Confirm Password"> 
        <span class="text-danger"><?php echo $error; ?></span><br>

        <label for="role" class="form-label"> Role: </label> <br>
        <select name="role" class="form-select" >
            <option value="user" selected >user</option>
            <option value="admin">admin</option>
            <option value="doctor">doctor</option>
        </select> <br>
        <span class="text-success fs-2"> <?php echo $signup   ?> </span>
        <br>
        
        <input type="submit" value="sign up" name="signup" class="mt-5  btn btn-primary ">
        <a   href="login.php" class="mt-5  btn btn-primary ">log in</a>
    </form>
    </div>
  </div>
</div>

</body>
</html>