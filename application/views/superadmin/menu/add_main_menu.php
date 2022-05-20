 <div class="main-panel">
        <div class="content-wrapper">
 <?php $success_message = $this->session->flashdata('success_message');
                            if (!empty($success_message)) {?>
                                <div class="alert alert-success">
                                      <a class="close" data-dismiss="alert" href="<?php echo site_url();?>superadmin/Superadmin/Main_menu" aria-hidden="true">×</a>
                                      <strong><?php echo $this->session->flashdata('success_message');  ?></strong>
                                </div> 
                            <?php }  ?>
                            <?php $failure_message = $this->session->flashdata('failure_message');
                            if (!empty($failure_message)) {?>
                                <div class="alert alert-warning">
                                      <a class="close" data-dismiss="alert" href="<?php echo site_url();?>superadmin/Superadmin/Main_menu" aria-hidden="true">×</a>
                                      <strong><?php echo $this->session->flashdata('failure_message');  ?></strong>
                                </div> 
                            <?php }  ?>
          <div class="row">
		   			
            <div class="col-lg-12 stretch-card">
			 
              <div class="card">
                <div class="card-body">	
               
				<?php
				if($menu_details[0]['id']!='')
				{
				?>
				<h4 class="card-title">Update Main Menu</h4>
				  <br />
				<form action="<?php echo site_url();?>superadmin/Superadmin/Update_main_menu" method="post">
				<input type="hidden" value="<?=$menu_details[0]['id']?>" name="id">

					<div class="row">
					<div class="col-md-10 row">
					<div class="col-md-4">
						 Main Menu
					</div>
					<div class="col-md-8">
					<input type="text" value="<?=$menu_details[0]['menu']?>" required placeholder="menu" name="menu" class="form-control">
					</div>
					</div>
					</div><br />
					<div class="row">
					<div class="col-md-10 row">
					<div class="col-md-4">
						Add Menu Catagory
					</div>
					<div class="col-md-8">
					<select name="category" required class="form-control">
					<option value="<?=$menu_details[0]['category']?>"><?=$menu_details[0]['category']?></option>
					<option value="Veg">Veg</option>
					<option value="Non Veg">Non Veg</option>
					</select>
					</div>
					</div>
					</div><br />
					<div class="row">
					<div class="col-md-10 row">
					<div class="col-md-4">
						Menu contains
					</div>
					<div class="col-md-8">
					<textarea class="form-control" name="description"><?php echo $menu_details[0]['description']?></textarea>
					</div>
					</div>
					</div><br />
					<div class="row">
					<div class="col-md-10 row">
					<div class="col-md-4">
						Menu Price
					</div>
					<div class="col-md-8">
					<input type="number" required class="form-control" value="<?=$menu_details[0]['price']?>" name="price">
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-md-12">
					<div class="col-md-2">
					<input type="submit" value="Submit" class="btn btn-success">
					</div>
					</div>
					</div>
				</form>
				<?php
				}
				else
				{
					?>
					   <h4 class="card-title">Add Main Menu</h4>
				  <br />
				<form action="<?php echo site_url();?>superadmin/Superadmin/Save_main_menu" method="post">
					<div class="row">
					<div class="col-md-10 row">
					<div class="col-md-4">
						Add Main Menu
					</div>
					<div class="col-md-8">
					<input type="text" value="" required placeholder="menu" name="menu" class="form-control">
					</div>
					</div>
					</div><br />
					<div class="row">
					<div class="col-md-10 row">
					<div class="col-md-4">
						Add Menu Catagory
					</div>
					<div class="col-md-8">
					<select name="category" required class="form-control">
					<option value="">Select Catagory</option>
					<option value="Veg">Veg</option>
					<option value="Non Veg">Non Veg</option>
					</select>
					</div>
					</div>
					</div><br />
					<div class="row">
					<div class="col-md-10 row">
					<div class="col-md-4">
						Menu contains
					</div>
					<div class="col-md-8">
					<textarea class="form-control" name="description"></textarea>
					</div>
					</div>
					</div><br />
					<div class="row">
					<div class="col-md-10 row">
					<div class="col-md-4">
						Menu Price
					</div>
					<div class="col-md-8">
					<input type="number" required class="form-control" name="price">
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-md-12">
					<div class="col-md-2">
					<input type="submit" value="Submit" class="btn btn-success">
					</div>
					</div>
					</div>
				</form>
				<?php
				}
				?>
				</div>
			
                </div>
              </div>
            </div>
          </div>


        </div>   
        </div>   
