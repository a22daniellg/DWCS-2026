<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manage</title>
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
        $name = "";
        $nameErr = "";
        if (empty($_POST["vName"])) {
        $nameErr = "name is required";
        }
        else {
            $opcion = $_POST["opcion"];
            $name = test_input($_POST["vName"]);
            if (empty($_POST["class"])) {
                echo ("<p>". $name . " wants to enrol in the follwing subject: ". $subjects[$opcion]."</p>");
            }
            else {
                echo ("<p>". $name . " wants to enrol in the follwing subject: ". $subjects[$opcion]." and ".$_POST["class"]. " classes</p>");
            }
            
            
        }
    ?>
    <span class="error"><?php echo $nameErr; ?></span><br>
    <a href="manage2.php?vName=<?php echo $name;?>&opcion=<?php echo $opcion;?>">Next page</a>
</body>
</html>