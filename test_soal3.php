output 1<br>
<?php
	$star=17;
	for($a=$star;$a>0;$a--){
	for($b=$star;$b>=$a;$b--){
		echo "*";
	}
	echo "<br>";
	}
?>

output 2<br>
<?php
	$star=17;
	for($a=$star;$a>0;$a--){
	for($b=1; $b<=$a; $b++){
		echo " &nbsp";
	}
	for($a1=$star;$a1>=$a;$a1--){
		echo"*";
	}
	echo"<br>";
	}
?>