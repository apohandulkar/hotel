 <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="card">
                <div class="card-body">
				
                  <h4 class="card-title">QR Code Info</h4>
                  <form class="form-sample" method="post" action="<?php echo site_url();?>superadmin/Superadmin/Save_qr_code" enctype="multipart/form-data">
					
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Top Description</label>
                          <div class="col-sm-9">
                             <textarea name="top_des" class="form-control" /><?=$notification[0]['top_des']?></textarea>
                          </div>
                        </div>
                      </div>
                      </div>
					  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Bottom Description</label>
                          <div class="col-sm-9">
                             <textarea name="bottom_des" class="form-control" /><?=$notification[0]['bottom_des']?></textarea>
                          </div>
                        </div>
                      </div>
                      </div>
					  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Bottom Logo</label>
                          <div class="col-sm-9">
                             <input type="file" name="logo" class="form-control" />
							 <img src="<?php echo $notification[0]['logo']?>" height="50" width="50">
							 <input type="hidden" name="logoold" value="<?=$notification[0]['logo']?>">
                          </div>
                        </div>
                      </div>
                      </div>
					  
                 <div class="col-md-12">
                        <div class="form-group row">
                          <div class="col-sm-9">
                            <input type="submit" class="btn btn-primary mr-2" value="submit">
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


        </div>