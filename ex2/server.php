<?php

	$m = $_POST['m'];
	$n = $_POST['n'];

	$arr = [];
	for ($i = 1; $i <= $m; $i++) {
		$arr[$i] = $i * $n;
	}
	
	echo "<h1>$m múltiplos de $n</h1>";
	foreach ($arr as $v) echo "$v ";
?>
