<?php
    class Calculator {
        private $num1;
        private $num2;
        public function __construct($num1 = 0, $num2 = 0)
        {
            $this->num1 = $num1;
            $this->num2 = $num2;
        }
        public function setNum1($num1) {
            $this->num1 = $num1;
        }
        public function setNum2($num2) {
            $this->num2 = $num2;
        }
        public function getNum1() {
            return $this->num1;
        }
        public function getNum2() {
            return $this->num2;
        }
        public function multiply() {
            return $this->num1 * $this->num2;
        }
        public function add() {
            return $this->num1 + $this->num2;
        }
        public function __toString()
        {
            return "<br><br> Primeiro numero: $this->num1, Segundo numero: $this->num2";
        }
    }
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
        $firstCalcule = new Calculator();
    ?>
    
</body>
</html>