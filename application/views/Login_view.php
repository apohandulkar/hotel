<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo site_url();?>assets/examples-bootstrap/bootstrap.min.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo site_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo site_url();?>assets/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo site_url();?>assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo site_url();?>assets/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>

      #background{  background:url(<?php echo site_url();?>assets/img/bg.jpg) no-repeat ;
        //background:url(assets/img/home/m19.JPEG);
                    background-repeat: no-repeat;
                    //padding:35px;
                    //background-origin: content;
                    width: 100%;
                    height: 100%;
                 }   
.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #fff;
    background-color: #1f1e1e;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
    </style>


</head>
<body id="background" >
    <!-- NAVBAR
    ================================================== -->
   <!--  <div class="container">

    </div> -->
<?php
if($_POST['login'])
{
		$password = $this->input->post('password');
		$fin_year = $this->input->post('fin_year');
		$user = $this->input->post('user');
		$company_name = $this->input->post('sub_cat_3');
		?>

    <div class="container " style="margin-top:30px;"> 
       <div class="col-md-5 col-md-offset-3" style="">
        <h1 class="text-center" style="font-family:Times New Roman, Times, serif;color:#fff;text-shadow: 1px 1px #FF0000;">Login</h1>

                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Select Financial Year</h3>
                    </div>
					
                    <div class="panel-body" style="background-color:#1e1e1e">
                   <form role="form"  method="post" action="<?php echo site_url();?>Login/validate_user">
						
                            <fieldset>
						
							<input type="hidden" name='sub_cat_3' value="<?php echo $company_name?>">
                              <input name="user" type="hidden" value="<?php echo $user?>">
                              <input value="<?php echo $password?>" name="password" type="hidden">
                                <div class="form-group">
								<table id="example1" class="table responsive" style="background: #fff;">
								
                                  <?php
									if (date('m') <= 3) {//Upto June 2014-2015
										$financial_year = (date('Y')-1) . '-' . date('Y');
									} else {//After June 2015-2016
										$financial_year = date('Y') . '-' . (date('Y') + 1);
									}
									?>
									<tr>
									<td>
									 <center>
								 <input type="radio" name="fin_year" value="<?php echo $financial_year;?>"> <?php echo $financial_year;?>
								</center>
								</td>
								</tr>
									<?php
								 $company_no=$company_name;
								$sql = "SELECT fin_year FROM  inventry where company_no='$company_no' and fin_year!='$financial_year' group by fin_year";
							//	echo $sql;
								$record = $this->db->query($sql);
								$rr=$record->result_array();
								foreach($rr as $r)
								{
									?>
									<tr>
									<td>
									 <center>
									 <input type="radio" name="fin_year" value="<?php echo $r['fin_year'];?>"> <?php echo $r['fin_year'];?>
									</center>
									</td>
									</tr>
									
									<?php
								}
								?>
								</table>
                                </div>
                                <input type="submit" name="login1" class="btn btn-lg btn-primary btn-block" value="Submit">
                            </fieldset>
						
                        </form>
                    </div>
                </div>
								
            </div>
    </div>
	<?php
}
else
{
?>

    <div class="container " style="margin-top:30px;"> 
       <div class="col-md-5 col-md-offset-3" style="">
        <h1 class="text-center" style="font-family:Times New Roman, Times, serif;color:#fff;text-shadow: 1px 1px #FF0000;">Login</h1>
        
                <?php if($this->session->flashdata('login_failure')!=''){?>
                    <div class="alert alert-warning">
                                <a class="close" data-dismiss="alert" href="components-popups.html#" aria-hidden="true">×</a>
                                <strong>Warning!</strong>   Your Username Or Password is Incorrect.
                    </div>
                <?php  }?>
                <?php if($this->session->flashdata('success_message')){?>
                    <div class="alert alert-warning">
                                <a class="close" data-dismiss="alert" href="components-popups.html#" aria-hidden="true">×</a>
                                <strong>Success!</strong> <?php echo $this->session->flashdata('success_message');?>  
                    </div>
                <?php  }?>
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
					
                    <div class="panel-body" style="background-color:#1e1e1e">
                     <!--   <form role="form"  method="post" action="<?php echo site_url();?>Login/validate_user">-->
                        <form role="form"  method="post" action="">
						
                            <fieldset>
							<div class="form-group">
                                 <input class="form-control" placeholder="Branch NO" name="gst" id="gst" type="text" >
                            </div>
						<div class="form-group">
							<select name='sub_cat_3' class="form-control">
								<option value='<?php echo set_value('sub_cat_3')?set_value('sub_cat_3'):''?>'><?php echo set_value('sub_cat_3')?set_value('sub_cat_3'):''?></option>			
							</select>	
						</div>
								<div class="form-group">
                                    <input id="sub" class="form-control" placeholder="Username" name="user" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password">
                                </div>
<!--
                                <div class="form-group">
                                   <select name="fin_year" required class="form-control">
								   <option value="">Select fin year</option>
								   <option value="2017-2018">2017-2018</option>
								   </select>
                                </div>
   -->                            
                                  
                               
                                <input type="submit" name="login" class="btn btn-lg btn-primary btn-block" value="Login">
                            </fieldset>
							<br />
							

                        </form>
                    </div>
                </div>
								
            </div>
    </div>


<?php
}
?>
        <!-- FOOTER -->
        <footer>
            <!--<p class="pull-right"><a href="#">Back to top</a></p>
            <p>&copy; Jssor Slider 2009 - 2014. &middot; <a href="#">Privacy</a> &middot; </p>
        -->
        </footer>

    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo site_url();?>assets/js1/jquery-1.9.1.min.js"></script>
    <script src="<?php echo site_url();?>assets/examples-bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo site_url();?>assets/examples-bootstrap/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo site_url();?>assets/examples-bootstrap/ie10-viewport-bug-workaround.js"></script>

    
    <!-- jQuery -->
    <script src="<?php echo site_url();?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo site_url();?>assets/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo site_url();?>assets/js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo site_url();?>assets/js/sb-admin-2.js"></script>

</body>
</html>

<script type="text/javascript">

    $(document).ready(function() {
        $('#gst').blur(function() {
            var stateID = $(this).val();
            if(stateID) {
                $.ajax({
                    url: 'http://localhost/product_billing/Login/myformAjax1/'+stateID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('select[name="sub_cat_3"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="sub_cat_3"]').append('<option value="'+ value.id +'">'+ value.company_name +'</option>');
                        });
                    }
                });
            }else{
                $('select[name="sub_cat_3"]').empty();
            }
        });
    });
</script>