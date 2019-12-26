<?php
		$thoughts=$_POST['thoughts'];
		$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("school_db",$cn);
		
		$qry1="update thoughts set thoughts='$thoughts'";
		$rs=mysql_query($qry1);
		
		header('location:adhome.php');
?>