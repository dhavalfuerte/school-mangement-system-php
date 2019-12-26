<?
		$address=$_POST["address"];
		$lanline=$_POST["landline"];
		$mobile=$_POST["mobile"];
		$mailid=$_POST["mailid"];
		$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("school_db",$cn);
		
		$qry1="update contactus set address='$address',landline='$lanline',mobileno='$mobile',mailid='$mailid'";
		$rs=mysql_query($qry1);
		//echo $qry1;
		header('location:adhome.php');
?>