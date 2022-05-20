<!DOCTYPE html>
<html lang="en">
<head>
<title>       
 <?php if (!empty($title)) echo $title;?>
</title>
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
  <style>
  .navbar .navbar-brand-wrapper {
    width: 100%;
}
  </style>
</head>

   <body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
   <!--     <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="<?php echo site_url();?>theme/images/logo1.png" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?php echo site_url();?>theme/images/logo1.png" alt="logo"/></a>-->
        <a class="navbar-brand" href="<?php echo site_url();?>waiter/Dashboard">Waiter</a>
		
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
  <?=$this->session->userdata('name');?>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
           &nbsp;
          </li>
          <li class="nav-item nav-profile dropdown">
           &nbsp;
          </li>
         
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
	        </div>

    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->

      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
      <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
		<!--
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
       
        </div>
		-->
		
      </div>
	  
	  
     <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- jQuery for search  -->
     <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
     <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript">
            $(function () {
                $('#datetimepicker3').datetimepicker({
                     format: 'HH:mm:ss' 
                });
            });
    </script>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker({
                     
                format: 'DD-MM-YYYY',
				maxDate: new Date()
                });
        });
    </script>    
	<script type="text/javascript">
        $(function () {
            $('#datetimepicker4').datetimepicker({
                     
                format: 'DD-MM-YYYY',
				maxDate: new Date()
                });
        });
    </script>    
	<script type="text/javascript">
        $(function () {
            $('#datetimepicker2').datetimepicker({
                     
                format: 'DD-MM-YYYY',
				maxDate: new Date()
                });
        });
    </script>
	<script type="text/javascript">
        $(function () {
            $('#datetimepicker5').datetimepicker({
                     
                format: 'DD-MM-YYYY',
				maxDate: new Date()
                });
        });
    </script>
	<script type="text/javascript">
        $(function () {
            $('#datetimepicker6').datetimepicker({
                     
                format: 'DD-MM-YYYY',
				maxDate: new Date()
                });
        });
    </script>	
	<script type="text/javascript">
        $(function () {
            $('#datetimepicker6').datetimepicker({
                     
                format: 'DD-MM-YYYY',
				maxDate: new Date()
                });
        });
    </script>

	<script type="text/javascript">
        $(function () {
            $('#datetimepicker_to').datetimepicker({
                     
                format: 'DD-MM-YYYY',
                });
        });
    </script>

	<script type="text/javascript">
        $(function () {
            $('#datetimepicker_from').datetimepicker({
                     
                format: 'DD-MM-YYYY',
                });
        });
    </script>


	<script type="text/javascript">
        $(function () {
            $('#datetimepicker_nto').datetimepicker({
                     
                format: 'DD-MM-YYYY',
                });
        });
    </script>

	<script type="text/javascript">
        $(function () {
            $('#datetimepicker_nfrom').datetimepicker({
                     
                format: 'DD-MM-YYYY',
                });
        });
    </script>
	
	<style>
	.form-group {
    margin-bottom: 0.5rem;
}

.content-wrapper {
    background: #fff;
  
    width: 100%;
   
}
.content-wrapper {
    padding: 1rem 0.6rem;
}
.sidebar {
    min-height: calc(100vh - 60px);
    background: #007bff;
    font-family: "Nunito", sans-serif;
    font-weight: 500;
    padding: 0;
    width: 235px;
    z-index: 11;
    transition: width 0.25s ease, background 0.25s ease;
    -webkit-transition: width 0.25s ease, background 0.25s ease;
    -moz-transition: width 0.25s ease, background 0.25s ease;
    -ms-transition: width 0.25s ease, background 0.25s ease;
}
.sidebar .nav .nav-item .nav-link i.menu-icon {
    font-size: 1rem;
    line-height: 1;
    margin-right: 1rem;
    color: #ffffff;
}
.sidebar .nav .nav-item .nav-link {
    display: -webkit-flex;
    display: flex;
    -webkit-align-items: center;
    align-items: center;
    white-space: nowrap;
    padding: 0.8125rem 1.937rem 0.8125rem 1rem;
    color: #ffffff;
    border-radius: 8px;
    -webkit-transition-duration: 0.45s;
    -moz-transition-duration: 0.45s;
    -o-transition-duration: 0.45s;
    transition-duration: 0.45s;
    transition-property: color;
    -webkit-transition-property: color;
}

.sidebar .nav .nav-item.active > .nav-link {
    background: #ffc100;
    position: relative;
}
.sidebar .nav .nav-item .nav-link i.menu-arrow {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    margin-left: auto;
    margin-right: 0;
    color: #ffffff;
}

.sidebar .nav.sub-menu {
    margin-bottom: 0;
    margin-top: 0;
    list-style: none;
    padding: 0.25rem 0 0 3.07rem;
    background: #007bff;
    padding-bottom: 12px;
}
.table td img, .jsgrid .jsgrid-table td img {
	width: auto; 
    height: auto;
    border-radius: 100%;
}
	</style>

  
