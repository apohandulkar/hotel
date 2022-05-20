
 <div class="main-panel">
        <div class="content-wrapper">
 <?php $success_message = $this->session->flashdata('success_message');
                            if (!empty($success_message)) {?>
                                <div class="alert alert-success">
                                      <a class="close" data-dismiss="alert" href="<?php echo site_url();?>hotel/hotel/Main_menu" aria-hidden="true">×</a>
                                      <strong><?php echo $this->session->flashdata('success_message');  ?></strong>
                                </div> 
                            <?php }  ?>
                            <?php $failure_message = $this->session->flashdata('failure_message');
                            if (!empty($failure_message)) {?>
                                <div class="alert alert-warning">
                                      <a class="close" data-dismiss="alert" href="<?php echo site_url();?>hotel/hotel/Main_menu" aria-hidden="true">×</a>
                                      <strong><?php echo $this->session->flashdata('failure_message');  ?></strong>
                                </div> 
                            <?php }  ?>
          <div class="row">
		   			
            <div class="col-lg-12 stretch-card">
			 
              <div class="card">
                <div class="card-body">		

				
                  <h4 class="card-title">Sample Menu</h4>
             
                  <div class="table-responsive pt-3">
                    <table class="datatable table table-bordered" id="example11">
                      <thead>
                        <tr>
                          <th>Sub Menu</th>
                          <th>Menu</th>
                          <th>Catagory</th>
                          <th>Discreption</th>
                          <th>Price</th>
						  </tr>
                      </thead>
                      <tbody>
					  
					  <?php
					  $i=1;
						foreach($menu as $r)
						{
							$parent_menu=$r['parent_menu'];
					$sql17="select * from menu where IsActive=0 and id='$parent_menu'";
					 $record17 = $this->db->query($sql17);
					$a7=$record17->result_array();
					  ?>
                        <tr >
                          <td><?=$r['menu']?></td>
                          <td><?=$a7[0]['menu']?></td>
                          <td><?=$r['category']?></td>
                          <td><?=$r['description']?></td>
                          <td><?=$r['price']?></td>
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