<?php
include("header.php");
		$ii=$this->session->userdata('id');
if(is_numeric($ii))
{
	$id=$this->session->userdata('id');
}
else
{
	$id=0;
}
?>
<style>
.popular {
    padding: 14px 0 90px;
    background-size: 100%;
}
.card {
    position: relative;
    display: block;
    margin-bottom: .75rem;
    background-color: #fff;
    border-radius: .25rem;
   border: 0px solid rgba(0,0,0,.125); 
}
.add-restaurants {
    text-align: left;
}
</style>
  <?php

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{
	?>
	<style>
	footer {
    background: url(http://localhost/KOT/home_page/footer_image/pattern_(1).png)center repeat;
    padding: 90px 0;
    z-index: 1;
    position: relative;
    display: none;
}
	</style>
	<?php
}
?>
<body class="home">
    <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out" style="animation-duration: 300ms; opacity: 1;">
        <!--header starts-->
        <header id="header" class="header-scroll top-header headrom animated headroom--not-bottom fadeInDown headroom--top">
            <!-- 
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">☰</button>
                    <a class="navbar-brand" href="#index.html"> <img class="img-rounded" src="<?=$home_info[0]['logo']?>" alt=""> </a>
                </div>
            </nav>
             -->
			 
        </header>
		
        <!-- banner part starts -->
        <section>
            <div class="hero-inner">
                <div class="container text-center hero-text font-white">
                    <div class="banner-form">
                       <div class="row">
                             
							  <div class="col-md-12">
								<div class="col-md-1">
								<a class="navbar-brand" href="<?php echo site_url();?>home"> <img class="img-rounded" src="<?=$home_info[0]['logo']?>" alt=""> </a>
								</div>
							 
							
								</div>

							</div>
                    </div>
                 
                </div>
            </div>
            <!--end:Hero inner -->
        </section>
        <!-- banner part ends -->
        <!-- location match part starts -->
        <div class="location-match text-xs-center">
            <div class="container"> <h2>I‘m restaurant</h2>
            </div>
        </div>
		 <?php $success_message = $this->session->flashdata('success_message');
                            if (!empty($success_message)) {?>
                                <div class="alert alert-success">
                                      <a class="close" data-dismiss="alert" href="<?php echo site_url();?>Home/I_am_restaurant" aria-hidden="true">×</a>
                                      <strong><?php echo $this->session->flashdata('success_message');  ?></strong>
                                </div> 
                            <?php }  ?>
                            <?php $failure_message = $this->session->flashdata('failure_message');
                            if (!empty($failure_message)) {?>
                                <div class="alert alert-warning">
                                      <a class="close" data-dismiss="alert" href="<?php echo site_url();?>Home/I_am_restaurant" aria-hidden="true">×</a>
                                      <strong><?php echo $this->session->flashdata('failure_message');  ?></strong>
                                </div> 
                            <?php }  ?>
        <!-- location match part ends -->
        <!-- Popular block starts -->
        <section class="add-restaurants">
            <div class="container">
                <div class="title text-xs-center m-b-30">
                    <p class="lead">Enroll yourself with SCANJEE</p>
                </div>
				
                <div class="row">
                    <!-- Each popular food item starts -->
		 <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
				<?php $id1=$maxid[0]['id'];
						$id33=$id1+1;
				?>
                  <h4 class="card-title">Register New Hotel</h4>
                  <form class="form-sample" method="post" action="<?php echo site_url();?>Home/save_hotel" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $id33?>" name="maxid">
					<p class="card-description">
                      Hotel info
                    </p>
                  
                            <input type="hidden" required name="register_date" value="<?php echo date('Y-m-d')?>" class="form-control" />
                     
                    
                            <input type="hidden" required name="expired_date" required class="form-control" />
                          
					<div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Hotel Name</label>
                          <div class="col-sm-9">
                            <input type="text" required name="name" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email Id</label>
                          <div class="col-sm-9">
                            <input type="email" required name="email" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Mobile No</label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="" name="mobile"/>
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
                          <label class="col-sm-3 col-form-label">Address</label>
                          <div class="col-sm-9">
                            <textarea name="address" class="form-control" /></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">State</label>
                          <div class="col-sm-9">
                            <input type="text" name="state" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Postcode</label>
                          <div class="col-sm-9">
                            <input type="text" name="pincode" class="form-control" />
                          </div>
                        </div>
                      </div>
					   <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">City</label>
                          <div class="col-sm-9">
                            <input type="text" name="city" class="form-control" />
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
                          <label class="col-sm-3 col-form-label">No of Table</label>
                          <div class="col-sm-9">
                             <input type="text" name="no_of_table" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>      

					<div class="row">
                     
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Logo</label>
                          <div class="col-sm-9">
                               <input type="file" name="logo" class="form-control" />
                          </div>
                        </div>
                      </div>     
					  <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Banner</label>
                          <div class="col-sm-9">
                             <input type="file" name="banner" class="form-control" />
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
                          <label class="col-sm-3 col-form-label">Opning Time</label>
                          <div class="col-sm-9">
                               <input type="time" name="opning_hr" class="form-control" />
                          </div>
                        </div>
                      </div>     
					  <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Closing</label>
                          <div class="col-sm-9">
                             <input type="time" name="closing_hr" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>

					<div class="row">
                          <label class="col-sm-3 col-form-label">Opning Days</label>
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
						<input type="hidden" name="status" value="Inactive">	
						  <div class="col-md-6">
                        <div class="form-group row">
                          <div class="col-sm-9"> 
                            <input type="submit" class="btn btn-primary btn-block" value="submit">
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
                </div>
            </div>
        </section>
<br /><br />
 <?php
include("footer.php");
include("home_footer.php");

?>

