<?php 
  include 'include/header.php'; 
  include 'include/dbcon.php'; 
?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="">Rakib</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>

      <div class="sl-pagebody">

        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 bg-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Portfolio Box</h6>
                <a href="#" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div>
              <?php 
                $sql = "SELECT * FROM project";
                $run = mysqli_query($con,$sql);
                $result = mysqli_num_rows($run);
              ?>
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">Total Project</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold"><?php echo $result; ?></h3>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="card pd-20 bg-info">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Client Comments Box</h6>
                <a href="#" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div>
              <?php 
                $sql = "SELECT * FROM clients";
                $run = mysqli_query($con,$sql);
                $result = mysqli_num_rows($run);
              ?>
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">Total Comment</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold"><?php echo $result; ?></h3>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-purple">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Skill Box</h6>
                <a href="#" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div>
              <?php 
                $sql = "SELECT * FROM skills";
                $run = mysqli_query($con,$sql);
                $result = mysqli_num_rows($run);
              ?>
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">Total Skills</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold"><?php echo $result; ?></h3>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-sl-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Subscriber Box</h6>
                <a href="#" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div>
              <?php 
                $sql = "SELECT * FROM subscribers";
                $run = mysqli_query($con,$sql);
                $result = mysqli_num_rows($run);
              ?>
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">Total Subscirbers</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold"><?php echo $result; ?></h3>
              </div>
            </div>
          </div>
        </div>


<?php include ('include/footer.php'); ?>