 <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="card">
                <div class="card-body">
				
                  <h4 class="card-title">Notification</h4>
                  <form class="form-sample" method="post" action="<?php echo site_url();?>superadmin/Superadmin/Save_notification" enctype="multipart/form-data">
					
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Waiting Notification</label>
                          <div class="col-sm-9">
                             <textarea name="wating" class="form-control" /><?=$notification[0]['wating']?></textarea>
                          </div>
                        </div>
                      </div>
                      </div>
					  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Payment Done Notification</label>
                          <div class="col-sm-9">
                             <textarea name="payment_done" class="form-control" /><?=$notification[0]['payment_done']?></textarea>
                          </div>
                        </div>
                      </div>
                      </div>
					  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Order Confirm Notification</label>
                          <div class="col-sm-9">
                             <textarea name="order_confirm" class="form-control" /><?=$notification[0]['order_confirm']?></textarea>
                          </div>
                        </div>
                      </div>
                      </div>
					  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Order Receive Notification</label>
                          <div class="col-sm-9">
                             <textarea name="order_receive" class="form-control" /><?=$notification[0]['order_receive']?></textarea>
                          </div>
                        </div>
                      </div>
                      </div>
					  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Kitchen Order Receive Notification</label>
                          <div class="col-sm-9">
                             <textarea name="kictchen_order_receive" class="form-control" /><?=$notification[0]['kictchen_order_receive']?></textarea>
                          </div>
                        </div>
                      </div>
                      </div>
					  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Kitchen Order preparing Notification</label>
                          <div class="col-sm-9">
                             <textarea name="kitchen_food_prepared" class="form-control" /><?=$notification[0]['kitchen_food_prepared']?></textarea>
                          </div>
                        </div>
                      </div>
                      </div>
					  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Kitchen Order done Notification</label>
                          <div class="col-sm-9">
                             <textarea name="kitchen_order_done" class="form-control" /><?=$notification[0]['kitchen_order_done']?></textarea>
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