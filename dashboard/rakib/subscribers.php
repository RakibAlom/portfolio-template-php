<?php 
	include 'include/header.php';
	include 'include/dbcon.php';

	$sql =   "SELECT * FROM subscribers";
	$run = mysqli_query($con,$sql);
	$count = 1;
?>
<!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">RakibAlom</a>
        <span class="breadcrumb-item active">Subscribers</span>
      </nav>

      <div class="sl-pagebody">

        <div class="card pd-20 pd-sm-40">
          	<div class="sl-page-title">
          		<h5 class="card-body-title">All Subscribers</h5>

				<table class="table table-sm table-stripped mt-5">
					<tr>
						<th>#</th>
						<th>Subscribe Email</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				<?php while($result = mysqli_fetch_assoc($run)) { ?>
					<tr>
						<td><?php echo $count++; ?></td>
						<td><?php echo $result['email']; ?></td>
						<td>
							<?php if ($result['status'] == 1) { ?>
								<span class="badge badge-success">active</span>
							<?php }else{ ?>
								<span class="badge badge-danger">deactive</span>
							<?php } ?>
						</td>
						<td>
							<a href="subscribers-delete.php?id=<?php echo $result['id']; ?>" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
				<?php } ?>
				</table>
           	</div>
    	</div>



<?php 
	include 'include/footer.php';
?>
