<?php include 'header.php'; 
?>
<html>
<head>
	<title>Vinayvidya Mandir|Home</title>
</head>
	<body>
		<table  width="80%" align="center" height="100%" >
			<tr>
				<td width="100%" valign="top"  align="center" colspan="3" >
					<img class="myslides" src="image\aaa.jpg" width="100% " border="1" ></img>
				</td>
				
            </tr>
			<tr>
				<td height="60%" width="20%" valign="top" align="center" colspan="3">
                <hr color="#408080">
		
<h1>NEWS</h1>

<h3><marquee direction="up">
	
<?php
		$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("school_db",$cn);
		
		$qry1="select * from news";
		$rs=mysql_query($qry1);
		echo "<div align='center'>";
		
		while($ar1=mysql_fetch_array($rs,MYSQL_ASSOC))
		{
				
				echo $ar1['id'];
				echo"-";
				
				echo $ar1['news'];
				echo"<br>";
		}
		echo"</div>";
?></marquee></h3>
</td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<h1>Event Registration</h1>
				</td>
			</tr>
			<tr>
				
				<form method="post" action="event1.php">
			 <td align="right">
            <label ><b>Name:</b></label><input type="text" placeholder="Student Name" name="name" required><br><br>
			 </td>
			 <td>
             <label><b>FatherName:</b></label><input type="text" placeholder="Father Name" name="fathername" required><br><br>
			</td>
			
			<tr>
			
			<td align="right">
              <label><b>Mobile No.:</b></label><input type="text" placeholder="Mobile Number" name="mono" required><br><br>
			 </td>
			 
			 
			
			<td>
             <label><b>Email:</b></label><input type="text" placeholder="Email" name="email" required><br><br>
			 </td>
			 </tr>
			
			<tr>
			<td align="right">
			<label><b>Gender:</b></label><select name="gender" > 
			<option value="m" placeholder="Email">Male</option>
            <option value="f">Female</option>
			</select>
			<br><br>
			</td>
			 <td>
			<label><b>Standard:</b></label><select name="standard"> 
          	 <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">4</option>
             <option value="5">5</option>
             <option value="6">6</option>
             <option value="7">7</option>
             <option value="8">8</option>
             <option value="9">9</option>
             <option value="10">10</option>
             <option value="11s">11(SCIENCE)</option>
             <option value="12s">12(SCIENCE)</option>
             <option value="11c">11(COMMERESE)</option>
             <option value="12c">12(COMMERESE)</option>
			 </select>
				</td>
			</tr>
			<tr>
			    <td  align="right"><b>address Line:</b></td>
             <td><textarea name="address" rows="5"></textarea><br><br></td>
		</tr>
		<tr>
		<td colspan="2" align="center">
		<a href="event1.php"><button type="submit"><b>Regestration</b></button>
		</td>
		</tr>
		</table>
	</body>
</html>
<?php include 'footer.php'; 
?>
