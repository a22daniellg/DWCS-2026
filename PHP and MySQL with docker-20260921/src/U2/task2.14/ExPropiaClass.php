

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    require("exPropia.php");

    class ExPropiaClass {
        public static function testNUmber($num) {
            if ($num == 0) {
                throw new ExPropia("0 Not allowed");
            }
            return $num;
        }
    }
?>
</head>
<body>
    <?php 
        try {
            echo ExPropiaClass::testNUmber(1)."<br>";
            echo ExPropiaClass::testNUmber(2)."<br>";
            echo ExPropiaClass::testNUmber(0)."<br>";
        } catch (ExPropia $e) {
            echo "Erro: ". $e->getMessage();
        }
        try {
            echo ExPropiaClass::testNUmber(2)."<br>";
        } catch (ExPropia $e) {
            echo "Erro: ". $e->getMessage();
        }
        try {
            echo ExPropiaClass::testNUmber(0)."<br>";
        } catch (ExPropia $e) {
            echo "Erro: ". $e->getMessage();
        }
    ?>
</body>
</html>

