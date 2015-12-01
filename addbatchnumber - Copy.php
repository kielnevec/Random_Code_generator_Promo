<!-- FAISAL -->
<html>
<head>
<title>STEP 2</title> 
</head>

<body>
<form method="POST" action="#">
number Per file : <input type="text" name="dataperfile" value=""/> </br>

<input type="Submit" value="Submit"/>
</form>
</body>

</html>
<?php
include("config.php");
	 
if($_POST){
	
	
	$maxnumberperfile = $_POST['dataperfile'];
	//////
	$SKQtotaldata = mysql_query("SELECT COUNT(codenumber) AS 'code' FROM codeswaga WHERE batchno IS NULL AND category = 'SK'");
	$SKtotaldata = mysql_fetch_array($SKQtotaldata);
	$SKtotalfile = ceil($SKtotaldata['code'] / $maxnumberperfile);
	/////
	$GMQtotaldata = mysql_query("SELECT COUNT(codenumber) AS 'code' FROM codeswaga WHERE batchno IS NULL AND category = 'GM'");
	$GMtotaldata = mysql_fetch_array($GMQtotaldata);
	$GMtotalfile = ceil($GMtotaldata['code'] / $maxnumberperfile);
	
	
	//echo $totalfile;
	$index = 1;
	$GMlimit = $GMtotalfile;
	$totalfile = $SKtotalfile + $GMtotalfile + 1 ."<br>";
	
	//echo "Total File : ".$SKtotalfile + $GMtotalfile."<br>";
	for($i = 1; $i <= $totalfile; $i++){
		if($i % 2 == 0 AND $GMlimit > 0){			
				$queryGM = mysql_query("SELECT * FROM codeswaga WHERE category = 'GM' AND batchno IS NULL ORDER BY RAND() LIMIT ".$maxnumberperfile);
				$myfile = fopen($i."-GM.txt", "w") or die("Unable to open file!");
				while($row = mysql_fetch_array($queryGM)){
				$codenumber = $row{"codenumber"};
				$updatequerySK = mysql_query("UPDATE codeswaga SET batchno = '$index' WHERE codenumber = '$codenumber'");
				$codestring = "\"".$index."\",\"".$row{"codenumber"}."\",\"".$row{"prize"}."\",\"".$row{"category"}.PHP_EOL;
				fwrite($myfile, $codestring);
				$index++;	
			}
			$GMlimit = $GMtotalfile --;
			//echo $GMlimit."-";
			//echo $i."GM<br>";
		}
		else{
				$querySK = mysql_query("SELECT * FROM codeswaga WHERE category = 'SK' AND batchno IS NULL ORDER BY RAND() LIMIT ".$maxnumberperfile);
				$myfile = fopen($i."-SK.txt", "w") or die("Unable to open file!");
				while($row = mysql_fetch_array($querySK)){
				$codenumber = $row{"codenumber"};
				$updatequerySK = mysql_query("UPDATE codeswaga SET batchno = '$index' WHERE codenumber = '$codenumber'");
				$codestring = "\"".$index."\",\"".$row{"codenumber"}."\",\"".$row{"prize"}."\",\"".$row{"category"}.PHP_EOL;
				fwrite($myfile, $codestring);
				$index++;
				
			}
			//echo $i."SK<br>";
		}
	}
	echo "DONE!!";
	//$queryGM = mysql_query("SELECT * FROM codeswaga WHERE category = 'GM' AND batchno IS NULL ORDER BY RAND()");
	
}
?>
