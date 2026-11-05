<?php
  class Fruit {
    private $name;
    private $color;
    function __construct($name, $color){
      $this->name = $name;
      $this->color = $color;
    }
    function __toString()
    {
      return "<br><br> Name: $this->name, Color: $this->color";
    }
    public function setName($name){
      $this->name = $name;
    }
    public function setColor($color){
      $this->color = $color;
    }
    public function getName(){
      return $this->name;
    }
    public function getColor(){
      return $this->color;
    }

  }//class
  $apple = new Fruit("apple", "green");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  echo $apple;
  $apple->setColor("red");
  echo "<br><br>";
  echo $apple->getColor();
  ?>
</body>
</html>