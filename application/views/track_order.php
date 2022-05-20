<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/submit.js"></script>
<?php
//echo 'idddd00'.$this->session->userdata('id');

include("header.php");
$ii=$this->session->userdata('id');

$hotel_id=$this->session->userdata('hotel_id');
//echo $hotel_id;

if(is_numeric($ii))
{
	$id=$this->session->userdata('id');
	$hotel_id=$this->session->userdata('hotel_id');

}
else
{
	$id=0;
	$hotel_id=0;
}

$sql = "SELECT * FROM customer where IsActive=0 and id='$id'";
        $record = $this->db->query($sql);
        $a= $record->result_array();
		
		

?>

<body class="home">
    <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out" style="animation-duration: 300ms; opacity: 1;">
        <!-- banner part starts -->
    <?php
											$useragent=$_SERVER['HTTP_USER_AGENT'];

if(!preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{?>
        <section>
            <div class="hero-inner">
                <div class="container text-center hero-text font-white">
                    <div class="banner-form">
                       <div class="row">
                             
							  <div class="col-md-12">
								<div class="col-md-1">
								<a class="navbar-brand" href="<?php echo site_url();?>home/<?=$id?>"> <img class="img-rounded" src="<?=$home_info[0]['logo']?>" alt=""> </a>
								</div>
							  <form method="post" action="<?php echo site_url();?>home/restaurants">
								<div class="col-md-3">
                                <input type="text" class="form-control form-control-lg autocomplete_txt" autocomplete="off" required id="city_0" placeholder="Your Location...." data-type="city" value="<?php echo set_value('city')?set_value('city'):$this->session->userdata('city')?>" name="city"  onchange='if(this.value != 0) { this.form.submit(); }'>
                                <input type="hidden" value="<?php echo set_value('id')?set_value('id'):$id;?>" name="id">
								</div>
								</form>
								 <form method="post" action="<?php echo site_url();?>home/restaurants">
                                <input type="hidden" class="form-control form-control-lg autocomplete_txt" autocomplete="off" required id="city_0" placeholder="Your Location...." data-type="city" value="<?php echo set_value('city')?set_value('city'):$this->session->userdata('city')?>" name="city"  onchange='if(this.value != 0) { this.form.submit(); }'>
                                <input type="hidden" value="<?php echo set_value('id')?set_value('id'):$id;?>" name="id">

								<div class="col-md-4">
								<input value="" placeholder="Search for restaurant, cuisine or a dish" name="contain" class="form-control form-control-lg autocomplete_txt1" autocomplete="off" id="contain_0" data-type="contain" value="<?php echo set_value('contain')?set_value('contain'):''?>">
								</div>
								<div class="col-md-1">
								<?php
								$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{?>
<input type="submit" value="Search" class="btn theme-btn btn-block">
<?php
}
else
{
	?>
<input type="submit" value="Search" class="btn theme-btn btn-lg">
	<?php
}
?>								</div>
								</form>
								<div class="col-md-3">
								<?php
								if($id>0)
								{
								?>

							   <li class="nav-item dropdown pull-right"> <a class="dropdown-toggle" data-toggle="dropdown" style="color:#111"  aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> <?=$a[0]['name']?></a>
                                <div class="dropdown-menu">
								<a class="dropdown-item"  href="<?php echo site_url();?>home/profile/<?=$id?>">My Profile</a> 
								<a class="dropdown-item" href="<?php echo site_url();?>home/orderHistory/<?=$id?>">Orders History</a>
								<a class="dropdown-item" href="../Logout">Logout</a></div>
                            </li>
								<?php
								}
								else
								{
									?>
							  <a class="btn btn-small btn btn-secondary pull-right" data-toggle="modal" data-target="#order-modal">Sign In</a>
									<?php
								}
								
								?>
								
								</div>
								</div>

							</div>
                    </div>
                 
                </div>
            </div>
            <!--end:Hero inner -->
        </section>
		
		<?php
		}
		?>
            <!-- end:Inner page hero -->
            <div class="breadcrumb">
               <div class="container">
                  <ul>
                    <?php
					$sql = "SELECT * FROM customer where IsActive=0 and id='$id'";
        $record = $this->db->query($sql);
        $a= $record->result_array();
					?>
                     <li> <i class="fa fa-user fa-2x" aria-hidden="true"></i> </li>
                     <li><h4> Hello <?=$a[0]['name']?></h4></li>
                  </ul>
               </div>
            </div>
            <div class="container m-t-30" style="background:#f1f3f6">
               <div class="row">
               
                  <div class="col-md-9" style="background-color:#fff">
					<h4>Your current place Orders</h4>


									<?php
	
foreach($order_list as $r)
{
	$order_id_row=$r['id'];
	$order_id=$r['order_id'];
	$hotel_id=$r['hotel_id'];
	$addtress_id=$r['addtress_id'];
	$table_id=$r['table_id'];
	$payment_method=$r['payment_method'];
	$qty=$r['qty'];
	$order_status=$r['food_status'];
	$date=$r['date'];
	$time=$r['time'];
	$deliver_time=$r['deliver_time'];
	$deliver_date=$r['deliver_date'];
	$paid_unpaid=$r['paid_unpaid'];
	$total_amount=$r['total_amount'];
	$comming_from=$r['comming_from'];
	
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

 <div class="notice notice-success">
 <div class="row">
 
  <div class="col-md-12">
   	<div style="float:right;color:green">
	<span ><?=$r['state']?> <?=$r['comming_from']?>
	</div> <br/>
  <div class="col-md-6">

  <p>ORDER #<?=$order_id?> | <?=$dd?>, <?=$mm?>, <?=$yy?>, <?=$tim?></p>

  </div> 
  <div class="col-md-6">
  <?php
  if($order_status=='Delivered')
  {
  ?>
	Delivered on <?=$dd1?>, <?=$mm1?>, <?=$yy1?>, <?=$tim1?> <i class="fa fa-check-circle fa-1x" style="color:green" aria-hidden="true"></i>

<?php
  }
  else
  {
	  echo $order_status;
  }
  ?>
    	  <br /> <a href="#demo1_<?=$r['id']?>" data-toggle="collapse" style="color:#f30">VIEW DETAILS </a>
		  <?php
			if($comming_from=='Table')
			{
			?>
				<a href="<?php echo site_url();?>table/addon/<?=$r['id']?>"  style="color:#f30"> ADD ON</a>

			<?php
			}
			?>
		 
		  		

  </div>

  </div>
    <div class="col-md-12" style="border-top:1px dotted #111">
	<div class="col-md-6">
	<?php
	$sqlm = "SELECT * FROM order_menu where order_id='$order_id_row'";
        $recordm = $this->db->query($sqlm);
        $am= $recordm->result_array();	
		$i = 0;
		$len = count($am);
		foreach($am as $m)
		{
			$menu_id=$m['menu_id'];
			$sqlm11 = "SELECT * FROM hotel_menu where IsActive=0 and id='$menu_id'";
			$recordm11 = $this->db->query($sqlm11);
			$am1= $recordm11->result_array();
			
			if ($i == $len - 1) {
			$rt=' ';
			}
			else
			{
				$rt=' , ';
			}
			 $i++;
		}
	?>
	</div>
	
	
  </div>
     
 </div>
      
<style>
.vl {
  border-left: 6px solid green;
  height: 30px;
}
</style>	  
	     <div id="demo1_<?=$r['id']?>" class="collapse">
  				<h4>Order #<?=$order_id?></h4>
			
 <p><i class="fa fa-map-marker" aria-hidden="true"></i> <?=$ah[0]['name']?><br>
 <?=$ah[0]['address']?></p>
<div class="vl"></div>

<?php
  if($comming_from=='Table')
  {
  ?>
	<p><img style="width:4%;" src="<?php echo site_url();?>uploads/table.svg" alt="" ><?php echo " ".$table_id; ?></p>

<?php
  }
  else
  {?>
	<p><i class="fa fa-home" aria-hidden="true"></i> Home<br>
	<?php }
  ?>

 
<?=$ama[0]['address']?>&nbsp;<?=$ama[0]['city']?>&nbsp;<?=$ama[0]['pincode']?></p>
<p>
<?php
  if($order_status=='Delivered')
  {
  ?>
	Order status: Delivered on <?=$dd1?>, <?=$mm1?>, <?=$yy1?>, <?=$tim1?> <i class="fa fa-check-circle fa-1x" style="color:green" aria-hidden="true"></i>

<?php
  }
  else
  {
	  echo 'Order status: '. $order_status;
  }
  ?>
</p>
<?php
foreach($am as $m)
		{
			$menu_id=$m['menu_id'];
			$sqlm11 = "SELECT * FROM hotel_menu where IsActive=0 and id='$menu_id'";
			$recordm11 = $this->db->query($sqlm11);
			$am1= $recordm11->result_array();
			
			
			?>
										  <table class="table" width="80%">
							  <tr>
							  <td width="10%">
							  <?php
									   if($am1[0]['category']!='Veg')
									   {
										   ?>
									   <img src="<?php echo site_url();?>ui/img/nonveg.png" alt="Food logo"></a>
									   <?php
									   }
									   else
									   {
										   ?>
									   <img src="<?php echo site_url();?>ui/img/veg.png" alt="Food logo"></a>
										   <?php
									   }
									   ?>
							  </td>
							

							  <td width="20%">
							 <?=$am1[0]['menu']?> X <?=$m['qty']?>					
							  </td> 
							  <td width="10%">
							 ₹<?php echo $am1[0]['price']*$m['qty'];?>					
							  </td>

							  </tr>
							  
							  </table>
							  
			<?php
	
		}
?>
							  BILL TOTAL : <?=$total_amount?>
									</div>
								
	</div>
  
	<?php
}
		?>
		  </div>
<style>
.notice {
    padding: 15px;
    background-color:#efefef;
    border-left: 6px solid #7f7f84;
    margin-bottom: 30px;
    -webkit-box-shadow: 0 5px 8px -6px rgba(0,0,0,.2);
       -moz-box-shadow: 0 5px 8px -6px rgba(0,0,0,.2);
            box-shadow: 0 5px 8px -6px rgba(0,0,0,.2);
}
.notice-sm {
    padding: 10px;
    font-size: 80%;
}
.notice-lg {
    padding: 35px;
    font-size: large;
}
.notice-success {
    border-color: #e11c67;
}
.notice-success>strong {
    color: #80D651;
}
.notice-info {
    border-color: #45ABCD;
}
.notice-info>strong {
    color: #45ABCD;
}
.notice-warning {
    border-color: #FEAF20;
}
.notice-warning>strong {
    color: #FEAF20;
}
.notice-danger {
    border-color: #d73814;
}
.notice-danger>strong {
    color: #d73814;
}
</style>
                  </div>
				  <br /> <br /> <br />
                  <!-- end:Bar -->
				    <?php

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(!preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{
	?>
  
			   <?php
}
?>
               <!-- end:row -->
            </div>
            </div>
			

	  <?php
 //if (!empty($this->cart->contents())) {
?>		
<link rel="stylesheet" href="<?php echo site_url();?>ui/css/bootstrap1.min.css">
 <meta charset="utf-8">
  
    <meta name="viewport" 
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <style>
        .navbar {
            width: 100%;
            background-color: rgb(237 237 235);
        }
    
     


.navbar {
    position: fixes;
    /* min-height: 50px; */
     margin-bottom: 0px; 
    border: 1px solid transparent;
}
.menu-widget, .widget {
    border: 0px solid #eaebeb;
    background: #ededeb;
    border-radius: 2px;
    position: relative;
}
    </style>
  <br /><br />
      <?php
		   include("modescript.php");

include("footer.php");
?>
<style>
.navbar-light .navbar-toggler {
    border-color: rgba(0,0,0,.1);
}
</style>
            <!-- end:Footer -->
         </div>
    
	<?php
include("home_footer.php");

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{
	?>
	<style>
	footer {
    background: url(<?php echo site_url();?>home_page/footer_image/pattern_(1).png)center repeat;
    padding: 90px 0;
    z-index: 1;
    position: relative;
    display: none;
}
	</style>
	<?php
}
?>
