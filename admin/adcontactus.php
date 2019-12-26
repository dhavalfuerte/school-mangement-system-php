<?php include 'adheader.php'; 
?>
<html>
	<body>
		<table width="100%" cellspacing="10%">
			<tr>
			<?php
					$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("school_db",$cn);
					$qry1="select * from contactus";
					$rs=mysql_query($qry1);
					while($ar1=mysql_fetch_array($rs,MYSQL_ASSOC))
					{
						echo "<form method='post' action='cusedit.php'>";
								echo "<h4>";
								$a=$ar1['address'];
								echo "<h3>Address</h3><textarea row='4' cols='50' name='address'>$a</textarea>";
								echo "<br>";
								$l=$ar1['landline'];
								echo "<h3>Landline</h3><textarea row='4' cols='50' name='landline'>$l</textarea>";
								echo "<br>";
								$m=$ar1['mobileno'];
								echo "<h3>Mobile Number</h3><textarea row='4' cols='50' name='mobile'>$m</textarea>";
								echo "<br>";
								$mail=$ar1['mailid'];
								echo "<h3>E-mail:</h3><textarea row='4' cols='50' name='mailid'>$mail</textarea>";
								echo "<br>";
								echo "<input type='submit' value='update' align='center'><input type='submit' value='Delete' align='center'>";
								echo "</h4>";
								
					}
                ?>	
		  </tr>
		</table>
	</body>
</html>
<?php include 'adfooter.php'; 
?>