<html>
<body bgcolor="#f8f9f9">
<hr color="#408080">
	<table width="100%" height="30%" bgcolor="#408080" >
		<tr>
			<td width="20%" align="center">
				<h1><font color="white">Quick Links</font></h1><h2>
				<a href="index.php">HOME</a></li><br>
				<a href="gallery.php">GALLERY</a></li><br>
				<a href="desk.php">DESK</a></li><br>
				<a href="campus.php">CAMPUS</a></li><br>
				<a href="complain.php">COMPLAIN</a></li><br>
				<a href="contactus.php">CONTACT</a></li><br>
				</h2>
			</td>
			<td width="25%" align="center" valign="top" align="center" >
				<h1><font color="white">Vinayvidya Mandir</font></h1>
               <?php
					$cn=mysql_connect("localhost","root","");
					$db=mysql_select_db("school_db",$cn);
		
					$qry1="select * from thoughts ";
					$rs=mysql_query($qry1);
					while($ar1=mysql_fetch_array($rs,MYSQL_ASSOC))
					{			
							echo "<h4><font color='white'>";	
							echo $ar1['thoughts'];
							echo"<br>";
							echo "</h4></font>";
							
					}
				?>
			</td>
			<td width="20%" align="center" align="center" valign="top" align="center" >
				<h1><font color="white">contactus</font></h1>
				 <?php
					$cn=mysql_connect("localhost","root","");
					$db=mysql_select_db("school_db",$cn);
		
					$qry1="select * from contactus ";
					$rs=mysql_query($qry1);
					while($ar1=mysql_fetch_array($rs,MYSQL_ASSOC))
					{			
						echo"<h2><font color='white' >$ar1[schoolnm]</font></h2>";
					
							echo "<h4><font color='white'>";	
							$a=$ar1['address'];
							echo $a;
							//echo"<br>";
							
							$l=$ar1['landline'];
							echo $l;
							//echo"<br>";
							
							$m=$ar1['mobile'];
							echo $m;
							echo"<br>";
							
							echo "</font></h4>";
							
					}
				?>
			</td>
		</tr>
	</table>
</body>
</html>