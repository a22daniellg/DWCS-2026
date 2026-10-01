<?php declare(strict_types=1); // strict requirement

function check(array $lista) {
    $cont = 0;
    $num = $lista[0];
    foreach($lista as $numero) {
        if ($cont == 3) {
            break;
        }
        elseif ($num == $numero) {
            $cont++;
        }
        else {
            $cont = 1;
            $num = $numero;
        }
    }
    if ($cont == 3) {
        return true;
    }
    else {
        return false;
    }
}


$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Working with arrays</title>
  </head>
  <body>
  <h1>Working with arrays</h1>
  <?php
  	$result = check([1,1,2,2,1]);
    if ($result) {
        echo "Array triple<br>";
    }
    else {
        echo "Array sen triples<br>";
    }
    $result = check([1,1,2,1,2,3]);

    if ($result) {
        echo "Array triple<br>";
    }
    else {
        echo "Array sen triples<br>";
    }
    $result = check([1,1,1,2,1]);

    if ($result) {
        echo "Array triple<br>";
    }
    else {
        echo "Array sen triples<br>";
    }
    $result = check([1,1,2,2,2]);

    if ($result) {
        echo "Array triple<br>";
    }
    else {
        echo "Array sen triples<br>";
    }


    foreach($ceu as $country => $capital) {
            echo ("<p>The capital of $country is $capital</p>");
            }
    ?>
    
  </body>
</html>