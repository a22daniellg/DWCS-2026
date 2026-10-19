<?php
require_once("Operations.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <?php
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $oper = new Operations();
    $resultado = $oper->getStudent($_GET["studentId"]);
    if (isset($_POST['submit'])) {
        try {
            $student = new Student();
            $student->setId($resultado->getId());
            $dni = test_input($_POST['dni']);
            $student->setDni($dni);
            $name = test_input($_POST['nome']);
            $student->setName($name);
            $surname = test_input($_POST['apelido']);
            $student->setSurname($surname);
            $age = test_input($_POST['edad']);
            $student->setAge($age);
            $numberOfRows = $oper->updateStudent($student);
            if ($numberOfRows == 1) {
                header("Location: index.html");
                exit;
            } else echo "<br>No student has been updated";
        } catch (PDOException $e) {
            echo "<br><p style='color:red;'>DB Error: " . $e->getMessage() . "</p><br>";
        } catch (Exception $e) {
            echo "<br><p style='color:red;'>Error: " . $e->getMessage() . "</p><br>";
        } finally {
            //Close connection
            $oper->closeConnection();
        }
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
        <input type="number" id="age" name="edad" value="<?php echo $resultado->getAge() ?>"><br><br>
        <p>Confirm changes:</p>
        <input type="submit" value="Submit" name="submit" id="send">

    </form>
</body>

</html>