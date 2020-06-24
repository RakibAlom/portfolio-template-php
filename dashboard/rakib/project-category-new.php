<?php 
	include 'include/header.php';
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="">RakibAlom</a>
    <span class="breadcrumb-item active">Project Category</span>
  </nav>

  <div class="sl-pagebody">

    <div class="row row-sm bg-light rounded">
		<div class="col-md-12 text-dark">
			<div align="center">
				<h4 class="text-center pt-2">New Project Category</h4>
				<hr>
				<form action="" method="POST" enctype="multipart/form-data">
			        <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white mb-4">
			          <div class="form-group">
			          	<label class="d-block tx-11 tx-uppercase text-left tx-medium tx-spacing-1">Category Name</label>
			            <input type="text" name="name" class="form-control" placeholder="Enter your category name">
			          </div>
        				<input type="hidden" name="status" value="1">
			          <button type="submit" name="submit" class="btn btn-info btn-block">New Category Submit</button>
			        </div>
			      </form>
			</div>
		</div>
    </div>

<?php 
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$status = $_POST['status'];

		include 'include/dbcon.php';

		$sql = "INSERT INTO project_category (name,status) VALUES ('$name','$status')";
		$run = mysqli_query($con,$sql);
		if ($run) {
			?>
			<script>
				swal('Inserted','A new category added!','success');
			</script>
			<?php
		}else{
			?>
			<script>
				swal('Failed','something went wrong!','error');
			</script>
			<?php
		}
	}
	include 'include/footer.php';
?>

