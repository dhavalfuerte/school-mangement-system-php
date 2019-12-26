<?php
	$no=$_POST['no'];
	$news=$_POST['news'];
				
	
	$cn=mysql_connect("localhost","root","");
	$db=mysql_select_db("school_db",$cn);
	$qry1="insert into news (no,news)values('$no','$news')";
	//echo $qry1;
	$rs=mysql_query($qry1);
	header('location:adhome.php');
?>

