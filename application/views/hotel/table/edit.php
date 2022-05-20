 <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
				<?php $id1=$maxid[0]['id'];
						$id=$id1+1;
				?>
                  <h4 class="card-title">Edit Table</h4>
                  <form class="form-sample" method="post" action="<?php echo site_url();?>hotel/Hotel/update_table" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $id?>" name="maxid">
					<p class="card-description">
                      Table info
                    </p>
                    
					<div class="row">
                      <div class="col-md-10">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Table Name</label>
                          <div class="col-sm-9">
                            <input type="text"  name="name" class="form-control" value="<?=$table[0]['name']?>" />
                          </div>
                        </div>
                      </div>
                
                    </div>
                    <div class="row">
                      <div class="col-md-10">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Table Number</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" placeholder="" name="number" value="<?=$table[0]['number']?>" required>
                          </div>
                        </div>
                      </div>     
					 
                    </div>
                   
                  <input type="hidden" class="form-control" placeholder="" name="id" value="<?=$table[0]['id']?>" required>
                    

				     <div class="row">
					  <div class="col-md-10">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Status</label>
                          <div class="col-sm-9">
							<select name="status" class="form-control">
							<option <?php if ($table[0]['status']==0): ?>
                selected
              <?php endif ?> value="0">Active</option>
							<option <?php if ($table[0]['status']==1): ?> selected  <?php endif ?>value="1">Inactive</option>
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