<!--<script>
    window.setInterval('refresh()', 10000); 	
    // Call a function every 10000 milliseconds 
    // (OR 10 seconds).

    // Refresh or reload page.
    function refresh() {
        window .location.reload();
    }
</script>-->
<?php
  $hotel_id=$this->session->userdata('hotel_id');
	  date_default_timezone_set("Asia/Kolkata");
 
	//deliver
	$sqltaked = "SELECT count(*) as count FROM order_tbl where IsActive=0 and hotel_id='$hotel_id' and comming_from='Deliver' and `order_status`='Waiting' and `food_status`!='deliver'";
	//echo $sqltaked;
	$recordtaked = $this->db->query($sqltaked);
	$takeawayd=$recordtaked->result_array();
	$dcount=$takeawayd[0]['count'];
	
	//open
	$sqltakedo = "SELECT count(*) as count FROM order_tbl where IsActive=0 and hotel_id='$hotel_id' and  `order_status`='Accept' and `food_status`!='deliver' and waiting_for_payment='no'";
	//echo $sqltaked;
	$recordtakedo = $this->db->query($sqltakedo);
	$takeawaydo=$recordtakedo->result_array();
	$dcounto=$takeawaydo[0]['count'];
	
	//waiting
	$sqltakedow = "SELECT count(*) as count FROM order_tbl where IsActive=0 and hotel_id='$hotel_id' and 
	`order_status`='Accept' and `food_status`!='deliver' and waiting_for_payment='yes'";
	//echo $sqltaked;
	$recordtakedow = $this->db->query($sqltakedow);
	$takeawaydow=$recordtakedow->result_array();
	$dcountow=$takeawaydow[0]['count'];	
	
	//kitchen
	$sqltakedowk = "SELECT count(*) as count FROM order_tbl where IsActive=0 and hotel_id='$hotel_id' and  `order_status`='Kitchen' and `food_status`!='deliver'";
	//echo $sqltaked;
	$recordtakedowk = $this->db->query($sqltakedowk);
	$takeawaydowk=$recordtakedowk->result_array();
	$dcountowk=$takeawaydowk[0]['count'];

	//ready
	$sqltakedowkr = "SELECT count(*) as count FROM order_tbl where IsActive=0 and hotel_id='$hotel_id' and  `order_status`='Ready' and `food_status`!='deliver'";
	//echo $sqltaked;
	$recordtakedowkr = $this->db->query($sqltakedowkr);
	$takeawaydowkr=$recordtakedowkr->result_array();
	$dcountowkr=$takeawaydowkr[0]['count'];
	
	
	
	//takeaway
	$sqltakedaw = "SELECT count(*) as count FROM order_tbl where IsActive=0 and hotel_id='$hotel_id' and comming_from='Takeaway' and `order_status`='Waiting' and `food_status`!='deliver'";
	//echo $sqltaked;
	$recordtakedaw = $this->db->query($sqltakedaw);
	$takeawaydaw=$recordtakedaw->result_array();
	$dcountaw=$takeawaydaw[0]['count'];	
	
	
	//cash
	$sqltakedawc = "SELECT count(*) as count FROM order_tbl where IsActive=0 and hotel_id='$hotel_id' and comming_from='Takeaway' and `order_status`='WaitingForPayment' and `food_status`!='deliver'";
	//echo $sqltaked;
	$recordtakedawc = $this->db->query($sqltakedawc);
	$takeawaydawc=$recordtakedawc->result_array();
	$dcountawc=$takeawaydawc[0]['count'];

	//cash
	$date=date('Y-m-d');
		$time=date('H:i:s');
	$sqltakedawc = "SELECT count(*) as count FROM reserve_table where IsActive=0 and hotel_id='$hotel_id' and  (`order_status`='Accept' OR `order_status`='Waiting') AND ((`reserve_timing`>'$time' and `date`='$date') OR  `reserve_timing` IS NULL )";
	//echo $sqltaked;
	$recordtakedawc = $this->db->query($sqltakedawc);
	$takeawaydawc=$recordtakedawc->result_array();
	$dcountareserve=$takeawaydawc[0]['count'];

?>