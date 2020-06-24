<?php 
	include 'include/header.php';
	include 'include/dbcon.php';

	$sql =   "SELECT * FROM clients ORDER BY id desc";
	$run = mysqli_query($con,$sql);
	$count = 1;
?>
<!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="">RakibAlom</a>
        <span class="breadcrumb-item active">Client</span>
      </nav>

      <div class="sl-pagebody">

        <div class="card pd-20 pd-sm-40">
          	<div class="sl-page-title">
          		<h5 class="card-body-title">All Client Comment <a href="client-comment-new.php" class="btn btn-sm btn-primary float-right">New Comment</a></h5>

				<table class="table table-sm table-stripped table-bordered mt-5">
					<tr>
						<th>#</th>
						<th>Client Name</th>
						<th>Comment</th>
						<th>Image</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				<?php while($result = mysqli_fetch_assoc($run)) { ?>
					<tr>
						<td><?php echo $count++; ?></td>
						<td><?php echo $result['name']; ?></td>
						<td><?php echo $result['comment']; ?></td>
						<td><img src="img/client/<?php echo $result['image']; ?>" alt=""></td>
						<td>
						<?php if ($result['status'] == 1) { ?>
							<span class="badge badge-success">active</span>
						<?php }else{ ?>
							<span class="badge badge-danger">deactive</span>
						<?php } ?>
						</td>
						<td>
							<a href="client-comment-edit.php?id=<?php echo $result['id']; ?>" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
							<a href="client-comment-delete.php?id=<?php echo $result['id']; ?>" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
				<?php } ?>
				</table>
           	</div>
    	</div>



<?php 
	include 'include/footer.php';
?>
