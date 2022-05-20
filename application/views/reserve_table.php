<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/submit.js"></script>
		<link rel="stylesheet" href="<?php echo site_url();?>ui/css/bootstrap1.min.css">

<?php

include("header.php");
$ii=$this->session->userdata('id');
$hotel_id=$this->session->userdata('hotel_id');
$type=$this->session->userdata('producttype');
if(is_numeric($ii))
{
	$id=$this->session->userdata('id');
}
else
{
	$id=0;
}

$sql = "SELECT * FROM customer where IsActive=0 and id='$id'";
        $record = $this->db->query($sql);
        $a= $record->result_array();


//echo 'idddd00'.$id;

?>
<style>
body {
    background: #fff;
    font-size: 16px;
    color: #4d4f56;
    font-weight: 400;
    overflow-x: hidden;
}
.page-wrapper {
    padding-top: 0px;
}
.container {
    max-width: 1270px;
    width: 84%;
}
</style>
<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{?>
<style>
body {
    background: #fff;
    font-size: 16px;
    color: #4d4f56;
    font-weight: 400;
    overflow-x: hidden;
}
.page-wrapper {
    padding-top: 0px;
}
.container {
    max-width: 1270px;
    width: 100%;
}
.m-t-30 {
    margin-top: 0;
}
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
        <!-- banner part starts -->
        <section>
            <div class="hero-inner">
                <div class="container text-center hero-text font-white">
                    <div class="banner-form">
                       <div class="row">
                             
							  <div class="col-md-12">
								<div class="col-md-2" style="color:red">
								
								<a href="<?php echo site_url();?>home/ofTakeaway/<?=$hotel_details[0]['id']?>/<?=$id?>"><i class="fa fa-angle-left" aria-hidden="true"></i> Back to Restaurant</a>
									</div>     
								<div class="col-md-5">
									<center><a class="navbar-brand pull-right" href="<?php echo site_url();?>home/ofTakeaway/<?=$hotel_details[0]['id']?>/<?=$id?>">
									<img class="img-rounded" src="<?=$home_info[0]['logo']?>" alt="">
									</a>
									</center>
								</div>
								
							
								<div class="col-md-4">
								<?php
											$useragent=$_SERVER['HTTP_USER_AGENT'];

if(!preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{
								if($id>0)
								{
								?>
 <li class="nav-item dropdown pull-right"> <a class="dropdown-toggle" data-toggle="dropdown" style="color:#111"  aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> <?=$a[0]['name']?></a>
                                <div class="dropdown-menu"> 
								<a class="dropdown-item"  href="<?php echo site_url();?>home/profileof/<?=$hotel_id?>/<?=$id?>">My Profile</a> 
								<a class="dropdown-item" href="<?php echo site_url();?>home/orderHistoryof/<?=$hotel_id?>/<?=$id?>">Orders History</a>
								<a class="dropdown-item" href="../../../Logout">Logout</a></div>
                            </li>								<?php
								}
								else
								{
									?>
							  <a class="btn btn-small btn btn-secondary pull-right" data-toggle="modal" data-target="#order-modal">Sign In</a>
									<?php
								}
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
<div class="page-wrapper">
<?php
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{
	?>
            <div class="">
			<?php
}
else
{
		?>
            <div class="container m-t-30">
			<?php
}
?>
                <div class="widget clearfix">
                    <!-- /widget heading -->
                    <div class="widget-heading">
                        <h1 class="widget-title text-dark">
										Checkout
                                    </h1>
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget-body">
					
                            <div class="row">
                                <div class="col-md-7">
		
			  <div class="card">
    <div class="row ">

      <div class="col-md-12">
        <div class="card-block">
          <h4 class="card-title"> <?=$a[0]['name']?> </h4>
          <p class="card-text">
You are securely logged in

          </p>
          
        </div>

    
      </div>

      <!-- End of carousel -->
    </div>
  </div>

  <div class="card">
    <div class="row ">

      <div class="col-md-12">
	  
	
			<form action="<?php echo site_url();?>home/save_cart_of" method="post">
						<input type="hidden" name="id" value="<?=$id?>">
									<input type="hidden" name="hotel_id" value="<?=$hotel_details[0]['id']?>">
			
      </div>

      <!-- End of carousel -->
    </div>
  </div>
  <!-- End of card -->

                                </div>
								
                                <div class="col-md-5">
								 <div class="sidebar-wrap">
									<div class="widget widget-cart">
									   <div class="widget-heading">
												<h4 style="color:#111">Shopping Cart</h4>
												<h6><?=$hotel_details[0]['name']?></h6>
												<table class="table">
													<thead>
													
													</thead>
													<tbody id="detail_cart">

													</tbody>
													
												</table>
											
					
									</div>
								 </div>
							  </div>
			
									
                                    <!--cart summary-->
                                    <div class="payment-option">
                                        <ul class=" list-unstyled">
										
											 <li>
                                                <label class="custom-control custom-radio  m-b-20">
                                                    <input id="payment" required name="payment_method" type="radio" value="Cash On delivery" class="custom-control-input"> 
													<span class="custom-control-indicator"></span> <span class="custom-control-description">Cash</span>
                                            </li>
                                            <li>
                                                <label class="custom-control custom-radio  m-b-10">
                                                    <input name="payment_method" type="radio" id="payment" value="Online Payment" required class="custom-control-input"> 
													<span class="custom-control-indicator"></span> 
													<span class="custom-control-description">Online Payment
													</span> </label>
                                            </li>
                                        </ul>
										<input type="hidden" name="radio" value="Takeaway">
										<input type="hidden" name="type" value="oftakeaway">
											<?php
										if($id>0)
										{
										?>
                                        <p class="text-xs-center"> <input type="submit" value="SUBMIT" class="btn btn-outline-success btn-block"></p>
										<?php
										}
										else
										{
										?>
										 <a href=" " class="btn btn-outline-success btn-block">SUBMIT</a>
										<?php										
										}
											 
										?>
								   </div>
									
                                </div>
								
								
                            </div>
                        </form>
						
                    </div>
                </div>
            </div>

            <!-- end:Footer -->
        </div>
		<br />
		<br />
		<br />
<!-- Modal -->

  
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.add_cart').click(function(){
		//	
			var product_id    = $(this).data("productid");
			var menu_id    = $(this).data("productid");
			
			var product_name  = $(this).data("productname");
			var product_price = $(this).data("productprice");
			var productcat = $(this).data("productcat");
			var quantity   	  = $('#' + product_id).val();
			var hotel_id   	  = <?php echo $hotel_details[0]['id']?>;
			var type   	  = <?php echo $type?>;
			$.ajax({
				url : "http://localhost/KOT/Home/add_to_cart",
				method : "POST",
				data : {product_id: product_id,menu_id: menu_id, product_name: product_name, product_price: product_price, quantity: quantity, hotel_id: hotel_id, productcat: productcat},
				success: function(data){
					//alert(quantity);
					$('#detail_cart').html(data);
					$('#cart-counter').load(location.href + " #cart-counter");
					$('#cart-counter1').load(location.href + " #cart-counter1");

				}
			});
		});

		
		$('#detail_cart').load("http://localhost/KOT/Home/load_cart");

		
		$(document).on('click','.romove_cart',function(){
			var row_id=$(this).attr("id"); 
			//alert(product_id);
			var product_id    = $(this).attr("product_id");
			var menu_id    = $(this).attr("menu_id");
			var product_name  = $(this).attr("product_name");
			var product_price = $(this).attr("product_price");
			var productcat = $(this).attr("productcat");
			var hotel_id   	  = <?php echo $hotel_details[0]['id']?>;

			var quantity  = 1;
			$.ajax({
				url : "http://localhost/KOT/Home/delete_cart1",
				method : "POST",
				data : {row_id : row_id, menu_id: menu_id, product_name: product_name, product_price: product_price, quantity: quantity, hotel_id: hotel_id, productcat: productcat},
				success :function(data){
					$('#detail_cart').html(data);
					$('#cart-counter').load(location.href + " #cart-counter");
				}
			});
		});		

		$(document).on('click','.add_qty_cart',function(){
			var row_id=$(this).attr("id"); 
			var product_id    = $(this).attr("product_id");
			var menu_id    = $(this).attr("menu_id");
			var product_name  = $(this).attr("product_name");
			var product_price = $(this).attr("product_price");
			var productcat = $(this).attr("productcat");
			var hotel_id   	  = <?php echo $hotel_details[0]['id']?>;
			var quantity  = 1;
			$.ajax({
				url : "http://localhost/KOT/Home/add_qty_cart",
				method : "POST",
				data : {row_id : row_id, menu_id: menu_id, product_name: product_name, product_price: product_price, quantity: quantity, hotel_id: hotel_id, productcat: productcat},
				success :function(data){
					$('#detail_cart').html(data);
					$('#cart-counter').load(location.href + " #cart-counter");
				}
			});
		});		
		
		$(document).on('click','.romove_cart1',function(){
			var row_id=$(this).attr("id"); 
			$.ajax({
				url : "http://localhost/KOT/Home/delete_cart",
				method : "POST",
				data : {row_id : row_id},
				success :function(data){
					$('#detail_cart').html(data);
					$('#cart-counter').load(location.href + " #cart-counter");
				}
			});
		});
		
		$(document).on('click', '#clear_cart', function(){
		var iih=<?php echo $hotel_details[0]['id']?>;
		var id=<?php echo $this->session->userdata('id');?>;

	   $.ajax({
		url:"<?php echo base_url(); ?>Home/clear",
		success:function(data)
		{
			//alert(ii);
			window.location = "http://localhost/KOT/home/menu/"+iih+"/"+id;
		}
	   });
 
		});
		
	});
