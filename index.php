<!-- FAISAL -->
<html>
<head>
<title>STEP 1</title>
<link rel="stylesheet" href="style.css" type="text/css"/>
</head>

<body>
<form method="POST" action="generate.php">
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
		<th>TRYAGAIN</th>
		<th>CAT</th>

    </tr>
    </thead>
<?php
	include("config.php");
	$query = mysql_query("SELECT
							SKU,
							MAX(IF(prize = '50', qty, NULL)) N50,
							MAX(IF(prize = '100', qty, NULL)) N100,
							MAX(IF(prize = '300', qty, NULL)) N300,
							MAX(IF(prize = '600', qty, NULL)) N600,
							MAX(IF(prize = '1200', qty, NULL)) N1200,
							MAX(IF(prize = '1500', qty, NULL)) N1500,
							MAX(IF(prize = '2000', qty, NULL)) N2000,
							MAX(IF(prize = '2000', qty, NULL)) N2000,
							MAX(IF(Prize = 'TRY AGAIN', qty, NULL)) TRYAGAIN,
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
		<td>".$row{"TRYAGAIN"}."</td>
		<td>".$row{"category"}."</td>
		</tr>";
	}
?>
</table>
<input type ="submit" value="Generate ?"/>

</form>

</body>
</html>