<?php 
		
		$details=$_POST['details'];
		
		//echo $details;
		//change name of file at both place
		$path="image/".basename($_FILES['fimg']['name']);
		$p="../".$path;
		//echo $p;
		move_uploaded_file($_FILES['fimg']['tmp_name'],$p);	
		$con=mysql_connect("localhost","root","");
		$db=mysql_select_db("school_db",$con);
		$query="insert into	campus(details,image) values('$details','$path')";
		$res=mysql_query($query,$con);
		//echo $query;
		header('location:adcampus.php');
	
?>