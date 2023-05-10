<font color=green size=8>
<?php
  $nm=$_GET["n"];
  $nm1=array("Rohit","Virat","Dhoni","Ashwin","Harbajan");
  if($nm==NULL)
  	echo"Stranger,Please tell me your name!!";
  foreach($nm1 as $n)
  {
  	if(strcmp($n,$nm)==0)
  	{
  		echo"Hello Master $nm!";
  	        exit();
  	}
  }
  echo"$nm,I don't know you!";
?>