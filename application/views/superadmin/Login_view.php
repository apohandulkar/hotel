<!DOCTYPE html>
<html lang="en">
<head>
<title>KOT Super Admin</title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- plugins:css -->

  <link rel="stylesheet" href="<?php echo site_url();?>theme/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?php echo site_url();?>theme/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?php echo site_url();?>theme/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?php echo site_url();?>theme/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="<?php echo site_url();?>theme/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="<?php echo site_url();?>theme/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo site_url();?>theme/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo site_url();?>theme/images/favicon.png" />
</head>
                              
      <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?php echo site_url();?>theme/images/logo1.png" alt="logo">
              </div>
			  <?php $success_message = $this->session->flashdata('success_message');
                            if (!empty($success_message)) {?>
                                <div class="alert alert-success">
                                      <a class="close" data-dismiss="alert" href="<?php echo site_url();?>login" aria-hidden="true">×</a>
                                      <strong><?php echo $this->session->flashdata('success_message');  ?></strong>
                                </div> 
                            <?php }  ?>
                            <?php $failure_message = $this->session->flashdata('failure_message');
                            if (!empty($failure_message)) {?>
                                <div class="alert alert-warning">
                                      <a class="close" data-dismiss="alert" href="<?php echo site_url();?>login" aria-hidden="true">×</a>
                                      <strong><?php echo $this->session->flashdata('failure_message');  ?></strong>
                                </div> 
                            <?php }  ?>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
      <form id="loginform" class="pt-3" role="form"  method="post" action="<?php echo site_url();?>superadmin/Login/validate_user">
               <input type="hidden" value="1" name="company_name">
			     <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputEmail1"  name="user" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="password" placeholder="Password">
                </div>
                <div class="mt-3">
                   <input type="submit" class="Button btn btn-success btn-lg btn-block" value="SIGN IN" />
                </div>
				
            </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>       

            <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.   from KOT. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

<!-- plugins:js -->
  <script src="<?php echo site_url();?>theme/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?php echo site_url();?>theme/vendors/chart.js/Chart.min.js"></script>
  <script src="<?php echo site_url();?>theme/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="<?php echo site_url();?>theme/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="<?php echo site_url();?>theme/js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo site_url();?>theme/js/off-canvas.js"></script>
  <script src="<?php echo site_url();?>theme/js/hoverable-collapse.js"></script>
  <script src="<?php echo site_url();?>theme/js/template.js"></script>
  <script src="<?php echo site_url();?>theme/js/settings.js"></script>
  <script src="<?php echo site_url();?>theme/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo site_url();?>theme/js/dashboard.js"></script>
  <script src="<?php echo site_url();?>theme/js/Chart.roundedBarCharts.js"></script>

       