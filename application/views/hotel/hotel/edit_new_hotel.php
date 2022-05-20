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
                  <h4 class="card-title">Update Hotel Details</h4>
                  <form class="form-sample" method="post" action="<?php echo site_url();?>hotel/hotel/Update_hotel" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $hostel_info[0]['id']?>" name="maxid">
					<p class="card-description">
                      Hotel info
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Register Date</label>
                          <div class="col-sm-9">
                            <input type="date" required name="register_date" readonly value="<?php echo $hostel_info[0]['register_date']?>" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Expire Date</label>
                          <div class="col-sm-9">
                            <input type="date" required name="expired_date" readonly value="<?php echo $hostel_info[0]['expired_date']?>" required class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>   
					<div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Hotel Name</label>
                          <div class="col-sm-9">
                            <input type="text" required name="name" value="<?php echo $hostel_info[0]['name']?>" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email Id</label>
                          <div class="col-sm-9">
                            <input type="email" required name="email" readonly value="<?php echo $hostel_info[0]['email']?>" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Mobile No</label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="" value="<?php echo $hostel_info[0]['mobile']?>" name="mobile"/>
                          </div>
                        </div>
                      </div>     
					  <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Alternate Mobile No</label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="" value="<?php echo $hostel_info[0]['alternate_mobile_no']?>" name="alternate_mobile_no"/>
                          </div>
                        </div>
                      </div>
                    </div>    

					<div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Table Reservation No</label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="" value="<?php echo $hostel_info[0]['reserv_no']?>" name="reserv_no"/>
                          </div>
                        </div>
                      </div>     
					  <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Waiter calling No</label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="" value="<?php echo $hostel_info[0]['call_no']?>" name="call_no"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="card-description">
                      Address
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address</label>
                          <div class="col-sm-9">
                            <textarea name="address" class="form-control" /><?php echo $hostel_info[0]['address']?></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">State</label>
                          <div class="col-sm-9">
                            <input type="text" name="state" value="<?php echo $hostel_info[0]['state']?>" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Postcode</label>
                          <div class="col-sm-9">
                            <input type="text" name="pincode" value="<?php echo $hostel_info[0]['pincode']?>" class="form-control" />
                          </div>
                        </div>
                      </div>
					   <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">City</label>
                          <div class="col-sm-9">
                            <input type="text" name="city" value="<?php echo $hostel_info[0]['city']?>" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                     
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Country</label>
                          <div class="col-sm-9">
                            <select class="form-control" value="<?php echo $hostel_info[0]['country']?>" name="country">
                              <option>India</option>
                            </select>
                          </div>
                        </div>
                      </div>     
					  <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">No of Table</label>
                          <div class="col-sm-9">
                             <input type="text" name="no_of_table" value="<?php echo $hostel_info[0]['no_of_table']?>" readonly class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>      

					<div class="row">
                     
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Logo</label>
                          <div class="col-sm-9">
                               <input type="file" name="logo" value="<?php echo $hostel_info[0]['logo']?>" class="form-control" />
                             <input type="hidden" name="logo1" value="<?=$hostel_info[0]['logo']?>" class="form-control" />
                             <img src="<?php echo $hostel_info[0]['logo']?>" width="80%"/>
                          </div>
                        </div>
                      </div>     
					  <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Banner</label>
                          <div class="col-sm-9">
                             <input type="file" name="banner" value="" class="form-control" />
                             <input type="hidden" name="banner1" value="<?=$hostel_info[0]['banner']?>" class="form-control" />
                             <img src="<?php echo $hostel_info[0]['banner']?>" width="80%"/>
                          </div>
                        </div>
                      </div>
                    </div>
					
					<div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Hotel Description</label>
                          <div class="col-sm-12">
                               <textarea rows="6" class="form-control" name="hotel_description" /><?php echo $hostel_info[0]['hotel_description']?></textarea>
                          </div>
                        </div>
                      </div>     
                    </div>

					<div class="row">
                     
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Opning Time</label>
                          <div class="col-sm-9">
                               <input type="time" name="opning_hr" class="form-control" value="<?php echo $hostel_info[0]['opning_hr']?>"/>
                          </div>
                        </div>
                      </div>     
					  <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Closing</label>
                          <div class="col-sm-9">
                             <input type="time" name="closing_hr" class="form-control" value="<?php echo $hostel_info[0]['closing_hr']?>"/>
                          </div>
                        </div>
                      </div>
                    </div>

					<div class="row">
                          <label class="col-sm-3 col-form-label">Opning Days</label>
                    </div>
					
					<div class="row">
					<div class="col-md-2"><input type="checkbox" name="monday" value="yes" <?php echo ($hostel_info[0]['monday']=='yes'? 'checked' : '');?>/> Monday</div>
					<div class="col-md-2"><input type="checkbox" name="tuesday" value="yes" <?php echo ($hostel_info[0]['tuesday']=='yes'? 'checked' : '');?> /> Tuesday</div>
					<div class="col-md-2"><input type="checkbox" name="wednesday" value="yes" <?php echo ($hostel_info[0]['wednesday']=='yes'? 'checked' : '');?> /> Wednesday</div>
					<div class="col-md-2"><input type="checkbox" name="thursday" value="yes"  <?php echo ($hostel_info[0]['thursday']=='yes'? 'checked' : '');?>/> Thursday</div>
					<div class="col-md-2"><input type="checkbox" name="friday" value="yes" <?php echo ($hostel_info[0]['friday']=='yes'? 'checked' : '');?> /> Friday</div>
					<div class="col-md-2"><input type="checkbox" name="saturday" value="yes" <?php echo ($hostel_info[0]['saturday']=='yes'? 'checked' : '');?> /> Saturday</div>
					<div class="col-md-2"><input type="checkbox" name="sunday" value="yes"  <?php echo ($hostel_info[0]['sunday']=='yes'? 'checked' : '');?>/> Sunday</div>
	                  </div>
					<br/>
					<br/>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">GST No</label>
                          <div class="col-sm-9">
							<input type="text" name="gstno" value="<?php echo $hostel_info[0]['gstno']?>" class="form-control" />
                          </div>
                        </div>
                      </div>     

					  <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Status</label>
                          <div class="col-sm-9">
							<select name="status" class="form-control">
							<option value="<?php echo $hostel_info[0]['status']?>"><?php echo $hostel_info[0]['status']?></option>
							
							</select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <div class="col-sm-9">
                            <input type="submit" class="btn btn-primary mr-2" value="Update">
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