</script>
<script type="text/javascript">
    $(window).on('load', function() {
        $('#order-modal').modal('show');
    });
</script>
           <?php
		   if($id <=0)
		   {
	   
?>
      <div class="modal fade" id="order-modal" tabindex="-1" role="dialog" aria-hidden="true" style="background-color: rgba(0,0,0,.6);">
         <div class="modal-dialog" role="document">
		        <div class="pull-right"> <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>
</button></div>
<br />
<br />
    <div class="modal-content">
        <br>
        <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#signin" data-toggle="tab">Sign In</a></li>
              <li class=""><a href="#signup" data-toggle="tab">Register</a></li>
            </ul>
        </div>
      <div class="modal-body">
	  
        <div id="myTabContent" class="tab-content">
        <div class="tab-pane active in" id="signin">
		<h2>Sign-In</h2>

            <form class="form-horizontal" action="<?php echo site_url();?>Home/validate_user_checkout_of" method="post">
			<input type="hidden" name="controller" value="<?=$controller?>">
			<input type="hidden" name="id" value="<?=$id;?>">
			<input type="hidden" name="hotel_id" value="<?=$hotel_details[0]['id'];?>">
            <fieldset>
            <!-- Sign In Form -->
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="userid">Mobile phone number</label>
              <div class="controls">
                <input required id="userid" name="mobile" type="text" class="form-control" placeholder="" class="input-medium" required="">
              </div>
            </div>

            <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="passwordinput">Password:</label>
              <div class="controls">
                <input required="" id="passwordinput" name="password" class="form-control" type="password" placeholder="" class="input-medium">
              </div>
            </div>
            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="signin"></label>
              <div class="controls">
                <button id="signin" name="signin" class="btn btn-success">Sign In</button>
              </div>
            </div>
            </fieldset>
            </form>
        </div>
        <div class="tab-pane " id="signup">
		<h2>Create account</h2>
<?php
$url= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$controller=array_slice(explode('/', $url), -1)[0];

?>
            <form class="form-horizontal" action="<?php echo site_url();?>home/save_customer_checkout_of" method="post">
			<input type="hidden" name="controller" value="<?=$controller?>">
			<input type="hidden" name="id" value="<?=$id;?>">
			<input type="hidden" name="hotel_id" value="<?=$hotel_details[0]['id'];?>">
            <fieldset>
            <!-- Sign Up Form -->
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="Email">Your name</label>
              <div class="controls">
                <input id="name" name="name" class="form-control" type="text" placeholder="" class="input-large" required="">
              </div>
            </div>
            
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="userid">Mobile number:</label>
              <div class="controls">
                <input id="mobile" name="mobile" class="form-control" type="text" placeholder="" class="input-large" required="">
              </div>
            </div>
            
            <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="password">Email:</label>
              <div class="controls">
                <input id="email" name="email" class="form-control" type="email" placeholder="" class="input-large" required="">
              </div>
            </div>
            
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="reenterpassword">Password</label>
              <div class="controls">
                <input id="password" class="form-control" name="password" type="password" placeholder="" class="input-large" required="">
              </div>
            </div>
            
         
            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="confirmsignup"></label>
              <div class="controls">
                <button id="confirmsignup" name="confirmsignup" class="btn btn-success">Sign Up</button>
              </div>
            </div>
            </fieldset>
            </form>
      </div>
    </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<style>
.nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus {
    color: #555;
    background-color: #fff;
    border: 1px solid #ddd;
    border-bottom-color: transparent;
    cursor: default;
}
.nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus {
    color: #555;
    background-color: #fff;
    border: 1px solid #ddd;
    border-bottom-color: transparent;
    cursor: default;
}
.nav-tabs>li>a {
    margin-right: 2px;
    line-height: 1.428571429;
    border: 1px solid transparent;
    border-radius: 4px 4px 0 0;
}
.nav>li>a {
    position: relative;
    display: block;
    padding: 10px 15px;
}


</style>

<?php		   }

include("footer.php");
include("home_footer.php");



//}
?>
<style>
.menu-widget, .widget {
    border: 0px solid #fff;
    background: #fff;
    border-radius: 2px;
    position: relative;
}
</style>
						</div>

