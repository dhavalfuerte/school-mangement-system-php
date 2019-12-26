<?php
	$id=$_POST['id'];	
	$img=$_POST['fimg'];
	$name=$_POST['name'];
	$designation=$_POST['designation'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$department=$_POST['department'];
	$experience=$_POST['experience'];
	
	$path="image/".basename($_FILES['fimg']['name']);
	$p="../".$path;
	move_uploaded_file($_FILES['fimg']['tmp_name'],$p);	
	
	if($_FILES['fimg']['name'] == "")
	{
		$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("school_db",$cn);
		$qry1="update desk set name='$name', designation='$designation', experience='$experience' ,deptnm='$department', gender='$gender', age='$age'  where id='$id'";
		//echo $qry1;
		$rs=mysql_query($qry1);
		header('location:addesk.php');
	}
	else
	{
		$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("school_db",$cn);
		$qry1="update desk set name='$name', designation='$designation', experience='$experience' ,deptnm='$department', gender='$gender', age='$age' , img='$path' where id='$id'";
		
		//echo $qry1;
		$rs=mysql_query($qry1);
		header('location:addesk.php');
	}
?>