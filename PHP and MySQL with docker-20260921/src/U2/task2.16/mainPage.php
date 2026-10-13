<?php
require_once("Operations.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyGuests Management</title>
</head>

<body>
  <h1>MyGuests Management</h1>
  <?php
  try {
    // Open the database connection
    $oper = new Operations();

    // Get a row from MyGuest table
    $resultado = $oper->getStudent(1);
    echo $resultado;

    //Add 
    // echo "<h2>Add a guest:</h2>";
    // $guest1 = new Student();
    // $guest1->setDni("55555555E");
    // $guest1->setName("Dani");
    // $guest1->setSurname("Lijó");
    // $guest1->setAge("25");
    // $numberOfRows = $oper->addStudent($guest1);
    // if ($numberOfRows == 1) echo "<br>New guest added to the database";
    // else echo "<br>No guest has been added";

    //Update 
    // echo "<h2>Update a guest:</h2>";
    // $guest2 = new Student();
    // $guest2->setId(5);
    // $guest2->setName("Luis");
    // $guest2->setSurname("Paz");
    // $guest2->setAge(30);
    // $guest2->setDni("55555555Z");
    // $numberOfRows = $oper->updateStudent($guest2);
    // if ($numberOfRows == 1) echo "<br>Guest modified to the database";
    // else echo "<br>No guest has been updated";

    //Delete
    $numberOfRows = $oper->deleteStudent(5);
    if ($numberOfRows == 1) echo "<br>Guest deleted from the database";
    else echo "<br>No guest has been deleted";

    // Get all rows from MyGuest table
    echo "<h2>List of MyGuest </h2>";
    $studentList = $oper->getAllstudent();
    foreach ($studentList as $student) {
      echo "<br>Guest: $student";
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
</body>

</html>