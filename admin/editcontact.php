<?php
		$address=$_POST["address"];
		$lanline=$_POST["landline"];
		$mobile=$_POST["mobile"];
		
		$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("school_db",$cn);
		
		$qry1="update contact set address='$address,landline='$lanline',mobile='$mobile'";
		$rs=mysql_query($qry1);
		
		header('location:adhome.php');
?>