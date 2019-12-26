<?php include 'header.php'; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet"" type="text/css" href="css/admbt.css">
	<title>Vinayvidya Mandir|Addmission Inquiry</title>
	
</head>


	
	<body align="center"> 
		
		<table width="100%" align="center" >
		<tr>
		<td align="center" colspan="4">
			<h1>Addmission Inquiry</h1>                                                        
		</td>
		</tr>
			
				<tr>
				<form method="post" action="admission1.php">
				<td  align="right" >
				<label ><b>SurName:</b></label><input type="text" placeholder="enter SurName" name="surname" required><br><br>
				</td>
				<td>
				<label><b>Name:</b></label> <input type="text" placeholder="Student Name" name="name" required><br><br>
				</td>
				</tr>
			 
			 <tr>
			 <td align="right">
             <label><b>FatherName:</b></label><input type="text" placeholder="Father Name" name="fathername" required><br><br>
			</td>
			
			<td >
              <label><b>Mobile No.:</b></label><input type="text" placeholder="Mobile Number" name="mono" required><br><br>
			 </td>
			 </tr>
			 
			 <tr>
			<td align="right"> 
             <label><b>Email:</b></label><input type="text" placeholder="Email" name="email" required><br><br>
			 </td>
			
			<td>
			<label><b>Gender:</b></label><select name="gender" required> 
          <option value="-1" >Select</option>
		  <option value="m" placeholder="Email">Male</option>
            <option value="f">Female</option>
			</select>
			<br><br>
        </td>
			</tr> 
			
			
			<tr>
				
				<td align="right">
        <label><b>category:</b></label><select name="category" required> 
            <option value="0" selected>Select</option>
		  <option value="st" >ST</option>
            <option value="obc" >OBC</option>
             <option value="other">OTHER</option>
			 </select>
			 <br><br>
        </td>
		<td>
        <label><b>Standard:</b></label><select name="standard" required> 
          	 <option value="-1" >Select</option>
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
			 <br><br>
    	</td>
		</tr>	
		<tr>
			    <td  align="right" colspan="1"><b>address Line:</b></td>
             <td colspan="2"><textarea name="address" rows="5" required></textarea><br><br></td>
		</tr>
		<tr>
		<td  align="center" colspan="2" >
		<input type="submit" value="registration"></input>
		</td>
		</tr>	 
			 
			</table>
		
		</form>
		
	</body>
</html>
<?php include 'footer.php'; 
?>