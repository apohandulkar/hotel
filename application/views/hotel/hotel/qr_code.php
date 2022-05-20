 <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
				<?php $id1=$maxid[0]['id'];
						$id=$id1+1;
				?>
                  <h4 class="card-title"> Table QR For Hotel <?=$hostel_info[0]['name']?></h4>
					<p class="card-description">
					Table No : <?=$hostel_info[0]['no_of_table']?>
                    </p>
          <br />
<a href="javascript:void(0);" onclick="printPageArea('printableArea')">Print</a>
	
	<div class="row" id="printableArea">
<?php
$count=$hostel_info[0]['no_of_table'];
for($i=1;$i<=$count;$i++)
{
$website_link=$hostel_info[0]['website_link'].'/'.$i;
?>
<div class="col-md-4" style="border:1px solid #ccc">
		  <center>
		  <h2><?=$hostel_info[0]['name']?></h2>
		  <h4>Scan the code to see the menu</h4>
		 <p> <img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=<?php echo $website_link?>&choe=UTF-8" title="" /></p>
		  <h3>Table No:<?=$i?></h3>
		  </center>
		  <br />
		  <br />
		  <br />
</div>

<?php
}
?>
</div>
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
                </div>
              </div>
            </div>
          </div>


        </div>