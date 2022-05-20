 <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
				<?php $id1=$maxid[0]['id'];
						$id=$id1+1;
				?>
                  <h4 class="card-title">Register New Kitchen</h4>
                  <form class="form-sample" method="post" action="<?php echo site_url();?>hotel/Kitchen/save_kitchen" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $id?>" name="maxid">
					<p class="card-description">
                      Kitchen info
                    </p>
                    
					<div class="row">
                      <div class="col-md-10">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Kitchen Name</label>
                          <div class="col-sm-9">
                            <input type="text" required name="name" class="form-control" />
                          </div>
                        </div>
                      </div>
                
                    </div>
                    <div class="row">
                      <div class="col-md-10">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Mobile No</label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="" name="mobile"/>
                          </div>
                        </div>
                      </div>     
					 
                    </div>
                   
                    <div class="row">
                      <div class="col-md-10">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address</label>
                          <div class="col-sm-9">
                            <textarea name="address" class="form-control" /></textarea>
                          </div>
                        </div>
                      </div>
                    
                    </div>
                    <div class="row">
                      <div class="col-md-10">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Username</label>
                          <div class="col-sm-9">
                            <input type="text" name="username" class="form-control" />
                          </div>
                        </div>
                      </div>
					
                    </div>
                    <div class="row">
                     
                      <div class="col-md-10">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Password</label>
                          <div class="col-sm-9">
                             <input type="text" name="password" class="form-control" />

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
                            <input type="submit" class="btn btn-primary btn-block" value="submit">
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