<?php 
	include 'include/header.php';
	include 'include/dbcon.php';
	$id = $_GET['id'];

	$sql = "SELECT * FROM clients WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
	$result = mysqli_fetch_assoc($run);
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="">RakibAlom</a>
    <span class="breadcrumb-item active">Edit Client Comment</span>
  </nav>

  <div class="sl-pagebody">

    <div class="row row-sm bg-light rounded">
		<div class="col-md-12 text-dark">
			<div align="center">
				<h4 class="text-center pt-2">Edit Client Comment</h4>
				<hr>
				<form action="" method="POST" enctype="multipart/form-data">
			        <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white">
			          <div class="form-group">
			          	<label class="d-block tx-11 tx-uppercase text-left tx-medium tx-spacing-1">Client Name</label>
			          	
			            <input type="text" name="name" class="form-control" value="<?php echo $result['name']; ?>" placeholder="Enter your client name">
			          </div>
			          <div class="form-group">
			          	<label class="d-block tx-11 tx-uppercase text-left tx-medium tx-spacing-1">Client Comment</label>
			          	
			            <textarea name="comment" class="form-control" id="" cols="30" rows="10"><?php echo $result['comment']; ?></textarea>
			          </div>
			          <div class="form-group">
			            <label class="d-block tx-11 text-left tx-uppercase tx-medium tx-spacing-1">Upload Client Photo</label>
        				<input type="file" name="image" class="form-control">
        				<input type="hidden" name="old_image" class="form-control" value="<?php echo $result['image']; ?>">
			          </div>
			          <button type="submit" name="update" class="btn btn-info btn-block">Update Client Comment</button>
			        </div>
			    </form>
			</div>
		</div>
    </div>


<?php 
	if (isset($_POST['update'])) {
		$name = $_POST['name'];
		$comment = $_POST['comment'];
		$image = $_FILES['image']['name'];
		

		include 'include/dbcon.php';

		if (empty($image)) {
			$sql = "UPDATE clients SET name = '$name', comment = '$comment' WHERE id = '$id'";
			$run = mysqli_query($con,$sql);
			if ($run) {
				?>
				<script>
					swal('Update Successfully','client comment updated!','success');
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
			$upload_path = 'img/client/';
			$upload_check = move_uploaded_file($tmp_name, $upload_path.$image);

			if ($upload_check) {
				$sql = "UPDATE clients SET name = '$name', comment = '$comment', image = '$image' WHERE id = '$id'";
				$run = mysqli_query($con,$sql);

				$old_image = $_POST['old_image'];
				unlink('img/client/'.$old_image);

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
					swal('Failed','Client Photo undefined!','error');
				</script>
				<?php
			}
		}
	}

	include 'include/footer.php';
?>

