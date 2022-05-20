
 <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
		   			
            <div class="col-lg-12 stretch-card">
			
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Kitchen Management</h4>
                  <?php $success_message = $this->session->flashdata('success_message');
                            if (!empty($success_message)) {?>
                                <div class="alert alert-success">
                                      <a class="close" data-dismiss="alert" href="<?php echo site_url();?>hotel/Kitchen" aria-hidden="true">×</a>
                                      <strong><?php echo $this->session->flashdata('success_message');  ?></strong>
                                </div> 
                            <?php }  ?>
                            <?php $failure_message = $this->session->flashdata('failure_message');
                            if (!empty($failure_message)) {?>
                                <div class="alert alert-warning">
                                      <a class="close" data-dismiss="alert" href="<?php echo site_url();?>hotel/Kitchen" aria-hidden="true">×</a>
                                      <strong><?php echo $this->session->flashdata('failure_message');  ?></strong>
                                </div> 
                            <?php }  ?>
				   <a href="<?php echo site_url();?>hotel/Kitchen/Add_kitchen"><u>Add Kitchen</u></a>

                  <div class="table-responsive pt-3">
                    <table class="datatable table table-bordered" id="example1">
                      <thead>
                        <tr>
                          <th>Action</th>
                          <th>Sr.No</th>
                          <th>Kitchen</th>
                          <th>Address</th>
                          <th>Mobile</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Created date</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
					  
					  <?php
					  $i=1;
						foreach($kitchen as $r)
						{
					  ?>
                        <tr >
                          <td> 
						  <a href="<?php echo site_url();?>hotel/Kitchen/Edit_kitchen/<?=$r['id']?>"><i class="fa fa-pencil" aria-hidden="true" style="color:green"></i></a>
						  &nbsp; &nbsp;<a href="<?php echo site_url();?>hotel/Kitchen/Delete_kitchen/<?=$r['id']?>"><i class="fa fa-trash" aria-hidden="true" style="color:red"></i></a>
						 </td>                         
						 <td><?=$i?></td>
                          <td><?=$r['name']?></td>
                          <td><?=$r['address']?></td>
                          <td><?=$r['mobile']?></td>
                          <td><?=$r['username']?></td>
                          <td><?=$r['password']?></td>
                          <td><?=$r['createdAt']?></td>
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
						  $i++;
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