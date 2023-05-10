<?php
$tno=$_GET['n'];
$con=pg_connect("host=192.168.1.254 dbname=ty9 user=ty9 password=ty9")or die("Could not connect");
$qry="select * from teacher where tno ='$tname'  ";
$rs=pg_query($con,$qry)or die("Unable to execute query");
if($rs!=null)
{
	echo "<table border=1>";
	echo "<tr><td>tno</td><td>tname</td><td>qualification</td><td>salary</td></tr>";
	while($row=pg_fetch_row($rs))
	{
	      echo "<tr>";
	      echo "<td>".$row[0]."</td>";
	      echo "<td>".$row[1]."</td>";
	      echo "<td>".$row[2]."</td>";
	      echo "<td>".$row[3]."</td>";
	      echo "</tr>";
        }
        echo "</table>";
        
}
else
       echo "No records found";
pg_close($con);
?>