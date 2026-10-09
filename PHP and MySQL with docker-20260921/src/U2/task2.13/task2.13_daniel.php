<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    class Alien
    {
        private $name;
        private static $numberOfAliens = 0;

        public function __construct($name)
        {
            $this->name = $name;
            Alien::$numberOfAliens++;
        }
        public static function getNumberOfAliens()
        {
            return Alien::$numberOfAliens;
        }
    }
    ?>
</head>

<body>
    <?php
    $alien1 = new Alien("Jose");
    $alien2 = new Alien("Miguel");
    $alien3 = new Alien("Juan");
    echo Alien::getNumberOfAliens();
    ?>
</body>

</html>