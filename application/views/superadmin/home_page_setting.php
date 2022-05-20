 <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="card">
                <div class="card-body">
				
                  <h4 class="card-title">Home Page Setting</h4>
                  <form class="form-sample" method="post" action="<?php echo site_url();?>superadmin/Superadmin/Save_portal_logo" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Portal Logo <font color="red">(Size: 94px * 25px)</font> </label>
                          <div class="col-sm-6">
                             <input type="file" name="logo" class="form-control">
							 <input type="hidden" value="<?=$home_info[0]['logo']?>" name="logoold">
							 <?php
							 if($home_info[0]['logo']!='')
							 {
								 ?>
									<img src="<?=$home_info[0]['logo']?>">
								 <?php
							 }
							 ?>
                          </div>
							<div class="col-sm-2">
						   <input type="submit" class="btn btn-primary" value="submit">
						</div>
                        </div>
                      </div>
                      </div>
					  </form>
					 <form class="form-sample" method="post" action="<?php echo site_url();?>superadmin/Superadmin/Save_home_banner" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Home Page Banner <font color="red">(Size: 1600px * 1051px)</font></label>
                          <div class="col-sm-6">
                             <input type="file" name="banner" class="form-control">
							 <input type="hidden" value="<?=$home_info[0]['banner']?>" name="bannerold">
							 <?php
							 if($home_info[0]['banner']!='')
							 {
								 ?>
									<img src="<?=$home_info[0]['banner']?>" height="50%" width="50%">
								 <?php
							 }
							 ?>
                          </div>
							<div class="col-sm-2">
						   <input type="submit" class="btn btn-primary" value="submit">
						</div>    
						</div>
                      </div>
                      </div>
					  </form>
					  <form class="form-sample" method="post" action="<?php echo site_url();?>superadmin/Superadmin/Save_banner_text" enctype="multipart/form-data">
					  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Home Page Banner Text</label>
                          <div class="col-sm-6">
                             <input type="text" name="btext" class="form-control" value="<?=$home_info[0]['btext']?>">
                          </div>
						<div class="col-sm-2">
						   <input type="submit" class="btn btn-primary" value="submit">
						</div>                  
						</div>
                      </div>
                      </div>
					  </form>
					  <form class="form-sample" method="post" action="<?php echo site_url();?>superadmin/Superadmin/Save_middle_images" enctype="multipart/form-data">
					  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Middle Images <font color="red">(Size: 386px * 393px)</font></label>
                          <div class="col-sm-6">
                             <input type="file" name="middle_image" class="form-control">
							 <input type="hidden" value="<?=$home_info[0]['middle_image']?>" name="bannerold">
							 <?php
							 if($home_info[0]['middle_image']!='')
							 {
								 ?>
									<img src="<?=$home_info[0]['middle_image']?>" height="50%" width="50%">
								 <?php
							 }
							 ?>
                          </div>
						  <div class="col-sm-2">
						   <input type="submit" class="btn btn-primary" value="submit">
						</div>
                        </div>
                      </div>
                      </div>
					  </form>
					  <form class="form-sample" method="post" action="<?php echo site_url();?>superadmin/Superadmin/Save_footer_image" enctype="multipart/form-data">
					  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Footer Image</label>
                          <div class="col-sm-6">
                             <input type="file" name="footer_image" class="form-control">
							 <input type="hidden" value="<?=$home_info[0]['footer_image']?>" name="bannerold">
							 <?php
							 if($home_info[0]['footer_image']!='')
							 {
								 ?>
									<img src="<?=$home_info[0]['footer_image']?>" height="50%" width="50%">
								 <?php
							 }
							 ?>
                          </div>
						<div class="col-sm-2">
						   <input type="submit" class="btn btn-primary" value="submit">
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


        </div>