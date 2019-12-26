<?php include 'index.php';?>
<?php
	$name=$_POST['name'];
	$fname=$_POST['fathername'];
	$mono=$_POST['mono'];
	$email=$_POST['email'];
	
	
	$gender=$_POST['gender'];	
	if($gender== 'm')
		$gender = 'Male';
	else
		$gender = 'Female';	
		
		$standard=$_POST['standard'];
		echo $standard;		
		
	$add=$_POST['address'];
	
	$cn=mysql_connect("localhost","root","");
	$db=mysql_select_db("school_db",$cn);

	$qry1="INSERT INTO event (`name`,`fathernm`,`mono`,`email`,`gender`,`standard`,`address`)VALUES('$name','$fname','$mono','$email','$gender','$standard','$add')";
	//echo $qry1;
	$rs=mysql_query($qry1);	
?>


	