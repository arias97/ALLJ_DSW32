<?php
$variable;
$variable=23;
echo ($variable+3);
echo"<br>";
echo ($variable++);
echo"<br>";
echo ($variable--);
echo"<br>";
echo ($variable+=5);
echo"<br>";
echo ($variable==6);
echo"<br>";
//inicio  //condición  //incremento
for ($x=0; $x<$variable; $x++) 
	{
		echo $x;
		echo"<br>";
	}
	echo "<ul>";
	while ($variable<-25)
	{
		echo"<li>";
		echo  $variable;
		echo"</li>";
		$variable++;
		echo"</ul>";
	}
		
?>
