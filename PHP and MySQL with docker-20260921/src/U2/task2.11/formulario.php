<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $subjects = ["Java Programming","Web Design","Dockers administration","Django framework","Mongo database"
        ];

    ?>
    <h1>First practice using forms.</h1>
    <form action="manage.php" method="post">
        <label for="idName">Name and surnames: </label>
        <input type="text" id="idName" name="vName"><br><br>
        <label for="option">Subject to enroll: </label>
        <select name="opcion" id="idSubject">
        <?php 
            $i = 0;
            foreach($subjects as $subject) {
            echo ("<option value='".$i."'>".$subject."</option>");
            $i++;
            }
        ?>
        </select><br><br>
        <input type="submit" value="Send data">
    </form>
</body>
</html>