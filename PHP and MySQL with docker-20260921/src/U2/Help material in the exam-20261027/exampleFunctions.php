<?php declare(strict_types=1);
//If we assign a default value in the declaration that parameter is optional
//If we write ? before the type it can be null

function example(int $par1, int $par2=2, string $par3="Hi"): int{
  echo "PAR1: ".$par1."<br>";
  echo "PAR2: ".$par2."<br>";
  echo "PAR3: ".$par3."<br>";
  return $par1+$par2;
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <?php
        echo "<title>Example of Functions</title>"
        ?>
    </head>
    <body>
        <h1>Example of Functions</h1>
        <?php
        $resultado = example(3,4,"Hello");
        echo "Result of example(3,4,\"Hello\"): ".$resultado;
        $resultado2 = example(3);
        echo "Result of example(3): ".$resultado;
        $resultado = example(par2:3, par3:"Hello", par1:5);
        echo "Result of example(): ".$resultado;
        ?>
    </body>

</html>
