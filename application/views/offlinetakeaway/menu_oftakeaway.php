<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/submit.js"></script>
<?php
//echo 'idddd00'.$this->session->userdata('id');

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
$sql = "SELECT * FROM customer where IsActive=0 and id='$id'";
        $record = $this->db->query($sql);
        $a= $record->result_array();
		
		

?>

<body class="home">
    <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out" style="animation-duration: 300ms; opacity: 1;">
        <!-- banner part starts -->
		
			
            <div class="container m-t-30">
			                          					<?php
											$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{?>
<style>
						.responsive {
						  width: 100%;
						  height: auto;
						}
.togglesearch{
  display: none;
}

.togglesearch:before{
  content: "";
  position: absolute;
  
}
 
.togglesearch input[type="text"]{
  width: 200px;
  padding: 5px 10px;
  margin-left: 23px;
  border-radius: 10px;
}
 p {
    font-size: 13px;
    margin-top: 0;
    margin-bottom: 0;
}


.switch {
  position: fixed;
  display: inline-block;
  width: 47px;
  height: 27px;
  padding-top: 18px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 20px;
  width: 20px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
.hr1 {
  border:none;
  border-top:2px dotted #ededeb;
  color:#fff;
  background-color:#fff;
  height:1px;
  width:100%;
}

.styles_itemNameText__3bcKX {
    margin-right: 4px;
    font-size: 1rem;
    font-weight: 500;
    color: #3e4152;
    word-break: break-word;
}
a {
    color: #939393;
}

.btn-block {
    display: block;
    width: 50%;
}

.btn-success {
    color: #28a745;
    background-color: #ffffff;
    border-color: #d0d1d3;
    border-radius: 11px;
    font-weight: 500;
}


.sidebar {
    border: 0px solid #fff; 
    background: #fff; 
    border-radius: 3px;
}
</style>
<style type="text/css">
 body {
  height: 100%;
  width: 100%;
}

#scroller {
   overflow:auto;

}
</style>
<script>
$(document).ready(function() {

$(".fa-search").click(function() {
$(".togglesearch").toggle();
$("input[type='text']").focus();
$(".aa").hide();
$(".s").hide();
$(".cross").show();
});

$(".cross").click(function() {
$(".aa").show();
$(".s").show();
$(".cross").hide();
$(".togglesearch").hide();

});
});
</script>

<div class="row">
						
						<div class="col-xs-8 togglesearch">
						     <input type="text" placeholder="Search within menu" id="searchbar" onkeyup="search_animal()" name="search"/>
						</div>	
						<div class="col-xs-8 aa">
						&nbsp;
						</div>
						<div class="col-xs-2 pull-right s" style="padding-top:0px">
							<i class="fa fa-search" aria-hidden="true"></i>
						</div>		
						<div class="col-xs-2 pull-right cross" style="padding-top:0px;display: none;">
							<i class="fa fa-times" aria-hidden="true"></i>
						</div>
						</div>
						<br />
						<div class="row">
						<div class="col-md-12" style="padding-left:30px">
						 <h4><?=$hotel_details[0]['name']?></h4>
                              <p><?=$hotel_details[0]['hotel_description']?><br>
                              <?=$hotel_details[0]['address']?></p>
						</div>						
						</div>	

						<div class="row">
						<div class="col-md-12" >
						<div class="col-xs-2">
							<a href="#" class="btn btn-primary">CAll FOR WAITER</a>
						</div><br />
						</div>						
						</div>	
					
						<hr class="hr1">						
						<div class="row">
						<div class="col-md-12" style="padding-left:30px">
							<font size="2px"><b>Veg </b>	</font>
						
						 <input type="checkbox" name="Veg" class="Veg1" id='Veg1'>
						
						</label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

						<font size="2px"><b>Non Veg </b>	</font>
						
						 <input type="checkbox" name="Nonveg" class="Non1" id='Non1'>
						 
						</label>	
						</div>
						</div>
						<script>
						$(document).ready(function() {
  $('.Veg1').on('change', function(event) {
    var checkbox = $(event.target);
    var isChecked = $(checkbox).is(':checked');
	var id=checkbox.attr('id');
    //alert('checkbox ' + id + ' is checked: ' + isChecked);
	if(isChecked)
	{
		$(".Non").hide();
	}
	else
	{
		$(".Non").show();

	}

  });

  $('.Non1').on('change', function(event) {
    var checkbox = $(event.target);
    var isChecked = $(checkbox).is(':checked');
	var id=checkbox.attr('id');
    //alert('checkbox ' + id + ' is checked: ' + isChecked);
	if(isChecked)
	{
		$(".Veg").hide();
	}
	else
	{
		$(".Veg").show();

	}

  });
});
						</script>
<?php
}
?>
               <div class="row" id="scroller" style="padding-bottom:30px">
                  <div class="col-md-3">
                     <div class="sidebar clearfix m-b-20">
                       
                          					<?php
											$useragent=$_SERVER['HTTP_USER_AGENT'];

