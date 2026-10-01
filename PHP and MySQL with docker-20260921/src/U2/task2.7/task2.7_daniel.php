<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $drinks = ["cocacola" => ["text" => "Coca Cola", "precio" => 2.1],  
            "pepsi" => ["text" => "Pepsi Cola","precio" => 2], 
            "fanta" => ["text" => "Fanta Naranja","precio" => 2.5], 
            "trina" => ["text" => "Trina Manzana","precio" => 2.3]
        ];
        $units = 0;
        $unitsErr = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["vUnits"])) {
            $unitsErr = "Units are required";
            }
            else {
                $units = test_input($_POST["vUnits"]);
            }
            if ($unitsErr == "") {
                $opcion = $_POST["opcion"];
                $name = $drinks[$opcion]["text"];
                $price = $drinks[$opcion]["precio"];
                $totalPrice = $price * $units;

                echo ("<p>you have asked for $units bottles of $name. Total price to pay: $totalPrice  </p>");
            }
        }
        
        
        
    ?>
    <h1>Formularios</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <label for="idCompra">Compra</label><br>
      <select name="opcion" id="idCompra">
        <?php 
        
        foreach($drinks as $drink => $value) {
        echo ("<option value='".$drink."'>".$value["text"]." (".$value["precio"]."€)</option>");
        }
        ?>
        </select><br>
        <label for="vUnits">Unidades</label><br>
        <input type="number" id="idUnits" name="vUnits"><br>
        <span class="error"><?php echo $unitsErr; ?></span><br>
        <input type="submit" value="Submit">
        
    </form>
</body>
</html>