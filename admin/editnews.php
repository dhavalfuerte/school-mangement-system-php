<?php
	$id=$_REQUEST['id'];
	//echo $id;	
	
	
	$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("school_db",$cn);
		$qry1="select * from news where id='$id'";
		$rs=mysql_query($qry1);
	//echo $qry1;
	
	while($ar1=mysql_fetch_array($rs,MYSQL_ASSOC))
		{
				$id=$ar1['id'];
				$news=$ar1['news'];
				echo"<form method='post' action='editnews1.php'>";
			echo"<input type='text' value='$id' name='id' readonly></input>";
			echo"<textarea name='news'>$news</textarea>";
		
		}
		
		
			echo"<input type='submit'  value'submit>";
		echo"</form>";
?>