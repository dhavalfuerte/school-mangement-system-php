<html>
<body>
	<br>
	<table align="left"  width="100%" height="40%" bgcolor="#00agc1">
	<font color="white">
    <tr>
    	<td align="right">
    		<form method="post" action="complain1.php">        
        	<font color="white">Name is:*</font>
        </td>
        <td>
            <input type="text" name="name" />
     	</td>
    </tr>
    <tr>
    <td></td><td></td>
    </tr>
    <tr>
     	<td align="right">       
            <font color="white">Email is:*</font>
        </td>
        <td>         
            <input type="text" name="email" />
        </td>
    </tr>
     <tr>
    <td></td><td></td>
    </tr>
    <tr>
    	<td align="right" >   
			<font color="white">Contact Number is:*</font>
    	</td>
     	<td>          
            <input type="text" name="contact" />
     	</td>
    </tr>
     <tr>
    <td></td><td></td>
    </tr>
    <tr>
    		<td align="right">            
            	<font color="white">Complain Type is:*</font>
        	</td>
     		<td> 
             <input type="text" name="complain" />
        
           	</td>
     </tr>
      <tr>
    <td></td><td></td>
    </tr>
     <tr>
    		<td align="right">    
           		 <font color="white">Message is:*</font>
            </td>
     		<td>  
            <input type="text" name="message" />
            </td>
    </tr>
     <tr>
    <td></td><td></td>
    </tr>
  
            </form>
<?php
		$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("school_db",$cn);
		
		$qry1="select * from complain";
		$rs=mysql_query($qry1);
?>
</body>
</html>
