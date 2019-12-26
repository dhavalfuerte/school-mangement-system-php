<?php include 'adheader.php'; 
?>
<html>
<head>
	<link rel="stylesheet"" type="text/css" href="css/desk.css">
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
				echo $ar1[img];
					echo"<image src='../$ar1[img]' border='2'>";
				echo"</div>";
				echo"</td>";
				
				
				echo"<td valign='top'>";
				
				echo "Id:";
				echo $ar1['id'];
				echo "<br>";
				
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
				echo"<td>";
				echo "<a href='eddesk.php?id=".$ar1['id']."'>EDIT</a>";
				
				echo"</td>";
				
					echo"<td>";
				echo "<a href='deletedesk.php?id=".$ar1['id']."'>DELETE</a>";
				echo"</td>";
				
				
				
				echo"</tr>";
		}
				echo"<td colspan='4' align='center'>";
				echo"<a href='adddesk.php'>ADD</a>";
				echo"</td>";
			?>
				</table>
			</body>
		</html>

<?php include 'adfooter.php'; 
?>	