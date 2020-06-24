<?php 
	include 'include/header.php';
	include 'include/dbcon.php';
	$id = $_GET['id'];

	$sql = "SELECT * FROM skills WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
	$result = mysqli_fetch_assoc($run);
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="">RakibAlom</a>
    <span class="breadcrumb-item active">Skill</span>
  </nav>

  <div class="sl-pagebody">

    <div class="row row-sm bg-light rounded">
		<div class="col-md-12 text-dark">
			<div align="center">
				<h4 class="text-center pt-2">New Skill</h4>
				<hr>
				<form action="" method="POST" enctype="multipart/form-data">
			        <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white">
			          <div class="form-group">
			          	<label class="d-block tx-11 tx-uppercase text-left tx-medium tx-spacing-1">Skill Name</label>
			            <input type="text" name="name" class="form-control" value="<?php echo $result['name']; ?>" placeholder="Enter your skill name">
			          </div>
			          <div class="form-group">
			            <label class="d-block tx-11 text-left tx-uppercase tx-medium tx-spacing-1">Upload Your Skill Logo</label>
        				<input type="file" name="logo" class="form-control">
        				<input type="hidden" name="old_logo" value="<?php echo $result['logo'] ?>">
			          </div>
			          <button type="submit" name="share" class="btn btn-info btn-block">Update Skill</button>
			        </div>
			      </form>
			</div>
		</div>
    </div>


<?php 
	if (isset($_POST['share'])) {
		$name = $_POST['name'];
		$logo = $_FILES['logo']['name'];
		

		include 'include/dbcon.php';

		if (empty($logo)) {
			$sql = "UPDATE skills SET name = '$name' WHERE id = '$id'";
			$run = mysqli_query($con,$sql);
			if ($run) {
				?>
				<script>
					swal('Update Successfully','skill information updated!','success');
				</script>
				<?php
			}else{
				?>
				<script>
					swal('Failed','something went wrong!','error');
				</script>
				<?php
			}

			
		}else{
			$tmp_name = $_FILES['logo']['tmp_name'];
			$upload_path = 'img/skill/';
			$upload_check = move_uploaded_file($tmp_name, $upload_path.$logo);

			if ($upload_check) {
				$sql = "UPDATE skills SET name = '$name', logo = '$logo' WHERE id = '$id'";
				$run = mysqli_query($con,$sql);

				$old_logo = $_POST['old_logo'];
				unlink('img/skill/'.$old_logo);

				if ($run) {
					?>
					<script>
						swal('Update Successfully','skill information updated!','success');
					</script>
					<?php
				}else{
					?>
					<script>
						swal('Failed','something went wrong!','error');
					</script>
					<?php
				}
			}else{
				?>
				<script>
					swal('Failed','Skill Logo undefined!','error');
				</script>
				<?php
			}
		}
	}

	include 'include/footer.php';
?>

