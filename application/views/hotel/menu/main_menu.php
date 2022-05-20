
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

				
                  <h4 class="card-title">Main Menu</h4>
                <a href="<?php echo site_url();?>hotel/hotel/add_main_menu/" class="btn btn-info pull-right">Add Main Menu</a>
                <a href="<?php echo site_url();?>hotel/hotel/import_menu/" class="dt-button">Import CSV</a>
                <a href="<?php echo site_url();?>hotel/hotel/sample_menu/" class="dt-button">Export menu list</a>
                  <div class="table-responsive pt-3">
                    <table class="datatable table table-bordered" id="example1">
                      <thead>
                        <tr>
                          <th>Action</th>
                          <th>Sr.No</th>
                          <th>Iteam ID</th>
                          <th>Menu</th>
                          <th>Discreption</th>
                          <th>Price</th>
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
						  <a href="<?php echo site_url();?>hotel/hotel/Update_menu/<?=$r['id']?>">
						  <i class="fa fa-pencil" aria-hidden="true" style="color:green"></i></a>
						  &nbsp; &nbsp;<a href="<?php echo site_url();?>hotel/hotel/Delete_menu/<?=$r['id']?>">
						  <i class="fa fa-trash" aria-hidden="true" style="color:red"></i></a></td>
                          <td><?=$i?></td>
                          <td><?=$r['id']?></td>
                          <td><?=$r['menu']?></td>
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