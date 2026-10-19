<?php
require_once("Operations.php");
$oper = new Operations();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['confirm']  == "yes") {
        $oper->deleteStudent($_GET["studentId"]);
        header("Location: index.php");
    } else {
        header("Location: index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="delete.css">
</head>

<body>
    <div id="container">
        <form action="" method="POST">
            <h1>You are about to delete this profile</h1>
            <h2>Are you sure?</h2>
            <div id="buttons">
                <button type="submit" name="confirm" id="yes" value="yes">Yes</button>
                <button type="submit" name="confirm" id="no" value="no">No</button>
            </div>
        </form>
    </div>

</body>

</html>