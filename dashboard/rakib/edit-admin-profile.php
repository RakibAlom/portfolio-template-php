<?php 
	include 'include/header.php';
	include 'include/dbcon.php';
	$id = $_GET['id'];
	$sql = "SELECT * FROM admin WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
	$result = mysqli_fetch_assoc($run);
?>

 <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.php">Rakib</a>
        <span class="breadcrumb-item active">Dashboard</span>    </nav>

    <div class="sl-pagebody">
        <div class="row row-sm bg-light rounded">
			<div class="col-md-12 text-dark">
				<div align="center">
					<h4 class="text-center pt-2">Edit Your Profile</h4>
					<hr>
					<form action="" method="POST" enctype="multipart/form-data">
				        <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white">
				          <div class="form-group">
				            <input type="text" name="name" class="form-control" value="<?php echo $result['name']; ?>" placeholder="Enter your name">
				          </div>
				          <div class="form-group">
				            <input type="text" name="phone" class="form-control" value="<?php echo $result['phone']; ?>" placeholder="Enter your phone number">
				          </div>

				          <div class="form-group">
				            <label class="d-block tx-11 tx-uppercase text-left tx-medium tx-spacing-1">Birthday</label>
				            <input type="date" name="birthdate" class="form-control" value="<?php echo $result['birthdate']; ?>">
				          </div>
				          <button type="submit" name="information" class="btn btn-info btn-block">Update Information</button>
				        </div>
				      </form>
				</div>
			</div>
        </div>

<?php 
	if (isset($_POST['information'])) {
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$birthdate = $_POST['birthdate'];
		$sql = "UPDATE admin SET name = '$name', phone = '$phone', birthdate = '$birthdate' WHERE id = '$id'";
		$run = mysqli_query($con,$sql);


		if ($run) {
			?>
			<script>
                swal('Update Successfully','Changed your information!','success');
            </script>
			<?php
		}else{
			?>
			<script>
                swal('Failed','Something went Wrong!','error');
            </script>
			<?php
		}

	}
 	include 'include/footer.php';
?>