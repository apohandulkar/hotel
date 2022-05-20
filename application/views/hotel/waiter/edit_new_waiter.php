 <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
			   <?php $success_message = $this->session->flashdata('success_message');
                            if (!empty($success_message)) {?>
                                <div class="alert alert-success">
                                      <a class="close" data-dismiss="alert" href="<?php echo site_url();?>hotel/hotel/Hotel" aria-hidden="true">×</a>
                                      <strong><?php echo $this->session->flashdata('success_message');  ?></strong>
                                </div> 
                            <?php }  ?>
                            <?php $failure_message = $this->session->flashdata('failure_message');
                            if (!empty($failure_message)) {?>
                                <div class="alert alert-warning">
                                      <a class="close" data-dismiss="alert" href="<?php echo site_url();?>hotel/hotel/Hotel" aria-hidden="true">×</a>
                                      <strong><?php echo $this->session->flashdata('failure_message');  ?></strong>
                                </div> 
                            <?php }  ?>
                  <h4 class="card-title">Update Waiter Details</h4>
                   <form class="form-sample" method="post" action="<?php echo site_url();?>hotel/Waiter/update_waiter" enctype="multipart/form-data">
					<p class="card-description">
                      Waiter info
                    </p>
                    <input type="hidden" name="id" value="<?=$waiter[0]['id']?>">
					<div class="row">
                      <div class="col-md-10">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Waiter Name</label>
                          <div class="col-sm-9">
                            <input type="text" required name="name" value=<?=$waiter[0]['name']?> class="form-control" />
                          </div>
                        </div>
                      </div>
                
                    </div>
                    <div class="row">
                      <div class="col-md-10">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Mobile No</label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="" value=<?=$waiter[0]['mobile']?>  name="mobile"/>
                          </div>
                        </div>
                      </div>     
					 
                    </div>
                   
                    <div class="row">
                      <div class="col-md-10">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address</label>
                          <div class="col-sm-9">
                            <textarea name="address" class="form-control" /><?=$waiter[0]['address']?></textarea>
                          </div>
                        </div>
                      </div>
                    
                    </div>
                    <div class="row">
                      <div class="col-md-10">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Username</label>
                          <div class="col-sm-9">
                            <input type="text" name="username" value=<?=$waiter[0]['username']?> class="form-control" />
                          </div>
                        </div>
                      </div>
					
                    </div>
                    <div class="row">
                     
                      <div class="col-md-10">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Password</label>
                          <div class="col-sm-9">
                             <input type="text" name="password" value=<?=$waiter[0]['password']?> class="form-control" />

                          </div>
                        </div>
                      </div>     
				
                    </div>      

				     <div class="row">
					  <div class="col-md-10">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Status</label>
                          <div class="col-sm-9">
							<select name="status" class="form-control">
							<option value=<?=$waiter[0]['status']?>><?=$waiter[0]['status']?></option>
							<option value="Active">Active</option>
							<option value="Inactive">Inactive</option>
							</select>
                          </div>
                        </div>
                      </div>
                      </div>
					  <div class="row">
                      <div class="col-md-10">
                        <div class="form-group row">
						<label class="col-sm-3 col-form-label"></label>
                          <div class="col-sm-9">
                            <input type="submit" class="btn btn-primary btn-block" value="Update">
                          </div>
                        </div>
                      </div>     
                      </div>     
	                  </form>
                </div>
              </div>
            </div>
          </div>


        </div>