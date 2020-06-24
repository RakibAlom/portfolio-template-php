<?php 
	include 'include/header.php';
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="">RakibAlom</a>
    <span class="breadcrumb-item active">New Client Comment</span>
  </nav>

  <div class="sl-pagebody">

    <div class="row row-sm bg-light rounded">
		<div class="col-md-12 text-dark">
			<div align="center">
				<h4 class="text-center pt-2">New Client Comment</h4>
				<hr>
				<form action="" method="POST" enctype="multipart/form-data">
			        <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white">
			          <div class="form-group">
			          	<label class="d-block tx-11 tx-uppercase text-left tx-medium tx-spacing-1">Client Name</label>
			          	
			            <input type="text" name="name" class="form-control" placeholder="Enter your client name">
			          </div>
			          <div class="form-group">
			          	<label class="d-block tx-11 tx-uppercase text-left tx-medium tx-spacing-1">Client Comment</label>
			          	
			            <textarea name="comment" class="form-control" id="" cols="30" rows="10"></textarea>
			          </div>
			          <div class="form-group">
			            <label class="d-block tx-11 text-left tx-uppercase tx-medium tx-spacing-1">Upload Client Photo</label>
        				<input type="file" name="image" class="form-control">
        				<input type="hidden" name="status" value="1">
			          </div>
			          <button type="submit" name="submit" class="btn btn-info btn-block">Submit Client Comment</button>
			        </div>
			    </form>
			</div>
		</div>
    </div>

<?php 
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$comment = $_POST['comment'];
		$status = $_POST['status'];
		$image = $_FILES['image']['name'];
		$tmp_name = $_FILES['image']['tmp_name'];
		$upload_path = 'img/client/';
		$upload_check = move_uploaded_file($tmp_name, $upload_path.$image);

		include 'include/dbcon.php';

		if ($upload_check) {
			$sql = "INSERT INTO clients (name,comment,image,status) VALUES ('$name','$comment','$image','$status')";
			$run = mysqli_query($con,$sql);

			if ($run) {
				?>
				<script>
					swal('Publish Comment','A New Client Comment Publised!','success');
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
				swal('Failed','Client Image undefined!','error');
			</script>
			<?php
		}
	}
	include 'include/footer.php';
?>

