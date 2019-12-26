<?php include 'adheader.php'; 
$id=$_REQUEST['id'];
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
		
		$qry1="select * from campus where id=$id";
		$rs=mysql_query($qry1);
		while($ar1=mysql_fetch_array($rs,MYSQL_ASSOC))
		{
		echo "<form method='post' action='edcampus1.php' enctype='multipart/form-data'>"; 
				echo"<tr>";
				echo "<td >";
				echo"<div>";
				echo $ar1[image];
					echo"<image src='../$ar1[image]' border='2'>";
					echo"<input type='file' name='fimg' />";
				echo"</div>";
				echo"</td>";
				
				
				echo"<td valign='top'>";
				
				echo "Id:";
				echo "<input type='text' name='id' value=$ar1[id] readonly='true'>";
				echo "<br>";
				
				echo "Details:";
				//echo $ar1['name'];
				echo "<input type='text' name='details' value='$ar1[details]'>";
				echo"<br>";
				
				
				echo"<input type='submit' value='Submit' >";
				echo"</form>";
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