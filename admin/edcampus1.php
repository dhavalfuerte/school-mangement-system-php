<?php
	$id=$_POST['id'];
	$img=$_POST['image'];	
	$details=$_POST['details'];
	$path="image/".basename($_FILES['fimg']['name']);
	$p="../".$path;
	move_uploaded_file($_FILES['fimg']['tmp_name'],$p);
	//echo $path;	
	//echo $id;
	if($_FILES['fimg']['name'] == "")
		{
		
		$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("school_db",$cn);
		$qry1="update campus set  details='$details' where id='$id'";
		//echo $qry1;
		$rs=mysql_query($qry1);
		header('location:adcampus.php');
		}
		else
		{
		$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("school_db",$cn);
		$qry1="update campus set  details='$details',  image='$path' where id='$id'";
		//echo $qry1;
		$rs=mysql_query($qry1);
		header('location:adcampus.php');
	
		}
?>

		