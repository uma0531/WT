<?php
	$style=$_GET['style'];
	$size=$_GET['size'];
	$color=$_GET['color'];
	$bg=$_GET['bg'];

	echo "<br><br>Font Style : $style";
	echo "<br><br>Font Size : $size";
	echo "<br><br>Font Color : $color";
	echo "<br><br>Backgroud Color : $bg";
	
	setcookie("sty",$style);
	setcookie("siz",$size);
	setcookie("clr",$color);
	setcookie("bgclr",$bg);	
?>
<br><br><a href="cooks1.php">show</a>
