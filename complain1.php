<?php include 'complain.php';?>

<?php
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$complain=$_POST['complaintype'];	
	if($complain == 'nac')
		$complain = 'Non-Academic';
	else
		$complain = 'Academic';	
	
	$message=$_POST['message'];
	
	$cn=mysql_connect("localhost","root","");
	$db=mysql_select_db("school_db",$cn);

	$qry1="insert into complain (name,email,contact,complain,message)values('$name','$email','$contact','$complain','$message')";
	echo $qry1;
	$rs=mysql_query($qry1);	
?>


	