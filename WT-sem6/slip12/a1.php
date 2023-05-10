<?php
$fp=fopen("contact.dat","r");
echo"<table border=1>";
echo"<tr><th>Sr.no</th><th>Name</th><th>Residence no</th><th>Mob.No</th><th>Address</th></tr>";
while($row=fgets($fp,60))
{
        $data=explode(',',$row);
	echo"<tr>";
	for($n=0;$n<5;$n++)
	{
		echo"<td> $data[$n] </td>";
	}
	echo"</tr>";
}
echo"</table>";
fclose($fp);
?>