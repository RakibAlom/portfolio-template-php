<?php 
	session_start();
	include 'include/dbcon.php';
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login | Rakib Alom</title>

    <!-- vendor css -->
    <link href="./lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="./lib/Ionicons/css/ionicons.css" rel="stylesheet">


    <!-- Starlight CSS -->
    <link rel="stylesheet" href="./css/starlight.css">
    <!-- sweetalert js -->
    <script src="js/sweetalert.min.js"></script>
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Rakib <span class="tx-info tx-normal">Alom</span></div>
        <div class="tx-center mg-b-60">Please, Login First For Your Security</div>
		<form action="login.php" method="POST">
	        <div class="form-group">
	          <input type="text" name="email" class="form-control" placeholder="Enter your email or phone">
	        </div><!-- form-group -->
	        <div class="form-group">
	          <input type="password" name="password" class="form-control" placeholder="Enter your password">
	          <a href="#" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
	        </div><!-- form-group -->
	        <button type="submit" name="login" class="btn btn-info btn-block">Sign In</button>
		</form>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="./lib/jquery/jquery.js"></script>
    <script src="./lib/popper.js/popper.js"></script>
    <script src="./lib/bootstrap/bootstrap.js"></script>

  </body>
</html>

<?php 
	if (isset($_POST['login'])) {
		$email = $_POST['email'];
		$password = sha1($_POST['password']);

		$sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$password' AND status = '1' || phone = '$email' AND password = '$password' AND status = '1'";
		$run = mysqli_query($con,$sql);
		$check = mysqli_num_rows($run);
		if ($check == 0) {

			?>
			<script>
				swal('Failed','email or password wrong!','error');
			</script>
			<?php
		}else{
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
		?>
			<script>window.open('index.php','_self');</script>
		<?php

		}
	}
 ?>
