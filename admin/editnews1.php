<?php
				$id=$_POST['id'];
				$news=$_POST['news'];
		
				//echo $id;
				//echo $news;
				
				$cn=mysql_connect("localhost","root","");
				$db=mysql_select_db("school_db",$cn);
				$qry1="update news set news='$news' where id='$id'";
			$rs=mysql_query($qry1);
		header('location:adhome.php')
?>
	