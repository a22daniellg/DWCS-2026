<?php
require_once("Operations.php");
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
    $oper = new Operations();
    $resultado = $oper->getStudent($_GET["studentId"]);
    if (isset($_POST['submit'])) {
        // Open the database connection
        $student = new Student();
        $student->setId($resultado->getId());
        $student->setDni($_POST['dni']);
        $student->setName($_POST['nome']);
        $student->setSurname($_POST['apelido']);
        $student->setAge($_POST['edad']);
        $numberOfRows = $oper->updateStudent($student);
        if ($numberOfRows == 1) {
            echo "<br>Guest modified to the database";
        } else echo "<br>No guest has been updated";
    }
    ?>
    <form action="" method="POST">

        <label for="name">Name</label><br>
        <input type="text" id="name" name="nome" value="<?php echo $resultado->getName() ?>"><br><br>
        <label for="surname">Surname</label><br>
        <input type="text" id="surname" name="apelido" value="<?php echo $resultado->getSurname() ?>"><br><br>
        <label for="dni">DNI</label><br>
        <input type="text" id="dni" name="dni" value="<?php echo $resultado->getDni() ?>"><br><br>
        <label for="age">Age</label><br>
        <input type="text" id="age" name="edad" value="<?php echo $resultado->getAge() ?>"><br><br>
        <p>Confirm changes:</p>
        <input type="submit" value="Submit" name="submit">

    </form>
</body>

</html>