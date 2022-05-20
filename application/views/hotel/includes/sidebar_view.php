      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url();?>Hotel/Dashboard">
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
			     <li class="nav-item"> <a class="nav-link" href="<?php echo site_url();?>hotel/Hotel/Edit_hotel">Profile</a></li>
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
                <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>hotel/Hotel/Main_menu">Main Menu</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>hotel/Hotel/Sub_menu">Sub Menu</a></li>
              </ul>
            </div>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url();?>hotel/Waiter">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Waiter </span>
            </a>
          </li>    
		  <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url();?>hotel/Kitchen">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Kitchen </span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Menu Card</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>hotel/Hotel/Main_menu">Main Menu</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>hotel/Hotel/Sub_menu">Sub Menu</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url();?>hotel/Hotel/List_table">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Table </span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url();?>hotel/Hotel/ReserveTableQrCode">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Reserve Table QrCode</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Order</span>
              <i class="menu-arrow"></i>
            </a>
			</li>
			<li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Billing</span>
              <i class="menu-arrow"></i>
            </a>
			</li>
			 <li class="nav-item">
			 <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Renewal</span>
              <i class="menu-arrow"></i>
            </a>
          </li>
        <!--  <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Notifications</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url();?>hotel/Hotel/notification">Create Notification</a></li>
              </ul>
            </div>
          </li>
           -->
		   <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables1" aria-expanded="false" aria-controls="tables">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Report</span>
              <i class="menu-arrow"></i>
            </a>
           
          </li>
      
      
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url();?>hotel/Logout">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Logout</span>
            </a>
          </li>
        </ul>
      </nav>