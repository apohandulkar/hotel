<?php
//session_start();
include("header.php");

		$ii=$this->session->userdata('id');
		$hotel_id=$this->session->userdata('hotel_id');

if(is_numeric($ii))
{
	$id=$this->session->userdata('id');
//	$hotel_id=$this->session->userdata('hotel_id');

}
else
{
	$id=0;
	$hotel_id=0;
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
		<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/submit.js"></script>
  <?php

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(!preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{
	?>
<link rel="stylesheet" href="<?php echo site_url();?>ui/css/bootstrap1.min.css">
<?php
}

//$id=$this->session->userdata('id');
$sql = "SELECT * FROM customer where IsActive=0 and id='$id'";
        $record = $this->db->query($sql);
        $a= $record->result_array();
/* $mm=$this->session->flashdata('data_name');
if($this->session->userdata('city')=='')
{
 $city = $mm['city'];
 $id = $mm['id'];
}
else
{
 $city = $this->session->userdata('city');
 $id = $this->session->userdata('id');
} */
?>
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
								$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{?>
		<style>
		.hr1 {
  border:none;
  border-top:2px dotted #ededeb;
  color:#fff;
  background-color:#fff;
  height:1px;
  width:100%;
}
		</style>
					<div class="">
						<div class="col-xs-2">
						<a class="navbar-brand" href="<?php echo site_url();?>home/<?=$id?>"> <img class="img-rounded" src="<?=$home_info[0]['logo']?>" alt=""> </a>
						</div>
					
					</div>
<br />
						<?php
}

				$contain=$this->session->userdata('contain');
						if($contain!='')
						{
						$sqlcc11 = "SELECT count(*) as count from hotel_menu where IsActive=0 and menu='$contain' ";
						$recordcc11 = $this->db->query($sqlcc11);
						$aa11=$recordcc11->result_array();
						$count11=$aa11[0]['count'];	
						}
						else
						{
						$count11=$home_count[0]['count'];	

						}
?>
        <!-- banner part ends -->
        <!-- location match part starts -->
        <div class="location-match text-xs-center">
            <div class="container"> <span><?=$count11?> restaurants matched your location: <span class="primary-color"><?php echo $this->session->userdata('city')?> -</span> </span>
            </div>
        </div>
        <!-- location match part ends -->
        <!-- Popular block starts -->
        <section class="popular">
            <div class="container">
                <div class="title text-xs-center m-b-30">
                    <h2>Best Food in <?php echo $this->session->userdata('city')?></h2>
                    <p class="lead">The easiest way to your favourite food</p>
                </div>
				
                <div class="row">
                    <!-- Each popular food item starts -->
					<?php 
					foreach($home_list as $a)
					{
						$hotel_id=$a['id'];
						$contain=$this->session->userdata('contain');
						if($contain!='')
						{
						$sqlcc = "SELECT count(*) as count from hotel_menu where IsActive=0 and menu='$contain' and hotel_id='$hotel_id'";
						$recordcc = $this->db->query($sqlcc);
						$aa=$recordcc->result_array();
						$count=$aa[0]['count'];
					//	echo "SELECT count(*) as count from hotel_menu where IsActive=0 and menu='$contain' and hotel_id='$hotel_id'";
						if($count > 0)
						{
						?>
                    <div class="col-xs-6 col-sm-6 col-md-4 food-item">
                       <a href="<?php echo site_url();?>home/Restaurant_details/<?=$hotel_id?>/<?=$id?>">
					   <div class="food-item-wrap">
                            <div class="figure-wrap bg-image" data-image-src="<?=$a['banner']?>" style="background: url(&quot;<?=$a['banner']?>&quot;) center center / cover no-repeat;">
                        
                            </div>
                            <div class="content">
                                <h5><a href="<?php echo site_url();?>home/Restaurant_details/<?=$hotel_id?>/<?=$id?>"><?=$a['name']?></a></h5>
                            </div>
                          
                        </div>
						</a>
                    </div>
                    <?php
						}
						}
						else
						{
							?>
						<div class="col-xs-6 col-sm-6 col-md-4 food-item">
                       <a href="<?php echo site_url();?>home/Restaurant_details/<?=$hotel_id?>/<?=$id?>">
					   <div class="food-item-wrap">
                            <div class="figure-wrap bg-image" data-image-src="<?=$a['banner']?>" style="background: url(&quot;<?=$a['banner']?>&quot;) center center / cover no-repeat;">
                              
                            </div>
                            <div class="content">
                                <h5><a href="<?php echo site_url();?>home/Restaurant_details/<?=$hotel_id?>/<?=$id?>"><?=$a['name']?></a></h5>
                            </div>
                          
                        </div>
						</a>
                    </div>
							<?php
							
						}
					}
					?>
                </div>
            </div>
			<br />
		<br />
		<br />
        </section>
				<?php
				$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{
	?>
<style>
.food-item-wrap {
    border: 1px solid #e9e9e9;
    border-radius: 10px 10px;
    overflow: hidden;
    margin-bottom: 30px;
    background: #fafaf8;
}
.food-item-wrap .figure-wrap {
    position: relative;
    height: 110px;
    border-radius: 5px 5px;
}
.food-item-wrap h5 a {
    color: #25282b;
    font-size: 12px;
    font-weight: 600;
}
.food-item-wrap .content {
    padding: 4px 5px 0px;
    height: 40px;
}
.popular {
    padding: 1px 0 19px;
    background-size: 100%;
}
.h5, h5 {
    font-size: 12px;
}

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
 <?php
include("modescript.php");
include("footer.php");

include("home_footer.php");
