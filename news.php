<td height="60%" width="20%" valign="top" align="center">
<h1>NEWS</h1>
<h3><marquee direction="up">
	
<?php
		$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("school_db",$cn);
		
		$qry1="select * from news";
		$rs=mysql_query($qry1);
		while($ar1=mysql_fetch_array($rs,MYSQL_ASSOC))
		{
				echo $ar1['id'];
				echo"-";
				
				echo $ar1['news'];
				echo"<br>";
		}
?></marquee></h3>
</td>
				
