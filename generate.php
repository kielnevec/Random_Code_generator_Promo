<?php
	include("config.php");	
	$query = mysql_query("SELECT * FROM setup_card");
	
	while($row = mysql_fetch_array($query)){
		for ($i = 0; $i < $row{"qty"}; $i++){
			$random = substr(number_format(time() * mt_rand(),0,'',''),0,10);
			$prize = $row{"prize"};
			$sku = $row{"sku"};
			$category = $row{"category"};
			$query1 = mysql_query("INSERT INTO codeswaga (codenumber, prize, sku, category) VALUES ('$random','$prize','$sku','$category')");
		}
	}
	
	echo "done?";
?>