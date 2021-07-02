<?php

	// Algoritmo de Euclides
	function mdc($a, $b) {

		$x = ($a > $b) ? $a : $b;
		$y = ($a < $b) ? $a : $b;

		while ($y != 0) {
			$r = $x % $y;
			$x = $y;
			$y = $r;
		}

		return $x;
	}

	// ab = mmc(a,b) * mdc(a,b)
	function mmc($a, $b) {
		return ($a * $b) / mdc($a, $b);
	}

	// Numeros do usuario
	$a = $_GET['m'];
	$b = $_GET['n'];

	if ($a < 1 || $b < 1) {
		echo '<p>Valores devem ser >= 1</p>';
		return;
	}

	$mmc = mmc($a, $b);
	$mdc = mdc($a, $b);

	echo '<h1>Resultados</h1>';
	echo "<p>mmc($a, $b) = $mmc</p>";
	echo "<p>mdc($a, $b) = $mdc</p>";
?>
