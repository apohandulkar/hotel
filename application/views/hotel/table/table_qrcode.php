 <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
				
				<br /><br />
				<?php
				
					$hotel_id=$this->session->userdata('hotel_id');
					$sql = "SELECT * FROM hotel where IsActive=0 and id='$hotel_id'";
					$record = $this->db->query($sql);
					$a=$record->result_array();

					$sqlc = "SELECT * FROM qr_code_info where id='1'";
					$recordc = $this->db->query($sqlc);
					$aa=$recordc->result_array();
				?>
                  <h4 class="card-title"> Table QR For Hotel <?=$a[0]['name']?></h4>
					<p class="card-description">
					Table No : <?=$a[0]['no_of_table']?>
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
$count=$a[0]['no_of_table'];
for($i=1;$i<=$count;$i++)
{
$website_link=$a[0]['website_link'].'/'.$i;
?>
<div class="col-md-4" style="border:1px solid #ccc">
		  <center>
		  <img src="<?=$a[0]['logo']?>" width="80" height="80"><br/>
		  <?=$aa[0]['top_des']?><br/>
		  <img src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=<?php echo $website_link?>&choe=UTF-8" title="" /><br/>
		  Table No:<?=$i?><br/>
		   <?=$aa[0]['bottom_des']?><br/>
		  <img src="<?=$aa[0]['logo']?>" width="40" height="40">		
		  <br />
<br /><br />
		  </center>
</div>
		

<?php
}
				
?>

</div>

<?php

?>
                </div>
              </div>
            </div>
          </div>


        </div>