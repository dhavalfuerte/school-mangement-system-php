<?php
	$id=$_REQUEST['id'];
	//echo $news;
	$cn=mysql_connect("localhost","root","");
	$db=mysql_select_db("school_db",$cn);
		
		$qry1="delete from campus where id='$id'";
		//echo $qry1;
		$rs=mysql_query($qry1);
		
		header('location:adcampus.php');
?>