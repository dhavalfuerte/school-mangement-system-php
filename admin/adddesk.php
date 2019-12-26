<html>
<body >
<h1 align="center"> Add Member</h1>
	<form method="post" action="adddesk1.php" enctype="multipart/form-data">
    <table border="2" align="center">
    	<tr>
        	<td align="right">Name : </td>
            <td><input type="text" name="name" required/></td>
        </tr>
		
		<tr>
        	<td align="right">Designation : </td>
            <td><input type="text" name="designation" required/></td>
        </tr>
        
		<tr>
        	<td align="right">Experience : </td>
            <td><input type="text" name="experience" required/></td>
        </tr>
		
		<tr>
        	<td align="right">Department : </td>
            <td><input type="text" name="department" required/></td>
        </tr>
		<tr>
		<td>Gender</td>
		<td>
		<select name="gender" > 
          <option value="m" placeholder="Email">Male</option>
            <option value="f">Female</option>
			</select>
		</td>
	 </tr>
	 <tr>
        	<td align="right">Age : </td>
            <td><input type="text" name="age" required/></td>
        </tr>
        
		<tr>
        	<td align="right">Image : </td>
            <td><input type="file" name="fimg"/></td>
        </tr>
        <tr align="center">
        	<td><input type="submit" name="subadd" value="Add"/></td>
            <td><input type="reset" name="rescan" value="Cancel"/></td>
        </tr>
      </table>
   </form>
   </body>
   </html>
	