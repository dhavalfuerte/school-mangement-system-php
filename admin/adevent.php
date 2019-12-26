<?php include 'adheader.php'; 
?>
<html>
<head>

</head>
	<body>
		<table border="2"  align="center"  >
			
				<?php
					$cn=mysql_connect("localhost","root","");
					$db=mysql_select_db("school_db",$cn);
			
					$qry1="select * from event";
					$rs=mysql_query($qry1);
					echo"<tr>";
								//echo "<th>";
								echo "<td><b>id</b></td>";
								echo "<td><b>Name</b></td>";
								echo "<td><b>FatherName</b></td>";
								echo "<td><b>Mobile No</b></td>";
								echo "<td><b>Email</b></td>";
								echo "<td><b>Gender</b></td>";
								echo "<td><b>Standerd</b></td>";
								echo "<td><b>Address</b></td>";
						
								echo "<td><b>Delete</b></td>";
							//	echo "</th>";
						echo "</tr>";
					while($ar1=mysql_fetch_array($rs,MYSQL_ASSOC))
					{
						echo "<tr>";
							echo "<td>";
								echo $ar1['id'];
							echo "</td>";
							
						
							
							echo "<td>";
								echo $ar1['name'];
							echo "</td>";
							
							echo "<td>";
								echo $ar1['fathernm'];
							echo "</td>";
							
							echo "<td>";
								echo $ar1['mono'];
							echo "</td>";
							
							echo "<td>";
								echo $ar1['email'];
							echo "</td>";
							
							echo "<td>";
								echo $ar1['gender'];
							echo "</td>";
				
						
							echo "<td>";
								echo $ar1['standard'];
							echo "</td>";
							
							echo "<td>";
								echo $ar1['address'];
							echo "</td>";
				
				echo"<td>";
				echo "<a href='delevent.php?id=".$ar1['id']."'>Delete</a>";
				
				echo"</td>";
				
				echo"</tr>";
		}
			
			?>
				</table>
			</body>
		</html>

<?php include 'adfooter.php'; 
?>	