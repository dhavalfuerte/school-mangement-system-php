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
		
		$qry1="select * from desk where id=$id";
		$rs=mysql_query($qry1);
		while($ar1=mysql_fetch_array($rs,MYSQL_ASSOC))
		{
		echo "<form method='post' action='eddesk1.php' enctype='multipart/form-data'>"; 
				echo"<tr>";
				echo "<td >";
				echo"<div>";
					echo"<image src='../$ar1[img]' border='2'>";
					echo"<input type='file' name='fimg'/>";
				echo"</div>";
				echo"</td>";
				
				
				echo"<td valign='top'>";
				
				echo "Id:";
				echo "<input type='text' name='id' value=$ar1[id] readonly='true'>";
				echo "<br>";
				
				echo "Name:";
				//echo $ar1['name'];
				echo "<input type='text' name='name' value='$ar1[name]'>";
				echo"<br>";
				
				echo "Designation:";
				echo "<input type='text' name='designation' value='$ar1[designation]'>";
				echo"<br>";
	
				echo "Experience:";
				echo "<input type='text' name='experience' value='$ar1[experience]'>";
				echo"<br>";
				
				echo "Department Name:";
				echo "<input type='text' name='department' value='$ar1[deptnm]'>";
				echo"<br>";
				
				echo "Gender:";
				echo"<select name='gender' >"; 
				echo"<option value='m' placeholder='mail'>Male</option>";
				echo"<option value='f'>Female</option>";
				echo"</select>";
				
				echo"<br>";
				
				echo "Age:";
				echo "<input type='text' name='age' value='$ar1[age]'>";
				echo"<br>";
				echo"</td>";
				echo"<td>";
				//echo"<a href='eddesk.php'>EDIT</a>";
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