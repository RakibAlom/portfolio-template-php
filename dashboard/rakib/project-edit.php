<?php 
	include 'include/header.php';
	include 'include/dbcon.php';
	$id = $_GET['id'];
	$sql = "SELECT * FROM project WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
	$result = mysqli_fetch_assoc($run);
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="">RakibAlom</a>
    <span class="breadcrumb-item active">Edit Project</span>
  </nav>

  <div class="sl-pagebody">

    <div class="row row-sm bg-light rounded">
		<div class="col-md-12 text-dark">
			<div align="center">
				<h4 class="text-center pt-2">Edit <?php echo $result['name']; ?> Project</h4>
				<hr>
				<form action="" method="POST" enctype="multipart/form-data">
			        <div class="login-wrapper pd-25 pd-xs-40 bg-white">
			          <div class="form-group">
			          	<label class="d-block tx-11 tx-uppercase text-left tx-medium tx-spacing-1">Project Name</label>
			            <input type="text" name="name" class="form-control" value="<?php echo $result['name']; ?>" placeholder="Enter your project name">
			          </div>
			          <div class="form-group">
			          	<label class="d-block tx-11 tx-uppercase text-left tx-medium tx-spacing-1">Project Category</label>
			            <select name="project_category" id="" class="form-control">
		            	<?php 
		            		$sql = "SELECT * FROM project_category";
		            		$run = mysqli_query($con,$sql);
		            		while($result2 = mysqli_fetch_assoc($run)) {
		            	 ?>
			            	<option value="<?php echo $result2['name']; ?>" <?php if($result['project_category'] == $result2['name']) { echo "selected"; } ?>><?php echo $result2['name']; ?></option>
			            <?php } ?>
			            </select>
			          </div>
			          <div class="form-group">
			          	<label class="d-block tx-11 tx-uppercase text-left tx-medium tx-spacing-1">Using Element</label>
			            <input type="text" name="used_element" class="form-control" value="<?php echo $result['used_element']; ?>" placeholder="ex: html,css,bootstrap4">
			          </div>
			          <div class="form-group">
			          	<label class="d-block tx-11 tx-uppercase text-left tx-medium tx-spacing-1">Project Type</label>
			          	<input type="text" name="type" class="form-control" value="<?php echo $result['type']; ?>" placeholder="ex: popular development design">
			          </div>
			          <div class="form-group">
			          	<label class="d-block tx-11 tx-uppercase text-left tx-medium tx-spacing-1">Project Date</label>
			          	<input type="date" name="project_date" class="form-control" value="<?php echo $result['project_date']; ?>">
			          </div>
			          <div class="form-group">
			            <label class="d-block tx-11 text-left tx-uppercase tx-medium tx-spacing-1">Project Image</label>
        				<input type="file" name="image" class="form-control">
        				<input type="hidden" name="old_image" value="<?php echo $result['image']; ?>">
			          </div>
			          <button type="submit" name="submit" class="btn btn-info btn-block">Update Project Portfolio</button>
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
		$date = $_POST['project_date'];
		$image = $_FILES['image']['name'];

		include 'include/dbcon.php';

		if (empty($image)) {
			$sql = "UPDATE project SET name = '$name', project_category = '$category', used_element = '$elements', type = '$type', project_date = '$date' WHERE id = '$id'";
			$run = mysqli_query($con,$sql);
			if ($run) {
				?>
				<script>
					swal('Update Successful','project information updated!','success');
					window.open('project.php','_self');
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
			$tmp_name = $_FILES['image']['tmp_name'];
			$upload_path = 'img/project/';
			$upload_check = move_uploaded_file($tmp_name, $upload_path.$image);
			$old_image = $_POST['old_image'];
			unlink('img/project/'.$old_image);
			if ($upload_check) {
				$sql = "UPDATE project SET name = '$name', project_category = '$category', used_element = '$elements', type = '$type', image = '$image', project_date = '$date' WHERE id = '$id'";
				$run = mysqli_query($con,$sql);
				if ($run) {
					?>
					<script>
						swal('Update Successful','project information updated!','success');
						window.open('project.php','_self');
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
					swal('Failed','something went wrong!','error');
				</script>
				<?php
			}
		}	
	}
	include 'include/footer.php';
?>

