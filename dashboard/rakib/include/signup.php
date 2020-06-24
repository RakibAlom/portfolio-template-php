<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Rakib Alom's Dashboard">
    <meta name="author" content="Rakib Alom">

    <title>Rakib Alom Sign-Up System</title>

    <!-- vendor css -->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">


    <!-- Starlight CSS -->
    <link rel="stylesheet" href="../css/starlight.css">
  
    <!-- sweetalert js -->
    <script src="../js/sweetalert.min.js"></script>
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-sl-primary">

      <form action="signup.php" method="POST" enctype="multipart/form-data">
        <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white">
          <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Rakib <span class="tx-info tx-normal">Alom</span></div>
          <div class="tx-center mg-b-60">Please, Login First For Your Security</div>

          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Enter your name">
          </div>
          <div class="form-group">
            <input type="text" name="phone" class="form-control" placeholder="Enter your phone number">
          </div>

          <div class="form-group">
            <label class="d-block tx-11 tx-uppercase tx-medium tx-spacing-1">Birthday</label>
            <input type="date" name="birthdate" class="form-control">
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Enter your email">
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Enter a strong password">
          </div>
          <div class="form-group">
            <input type="password" name="confirm_password" class="form-control" placeholder="Confrim your password">
          </div>
          <div class="form-group">
            <label class="d-block tx-11 tx-uppercase tx-medium tx-spacing-1">Upload Your Photo</label>
            <input type="file" name="image" class="form-control">
          </div>
          <input type="hidden" name="status" value="0">
          <div class="form-group tx-12">Rakib Alom Has Only Permission For Signup</div>
          <button type="submit" name="submit" class="btn btn-info btn-block">Sign Up</button>
           <div class="mg-t-40 tx-center">Already have an account? <a href="../login.php" class="tx-info">Sign In</a></div>
        </div>
      </form>
    </div>

    <script src="../lib/jquery/jquery.js"></script>
    <script src="../lib/popper.js/popper.js"></script>
    <script src="../lib/bootstrap/bootstrap.js"></script>
    <script src="../lib/select2/js/select2.min.js"></script>
    <script>
      $(function(){
        'use strict';

        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });
      });
    </script>

  </body>
</html>

<?php 
    if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $birthdate = $_POST['birthdate'];
      $email = $_POST['email'];
      $password = sha1($_POST['password']);
      $confirm_password = sha1($_POST['confirm_password']);

      include 'dbcon.php';
      if (!empty($name)) {
        if (!empty($phone)) {
          if (!empty($birthdate)) {
            if (!empty($email)) {
              $sql = "SELECT * FROM admin WHERE email = '$email'";
              $run = mysqli_query($con,$sql);
              $email_check = mysqli_num_rows($run);
              if (!$email_check > 0) {
                if (!empty($password)) {
                  if ($confirm_password == $password) {
                    $status = $_POST['status'];
                    $image = $_FILES['image']['name'];
                    $tmp_name = $_FILES['image']['tmp_name'];
                    $upload_path = '../img/admin/';
                    $upload_check = move_uploaded_file($tmp_name, $upload_path.$image);
                    if ($upload_check) {
                      $sql = "INSERT INTO admin (name,phone,birthdate,email,password,image,status) VALUES ('$name','$phone','$birthdate','$email','$confirm_password','$image','$status')";
                      $run = mysqli_query($con,$sql);

                      if ($run) {
                        echo "<script>
                        swal('Congratulation','You Registered Seccessfully!','success');
                        window.open('../login.php','_self');
                        </script>";
                      }else{
                        echo "<script>swal('Failed','Something went Wrong!','error');</script>";
                      }
                    }else{
                      echo "<script>swal('Failed','Image Upload Failed!','error');</script>";
                    }
                  }else{
                    echo "Confirm Password Not Matched!";
                  }
                }else{
                  echo "Password Undefined!";
                }
              }else{
                echo "<script>swal('Email Already Registered','Please, Try A New Email!','error');</script>";
              }
            }else{
              echo "email Undefined!";
            }
          }else{
            echo "Birthdate Undefined!";
          }
        }else{  
          echo "Phone Number Undefined!";
        }
      }else{
        echo "Name Undefined!";
      }
    }
?>
