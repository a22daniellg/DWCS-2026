<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manage2</title>
</head>
<body>
    <?php 
        $subjects = ["Java Programming","Web Design","Dockers administration","Django framework","Mongo database"];
        $opcion = $_GET["opcion"];
    ?>
    <form action="manage.php" method="post">
        <label for="idName">Name and surnames: </label>
        <input type="text" id="idName" name="vName" value="<?php echo $_GET["vName"] ?>"><br><br>
        <label for="option">Subject to enroll: </label>
        <select name="opcion" id="idSubject">
        <?php
            $i = 0;
            foreach($subjects as $subject) {
        ?>
        <option value="<?php echo $i ?>"<?php if ($i == $opcion) echo "selected";?>><?php echo $subject ?></option>
            <?php
                $i++;
            }
        ?>
        </select><br><br>
        <label for="In-person">In-person classes</label>
        <input type="radio" id="idInPerson" name="class" value="In-person">
        <label for="Distance">Distance classes</label>
        <input type="radio" id="idDistance" name="class" value="Distance"><br><br>
        <input type="submit" value="Send data">
    </form>
</body>
</html>