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
			
					$qry1="select * from complain";
					$rs=mysql_query($qry1);
					echo"<tr>";
								//echo "<th>";
								echo "<td><b>id</b></td>";
								echo "<td><b>Name</b></td>";
								echo "<td><b>Email</b></td>";
								echo "<td><b>Contact</b></td>";
								echo "<td><b>Complain Type</b></td>";
								echo "<td><b>Message</b></td>";
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
								echo $ar1['email'];
							echo "</td>";
							
							echo "<td>";
								echo $ar1['contact'];
							echo "</td>";
				
							echo "<td>";
								echo $ar1['complain'];
							echo "</td>";
							
							echo "<td>";
								echo $ar1['message'];
							echo "</td>";
				
				echo"<td>";
				echo "<a href='delcomplain.php?id=".$ar1['id']."'>Delete</a>";
				
				echo"</td>";
				
				echo"</tr>";
		}
			
			?>
				</table>
			</body>
		</html>

<?php include 'adfooter.php'; 
?>	