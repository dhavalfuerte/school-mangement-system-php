<?php include 'header.php'; 
?>
<html>
<head>
	<link rel="stylesheet"" type="text/css" href="css/desk.css">
	<title>Vinayvidya Mandir|Gallery</title>
</head>
	<body>
		<table border="2"  align="center"  >
			<tr>
				<?php
					$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("school_db",$cn);
		
		$qry1="select * from gallery";
		$rs=mysql_query($qry1);
		$cnt=1;
		while($ar1=mysql_fetch_array($rs,MYSQL_ASSOC))
		{
				if($cnt==4)
					{
						echo "</tr><tr>";
						$cnt=1;
					}
				//echo"<tr>";
				echo "<td align='center'>";
				echo"<div align='center'>";
				//echo $ar1[img];
					echo"<image src='$ar1[image]' border='2'>";
					
				echo"</div>";
				//echo"</td>";
				//echo "<td>";
				
				echo "<br>$ar1[details]";
				echo"</td>";
				//echo"</tr>";
				$cnt=$cnt+1;
		}
			echo "</tr></table>";
			?>
			</tr>
		</table>
	</body>
</html>
<?php include 'footer.php'; 
?>