<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $drinks = [
        "cocacola" => ["text" => "Coca Cola", "precio" => 2.1],  
        "pepsi" => ["text" => "Pepsi Cola","precio" => 2], 
        "fanta" => ["text" => "Fanta Naranja","precio" => 2.5], 
        "trina" => ["text" => "Trina Manzana","precio" => 2.3]
    ];
    $units = $_POST["vUnits"];
    $opcion = $_POST["opcion"];
    $name = $drinks[$opcion]["text"];
    $price = $drinks[$opcion]["vUnits"];
    $totalPrice = $price * $units;

        echo ("<p>you have asked for $units bottles of $name. Total price to pay: $totalPrice  </p>")

    ?>
</body>
</html>