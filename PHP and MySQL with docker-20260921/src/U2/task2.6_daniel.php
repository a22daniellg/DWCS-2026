<?php declare(strict_types=1); // strict requirement

$drinks = ["cocacola" => ["text" => "Coca Cola", "precio" => 2.1],  
  "pepsi" => ["text" => "Pepsi Cola","precio" => 2], 
  "fanta" => ["text" => "Fanta Naranja","precio" => 2.5], 
  "trina" => ["text" => "Trina Manzana","precio" => 2.3]
];


?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>option select dynamic</title>
  </head>
  <body>
  <h1>Option select dynamic</h1>
  <?php
  	
    ?>
    <form action="">
      <label for="idCompra">Compra</label>
      <select name="opcion" id="idCompra">
        <?php 
          foreach($drinks as $drink => $value) {
            echo ("<option value='".$drink."'>".$value["text"]." (".$value["precio"]."€)</option>");
            }
            ?>
      </select>
    </form>
  </body>
</html>