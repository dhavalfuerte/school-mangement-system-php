<?php 
		
		$name=$_POST['name'];
		$details =$_POST['details']; 	
		//change name of file at both place
		$path="image/".basename($_FILES['fimg']['name']);
		$p="../".$path;
		move_uploaded_file($_FILES['fimg']['tmp_name'],$p);	
		$con=mysql_connect("localhost","root","");
		$db=mysql_select_db("school_db",$con);
		$query="insert into	gallery(id,image,details) values('$id','$path','$details')";
		$res=mysql_query($query,$con);
		header('location:adgallery.php');
	
?>