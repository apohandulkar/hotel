<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/submit.js"></script>
<?php
session_start();
include("header.php");
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM hotel_menu WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["menu"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "add1":
		if(!empty($_GET["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM hotel_menu WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["menu"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_GET["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"]) || $_SESSION["cart_item"][$k]["quantity"] < 0) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_GET["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove1":
		if(!empty($_GET["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM hotel_menu WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["menu"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_GET["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"]) || $_SESSION["cart_item"][$k]["quantity"] < 0) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] -= $_GET["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>

<body class="home">
    <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out" style="animation-duration: 300ms; opacity: 1;">

 <section class="inner-page-hero bg-image" data-image-src="<?=$hotel_details[0]['banner']?>" style="background: url(&quot;<?=$hotel_details[0]['logo']?>&quot;) center center / cover no-repeat;">
               <div class="profile">
                  <div class="container">
                     <div class="row">
                        <div class="col-xs-12 col-sm-12  col-md-4 col-lg-4 profile-img">
                           <div class="image-wrap">
                              <figure><img src="<?=$hotel_details[0]['logo']?>" alt="Profile Image"></figure>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 profile-desc">
                           <div class="pull-left right-text white-txt">
                              <h6><a href="#"><?=$hotel_details[0]['name']?></a></h6>
                              <a class="btn btn-small btn-green"><?=$hotel_details[0]['time']?></a>
                              <p><?=$hotel_details[0]['hotel_description']?></p>
                              <p><?=$hotel_details[0]['address']?></p>
                              <p><?=$hotel_details[0]['address']?></p>
                             
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- end:Inner page hero -->
            <div class="breadcrumb">
               <div class="container">
                  <ul>
                     <li><a href="<?php echo site_url();?>home/home" class="active">Home</a></li>
                     
                  </ul>
               </div>
            </div>
            <div class="container m-t-30">
               <div class="row">
                  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                     <div class="sidebar clearfix m-b-20">
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
                        <!-- end:Sidebar nav -->
           
                     </div>
                     <!-- end:Left Sidebar -->

                  </div>
                  <div class="col-xs-12 col-sm-8 col-md-8 col-lg-6">
                     <div class="menu-widget m-b-30">
                        <div class="widget-heading">
                           <h3 class="widget-title text-dark">
                              POPULAR ORDERS Delicious hot food!
							  
                           </h3>
                           <div class="clearfix"></div>
                        </div>
                        <div class="collapse in" id="1">
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
 `								
						  		 <h3><?=$m1['menu']?></h3>
								 <br />
							   <?php
							$sqlmm = "select * from hotel_menu where hotel_id='$hotel_id' and parent_menu='$menu_id' and IsActive=0";
							$recordmm = $this->db->query($sqlmm);
							$mm=$recordmm->result_array();
							foreach($mm as $menu)
							{
								$k=$menu["code"];
								//echo $_SESSION["cart_item"][$k]["quantity"];
						  ?>
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="col-md-1">
                                       <a class="restaurant-logo pull-left" href="">
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
                                    </div>
                                    <!-- end:Logo -->
                                    <div class="rest-descr col-md-6">
                                       <h6><a href="#"><?=$menu['menu']?></a></h6>
                                       <p> <?=$menu['description']?></p>
                                       <p> ₹<?=$menu['price']?></p>
                                    </div>
                                    <!-- end:Description -->
                                 <!-- end:col -->
                                 <div class="col-md-4">
								 <?php
								 if($_SESSION["cart_item"][$k]["quantity"] > 0)
								 {
								 ?>
								<input type="hidden" class="product-quantity" name="quantity" value="1" size="2" />								 
								 <div class="btn btn-small btn btn-secondary pull-right">
								  <a href="?action=remove1&code=<?=$menu["code"]?>&quantity=1" > - </a>
								 <a href=""> <?=$_SESSION["cart_item"][$k]["quantity"]?> </a>
								 <a href="?action=add1&code=<?=$menu["code"]?>&quantity=1" > + </a>

								 </div>
								 
									<?php
								 }
								 else
								 {
									 ?>
								 <form method="post" action="http://localhost/KOT/home/menu/7?action=add&code=<?=$menu["code"]?>">
								<input type="hidden" class="product-quantity" name="quantity" value="1" size="2" />								 
								 <input type="submit" value="Add +" id="submitFormData" onclick="SubmitFormData();" class="btn btn-small btn btn-secondary pull-right">
								  </form>
									<?php
								 }
								 ?>
								 </div>
								<!-- <a href="#" class="btn btn-small btn btn-secondary pull-right" data-toggle="modal" data-target="#order-modal">Add +</a> </div>-->
                              </div>
                              </div>
							 
                              <!-- end:row -->
                           <hr />							

						   <?php
							}
							?>

										
							<?php
						   }
						   ?>
                        </div>
						</div>
                        <!-- end:Collapse -->
                     </div>
                  


                     <!--/row -->
                  </div>
                  <!-- end:Bar -->
                  <div class="col-xs-12 col-md-12 col-lg-3">
                     <div class="sidebar-wrap">
                        <div class="widget widget-cart">
                           <div class="widget-heading">
                              <h3 class="widget-title text-dark">
                                 Your Shopping Cart
                              </h3>
                              <div class="clearfix"></div>
                           </div>
						   <?php
						    $total_quantity = 0;
							$total_price = 0;
						    foreach ($_SESSION["cart_item"] as $item){
							$item_price = $item["quantity"]*$item["price"];
						   ?>
                           <div class="order-row bg-white">
                              <div class="widget-body">
                                 <div class="title-row"><?=$item["name"]?>  ₹<?=$item_price?><a href="?action=remove&code=<?php echo $item["code"];?>" class="btnRemoveAction pull-right"><img src="../../ui/img/icon-delete.png" alt="Remove Item" /></a></div>
                                 <div class="form-group row no-gutter">
                                   
                                    <div class="col-xs-4">
								<div class="btn btn-small btn btn-secondary pull-right">
								  <a href="?action=remove1&code=<?=$item["code"]?>&quantity=1" > - </a>
								 <a href=""> <?=$item["quantity"]?> </a>
								 <a href="?action=add1&code=<?=$item["code"]?>&quantity=1" > + </a>

								 </div>                                    </div>
                                 </div>
                              </div>
                           </div>
						   <?php
						   $total_quantity += $item["quantity"];
							$total_price += ($item["price"]*$item["quantity"]);
							}
							?>

                           <!-- end:Order row -->
                           <div class="widget-delivery clearfix">
                              <form>
                                 <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6 b-t-0">
                                    <label class="custom-control custom-radio">
                                    <input id="radio4" name="radio" type="radio" class="custom-control-input" checked=""> <span class="custom-control-indicator"></span> <span class="custom-control-description">Delivery</span> </label>
                                 </div>
                                 <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6 b-t-0">
                                    <label class="custom-control custom-radio">
                                    <input id="radio3" name="radio" type="radio" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Takeout</span> </label>
                                 </div>
                              </form>
                           </div>
                           <div class="widget-body">
                              <div class="price-wrap text-xs-center">
                                 <p>TOTAL</p>
                                 <h3 class="value"><strong><?php echo "₹ ".number_format($total_price, 2); ?></strong></h3>
                                 <!--<p>Free Shipping</p>-->
                                 <button onclick="location.href=&#39;checkout.html&#39;" type="button" class="btn theme-btn btn-lg">Checkout</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end:Right Sidebar -->
               </div>
               <!-- end:row -->
            </div>

           <?php
include("footer.php");
?>
            <!-- end:Footer -->
         </div>
         <!-- end:page wrapper -->
      </div>
      <!--/end:Site wrapper -->
      <!-- Modal -->
      <div class="modal fade" id="order-modal" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
               <div class="modal-body cart-addon">
                  <div class="food-item white">
                     <div class="row">
                        <div class="col-xs-12 col-sm-6 col-lg-6">
                           <div class="item-img pull-left">
                              <a class="restaurant-logo pull-left" href="https://codenpixel.com/demo/foodpicky/profile.html#"><img src="./pepsi.png" alt="Food logo"></a>
                           </div>
                           <!-- end:Logo -->
                           <div class="rest-descr">
                              <h6><a href="https://codenpixel.com/demo/foodpicky/profile.html#">Sandwich de Alegranza Grande Menü (28 - 30 cm.)</a></h6>
                           </div>
                           <!-- end:Description -->
                        </div>
                        <!-- end:col -->
                        <div class="col-xs-6 col-sm-2 col-lg-2 text-xs-center"> <span class="price pull-left">$ 2.99</span></div>
                        <div class="col-xs-6 col-sm-4 col-lg-4">
                           <div class="row no-gutter">
                              <div class="col-xs-7">
                                 <select class="form-control b-r-0" id="exampleSelect2">
                                    <option>Size SM</option>
                                    <option>Size LG</option>
                                    <option>Size XL</option>
                                 </select>
                              </div>
                              <div class="col-xs-5">
                                 <input class="form-control" type="number" value="0" id="quant-input-2"> 
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end:row -->
                  </div>
                  <!-- end:Food item -->
                  <div class="food-item">
                     <div class="row">
                        <div class="col-xs-12 col-sm-6 col-lg-6">
                           <div class="item-img pull-left">
                              <a class="restaurant-logo pull-left" href="https://codenpixel.com/demo/foodpicky/profile.html#"><img src="./cola.jpg" alt="Food logo"></a>
                           </div>
                           <!-- end:Logo -->
                           <div class="rest-descr">
                              <h6><a href="https://codenpixel.com/demo/foodpicky/profile.html#">Sandwich de Alegranza Grande Menü (28 - 30 cm.)</a></h6>
                           </div>
                           <!-- end:Description -->
                        </div>
                        <!-- end:col -->
                        <div class="col-xs-6 col-sm-2 col-lg-2 text-xs-center"> <span class="price pull-left">$ 2.49</span></div>
                        <div class="col-xs-6 col-sm-4 col-lg-4">
                           <div class="row no-gutter">
                              <div class="col-xs-7">
                                 <select class="form-control b-r-0" id="exampleSelect3">
                                    <option>Size SM</option>
                                    <option>Size LG</option>
                                    <option>Size XL</option>
                                 </select>
                              </div>
                              <div class="col-xs-5">
                                 <input class="form-control" type="number" value="0" id="quant-input-3"> 
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end:row -->
                  </div>
                  <!-- end:Food item -->
                  <div class="food-item">
                     <div class="row">
                        <div class="col-xs-12 col-sm-6 col-lg-6">
                           <div class="item-img pull-left">
                              <a class="restaurant-logo pull-left" href="https://codenpixel.com/demo/foodpicky/profile.html#"><img src="./fanta.jpg" alt="Food logo"></a>
                           </div>
                           <!-- end:Logo -->
                           <div class="rest-descr">
                              <h6><a href="https://codenpixel.com/demo/foodpicky/profile.html#">Sandwich de Alegranza Grande Menü (28 - 30 cm.)</a></h6>
                           </div>
                           <!-- end:Description -->
                        </div>
                        <!-- end:col -->
                        <div class="col-xs-6 col-sm-2 col-lg-2 text-xs-center"> <span class="price pull-left">$ 1.99</span></div>
                        <div class="col-xs-6 col-sm-4 col-lg-4">
                           <div class="row no-gutter">
                              <div class="col-xs-7">
                                 <select class="form-control b-r-0" id="exampleSelect5">
                                    <option>Size SM</option>
                                    <option>Size LG</option>
                                    <option>Size XL</option>
                                 </select>
                              </div>
                              <div class="col-xs-5">
                                 <input class="form-control" type="number" value="0" id="quant-input-4"> 
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end:row -->
                  </div>
                  <!-- end:Food item -->
                  <div class="food-item">
                     <div class="row">
                        <div class="col-xs-12 col-sm-6 col-lg-6">
                           <div class="item-img pull-left">
                              <a class="restaurant-logo pull-left" href="https://codenpixel.com/demo/foodpicky/profile.html#"><img src="./beer.jpg" alt="Food logo"></a>
                           </div>
                           <!-- end:Logo -->
                           <div class="rest-descr">
                              <h6><a href="https://codenpixel.com/demo/foodpicky/profile.html#">Sandwich de Alegranza Grande Menü (28 - 30 cm.)</a></h6>
                           </div>
                           <!-- end:Description -->
                        </div>
                        <!-- end:col -->
                        <div class="col-xs-6 col-sm-2 col-lg-2 text-xs-center"> <span class="price pull-left">$ 3.15</span></div>
                        <div class="col-xs-6 col-sm-4 col-lg-4">
                           <div class="row no-gutter">
                              <div class="col-xs-7">
                                 <select class="form-control b-r-0" id="exampleSelect6">
                                    <option>Size SM</option>
                                    <option>Size LG</option>
                                    <option>Size XL</option>
                                 </select>
                              </div>
                              <div class="col-xs-5">
                                 <input class="form-control" type="number" value="0" id="quant-input-5"> 
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end:row -->
                  </div>
                  <!-- end:Food item -->
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn theme-btn">Add to cart</button>
               </div>
            </div>
         </div>
      </div>

