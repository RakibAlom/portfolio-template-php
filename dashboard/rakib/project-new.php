<?php 
	include 'include/header.php';
	include 'include/dbcon.php';
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="">RakibAlom</a>
    <span class="breadcrumb-item active">New Project</span>
  </nav>

  <div class="sl-pagebody">

    <div class="row row-sm bg-light rounded">
		<div class="col-md-12 text-dark">
			<div align="center">
				<h4 class="text-center pt-2">New Project</h4>
				<hr>
				<form action="" method="POST" enctype="multipart/form-data">
			        <div class="login-wrapper pd-25 pd-xs-40 bg-white">
			          <div class="form-group">
			          	<label class="d-block tx-11 tx-uppercase text-left tx-medium tx-spacing-1">Project Name</label>
			            <input type="text" name="name" class="form-control" placeholder="Enter your project name">
			          </div>
			          <div class="form-group">
			          	<label class="d-block tx-11 tx-uppercase text-left tx-medium tx-spacing-1">Project Category</label>
			            <select name="project_category" id="" class="form-control">
		            	<?php 
		            		$sql = "SELECT * FROM project_category";
		            		$run = mysqli_query($con,$sql);
		            		while($result = mysqli_fetch_assoc($run)) {
		            	 ?>
			            	<option value="<?php echo $result['name']; ?>"><?php echo $result['name']; ?></option>
			            <?php } ?>
			            </select>
			          </div>
			          <div class="form-group">
			          	<label class="d-block tx-11 tx-uppercase text-left tx-medium tx-spacing-1">Using Element</label>
			            <input type="text" name="used_element" class="form-control" placeholder="ex: html,css,bootstrap4">
			          </div>
			          <div class="form-group">
			          	<label class="d-block tx-11 tx-uppercase text-left tx-medium tx-spacing-1">Project Type</label>
			          	<input type="text" name="type" class="form-control" placeholder="ex: popular development design">
			          </div>
			          <div class="form-group">
			          	<label class="d-block tx-11 tx-uppercase text-left tx-medium tx-spacing-1">Project Date</label>
			          	<input type="date" name="project_date" class="form-control">
			          </div>
			          <div class="form-group">
			            <label class="d-block tx-11 text-left tx-uppercase tx-medium tx-spacing-1">Project Image</label>
        				<input type="file" name="image" class="form-control">
			          </div>
			          <input type="hidden" name="status" value="1">
			          <button type="submit" name="submit" class="btn btn-info btn-block">Upload Project Portfolio</button>
			        </div>
			    </form>
			</div>
		</div>
    </div>

<?php 
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$category = $_POST['project_category'];
		$elements = $_POST['used_element'];
		$type = $_POST['type'];
		$status = $_POST['status'];
		$date = $_POST['project_date'];
		$image = $_FILES['image']['name'];
		$tmp_name = $_FILES['image']['tmp_name'];
		$upload_path = 'img/project/';
		$upload_check = move_uploaded_file($tmp_name, $upload_path.$image);

		include 'include/dbcon.php';

		if ($upload_check) {
			$sql = "INSERT INTO project (name,project_category,used_element,type,image,status,project_date) VALUES ('$name','$category','$elements','$type','$image','$status','$date')";
			$run = mysqli_query($con,$sql);

			if ($run) {
				?>
				<script>
					swal('Upload Successful','A new project upload just now!','success');
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
				swal('Failed','Project Image undefined!','error');
			</script>
			<?php
		}	
	}
	include 'include/footer.php';
?>

