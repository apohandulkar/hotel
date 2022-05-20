 <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">

                  <h3 class="card-title"><?php echo $hostel_info[0]['name']?></h3>
					<p class="card-description">
                      Hotel info
                    </p>
<script>
function printPageArea(areaID){
    var printContent = document.getElementById(areaID);
    var WinPrint = window.open('', '', 'width=900,height=650');
    WinPrint.document.write(printContent.innerHTML);
    WinPrint.document.close();
    WinPrint.focus();
    WinPrint.print();
    WinPrint.close();
}
</script>					
<style>
/* ==========================================================================
   Author's custom styles
   ========================================================================== */

body
{
    font-family: 'Open Sans', sans-serif;
}

.fb-profile img.fb-image-lg{
    z-index: 0;
    width: 100%;  
    margin-bottom: 10px;
}

.fb-image-profile
{
    margin: -90px 10px 0px 50px;
    z-index: 9;
    width: 20%; 
}

@media (max-width:768px)
{
    
.fb-profile-text>h1{
    font-weight: 700;
    font-size:16px;
}

.fb-image-profile
{
    margin: -45px 10px 0px 25px;
    z-index: 9;
    width: 20%; 
}
}
.form-group label {
    font-size: 0.875rem;
    line-height: 1.4rem;
    vertical-align: top;
    margin-bottom: .5rem;
    color: #0f0f92;
	font-weight:500;
}
					</style>
					<div id="printableArea">

                    <div class="row">
					  <div class="col-md-12">
						<div class="fb-profile">
							<img align="left" class="fb-image-lg" src="<?php echo $hostel_info[0]['banner']?>" alt="Profile image example" style="width:100%;height:400px;background-size: cover;"/>
							<img align="left" class="fb-image-profile thumbnail" src="<?php echo $hostel_info[0]['logo']?>" alt="Profile image example"/>
							<div class="fb-profile-text">
								<h1><?php echo $hostel_info[0]['name']?></h1>
							</div>
						</div>
					</div>
                    </div>    
<br />					
<br />					
					<div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3">Register Date</label>
                          <label class="col-sm-1">:</label>
                          <div class="col-sm-6"><?php echo $hostel_info[0]['register_date']?></div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3">Expire Date</label>
                          <label class="col-sm-1">:</label>
                          <div class="col-sm-6">
                           <?php echo $hostel_info[0]['expired_date']?>
                          </div>
                        </div>
                      </div>
                    </div>   
					<div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 ">Hotel Description</label>
						   <label class="col-sm-1">:</label>
                          <div class="col-sm-8">
                           <?php echo $hostel_info[0]['hotel_description']?>
                          </div>
                        </div>
                      </div>
                    </div>
					<div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 ">Hotel Name</label>
						   <label class="col-sm-1">:</label>
                          <div class="col-sm-6">
                           <?php echo $hostel_info[0]['name']?>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 ">Email Id</label>
                          <label class="col-sm-1">:</label>
						 <div class="col-sm-6">
                            <?php echo $hostel_info[0]['email']?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 ">Mobile No</label>
                          <label class="col-sm-1">:</label>
                          <div class="col-sm-6">
                           <?php echo $hostel_info[0]['mobile']?>
                          </div>
                        </div>
                      </div>     
					  <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 ">Alternate Mobile No</label>
                          <label class="col-sm-1">:</label>
                          <div class="col-sm-6">
                            <?php echo $hostel_info[0]['alternate_mobile_no']?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 ">Address</label>
                          <label class="col-sm-1">:</label>
                          <div class="col-sm-6">
                         <?php echo $hostel_info[0]['address']?>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 ">State</label>
                          <label class="col-sm-1">:</label>
                          <div class="col-sm-6">
                          <?php echo $hostel_info[0]['state']?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 ">Postcode</label>
                          <label class="col-sm-1">:</label>
                          <div class="col-sm-6">
                           <?php echo $hostel_info[0]['pincode']?>
                          </div>
                        </div>
                      </div>
					   <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 ">City</label>
                          <label class="col-sm-1">:</label>
                          <div class="col-sm-6">
                           <?php echo $hostel_info[0]['city']?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                     
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 ">Country</label>
                          <label class="col-sm-1">:</label>
                          <div class="col-sm-6">
                           <?php echo $hostel_info[0]['country']?>
                          </div>
                        </div>
                      </div>     
					  <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 ">No of Table</label>
                          <label class="col-sm-1">:</label>
                          <div class="col-sm-6">
                             <?php echo $hostel_info[0]['no_of_table']?>
                          </div>
                        </div>
                      </div>
                    </div>  
                    <div class="row">                     
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 ">Opning hr</label>
                          <label class="col-sm-1">:</label>
                          <div class="col-sm-6">
                             <?php echo date("g:i a ", strtotime($hostel_info[0]['opning_hr']));?>
                          </div>
                        </div>
                      </div>     
					  <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 ">Closing hr</label>
                          <label class="col-sm-1">:</label>
                          <div class="col-sm-6">
                             <?php echo date("g:i a ", strtotime($hostel_info[0]['closing_hr']));?>
                          </div>
                        </div>
                      </div>
                    </div> 

                    <div class="row">                     
                      <div class="col-md-9">
                        <div class="form-group row">
                          <label class="col-sm-2 ">Opning Days</label>
                          <label class="col-sm-1">:</label>
                          <div class="col-sm-7">
                             <?php 
							 if($hostel_info[0]['sunday']=='yes')
							 {
								 echo 'Sunday , ';
							 }
							 if($hostel_info[0]['monday']=='yes')
							 {
								 echo 'Monday ,';
							 }
							 if($hostel_info[0]['tuesday']=='yes')
							 {
								 echo 'Tuesday ,';
							 }
							 if($hostel_info[0]['wednesday']=='yes')
							 {
								 echo 'Wednesday ,';
							 }		
							 if($hostel_info[0]['thursday']=='yes')
							 {
								 echo 'Thursday ,';
							 }	
							 if($hostel_info[0]['friday']=='yes')
							 {
								 echo 'Friday ,';
							 }	
							 if($hostel_info[0]['saturday']=='yes')
							 {
								 echo 'Saturday ';
							 }
							 ?>
                          </div>
                        </div>
                      </div>
                    </div>      

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 ">GST No</label>
                          <label class="col-sm-1">:</label>
                          <div class="col-sm-6">
							<?php echo $hostel_info[0]['gstno']?>
                          </div>
                        </div>
                      </div>     

					  <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 ">Status</label>
                          <label class="col-sm-1">:</label>
                          <div class="col-sm-6">
							<?php echo $hostel_info[0]['status']?>
                          </div>
                        </div>
                      </div>
                        
				
                    </div>
                    </div>
                </div>
              </div>
            </div>
          </div>


        </div>