<html>
<body>
	<table width="100%" height="30%" >
		<tr>
			
			<td width="60%" align="center" valign="top" align="center" >
				<h1 >Vinayvidya Mandir</h1>
				
				<?php 
					$cn=mysql_connect("localhost","root","");
					$db=mysql_select_db("school_db",$cn);
					$qry1="select * from thoughts";
					//echo $qry1;
					$rs=mysql_query($qry1);
					//echo $rs;
					while($ar1=mysql_fetch_assoc($rs))
					{
						$p=$ar1['thoughts'];
						echo "<form method='post' action='editthoughts.php'>";
						echo "<h3>Thoughts:</h3><textarea row='4' cols='50' name='thoughts'>$p</textarea>";
						echo "<br>";
						echo "<input type='submit' value='submit' aglign='center'>";
						echo "</form>";
					}
				?>
				
				
			</td>
			
		</tr>
	</table>
</body>
</html>