<?php include 'header.php'; 
?>
<html>
<head>
	<title>Vinayvidya Mandir|ContactUs</title>
</head>
	<body>
		<div align="center"></div>
<table align="center" width="100%" cellspacing="10%" >
			<tr>
			<?php
					$cn=mysql_connect("localhost","root","");
		            $db=mysql_select_db("school_db",$cn);
					$qry1="select * from contactus";
					$rs=mysql_query($qry1);
					while($ar1=mysql_fetch_array($rs,MYSQL_ASSOC))
					{
						echo"<td align='center'><h2><font color='#408080' >$ar1[schoolnm]</font></h2>";
						echo"</td>";
                
						echo"</tr>";
						echo"<tr>";
						echo"<td align='center'>";
					echo"<font size='+1'>$ar1[address] </font>";
							echo"</td>";
							echo"</tr>";
							echo"<tr>";
							echo"<td align='center'>";
							echo"<font size='+1'>Mobile No:$ar1[mobileno] </font>";
							echo"</td>";
							echo"</tr>";
							
							echo"<tr>";
							echo"<td align='center'>";
							echo"<font size='+1'>Landline:$ar1[landline] </font>";
							echo"</td>";
							echo"</tr>";
							
							echo"<tr>";
							echo"<td align='center'>";
							echo"<font size='+1'>Email:$ar1[mailid] </font>";
							echo"</td>";
							echo"</tr>";
					}
                ?>	
		  </tr>
		</table>
	</body>
</html>
<?php include 'footer.php'; 
?>