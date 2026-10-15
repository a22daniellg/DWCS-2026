<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $student = new Student();
        $student->setDni($_POST['dni']);
        $student->setName($_POST['nome']);
        $student->setSurname($_POST['apelido']);
        $student->setAge($_POST['edad']);
        $numberOfRows = $oper->addStudent($student);
        if ($numberOfRows == 1) echo "<br>New guest added to the database";
        else echo "<br>No guest has been added";
    }

    ?>
    <form method="POST">
        <label for="name">Name</label><br>
        <input type="text" id="name" name="nome"><br><br>
        <label for="surname">Surname</label><br>
        <input type="text" id="surname" name="apelido"><br><br>
        <label for="dni">DNI</label><br>
        <input type="text" id="dni" name="dni"><br><br>
        <label for="age">Age</label><br>
        <input type="text" id="age" name="edad"><br><br>
        <p>Create new Student:</p>
        <input type="submit" value="Submit" name="submit">

    </form>
</body>

</html>