
 <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
		   			
            <div class="col-lg-12 stretch-card">
			
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">All Register Hotel</h4>
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
                  <div class="table-responsive pt-3">
                    <table class="datatable table table-bordered" id="example1">
                      <thead>
                        <tr>
                          <th>Action</th>
                          <th>Hotel No</th>
                          <th>Hotel</th>
                          <th>Address</th>
                          <th>Mobile</th>
                          <th>Alternate Mobile</th>
                          <th>GST No</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
					  
					  <?php
					  
						foreach($hotelinfo as $r)
						{
					  ?>
                        <tr >
                          <td> 
						  <a href="<?php echo site_url();?>hotel/hotel/Edit_hotel/<?=$r['id']?>"><i class="fa fa-pencil" aria-hidden="true" style="color:green"></i></a>
						  &nbsp; &nbsp;<a href="<?php echo site_url();?>hotel/hotel/view_hotel/<?=$r['id']?>"><i class="fa fa-eye" aria-hidden="true" style="color:blue"></i></a>
						  &nbsp; &nbsp;<a href="<?php echo site_url();?>hotel/hotel/Delete_hotel/<?=$r['id']?>"><i class="fa fa-trash" aria-hidden="true" style="color:red"></i></a>
						  &nbsp; &nbsp;<a href="<?php echo site_url();?>hotel/hotel/qr_code/<?=$r['id']?>"><i class="fa fa-qrcode" aria-hidden="true" style="color:black"></i></a></td>
                          <td><?=$r['id']?></td>
                          <td><?=$r['name']?></td>
                          <td><?=$r['address']?></td>
                          <td><?=$r['mobile']?></td>
                          <td><?=$r['alternate_mobile_no']?></td>
                          <td><?=$r['gstno']?></td>
                          <td><?=$r['usename']?></td>
                          <td><?=$r['password']?></td>
						  <?php
						  if($r['status']=='Active')
						  {
							  ?>
                          <td><label class="badge badge-success"><?=$r['status']?></label></td>
                          <?php
						  } 
						  else 
						  {
							  ?>
							  <td><label class="badge badge-danger"><?=$r['status']?></label></td>
							  <?php
						  }
						  ?>
							</tr>
						  <?php
						}
						  ?>
                       
						
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>