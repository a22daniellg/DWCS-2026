<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1></h1>
    <form action="procesa.php" method="post">
      <label for="idCompra">Compra</label>
      <select name="opcion" id="idCompra">
        <?php 
        $drinks = ["cocacola" => ["text" => "Coca Cola", "precio" => 2.1],  
            "pepsi" => ["text" => "Pepsi Cola","precio" => 2], 
            "fanta" => ["text" => "Fanta Naranja","precio" => 2.5], 
            "trina" => ["text" => "Trina Manzana","precio" => 2.3]
        ];
        foreach($drinks as $drink => $value) {
        echo ("<option value='".$drink."'>".$value["text"]." (".$value["precio"]."€)</option>");
        }
        ?>
        </select>
        <label for="vUnits">Unidades</label>
        <input type="number" id="idUnits" name="vUnits" required>
        <input type="button" value="Submit">
    </form>
</body>
</html>