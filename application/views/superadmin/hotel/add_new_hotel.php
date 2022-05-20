 <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
				<?php $id1=$maxid[0]['id'];
						$id=$id1+1;
				?>
                  <h4 class="card-title">Register New Hotel</h4>
                  <form class="form-sample" method="post" action="<?php echo site_url();?>superadmin/Superadmin/save_hotel" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $id?>" name="maxid">
					<p class="card-description">
                      Hotel info
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Register Date<font color="red">*</font></label>
                          <div class="col-sm-9">
                            <input type="date" required name="register_date" value="<?php echo date('Y-m-d')?>" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Expire Date<font color="red">*</font></label>
                          <div class="col-sm-9">
                            <input type="date" required name="expired_date"  class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>   
					<div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Hotel Name<font color="red">*</font></label>
                          <div class="col-sm-9">
                            <input type="text" required name="name" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email Id<font color="red">*</font></label>
                          <div class="col-sm-9">
                            <input type="email" required name="email" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Mobile No<font color="red">*</font></label>
                          <div class="col-sm-9">
                            <input class="form-control" required placeholder="" name="mobile"/>
                          </div>
                        </div>
                      </div>     
					  <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Alternate Mobile No</label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="" name="alternate_mobile_no"/>
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
                          <label class="col-sm-3 col-form-label">Address<font color="red">*</font></label>
                          <div class="col-sm-9">
                            <textarea name="address" required class="form-control" /></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">State<font color="red">*</font></label>
                          <div class="col-sm-9">
                            <input type="text" name="state" required class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Pincode<font color="red">*</font></label>
                          <div class="col-sm-9">
                            <input type="text" name="pincode" required class="form-control" />
                          </div>
                        </div>
                      </div>
					   <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">City<font color="red">*</font></label>
                          <div class="col-sm-9">
                            <input type="text" name="city" required class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                     
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Country</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="country">
                              <option>India</option>
                            </select>
                          </div>
                        </div>
                      </div>     
					  <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">No of Table<font color="red">*</font></label>
                          <div class="col-sm-9">
                             <input type="text" name="no_of_table" required class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>      

					<div class="row">
                     
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Logo<font color="red">*</font></label>
                          <div class="col-sm-9">
                               <input type="file" name="logo" required class="form-control" />
                          </div>
                        </div>
                      </div>     
					  <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Banner<font color="red">*</font></label>
                          <div class="col-sm-9">
                             <input type="file" name="banner" required class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>

					<div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Hotel Description</label>
                          <div class="col-sm-12">
                               <textarea rows="6" class="form-control" name="hotel_description"/></textarea>
                          </div>
                        </div>
                      </div>     
                    </div>

					<div class="row">
                     
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Opening Time<font color="red">*</font></label>
                          <div class="col-sm-9">
                               <input type="time" name="opning_hr" required class="form-control" />
                          </div>
                        </div>
                      </div>     
					  <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Closing<font color="red">*</font></label>
                          <div class="col-sm-9">
                             <input type="time" name="closing_hr" required class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>

					<div class="row">
                          <label class="col-sm-3 col-form-label">Opening Days</label>
                    </div>
					
					<div class="row">
					<div class="col-md-2"><input type="checkbox" name="monday" value="yes" /> Monday</div>
					<div class="col-md-2"><input type="checkbox" name="tuesday" value="yes" /> Tuesday</div>
					<div class="col-md-2"><input type="checkbox" name="wednesday" value="yes" /> Wednesday</div>
					<div class="col-md-2"><input type="checkbox" name="thursday" value="yes" /> Thursday</div>
					<div class="col-md-2"><input type="checkbox" name="friday" value="yes" /> Friday</div>
					<div class="col-md-2"><input type="checkbox" name="saturday" value="yes" /> Saturday</div>
					<div class="col-md-2"><input type="checkbox" name="sunday" value="yes" /> Sunday</div>
	                  </div>
					<br/>
					<br/>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">GST No</label>
                          <div class="col-sm-9">
							<input type="text" name="gstno" class="form-control" />
                          </div>
                        </div>
                      </div>     

					  <div class="col-md-6">
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
                      <div class="col-md-6">
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