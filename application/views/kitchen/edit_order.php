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
                   <form class="form-sample" method="post" action="<?php echo site_url();?>kitchen/kitchen/update_order" enctype="multipart/form-data">
					<p class="card-description">
					<?php
					//print_r($order_details);
					$order_id_row=$order_details[0]['id'];
	$order_id=$order_details[0]['order_id'];
	$hotel_id=$order_details[0]['hotel_id'];
	$addtress_id=$order_details[0]['addtress_id'];
	$payment_method=$order_details[0]['payment_method'];
	$qty=$order_details[0]['qty'];
	$order_status=$order_details[0]['order_status'];
	$date=$order_details[0]['date'];
	$time=$order_details[0]['time'];
	$deliver_time=$order_details[0]['deliver_time'];
	$deliver_date=$order_details[0]['deliver_date'];
	$paid_unpaid=$order_details[0]['paid_unpaid'];
	$total_amount=$order_details[0]['total_amount'];
	$cust_id=$order_details[0]['cust_id'];
	
	$sqlh = "SELECT * FROM hotel where IsActive=0 and id='$hotel_id'";
        $recordh = $this->db->query($sqlh);
        $ah= $recordh->result_array();
		
		
		$sqlhc = "SELECT * FROM customer where IsActive=0 and id='$cust_id'";
        $recordhc = $this->db->query($sqlhc);
        $ahc= $recordhc->result_array();
		
		
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
                      Order #<?=$order_details[0]['order_id']?>
                    </p>
				
                    <input type="hidden" name="id" value="<?=$waiter[0]['id']?>">
                    <input type="hidden" name="order_id_row" value="<?=$order_id_row?>">
					<div class="row">
                      <div class="col-md-10">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Order Date Time</label>
                          <div class="col-sm-9">
                            <input type="text" required name="name" readonly value="<?=$dd?>, <?=$mm?>, <?=$yy?>, <?=$tim?>" class="form-control" />
                          </div>
                        </div>
                      </div>
                
                    </div>		

					<div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label">Customer Name</label>
                          <div class="col-sm-7">
                     <input type="text" required name="name" readonly value="<?=$ahc[0]['name']?>" class="form-control" />
                          </div>
                        </div>
                      </div>  
					  <div class="col-md-5">
                        <div class="form-group row">
                          <div class="col-sm-9">
                     <input type="text" required name="name" readonly value="<?=$ahc[0]['mobile']?>" class="form-control" />
                          </div>
                        </div>
                      </div>
                
                    </div>
					<div class="row">
                      <div class="col-md-10">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Customer Address</label>
                          <div class="col-sm-9">
                     <input type="text" required name="name" readonly value="<?=$ama[0]['address']?>, <?=$ama[0]['city']?>, <?=$ama[0]['pincode']?>" class="form-control" />
                          </div>
                        </div>
                      </div>
                
                    </div>	

					<div class="row">
                      <div class="col-md-10">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Menu Details</label>
                          <div class="col-sm-9">
						  
										  <table class="table" width="80%">
										  <tr>
										  <th></th>
										  <th>Menu</th>
										  <th>Qty</th>
										  <th>Price</th>
										  <th>Total</th>
										  </tr>
										  
						  <?php
							$sqlm = "SELECT * FROM order_menu where order_id='$order_id_row'";
							$recordm = $this->db->query($sqlm);
							$am= $recordm->result_array();
							foreach($am as $m)
		{
			$menu_id=$m['menu_id'];
			$sqlm11 = "SELECT * FROM hotel_menu where IsActive=0 and id='$menu_id'";
			$recordm11 = $this->db->query($sqlm11);
			$am1= $recordm11->result_array();
			
			
			?>
							  <tr>
							  <td width="10%">
							  <?php
									   if($am1[0]['category']!='Veg')
									   {
										   ?>
									   <img src="http://localhost/KOT/ui/img/nonveg.png" alt="Food logo"></a>
									   <?php
									   }
									   else
									   {
										   ?>
									   <img src="http://localhost/KOT/ui/img/veg.png" alt="Food logo"></a>
										   <?php
									   }
									   ?>
							  </td>
							

							  <td width="20%">
							 <?=$am1[0]['menu']?>					
							  </td> 	
							  <td width="20%">
								<?=$m['qty']?>					
							  </td> 
							  <td width="10%">
							 ₹<?php echo $am1[0]['price']?>					
							  </td> 
							  <td width="10%">
							 ₹<?php echo $am1[0]['price']*$m['qty'];?>					
							  </td>

							  </tr>
							  
			<?php
	
		}
?>

							  
							  </table>
                          </div>
                        </div>
                      </div>
                
                    </div>
					
					<div class="row">
                      <div class="col-md-10">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Waiter Name</label>
                          <div class="col-sm-9">
                            <input type="text" required name="name" value="<?=$this->session->userdata('name');?>" class="form-control" />
                          </div>
                        </div>
                      </div>
                
                    </div>
                    

				     <div class="row">
					  <div class="col-md-10">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Status</label>
                          <div class="col-sm-9">
							<select name="status" required class="form-control">
								<option value="">-select-</option>
								<option>Confirm</option>
								<option>Cancel</option>
							</select>
                          </div>
                        </div>
                      </div>
                      </div>
					  <div class="row">
                      <div class="col-md-10">
                        <div class="form-group row">
						<label class="col-sm-3 col-form-label"></label>
                          <div class="col-sm-9">
                            <input type="submit" class="btn btn-primary btn-block" value="Update">
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