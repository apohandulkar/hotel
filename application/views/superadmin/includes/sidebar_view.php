      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url();?>superadmin/Dashboard">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Hotel</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
			     <li class="nav-item"> <a class="nav-link" href="<?php echo site_url();?>superadmin/Superadmin/Hotel">Hotel List</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url();?>superadmin/Superadmin/Register_hotel">New Register</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url();?>superadmin/Superadmin/qr_code_info">QR Info </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url();?>superadmin/Superadmin/qr_code">QR Generation </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url();?>superadmin/Superadmin/qr_code_takeway">Takeaway QR </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url();?>superadmin/Superadmin/qr_code_reserve_table">Reserve Table QrCode</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url();?>superadmin/Superadmin/Deleted_hotel">Hotel Deleted</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Menu Card</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>superadmin/Superadmin/Main_menu">Main Menu</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>superadmin/Superadmin/Sub_menu">Sub Menu</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>superadmin/Superadmin/Gst_tax">GST Tax Category</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Renewal</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url();?>superadmin/Superadmin/renewal">Hotel Renewal</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Notifications</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url();?>superadmin/Superadmin/notification">Create Notification</a></li>
              </ul>
            </div>
          </li>          
		  
		  <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url();?>superadmin/Superadmin/Home_page_setting">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Home Page Setting</span>
              <i class="menu-arrow"></i>
            </a>
          </li>
           
		   <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables1" aria-expanded="false" aria-controls="tables">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Report</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url();?>superadmin/Superadmin/report">Hotel</a></li>
              </ul>
            </div>
          </li>
      
      
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url();?>Superadmin/Logout">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Logout</span>
            </a>
          </li>
        </ul>
      </nav>