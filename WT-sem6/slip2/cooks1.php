<?php
	$style=$_COOKIE['sty'];
	$fsize=$_COOKIE['siz'];
	$fcolor=$_COOKIE['clr'];
	$bgcolor=$_COOKIE['bgclr'];
	
	$text="Hello World";
	
	echo "<body bgcolor=$bgcolor>";
	echo "<font size=$fsize color=$fcolor style=$style>$text";
	echo "</font></body>";
?>
