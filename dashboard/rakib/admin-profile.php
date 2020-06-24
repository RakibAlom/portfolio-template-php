<?php 
	include 'include/header.php';
?>

 <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.php">Rakib</a>
        <span class="breadcrumb-item active">Dashboard</span>
    </nav>

    <div class="sl-pagebody">
        <div class="row row-sm bg-light rounded">
			<div class="col-lg-4 col-md-4">
				<img class="img-fluid" src="img/admin/<?php echo $result['image']; ?>" alt="">
			</div>

			<div class="col-md-8 text-dark">
				<div class="container">
					<h4 class="text-center pt-2"><?php echo $result['name'] ?>'s Profile <small><a class="float-right" href="edit-admin-profile.php?id=<?php echo $result['id']; ?>">Edit Profile</a></small></h4>
					<hr>
					<table class="table">
						<tr>
							<th>Name</th>
							<td><?php echo $result['name'] ?></td>
						</tr>
						<tr>
							<th>Phone Number</th>
							<td><?php echo $result['phone'] ?></td>
						</tr>
						<tr>
							<th>Email</th>
							<td><?php echo $result['email'] ?></td>
						</tr>
						<tr>
							<th>Date of Birth</th>
							<td><?php echo $result['birthdate'] ?></td>
						</tr>
					</table>
				</div>
			</div>
        </div>

<?php 
 	include 'include/footer.php';
?>