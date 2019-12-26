<?php include 'header.php'; 
?>
<html>
<head>
	<link rel="stylesheet"" type="text/css" href="css/desk.css">
	<title>Vinayvidya Mandir|Desk</title>
</head>
	<body>
		<table border="2"  align="center"  >
			
				<?php
					$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("school_db",$cn);
		
		$qry1="select * from desk";
		$rs=mysql_query($qry1);
		while($ar1=mysql_fetch_array($rs,MYSQL_ASSOC))
		{
				echo"<tr>";
				echo "<td >";
				echo"<div>";
				//echo $ar1[img];
					echo"<image src='$ar1[img]' border='2'>";
				echo"</div>";
				echo"</td>";
				
				
				echo"<td valign='top'>";
				echo"<div>";
				echo "Name:";
				echo $ar1['name'];
				echo"<br>";
				
				echo "Designation:";
				echo $ar1['designation'];
				echo"<br>";
	
				echo "Experience:";
				echo $ar1['experience'];
				echo"<br>";
				
				echo "Department Name:";
				echo $ar1['deptnm'];
				echo"<br>";
				
				echo "Gender:";
				echo $ar1['gender'];
				echo"<br>";
				
				echo "Age:";
				echo $ar1['age'];
				echo"<br>";
				echo"</td>";
				echo"</tr>";
				echo"</div>";
		}
			
			?>
		</table>
	</body>
</html>
<?php include 'footer.php'; 
?>