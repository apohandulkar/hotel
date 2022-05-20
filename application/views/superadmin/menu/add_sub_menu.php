
 <div class="main-panel">
        <div class="content-wrapper">
 <?php $success_message = $this->session->flashdata('success_message');
                            if (!empty($success_message)) {?>
                                <div class="alert alert-success">
                                      <a class="close" data-dismiss="alert" href="<?php echo site_url();?>superadmin/Superadmin/Sub_menu" aria-hidden="true">×</a>
                                      <strong><?php echo $this->session->flashdata('success_message');  ?></strong>
                                </div> 
                            <?php }  ?>
                            <?php $failure_message = $this->session->flashdata('failure_message');
                            if (!empty($failure_message)) {?>
                                <div class="alert alert-warning">
                                      <a class="close" data-dismiss="alert" href="<?php echo site_url();?>superadmin/Superadmin/Sub_menu" aria-hidden="true">×</a>
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
				<form action="<?php echo site_url();?>superadmin/Superadmin/Update_sub_menu" method="post">
				<input type="hidden" value="<?=$menu_details[0]['id']?>" name="id">

					<div class="row">
					<div class="col-md-10 row">
					<div class="col-md-4">
						 Sub Menu
					</div>
					<div class="col-md-8">
					<input type="text" value="<?=$menu_details[0]['menu']?>" required placeholder="menu" name="menu" class="form-control">
					</div>
					</div>
					</div><br />
					<div class="row">
					<div class="col-md-10 row">
					<div class="col-md-4">
						Select main Menu
					</div>
					<div class="col-md-8">
					<?php
					$parent_menu=$menu_details[0]['parent_menu'];
					$sql17="select * from menu where IsActive=0 and id='$parent_menu'";
					 $record17 = $this->db->query($sql17);
					$a7=$record17->result_array();
					?>
					<select name="parent_menu" required class="form-control">
					<option value="<?=$a7[0]['id']?>"><?=$a7[0]['menu']?></option>
					<?php
					$sql1="select * from menu where IsActive=0 and parent_menu Is NULL";
					 $record1 = $this->db->query($sql1);
					$a=$record1->result_array();
					
					foreach($a as $aa)
					{
						?>
					<option value="<?=$aa['id']?>"><?php echo $aa['menu']?></option>
						<?php
					}
					?>
					</select>		
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
					</div>
				</form>
				<?php
				}
				else
				{
					?>
				<form action="<?php echo site_url();?>superadmin/Superadmin/Save_sub_menu" method="post">
					<div class="row">
					<div class="col-md-10 row">
					<div class="col-md-4">
						Add Sub Menu
					</div>
					<div class="col-md-8">
					<input type="text" value="" required placeholder="menu" name="menu" class="form-control">
					</div>
					</div>
					</div><br />
					<div class="row">
					<div class="col-md-10 row">
					<div class="col-md-4">
						Select main Menu
					</div>
					<div class="col-md-8">
					<?php
					$sql1="select * from menu where IsActive=0 and parent_menu Is NULL";
					 $record1 = $this->db->query($sql1);
					$a=$record1->result_array();
					?>
					<select name="parent_menu" required class="form-control">
					<option value="">Select Main Menu</option>
					<?php 
					foreach($a as $aa)
					{
						?>
					<option value="<?=$aa['id']?>"><?php echo $aa['menu']?></option>
						<?php
					}
					?>
					</select>		
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