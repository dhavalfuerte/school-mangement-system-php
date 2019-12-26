<?php include 'adheader.php'; 
?>
<table height="100%" width="100%" border="2" >
    	<tr height="5%">
        	<td><a href="addgallery.php">Add Product</a></td>
        </tr>
        <tr height="95%">
        	<td>
        	<?php $cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("school_db",$cn);
		
		$qry1="select * from gallery";
		$rs=mysql_query($qry1);
		echo "<table border='2' width='100%'><tr>";
				$cnt=1;
		while($ar1=mysql_fetch_array($rs,MYSQL_ASSOC))
				{
					if($cnt==4)
					{
						echo "</tr><tr>";
						$cnt=1;
					}
					echo "<td><table><tr><td colspan='2'><img src='../$ar1[image]' height='100' width='150'></img></td></tr>";
					echo "<tr><td align='right'>id : </td>";
					echo "<td>".$ar1['id']."</td></tr>";
					echo "<tr><td align='right'> details: </td>";
					echo "<td>".$ar1['details']."</td></tr>";
					echo"<td>";
					echo "<a href='edgallery.php?id=".$ar1['id']."'>EDIT</a>";	
					echo"</td>";
					echo"<td>";
					echo "<a href='deletegallery.php?id=".$ar1['id']."'>DELETE</a>";
					echo"</td>";

					$cnt=$cnt+1;
					echo "</tr></table>";
					}

            ?></td>
        </tr>
    </table>
<?php include 'adfooter.php'; 
?>