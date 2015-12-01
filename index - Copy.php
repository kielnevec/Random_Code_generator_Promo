<!-- FAISAL -->
<html>
<head>
<style>
<title>STEP 1</title>
body {
    width: 800px;
    margin: 40px auto;
    font-family: 'trebuchet MS', 'Lucida sans', Arial;
    font-size: 11px;
    color: #444;
}

table {
    *border-collapse: collapse; /* IE7 and lower */
    border-spacing: 0;
    width: 100%;    
}

.bordered {
    border: solid #ccc 1px;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    -webkit-box-shadow: 0 1px 1px #ccc; 
    -moz-box-shadow: 0 1px 1px #ccc; 
    box-shadow: 0 1px 1px #ccc;         
}

.bordered tr:hover {
    background: #fbf8e9;
    -o-transition: all 0.1s ease-in-out;
    -webkit-transition: all 0.1s ease-in-out;
    -moz-transition: all 0.1s ease-in-out;
    -ms-transition: all 0.1s ease-in-out;
    transition: all 0.1s ease-in-out;     
}    
    
.bordered td, .bordered th {
    border-left: 1px solid #ccc;
    border-top: 1px solid #ccc;
    padding: 10px;
    text-align: left;    
}

.bordered th {
    background-color: #dce9f9;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#ebf3fc), to(#dce9f9));
    background-image: -webkit-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:    -moz-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:     -ms-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:      -o-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:         linear-gradient(top, #ebf3fc, #dce9f9);
    -webkit-box-shadow: 0 1px 0 rgba(255,255,255,.8) inset; 
    -moz-box-shadow:0 1px 0 rgba(255,255,255,.8) inset;  
    box-shadow: 0 1px 0 rgba(255,255,255,.8) inset;        
    border-top: none;
    text-shadow: 0 1px 0 rgba(255,255,255,.5); 
}

.bordered td:first-child, .bordered th:first-child {
    border-left: none;
}

.bordered th:first-child {
    -moz-border-radius: 6px 0 0 0;
    -webkit-border-radius: 6px 0 0 0;
    border-radius: 6px 0 0 0;
}

.bordered th:last-child {
    -moz-border-radius: 0 6px 0 0;
    -webkit-border-radius: 0 6px 0 0;
    border-radius: 0 6px 0 0;
}

.bordered th:only-child{
    -moz-border-radius: 6px 6px 0 0;
    -webkit-border-radius: 6px 6px 0 0;
    border-radius: 6px 6px 0 0;
}

.bordered tr:last-child td:first-child {
    -moz-border-radius: 0 0 0 6px;
    -webkit-border-radius: 0 0 0 6px;
    border-radius: 0 0 0 6px;
}

.bordered tr:last-child td:last-child {
    -moz-border-radius: 0 0 6px 0;
    -webkit-border-radius: 0 0 6px 0;
    border-radius: 0 0 6px 0;
}



/*----------------------*/

.zebra td, .zebra th {
    padding: 10px;
    border-bottom: 1px solid #f2f2f2;    
}

.zebra tbody tr:nth-child(even) {
    background: #f5f5f5;
    -webkit-box-shadow: 0 1px 0 rgba(255,255,255,.8) inset; 
    -moz-box-shadow:0 1px 0 rgba(255,255,255,.8) inset;  
    box-shadow: 0 1px 0 rgba(255,255,255,.8) inset;        
}

.zebra th {
    text-align: left;
    text-shadow: 0 1px 0 rgba(255,255,255,.5); 
    border-bottom: 1px solid #ccc;
    background-color: #eee;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#f5f5f5), to(#eee));
    background-image: -webkit-linear-gradient(top, #f5f5f5, #eee);
    background-image:    -moz-linear-gradient(top, #f5f5f5, #eee);
    background-image:     -ms-linear-gradient(top, #f5f5f5, #eee);
    background-image:      -o-linear-gradient(top, #f5f5f5, #eee); 
    background-image:         linear-gradient(top, #f5f5f5, #eee);
}

.zebra th:first-child {
    -moz-border-radius: 6px 0 0 0;
    -webkit-border-radius: 6px 0 0 0;
    border-radius: 6px 0 0 0;  
}

.zebra th:last-child {
    -moz-border-radius: 0 6px 0 0;
    -webkit-border-radius: 0 6px 0 0;
    border-radius: 0 6px 0 0;
}

.zebra th:only-child{
    -moz-border-radius: 6px 6px 0 0;
    -webkit-border-radius: 6px 6px 0 0;
    border-radius: 6px 6px 0 0;
}

.zebra tfoot td {
    border-bottom: 0;
    border-top: 1px solid #fff;
    background-color: #f1f1f1;  
}

.zebra tfoot td:first-child {
    -moz-border-radius: 0 0 0 6px;
    -webkit-border-radius: 0 0 0 6px;
    border-radius: 0 0 0 6px;
}

.zebra tfoot td:last-child {
    -moz-border-radius: 0 0 6px 0;
    -webkit-border-radius: 0 0 6px 0;
    border-radius: 0 0 6px 0;
}

.zebra tfoot td:only-child{
    -moz-border-radius: 0 0 6px 6px;
    -webkit-border-radius: 0 0 6px 6px
    border-radius: 0 0 6px 6px
}
  
</style>
</head>

<body>
<form method="POST" action="#">
<table class="bordered">
    <thead>

    <tr>
        <th>SKU</th>        
        <th>N50</th>
		<th>N100</th>
		<th>N300</th>
		<th>N600</th>
		<th>N1200</th>
		<th>N1500</th>
		<th>N2000</th>
		<th>CAT</th>

    </tr>
    </thead>
<?php

	$username = "root";
	$password = "";
	$hostname = "localhost"; 

	//connection to the database
	$dbhandle = mysql_connect($hostname, $username, $password)
	 or die("Unable to connect to MySQL");

	//select a database to work with
	$selected = mysql_select_db("mixing_swaga",$dbhandle)
	 or die("Could not select mixing_swaga");
	 
	$query = mysql_query("SELECT
							SKU,
							MAX(IF(prize = '50', qty, NULL)) N50,
							MAX(IF(prize = '100', qty, NULL)) N100,
							MAX(IF(prize = '300', qty, NULL)) N300,
							MAX(IF(prize = '600', qty, NULL)) N600,
							MAX(IF(prize = '1200', qty, NULL)) N1200,
							MAX(IF(prize = '1500', qty, NULL)) N1500,
							MAX(IF(prize = '2000', qty, NULL)) N2000,
							category
						FROM
							setup_card
						GROUP BY
							SKU
						ORDER BY
							id");
	while($row = mysql_fetch_array($query)){
		//echo $row{"id_user"}.". ".$row{"name"}." - ".$row{"Prize_Description"}."<br/>";
		echo 
		"<tr>
        <td>".$row{"SKU"}."</td>        
        <td>".$row{"N50"}."</td>
		<td>".$row{"N100"}."</td>
		<td>".$row{"N300"}."</td>
		<td>".$row{"N600"}."</td>
		<td>".$row{"N1200"}."</td>
		<td>".$row{"N1500"}."</td>
		<td>".$row{"N2000"}."</td>
		<td>".$row{"category"}."</td>
		</tr>";
	}
?>
</table>
<input type ="submit" value="GENERATE ?"/>

</form>
</body>


</html>
<?php
if($_POST){
	
	$N50SK = $_POST['N50SK'];
	$N50GM = $_POST['N50GM'];
	$N100SK = $_POST['N100SK'];
	$N100GM = $_POST['N100GM'];
	$N300SK = $_POST['N300SK'];
	$N300GM = $_POST['N300GM'];
	$N600SK = $_POST['N600SK'];
	$N600GM = $_POST['N600GM'];
	$N1200SK = $_POST['N1200SK'];
	$N1200GM = $_POST['N1200GM'];
	$N1500SK = $_POST['N1500SK'];
	$N1500GM = $_POST['N1500GM'];
	$N2000SK = $_POST['N2000SK'];
	$N2000GM = $_POST['N2000GM'];
	$TRYAGAINSK = $_POST['TRYAGAINSK'];
	$TRYAGAINGM = $_POST['TRYAGAINGM'];
	
	$TOTAL = $N100SK + $N100GM + $N200SK + $N200GM + $N500SK + $N500GM + $TRYAGAINSK + $TRYAGAINGM;
	$myfile = fopen("code.txt", "w") or die("Unable to open file!");
	
	for($i = 0 ; $i < $TOTAL ; $i++){
		
		$random = substr(number_format(time() * mt_rand(),0,'',''),0,10);
		if($i < $N100SK){
			$codestring = "\"".$random."\",\"100\",\"SK\"".PHP_EOL;
			fwrite($myfile, $codestring);
		}
		else if($i < $N100GM + $N100SK){
			$codestring = "\"".$random."\",\"100\",\"GM\"".PHP_EOL;
			fwrite($myfile, $codestring);
		}
		else if($i < $N100GM + $N100SK + $N200SK){
			$codestring = "\"".$random."\",\"200\",\"SK\"".PHP_EOL;
			fwrite($myfile, $codestring);
		}
		else if($i < $N100GM + $N100SK + $N200SK + $N200GM){
			$codestring = "\"".$random."\",\"200\",\"GM\"".PHP_EOL;
			fwrite($myfile, $codestring);
		}
		else if($i < $N100GM + $N100SK + $N200SK + $N200GM + $N500SK){
			$codestring = "\"".$random."\",\"500\",\"SK\"".PHP_EOL;
			fwrite($myfile, $codestring);
		}
		else if($i < $N100GM + $N100SK + $N200SK + $N200GM + $N500SK + $N500GM){
			$codestring = "\"".$random."\",\"500\",\"GM\"".PHP_EOL;
			fwrite($myfile, $codestring);
		}
		else if($i < $N100GM + $N100SK + $N200SK + $N200GM + $N500SK + $N500GM + $TRYAGAINSK){
			$codestring = "\"".$random."\",\"TRYAGAIN\",\"SK\"".PHP_EOL;
			fwrite($myfile, $codestring);
		}
		else{
			$codestring = "\"".$random."\",\"TRYAGAIN\",\"GM\"".PHP_EOL;
			fwrite($myfile, $codestring);
		}		
	}
	fclose($myfile);
	echo "DONE";
}
?>