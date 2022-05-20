
 <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
		   			
            <div class="col-lg-12 stretch-card">
			
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Table Management</h4>
                
                  <?php $success_message = $this->session->flashdata('success_message');
                            if (!empty($success_message)) {?>
                                <div class="alert alert-success">
                                      <a class="close" data-dismiss="alert" href="<?php echo site_url();?>hotel/waiter" aria-hidden="true">×</a>
                                      <strong><?php echo $this->session->flashdata('success_message');  ?></strong>
                                </div> 
                            <?php }  ?>
                            <?php $failure_message = $this->session->flashdata('failure_message');
                            if (!empty($failure_message)) {?>
                                <div class="alert alert-warning">
                                      <a class="close" data-dismiss="alert" href="<?php echo site_url();?>hotel/waiter" aria-hidden="true">×</a>
                                      <strong><?php echo $this->session->flashdata('failure_message');  ?></strong>
                                </div> 
                            <?php }  ?>
				  <a href="<?php echo site_url();?>hotel/Hotel/Add_table"><u>Add Table</u></a>

                  <div class="table-responsive pt-3">
                    <table class="datatable table table-bordered" id="example1">
                      <thead>
                        <tr>
                          <th>Action</th>
                          <th>Sr.No</th>
                        
                          <th>Table Name</th>
                          <th>QrCode</th>
                          <th>Created date</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
					  
					  <?php
          
					  $i=1;
						foreach($menu as $r)
						{
					  ?>
                        <tr >
                          <td> 
						  <a href="<?php echo site_url();?>hotel/Hotel/Edit_table/<?=$r['id']?>"><i class="fa fa-pencil" aria-hidden="true" style="color:green"></i></a>
						  &nbsp; &nbsp;<a href="<?php echo site_url();?>hotel/Hotel/Delete_table/<?=$r['id']?>"><i class="fa fa-trash" aria-hidden="true" style="color:red"></i></a>
              &nbsp; &nbsp;<a href="<?php echo site_url();?>hotel/Hotel/print/<?=$hostel_info[0]['id']?>/<?=$r['id']?>"><i class="fa fa-print" aria-hidden="true" style="color:green"></i></a>
						  
						 </td>                         
						 <td><?=$i?></td>
                          
                          <td><?=$r['name']?></td>
                          <td><img src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=<?php echo base_url()."Table/menu/".$hostel_info[0]['id']."/".$r['id']."/0";?>&choe=UTF-8" title=""  style="width: 200px; height:200px;" /></td>
                          <td><?=$r['created_at']?></td>
						  <?php
						  if($r['status']==0)
						  {
							  ?>
                          <td><label class="badge badge-success">Active</label></td>
                          <?php
						  } 
						  else 
						  {
							  ?>
							  <td><label class="badge badge-danger">Deactive</label></td>
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