if(!preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{?>
 <div class="main-block">
						  <div class="sidebar-title white-txt">
                              <h6>Recommended</h6>
                           </div>

                           <ul>
						   <?php
						   $hotel_id=$hotel_details[0]['id'];
							$sql = "select * from hotel_menu where hotel_id='$hotel_id' and parent_menu IS NULL and IsActive=0";
							$record = $this->db->query($sql);
							$m=$record->result_array();
							foreach($m as $m1)
						   {
							  // print_r($m1);
						   ?>
                              <li><a href="#" class="scroll active"><?=$m1['menu']?></a></li>
							  <?php
							  
						   }
						   ?>
                           </ul>
                           <div class="clearfix"></div>
                        </div>
												   <?php
}
?>
                        <!-- end:Sidebar nav -->
           
                     </div>
                     <!-- end:Left Sidebar -->

                  </div>
                  <div class="col-md-5">
                     <div class="menu-widget m-b-30">
                                                 					<?php
											$useragent=$_SERVER['HTTP_USER_AGENT'];

if(!preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{?>
					   <div class="widget-heading">
                           <h3 class="widget-title text-dark">
                              POPULAR ORDERS Delicious hot food!
							  
                           </h3>
                           <div class="clearfix"></div>
                        </div>
						<?php
}
?>

						<div class="food-item white">
                          <?php
						    $hotel_id=$hotel_details[0]['id'];
							$sql = "select * from hotel_menu where hotel_id='$hotel_id' and parent_menu IS NULL and IsActive=0";
							$record = $this->db->query($sql);
							$m=$record->result_array();
							foreach($m as $m1)
						   {
							   $menu_id=$m1['id'];
							   ?>
						  		 <h4 class="animals1"><?=$m1['menu']?></h4>
							   <?php
							$sqlmm = "select * from hotel_menu where hotel_id='$hotel_id' and parent_menu='$menu_id' and IsActive=0";
							$recordmm = $this->db->query($sqlmm);
							$mm=$recordmm->result_array();
							foreach($mm as $menu)
							{
								$k=$menu["code"];
						  ?>
						 
							
							  <table class="table">
								<?php
								if($menu['category']!='Veg')
									   {
								?>
							 	 <tr class="animals Non">

							  <?php
									   }
									   else
									   {
								   ?>
							 <tr class="animals Veg">

								<?php
									   }
									   ?>
							  <td width="5%" style="padding-top:9px">
							  <?php
									   if($menu['category']!='Veg')
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



							  <td width="50%" class="styles_itemNameText__3bcKX ">
							 <?=$menu['menu']?>
							  <div style="font-size:12px">₹<?=$menu['price']?>  &nbsp; &nbsp; &nbsp;
							

 
  <a href="#demo_<?php echo $menu['id']?>" class="btn" data-toggle="collapse">  <i class="fa fa-info-circle" aria-hidden="true"></i></a> </div> 
  <div id="demo_<?php echo $menu['id']?>" class="collapse">
  <?=$menu['description']?>
  </div>



							  </td>
							  <input type="hidden" name="quantity" id="<?php echo $menu['id'];?>" value="1" class="quantity form-control">

							  <td width="30%">
							  <?php
							$numItems = count($this->cart->contents());
							$i = 0;
							foreach($this->cart->contents() as $key) {
							if($i+1 == $numItems) {
							$saved_rowid = $key['hotel_id'];
							}
							$i++;
							}
							if($saved_rowid <=0)
							{
							 ?>
							<button class="add_cart btn btn-success btn-block pull-right" data-productid="<?php echo $menu['id'];?>" data-productname="<?php echo $menu['menu'];?>" data-productprice="<?php echo $menu['price'];?>" data-productcat="<?php echo $menu['category'];?>"><p style="text-align:left">ADD</p><p style="text-align:right;margin-top: -40px; margin-bottom: 8px;margin-right: -9px;"> +</p></button>
							<?php
							}
							else if($saved_rowid==$hotel_details[0]['id'] )
							{
							  ?>
							<button class="add_cart btn btn-success btn-block pull-right" data-productid="<?php echo $menu['id'];?>" data-productname="<?php echo $menu['menu'];?>" data-productprice="<?php echo $menu['price'];?>" data-productcat="<?php echo $menu['category'];?>"><p style="text-align:left">ADD</p><p style="text-align:right;margin-top: -40px; margin-bottom: 8px;margin-right: -9px;"> +</p></button>
							<?php
							}
							else
							{
								?>
							<button class="clear_cart btn btn-success btn-block pull-right" data-toggle="modal" data-target="#rept_order" data-productid="<?php echo $menu['id'];?>" data-productname="<?php echo $menu['menu'];?>" data-productprice="<?php echo $menu['price'];?>"  data-productcat="<?php echo $menu['category'];?>"><p style="text-align:left">ADD</p><p style="text-align:right;margin-top: -40px; margin-bottom: 8px;margin-right: -9px;"> +</p></button>
								<?php
							}
								
							?>
							  </td>
							  </tr>
							  </div>
							  </table>
							 
                              <!-- end:row -->
                          						

						   <?php
							}
							?>

							<?php
						   }
						   ?>
						   
                        </div>
                        <!-- end:Collapse -->
                     </div>


                     <!--/row -->
                  </div>
				 
                  <!-- end:Bar -->
				    <?php
$useragent=$_SERVER['HTTP_USER_AGENT'];

if(!preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{
	?>
	
                  <div class="col-md-4">
                     <div class="sidebar-wrap">
                        <div class="widget widget-cart">
                           <div class="widget-heading">
									<h4 style="color:#111">Shopping Cart</h4>
									<table class="table">
										<thead>
										
										</thead>
										<tbody id="detail_cart">

										</tbody>
										
									</table>
									
						   
							 <a href="<?php echo site_url();?>home/Offcheckout/<?=$hotel_details[0]['id']?>/<?=$id?>/oftakeaway" type="button" class="btn theme-btn btn-lg">Proceed</a>
		
                        </div>
                     </div>
                  </div>
                  <!-- end:Right Sidebar -->
               </div>
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
    background-color: #60b246;
    color: #fff;
        }
    
     


.navbar {
    position: fixes;
    /* min-height: 50px; */
     margin-bottom: 0px; 
    border: 1px solid transparent;
}
.menu-widget, .widget {
    border: 0px solid #60b246;
    background: #60b246;
    border-radius: 2px;
    position: relative;
}

    </style>
  
  <?php

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{
	?>

    <nav class="navbar fixed-bottom navbar-expand-lg navbar-light">
			<div class="col-md-6 " style="width: 50%;">
	<span class="count" id="cart-counter">

<?php
      echo number_format(count($this->cart->contents()));
    ?> Item | ₹<?=number_format($this->cart->total())?>
	</span> 

	</div>
	<div class="col-md-6 a" style="width: 50%;text-align: right;">
      <button class=""
                type=""
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="View Cart" style="background-color: #60b246;color: #fff;border: 0;"  onclick="clickedIt()">
				  View Cart <i class="fa  fa-shopping-cart" aria-hidden="true"></i>
        </button>
		        </div>	
		
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-bottom:0px;margin-right: 0;color: white;" >
       
					   <div class="col-xs-12 col-md-12 col-lg-12">
                     <div class="sidebar-wrap">
                        <div class="widget widget-cart">
                           <div class="widget-heading">
									<h4></h4>
									<table class="table" style="margin-bottom:0px;margin-right: 0;color: white;">
										
										<tbody id="detail_cart">

										</tbody>
										
									</table>
									
                        </div>
                     </div>
                  </div>
				
                  <!-- end:Right Sidebar -->
               </div>
  	<div>
					<a href="<?php echo site_url();?>home/Offcheckout/<?=$hotel_details[0]['id']?>/<?=$id?>/oftakeaway" type="button" class="btn theme-btn" style="width: 100%;border-radius: 15px;">Proceed</a>
					</div>
        </div>
<!--
		<script>
		function clickedIt() {   
   var canSee = $("#navbarSupportedContent").is(":visible");
	if(canSee==false)
	{
		$('.a').hide();
	}
	else
	{
		$('.b').show();
	}
	
}
		</script>
		-->
			<?php
	//	} 
  ?>


		<?php
	//	} 
  ?>
    </nav> 
	<?php
	
	
	
}
//}
?>

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
			var producttype = "oftakeaway";
			$.ajax({
				url : "http://localhost/KOT/Home/add_to_cart",
				method : "POST",
				data : {product_id: product_id,menu_id: menu_id, product_name: product_name, product_price: product_price, quantity: quantity, hotel_id: hotel_id, productcat: productcat, producttype: producttype},
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
			var producttype = "oftakeaway";
			var quantity  = 1;
			$.ajax({
				url : "http://localhost/KOT/Home/delete_cart1",
				method : "POST",
				data : {row_id : row_id, menu_id: menu_id, product_name: product_name, product_price: product_price, quantity: quantity, hotel_id: hotel_id, productcat: productcat, producttype: producttype},
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
			var producttype = "oftakeaway";
			var quantity  = 1;
			$.ajax({
				url : "http://localhost/KOT/Home/add_qty_cart",
				method : "POST",
				data : {row_id : row_id, menu_id: menu_id, product_name: product_name, product_price: product_price, quantity: quantity, hotel_id: hotel_id, productcat: productcat, producttype: producttype},
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


<!------ Include the above in your HEAD tag ---------->

<!-- Button trigger modal -->

<script>
function search_animal() {
    let input = document.getElementById('searchbar').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('animals');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="block";       
			$(".animals1").hide();

        }
    }
}
</script>

<!-- Modal -->

           <?php
		   include("modescript.php");

include("footer.php");
?>
<style>
.navbar-light .navbar-toggler {
    border-color: rgb(96 178 70);
}
</style>
            <!-- end:Footer -->
         </div>
         <!-- end:page wrapper -->
      <!--/end:Site wrapper -->
      <!-- Modal -->

<?php
				$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{
	?>
<style>
.food-item-wrap .figure-wrap {
    position: relative;
    height: 110px;
    border-radius: 10px 10px;
}
.food-item-wrap h5 a {
    color: #25282b;
    font-size: 12px;
    font-weight: 600;
}
.food-item-wrap .content {
    padding: 4px 5px 0px;
    height: 66px;
}
.popular {
    padding: 1px 0 19px;
    background-size: 100%;
}
.h5, h5 {
    font-size: 12px;
}

footer {
    background: url(http://localhost/KOT/home_page/footer_image/pattern_(1).png)center repeat;
    padding: 90
px
 0;
    z-index: 1;
    position: relative;
    display: none;
}
</style>

<?php
}
?>