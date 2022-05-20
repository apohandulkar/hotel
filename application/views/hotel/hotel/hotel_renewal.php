 <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-8 grid-margin">
              <div class="card">
                <div class="card-body">
				
                  <h4 class="card-title">Renew Hotel <?=$hotelinfo[0]['name']?></h4>
                  <form class="form-sample" method="post" action="<?php echo site_url();?>hotel/hotel/Save_renewal" enctype="multipart/form-data">
                    <input type="hidden" value="<?=$hotelinfo[0]['id']?>" name="hid">
					<p class="card-description">
                      Hotel info
                    </p>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Register Date</label>
                          <div class="col-sm-9">
                            <input type="date" required name="register_date" value="<?=$hotelinfo[0]['register_date']?>" class="form-control" />
                          </div>
                        </div>
                      </div>
                      </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Expire Date</label>
                          <div class="col-sm-9">
                            <input type="date" required name="expired_date" value="<?=$hotelinfo[0]['expired_date']?>" required class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>   
					<div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Hotel Name</label>
                          <div class="col-sm-9">
                            <input type="text" required name="name" value="<?=$hotelinfo[0]['name']?>" class="form-control" />
                          </div>
                        </div>
                      </div>
                     
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Mobile No</label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="" value="<?=$hotelinfo[0]['mobile']?>" name="mobile"/>
                          </div>
                        </div>
                      </div>     
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address</label>
                          <div class="col-sm-9">
                            <textarea name="address" class="form-control" /><?=$hotelinfo[0]['address']?></textarea>
                          </div>
                        </div>
                      </div>

                    </div>
     			 <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Renew For Year</label>
                          <div class="col-sm-9">
						  <select name="renewal_year" class="form-control">
						  <option value="1">1</option>
						  <option value="2">2</option>
						  <option value="3">3</option>
						  <option value="4">4</option>
						  <option value="5">5</option>
						  <option value="6">6</option>
						  <option value="7">7</option>
						  <option value="8">8</option>
						  <option value="9">9</option>
						  <option value="10">10</option>
						  </select>
                          </div>
                        </div>
                      </div>     
                    </div>                
					<div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Renewal Amount</label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="" value="" name="renewal_amount"/>
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