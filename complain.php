<?php include 'header.php'; ?>
<html>
<head>
<link rel="stylesheet"" type="text/css" href="css/admbt.css">
<title>Vinayvidya Mandir|Complain</title>
</head>
<body>
	<br>
	<table align="left"  width="100%" height="40%" >
	<font color="white">
    <tr>
    	<td align="right">
    		<form method="post" action="complain1.php">        
        	<label><b>Your Name:*</b></label>
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
           <label><b>Email:*</b></label>
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
			<label><b>Contact Number:*</b></label>
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
            	<label><b>Complain Type:*</b></label>
        	</td>
     		<td> 
            <!-- <input type="text" name="complain" />-->
         <select name="complaintype"> 
          <option value="ac" selected="selected">Academic</option>
            <option value="nac">Non-Academic</option>
           	</td>
     </tr>
      <tr>
      
    <td></td><td></td>
    </tr>
     <tr>
    		<td align="right">    
           		<label><b>Message:*</b></label>
            </td>
     		<td>  
            <input type="text" name="message" />
            </td>
    </tr>
     <tr>
    <td></td><td></td>
    </tr>
    <tr>
    		<td colspan="2" align="center">
				 <button type="submit">Submit</button>
            </td>
    </tr>
            </form>
       
</body>
</html>
<?php
include 'footer.php';
?>