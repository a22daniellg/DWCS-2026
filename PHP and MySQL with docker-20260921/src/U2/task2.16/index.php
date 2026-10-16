<?php
require_once("Operations.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    // Open the database connection
    $oper = new Operations();
    ?>
    <main>
        <h1>List of Students</h1>
        <table>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>DNI</th>
                <th>Age</th>
                <th colspan="2">Actions</th>
            </tr>
            <?php
            $studentList = $oper->getAllstudent();
            foreach ($studentList as $student) {
                echo "<tr>
                <td>" . $student->getName() . "</td>
                <td>" . $student->getSurname() . "</td>
                <td>" . $student->getDni() . "</td>
                <td>" . $student->getAge() . "</td>
                <td><a href='modifyStudent.php?studentId=" .  $student->getId() . "'>✏️</a></td>
                <td><a href='delete.php?studentId=" .  $student->getId() . "'>🗑️</a></td>
            </tr>";
            }
            ?>
        </table>
        <div>
            <a href="newStudent.php">Add a new student</a>
        </div>
    </main>
</body>

</html>