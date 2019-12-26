<?php session_start();
	if(!isset($_SESSION['username']))
	header('location:../login.php');
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css\menu.css"></link>
	</head>
	<body>
		    <table width="100%">
				<tr bgcolor="#408080">
					<td align="center" width="95%">
								<h2>AdminLte</h2>
					</td>
					<td width="5%">
						<a href="logout.php">LOGOUT</a>
					</td>
				</tr>
				<tr>
					<td>
						<div align="center">
			<ul><h3>
				<li><a href="adhome.php">HOME</a></li>
				<li><a href="adgallery.php">GALLERY</a></li>
				<li><a href="addesk.php">DESK</a></li>
				<li><a href="adcampus.php">CAMPUS</a></li>
				<li><a href="adcomplain1.php">COMPLAIN</a></li>
				<li><a href="adcontactus.php">CONTACT</a></li>
                <li><a href="adadmision.php">ADMISSION</a></li>
			    <li><a href="adevent.php">EVENT</a></li>
			</ul></h3>
			</div>
					</td>
				</tr>
				
			</table>	   
	</body>
</html>