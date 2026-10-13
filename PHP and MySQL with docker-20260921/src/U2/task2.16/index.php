<?php
require_once("Operations.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>

<body>
    <?php
    // Open the database connection
    $oper = new Operations();
    ?>
    <h1>List of Students</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>DNI</th>
            <th>Age</th>
            <th>Actions</th>
        </tr>
        <?php
        $studentList = $oper->getAllstudent();
        foreach ($studentList as $student) {
            echo "<tr>
                <td>" . $student->getName() . "</td>
                <td>" . $student->getSurname() . "</td>
                <td>" . $student->getDni() . "</td>
                <td>" . $student->getAge() . "</td>
                <td><button>update</button></td>
                <td><button>delete</button></td>
            </tr>";
        }
        ?>
    </table>

    <button>Add a new student</button>
</body>

</html>