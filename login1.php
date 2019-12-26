<?php  session_start();

	$username=$_POST['username'];
	$password=$_POST['password'];
	
	
	$cn=mysql_connect("localhost","root","");
	$db=mysql_select_db("school_db",$cn);
	
	$qry1="select * from admin where username='$username' and password='$password' ";

	$rs=mysql_query($qry1);
	//echo $rs;
	$cnt=mysql_num_rows($rs);
	if($cnt>0)
	{
		//echo "<h3>Successfully login</h3>";
		$_SESSION['username']=$username;
		header('location:admin\adhome.php');
	}
	else
	{
		header('location:admin.php');
	}
	
?>