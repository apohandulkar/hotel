 <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
				<form action="<?php echo site_url();?>superadmin/Superadmin/qr_code_takeway" method="post">
				<div class="row">
				<div class="col-md-4">
				<select class="form-control" name="hotel_id">
				<?php
				foreach($hostel_info as $r)
				{
				?>
				<option value="<?=$r['id']?>"><?=$r['name']?></option>
				<?php
				}
				?>
				</select>
				</div>
				<div class="col-md-4">
				<input type="submit" value="submit" name="submit" class="btn btn-primary">
				</div>
				</div>

				</form>
				<br /><br />
				<?php
				if($_REQUEST['submit'])
				{
					$hotel_id=$_REQUEST['hotel_id'];
					$sql = "SELECT * FROM hotel where IsActive=0 and id='$hotel_id'";
					$record = $this->db->query($sql);
					$a=$record->result_array();

					$sqlc = "SELECT * FROM qr_code_info where id='1'";
					$recordc = $this->db->query($sqlc);
					$aa=$recordc->result_array();
				?>
                  <h4 class="card-title"> Reserve Table QR For Hotel <?=$a[0]['name']?></h4>
					<p class="card-description">
					<?=$a[0]['name']?>
                    </p>
          <br />
<input name="b_print" type="button" class="ipt"   onClick="printdiv('div_print');" value=" Print ">
    <script type="text/javascript">
function printdiv(printpage)
{
var headstr = "<html><head><title></title></head><body>";
var footstr = "</body>";
var newstr = document.all.item(printpage).innerHTML;
var oldstr = document.body.innerHTML;
document.body.innerHTML = headstr+newstr+footstr;
window.print();
document.body.innerHTML = oldstr;
return false;
}
    </script>	
	<div class="row" id="div_print">
<?php

$website_link=$a[0]['website_link'].'home/reserveTable/'.$hotel_id;
?>
<div class="col-md-4 col-md-offset-1" style="border:1px solid #ccc">
		  <center>
		  <img src="<?=$a[0]['logo']?>" width="80" height="80"><br/>
		  <?=$aa[0]['top_des']?><br/>
		  <img src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=<?php echo $website_link?>&choe=UTF-8" title="" /><br/>
		   <?=$aa[0]['bottom_des']?><br/>
		  <img src="<?=$aa[0]['logo']?>" width="40" height="40">		
		  <br />
<br /><br />
		  </center>
</div>


</div>

<?php
}
?>
                </div>
              </div>
            </div>
          </div>


        </div>