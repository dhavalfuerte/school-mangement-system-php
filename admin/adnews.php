<html>
<body>
<td width="20%" valign="top">
<h1 align="center">NEWS</h1>

	
<?php
		$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("school_db",$cn);
		
		$qry1="select * from news";
		$rs=mysql_query($qry1);
				echo"<h1>Add News</h1>";
				echo "<form method='post' action='insertnews.php'>";
				echo "Number:<input type='text' name='no'><br>";
				
				echo "News<textarea row='6' cols='50' name='news'> </textarea>";
				echo "<input type='submit' value='Insert' align='center'>";
				echo "</form>";
		while($ar1=mysql_fetch_array($rs,MYSQL_ASSOC))
		{
				
				$id=$ar1['id'];
				$news=$ar1['news'];
				echo"<table border='2'>";
				echo"<tr>";
				echo"<td>";
						echo $id;
				echo"</td>";
				
					echo"<td>";
						echo $news;
					echo"</td>";

					echo"<td>";
						echo "<a href='editnews.php?id=$ar1[id]'>Edit</a>";
					echo"</td>";
					
					echo"<td>";
						echo "<a href='deletenews.php?id=$ar1[id]'>Delete</a>";
					echo"</td>";

					
					echo"</tr>";
				echo"</table>";
			
				
			}	
		
?></h3>
</td>
</body>
</html>
