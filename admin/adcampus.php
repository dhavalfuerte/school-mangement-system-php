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
		
		$qry1="select * from campus";
		$rs=mysql_query($qry1);
		while($ar1=mysql_fetch_array($rs,MYSQL_ASSOC))
		{
				echo"<tr>";
				echo "<td >";
				echo"<div>";
				echo $ar1['image'];
				echo"<image src='../$ar1[image]' border='2'>";
				echo"</div>";
				echo"</td>";
				
				
				echo"<td valign='top'>";
				
				echo "Id:";
				echo $ar1['id'];
				echo "<br>";
				
				echo "Details:";
				echo $ar1['details'];
				echo"<br>";
				
				echo"<td>";
				echo "<a href='edcampus.php?id=".$ar1['id']."'>EDIT</a>";
				
				echo"</td>";
				
					echo"<td>";
				echo "<a href='deletecampus.php?id=".$ar1['id']."'>DELETE</a>";
				echo"</td>";
				
			}
			echo "<tr>";
				echo"<td colspan='4' align='center'>";
				echo"<a href='addcampus.php'>ADD</a>";
				echo"</td>";
			echo "</tr>";	
			?>
				</table>
			</body>
		</html>

<?php include 'adfooter.php'; 
?>	