    <div class="modal fade" id="order-modal" tabindex="-1" role="dialog" aria-hidden="true" style="background-color: rgba(0,0,0,.6);">
         <div class="modal-dialog" role="document">
		        <div class="pull-right"> <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>
</button></div>
<br />
<br />
    <div class="modal-content">
        <br>
        <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#signin" data-toggle="tab">Sign In</a></li>
              <li class=""><a href="#signup" data-toggle="tab">Register</a></li>
            </ul>
        </div>
      <div class="modal-body">
	  
        <div id="myTabContent" class="tab-content">
        <div class="tab-pane active in" id="signin">
		<h2>Sign-In</h2>

            <form class="form-horizontal" action="<?php echo site_url();?>Home/validate_user" method="post">
			<input type="hidden" name="controller" value="<?=$controller?>">
			<input type="hidden" name="city" value="<?=$this->session->userdata('city');?>">
            <fieldset>
            <!-- Sign In Form -->
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="userid">Mobile phone number</label>
              <div class="controls">
                <input required id="userid" name="mobile" type="text" class="form-control" placeholder="" class="input-medium" required="">
              </div>
            </div>

            <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="passwordinput">Password:</label>
              <div class="controls">
                <input required="" id="passwordinput" name="password" class="form-control" type="password" placeholder="" class="input-medium">
              </div>
            </div>
            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="signin"></label>
              <div class="controls">
                <button id="signin" name="signin" class="btn btn-success">Sign In</button>
              </div>
            </div>
            </fieldset>
            </form>
        </div>
        <div class="tab-pane " id="signup">
		<h2>Create account</h2>
<?php
$url= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$controller=array_slice(explode('/', $url), -1)[0];

?>
            <form class="form-horizontal" action="<?php echo site_url();?>home/save_customer" method="post">
			<input type="hidden" name="controller" value="<?=$controller?>">
			<input type="hidden" name="city" value="<?=$this->session->userdata('city');?>">
            <fieldset>
            <!-- Sign Up Form -->
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="Email">Your name</label>
              <div class="controls">
                <input id="name" name="name" class="form-control" type="text" placeholder="" class="input-large" required="">
              </div>
            </div>
            
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="userid">Mobile number:</label>
              <div class="controls">
                <input id="mobile" name="mobile" class="form-control" type="text" placeholder="" class="input-large" required="">
              </div>
            </div>
            
            <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="password">Email:</label>
              <div class="controls">
                <input id="email" name="email" class="form-control" type="email" placeholder="" class="input-large" required="">
              </div>
            </div>
            
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="reenterpassword">Password</label>
              <div class="controls">
                <input id="password" class="form-control" name="password" type="password" placeholder="" class="input-large" required="">
              </div>
            </div>
            
         
            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="confirmsignup"></label>
              <div class="controls">
                <button id="confirmsignup" name="confirmsignup" class="btn btn-success">Sign Up</button>
              </div>
            </div>
            </fieldset>
            </form>
      </div>
    </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<style>
.nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus {
    color: #555;
    background-color: #fff;
    border: 1px solid #ddd;
    border-bottom-color: transparent;
    cursor: default;
}
.nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus {
    color: #555;
    background-color: #fff;
    border: 1px solid #ddd;
    border-bottom-color: transparent;
    cursor: default;
}
.nav-tabs>li>a {
    margin-right: 2px;
    line-height: 1.428571429;
    border: 1px solid transparent;
    border-radius: 4px 4px 0 0;
}
.nav>li>a {
    position: relative;
    display: block;
    padding: 10px 15px;
}
</style>
    <div class="modal fade" id="rept_order" tabindex="-1" role="dialog" aria-hidden="true" style="background-color: rgba(0,0,0,.6);">
         <div class="modal-dialog" role="document">
		        <div class="pull-right"> <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>
</button></div>
<br />
<br />
    <div class="modal-content">
  
      <div class="modal-body">
	  
        <div id="myTabContent" class="tab-content">
        <div class="tab-pane active in" id="signin">
		<h2>Clear your cart?</h2>
<hr />
            <form class="form-horizontal" action="<?php echo site_url();?>Home/validate_user" method="post">
			<input type="hidden" name="controller" value="<?=$controller?>">
			<input type="hidden" name="city" value="<?=$this->session->userdata('city');?>">
            <fieldset>
            <!-- Sign In Form -->
            <!-- Text input-->
			<?php
			$numItems = count($this->cart->contents());
			$i = 0;
			foreach($this->cart->contents() as $key) {
			if($i+1 == $numItems) {
			$saved_rowid = $key['hotel_id'];
			}
			$i++;
			}
			 $sql = "SELECT * FROM hotel where IsActive=0 and id='$saved_rowid'";
			$record = $this->db->query($sql);
			$hh=$record->result_array();
			?>
            <div class="control-group">
             <p> Your cart has existing items from <?=$hh[0]['name']?>. Do you want to clear it and add items from <?=$hotel_details[0]['name'];?></p><br />
			
			<table class="table table-bordered" >
			<tr><td><br />&nbsp;<?=$hh[0]['name']?><br />
			&nbsp;<?=$hh[0]['address']?><br /><br /></td></tr>
			<tr><td><?php
				foreach($this->cart->contents() as $items)
				{
					$mid=$items['id'];
					$sqlmm = "select * from hotel_menu where id='$mid'";
					$recordmm = $this->db->query($sqlmm);
					$mm=$recordmm->result_array();
					   if($mm[0]['category']!='Veg')
					   {
						   ?>
					   <img src="http://localhost/KOT/ui/img/nonveg.png" alt="Food logo"></a>
					   <?php
					   }
					   else
					   {
						   ?>
					   <img src="http://localhost/KOT/ui/img/veg.png" alt="Food logo"></a>
						   <?php
					   }
					   ?>
					<?=$items['qty']?> X <?=$items['name']?>
					<br />
					
                                                   <?php
												}
												   ?>
			 </td></tr>

			</table>

            </div>
           <!-- Password input-->
           
            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="signin"></label>
              <div class="controls">
                <a href="<?php echo site_url();?>home/menu/<?=$hh[0]['id']?>/<?=$id?>" class="btn btn-success">Proceed with these items</a>
                <button id="clear_cart" name="signin" class="btn btn-danger" data-hid='7'>Clear Cart</button>
              </div>
            </div>
            </fieldset>
            </form>
        </div>
        <div class="tab-pane " id="signup">
		<h2>Create account</h2>
<?php
$url= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$controller=array_slice(explode('/', $url), -1)[0];

?>
           
      </div>
    </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>   


 <div class="modal fade" id="order_modal_reserve" tabindex="-1" role="dialog" aria-hidden="true" style="background-color: rgba(0,0,0,.6);">
         <div class="modal-dialog" role="document">
		        <div class="pull-right"> <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>
</button></div>
<br />
<br />
    <div class="modal-content">
  
      <div class="modal-body">
	  
        <div id="myTabContent" class="tab-content">
        <div class="tab-pane active in" id="signin">
		<h2>Table Reservations</h2>
<hr />
        To reserve your table call on <font color="blue"><i class="fa fa-phone" aria-hidden="true"></i>
<?=$hotel_details[0]['reserv_no']?></font>
        </div>
       
    </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>