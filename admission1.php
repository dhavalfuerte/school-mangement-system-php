<?php
	$surname=$_POST['surname'];
	$name=$_POST['name'];
	$fname=$_POST['fathername'];
	$mono=$_POST['mono'];
	$email=$_POST['email'];
	
	
	$gender=$_POST['gender'];	
	if($gender== 'm')
		$gender = 'Male';
	else
		$gender = 'Female';	
		
	$cat=$_POST['categery'];		
	if($cat== 'st')
		$cat = 'ST';
	elseif($cat=='obc')
		$cat = 'OBC';	
	else
		$cat='OTHER';
	$standard=$_POST['standard'];
		//echo $standard;		
	/*if($standard== '1')
		$standard = '1';
	elseif($standard=='2')
		$standard = '2';	
	elseif($standard=='3')
		$standard = '3';
	elseif($standard=='4')
		$standard = '4';
	elseif($standard=='5')
		$standard = '5';
	elseif($standard=='6')
		$standard = '6';
	elseif($standard=='7')
		$standard = '7';
	elseif($standard=='8')
		$standard= '8';
	elseif($standard=='9')
		$standard = '9';
	elseif($standard=='10')
		$standard = '10';	
	elseif($standard=='11s')
		$standard = '11(SCIENCE)';	
	elseif($standard=='12s')
		$standard = '12(SCIENCE)';
	elseif($standard=='11c')
		$standard = '11(COMMERESE)';	
	elseif($standard=='12c')
		$standard = '12(COMMERESE)';											
	else
		echo "plz select standard";	
		*/
		
	$add=$_POST['address'];
	
	$cn=mysql_connect("localhost","root","");
	$db=mysql_select_db("school_db",$cn);

	$qry1="INSERT INTO admission (`surname`,`name`,`fathername`,`mobno`,`email`,`gender`,`categery`,`standard`,`address`)VALUES('$surname','$name','$fname','$mono','$email','$gender','$cat','$standard','$add')";
	//echo $qry1;
	$rs=mysql_query($qry1);	
	header('location:index.php');	
?>


	