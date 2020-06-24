<?php 
	include 'include/header.php';
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
			          	
			            <input type="text" name="name" class="form-control" placeholder="Enter your skill name">
			          </div>
			          <div class="form-group">
			            <label class="d-block tx-11 text-left tx-uppercase tx-medium tx-spacing-1">Upload Your Skill Logo</label>
        				<input type="file" name="logo" class="form-control">
        				<input type="hidden" name="status" value="1">
			          </div>
			          <button type="submit" name="share" class="btn btn-info btn-block">Share Skill</button>
			        </div>
			      </form>
			</div>
		</div>
    </div>

<?php 
	if (isset($_POST['share'])) {
		$name = $_POST['name'];
		$status = $_POST['status'];
		$logo = $_FILES['logo']['name'];
		$tmp_name = $_FILES['logo']['tmp_name'];
		$upload_path = 'img/skill/';
		$upload_check = move_uploaded_file($tmp_name, $upload_path.$logo);

		include 'include/dbcon.php';

		if ($upload_check) {
			$sql = "INSERT INTO skills (name,logo,status) VALUES ('$name','$logo','$status')";
			$run = mysqli_query($con,$sql);

			if ($run) {
				?>
				<script>
					swal('Share Successful','A new skill share just now!','success');
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
	include 'include/footer.php';
?>

