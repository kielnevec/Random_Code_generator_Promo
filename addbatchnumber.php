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
	$querycategory = mysql_query("SELECT category FROM codeswaga GROUP BY category");
	$total = 0;
	$totalpercat = array();
	$categoryx = array();
	
	while($row = mysql_fetch_array($querycategory)){
		$category = $row{"category"};
		$querytotaldata = mysql_query("SELECT COUNT(codenumber) AS 'code', category as Categoryx FROM codeswaga WHERE category = '$category'");
		while($xrow = mysql_fetch_array($querytotaldata)){
			//echo $category." - ".$xrow{"code"}." = ".ceil(($xrow{"code"}) / $maxnumberperfile)."</br>";
			$totalpercat []= ceil(($xrow{"code"}) / $maxnumberperfile); 
			$categoryx [] = $xrow{"Categoryx"};
			$total = $total + ceil(($xrow{"code"}) / $maxnumberperfile);			
		}
	}
	for($i=0; $i<count($totalpercat); $i++){
		echo $totalpercat[$i]."-".$categoryx[$i]."<br/>";
	}
	echo "Total = ".$total."</br>";
	
	//category for looping
	$indexcat = array("A" => 0, "B" => 0, "C" => 0, "D" => 0);
	
	//how much round we have ?
	$total = $total + 1;
	
	//set up category when do looping
	$flag = 0;
	
	//running no for batch no
	$index = 1;
	//echo $totalpercat[0];
	//echo $categoryx[1];
	
	
	for($i = 1; $i<$total; $i++){
		echo $flag."----";
		if($flag == 0){
			if($indexcat['A'] < $totalpercat[0]){
				echo "this is ".$categoryx [0]." = ".$i;
				
				$query = mysql_query("SELECT * FROM codeswaga WHERE category = '$categoryx[0]' AND batchno IS NULL ORDER BY RAND() LIMIT ".$maxnumberperfile);
				$indexcat['A']++;
				$myfile = fopen($indexcat['A']."-".$categoryx[0].".txt", "w") or die("Unable to open file!");
				
				echo ">>>".$indexcat['A']."</br>";
					while($row = mysql_fetch_array($query)){
						$codenumber = $row{"codenumber"};
						$prizeprint = $row{"prize"};
						
						if(is_numeric($prizeprint) == TRUE){
							$prizeprint = "#N".number_format($prizeprint)."#";
						}
						
						$updatequerySK = mysql_query("UPDATE codeswaga SET batchno = '$index' WHERE codenumber = '$codenumber'");	
						$codestring = "\"".$index."\",\"".$row{"codenumber"}."\",\"".$prizeprint."\" ".PHP_EOL;
						fwrite($myfile, $codestring);
						$index++;
					}				
				$flag++;
			}
			else{
				$flag++;
			}
		}
		else if($flag == 1){
			if($indexcat['B'] < $totalpercat[1]){
				echo "this is ".$categoryx [1]." = ".$i;
				$query = mysql_query("SELECT * FROM codeswaga WHERE category = '$categoryx[1]' AND batchno IS NULL ORDER BY RAND() LIMIT ".$maxnumberperfile);
				$indexcat['B']++;
				$myfile = fopen($indexcat['B']."-".$categoryx[1].".txt", "w") or die("Unable to open file!");
				
				echo ">>>".$indexcat['B']."</br>";
					while($row = mysql_fetch_array($query)){
						$codenumber = $row{"codenumber"};
						$prizeprint = $row{"prize"};
						
						if(is_numeric($prizeprint) == TRUE){
							$prizeprint = "#N".number_format($prizeprint)."#";
						}
						
						$updatequerySK = mysql_query("UPDATE codeswaga SET batchno = '$index' WHERE codenumber = '$codenumber'");	
						$codestring = "\"".$index."\",\"".$row{"codenumber"}."\",\"".$prizeprint."\" ".PHP_EOL;
						fwrite($myfile, $codestring);
						$index++;
					}
				$flag++;
			}
			else{
				$flag++;
				$i--;
			}
		}
		else if($flag == 2){
			if($indexcat['C'] < $totalpercat[2]){
				echo "this is ".$categoryx [2]." = ".$i;
				$query = mysql_query("SELECT * FROM codeswaga WHERE category = '$categoryx[2]' AND batchno IS NULL ORDER BY RAND() LIMIT ".$maxnumberperfile);
				$indexcat['C']++;
				$myfile = fopen($indexcat['C']."-".$categoryx[2].".txt", "w") or die("Unable to open file!");
				
				echo ">>>".$indexcat['C']."</br>";
					while($row = mysql_fetch_array($query)){
						$codenumber = $row{"codenumber"};
						$prizeprint = $row{"prize"};
						
						if(is_numeric($prizeprint) == TRUE){
							$prizeprint = "#N".number_format($prizeprint)."#";
						}
						
						$updatequerySK = mysql_query("UPDATE codeswaga SET batchno = '$index' WHERE codenumber = '$codenumber'");	
						$codestring = "\"".$index."\",\"".$row{"codenumber"}."\",\"".$prizeprint."\" ".PHP_EOL;
						fwrite($myfile, $codestring);
						$index++;
					}
				$flag++;
			}
			else{
				$flag++;
				$i--;
			}
		}
		else if($flag == 3){
			if($indexcat['D'] < $totalpercat[3]){
				echo "this is ".$categoryx [3]." = ".$i;
				$query = mysql_query("SELECT * FROM codeswaga WHERE category = '$categoryx[3]' AND batchno IS NULL ORDER BY RAND() LIMIT ".$maxnumberperfile);
				$indexcat['D']++;
				$myfile = fopen($indexcat['D']."-".$categoryx[3].".txt", "w") or die("Unable to open file!");
				
				echo ">>>".$indexcat['D']."</br>";
					while($row = mysql_fetch_array($query)){
						$codenumber = $row{"codenumber"};
						$prizeprint = $row{"prize"};
						
						if(is_numeric($prizeprint) == TRUE){
							$prizeprint = "#N".number_format($prizeprint)."#";
						}
						
						$updatequerySK = mysql_query("UPDATE codeswaga SET batchno = '$index' WHERE codenumber = '$codenumber'");	
						$codestring = "\"".$index."\",\"".$row{"codenumber"}."\",\"".$prizeprint."\" ".PHP_EOL;
						fwrite($myfile, $codestring);
						$index++;
					}
				$flag++;
			}
			else{
				$flag++;
				$i--;
			}
		}
		else{
			if($indexcat['B'] == $totalpercat[1] && $indexcat['A'] == $totalpercat[0] && $indexcat['C'] == $totalpercat[2] && $indexcat['D'] == $totalpercat[3]){
				//logic when done...
			}
			else{
				$flag = 0;
				$i--;
			}
			
		}		
	}
	echo "DONE!!";
	//$queryGM = mysql_query("SELECT * FROM codeswaga WHERE category = 'GM' AND batchno IS NULL ORDER BY RAND()");
	
}
?>
