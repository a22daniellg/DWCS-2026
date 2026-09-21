<?php declare(strict_types=1); // strict requirement

function power(int $a, int $b=2) {
  $res = $a;
  if ($b < 0) {
  	throw new Exception("Only positive exp are possible");
  }
  for ($i = 1; $i < $b; $i++) {
  	$res = $res * $a;
  };
  return $res;
}


?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Calcular potencia</title>
  </head>
  <body>
  <h1>Calcular potencias</h1>
  <?php
  	define("BASE", 5);
    define("EXP", 3);
    try{
		echo power(BASE,EXP);
    }
    catch(Exception $erro) {
    	echo "<p>ERRO: ".$erro->getMessage()."</p>";
    }
    ?>
  </body>
</html>
