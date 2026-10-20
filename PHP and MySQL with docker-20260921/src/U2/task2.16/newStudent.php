<?php
require_once("Operations.php");
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
try {
    $oper = new Operations();
    if (isset($_POST['submit'])) {
        // Open the database connection

        $student = new Student();
        $dni = test_input($_POST['dni']);
        $student->setDni($dni);
        $name = test_input($_POST['nome']);
        $student->setName($name);
        $surname = test_input($_POST['apelido']);
        $student->setSurname($surname);
        $age = test_input($_POST['edad']);
        $student->setAge($age);
        $numberOfRows = $oper->addStudent($student);
        if ($numberOfRows == 1) header("Location: index.php");
        else echo "<br>No student has been added";
    }
} catch (PDOException $e) {
    echo "<br><p style='color:red;'>DB Error: " . $e->getMessage() . "</p><br>";
} catch (Exception $e) {
    echo "<br><p style='color:red;'>Error: " . $e->getMessage() . "</p><br>";
} finally {
    //Close connection
    $oper->closeConnection();
}

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

    <form action="" method="POST">
        <label for="name">Name</label><br>
        <input type="text" id="name" name="nome"><br><br>
        <label for="surname">Surname</label><br>
        <input type="text" id="surname" name="apelido"><br><br>
        <label for="dni">DNI</label><br>
        <input type="text" id="dni" name="dni"><br><br>
        <label for="age">Age</label><br>
        <input type="number" id="age" name="edad"><br><br>
        <p>Create new Student:</p>
        <input type="submit" value="Submit" name="submit" id="send">
    </form>
</body>

</html>