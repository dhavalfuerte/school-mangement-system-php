<?php 
		
		$name=$_POST['name'];
		$designation =$_POST['designation']; 	
		$experience = $_POST['experience'] ;	
		$department = 	$_POST['department']; 
		$gender= 	$_POST['gender'] ;
		$age =	$_POST['age'] ;
		//change name of file at both place
		$path="image/".basename($_FILES['fimg']['name']);
		$p="../".$path;
		move_uploaded_file($_FILES['fimg']['tmp_name'],$p);	
		$con=mysql_connect("localhost","root","");
		$db=mysql_select_db("school_db",$con);
		$query="insert into	desk(name,designation,experience,deptnm,gender,age,img) values('$name','$designation','$experience','$department','$gender','$age','$path')";
		$res=mysql_query($query,$con);
		header('location:addesk.php');
	
?>