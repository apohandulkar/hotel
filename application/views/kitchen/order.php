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
							<?php
							?>
                  <h4 class="card-title">Order Details</h4>
				                  <div class="table-responsive pt-3">
                    <table class="datatable table table-bordered" id="example1">
                      <thead>
                        <tr>
                          <th>Action</th>
                          <th>Sr.No</th>
                          <th>Order Id</th>
                          <th>Order Time</th>
                          <th>Order Location</th>
                          <th>Order Status</th>
                          <th>view Datails</th>
                        </tr>
                      </thead>
                      <tbody>
					  
					  <?php
					  $i=1;
						foreach($order_list as $r)
						{
							$order_id_row=$r['id'];
							$order_id=$r['order_id'];
							$hotel_id=$r['hotel_id'];
							$addtress_id=$r['addtress_id'];
							$payment_method=$r['payment_method'];
							$qty=$r['qty'];
							$order_status=$r['order_status'];
							$date=$r['date'];
							$time=$r['time'];
							$deliver_time=$r['deliver_time'];
							$deliver_date=$r['deliver_date'];
							$paid_unpaid=$r['paid_unpaid'];
							$total_amount=$r['total_amount'];
							
							$sqlh = "SELECT * FROM hotel where IsActive=0 and id='$hotel_id'";
								$recordh = $this->db->query($sqlh);
								$ah= $recordh->result_array();
								
								
								$sqlma = "SELECT * FROM customer_address where IsActive=0 and id='$addtress_id'";
								$recordma = $this->db->query($sqlma);
								$ama= $recordma->result_array();
								
								$dd=date("D", strtotime($date));
								$mm=date("M d", strtotime($date));
								$yy=date("Y", strtotime($date));
								$tim=date('g:i a', strtotime($time)); 
								
								$dd1=date("D", strtotime($deliver_date));
								$mm1=date("M d", strtotime($deliver_date));
								$yy1=date("Y", strtotime($deliver_date));
								$tim1=date('g:i a', strtotime($deliver_time)); 
					  ?>
                        <tr >
                          <td> 
						  <a href="<?php echo site_url();?>kitchen/kitchen/Edit_order/<?=$order_id_row?>">
						  <i class="fa fa-pencil" aria-hidden="true" style="color:green"></i></a>
						 </td>                         
						 <td><?=$i?></td>
                          <td>#<?=$order_id?></td>
                          <td><?=$dd?>, <?=$mm?>, <?=$yy?>, <?=$tim?></td>
                          <td><?=$ama[0]['address']?>, <?=$ama[0]['city']?>, <?=$ama[0]['pincode']?></td>
                          <td><?=$order_status?></td>
                          <td>View Datails</td>
                        
							</tr>
						  <?php
						  $i++;
						}
						  ?>
                       
						
                      </tbody>
                    </table>
                  </div>
           
                  </div>
				  <br /> <br /> <br />
					    
                </div>
              </div>
            </div>
          </div>
     