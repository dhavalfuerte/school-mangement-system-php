<?php include 'header.php'; 
?>
<html>
<head>
	<link rel="stylesheet"" type="text/css" href="css/desk.css">
	<title>Vinayvidya Mandir|Campus</title>
</head>
	<body>
		<table border="2"  align="center"  >
			
				<?php
					$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("school_db",$cn);
		
		$qry1="select * from campus";
		$rs=mysql_query($qry1);
		while($ar1=mysql_fetch_array($rs,MYSQL_ASSOC))
		{
				echo"<tr>";
				echo "<td align='center' >";
				echo"<div>";
				//echo $ar1[image];
				echo"<image src='$ar1[image]' border='2'>";
				echo"</div>";
				echo"</td>";
				//echo"<br>";
				echo"<tr>";
				echo"<td align='center'>";
				
				echo "Details:";
				echo $ar1['details'];
				echo"<br>";
				echo"</tr>";
				echo"<tr>";
				echo "<td >";
				echo "</td >";
				echo"</tr>";
				
				
		}
			
			?>
		</table>
	</body>
</html>
<?php include 'footer.php'; 
?>