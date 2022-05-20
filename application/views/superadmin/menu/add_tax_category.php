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
			//	print_r($gst_details);
				if($gst_details[0]['id']!='')
				{
				?>
				<h4 class="card-title">Update Tax Catagory</h4>
				  <br />
				<form action="<?php echo site_url();?>superadmin/Superadmin/Update_tax_category" method="post">
				<input type="hidden" value="<?=$gst_details[0]['id']?>" name="id">
				<div class="row">
					<div class="col-md-10 row">
					<div class="col-md-4">
						Catagory
					</div>
					<div class="col-md-8">
					<input type="text" required placeholder=""  value="<?php echo $gst_details[0]['cat']?>" name="cat" class="form-control">
					</div>
					</div>
					</div><br />
				
					<div class="row">
					<div class="col-md-10 row">
					<div class="col-md-4">
						GST %
					</div>
					<div class="col-md-8">
					<input type="number"  required placeholder=""  value="<?=$gst_details[0]['gst_percent']?>" name="gst_percent" class="form-control">
					</div>
					</div>
					</div><br />
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
					   <h4 class="card-title">Add Tax Catagory</h4>
				  <br />
				<form action="<?php echo site_url();?>superadmin/Superadmin/save_gst_tax" method="post">
					<div class="row">
					<div class="col-md-10 row">
					<div class="col-md-4">
						Catagory
					</div>
					<div class="col-md-8">
					<input type="text" value="" required placeholder="" name="cat" class="form-control">
					</div>
					</div>
					</div><br />
				
					<div class="row">
					<div class="col-md-10 row">
					<div class="col-md-4">
						GST %
					</div>
					<div class="col-md-8">
					<input type="number" value="" required placeholder="" name="gst_percent" class="form-control">
					</div>
					</div>
					</div><br />
					
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
