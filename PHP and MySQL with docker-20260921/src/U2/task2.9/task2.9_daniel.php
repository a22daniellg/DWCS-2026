<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["vUnits"])) {
                $unitsErr = "Units are required";
            }
        
            }
    
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="idUser">Username:</label><br>
        <input type="text" id="idUser" placeholder="Enter username"><br><br>
        <label for="idPass">Password:</label><br>
        <input type="text" id="idPass" placeholder="Enter password"><br><br>
        <label for="">City of employment:</label><br>
        <input type="text" placeholder="Enter city"><br><br>
        <label for="">Web Server</label><br>
        <select name="server">
            <option value="Apache">Apache</option>
            <option value="Nginx">Nginx</option>
        </select><br><br>
        <label for="">Please specify your role:</label><br>
        <input type="radio" name="role" value="Admin">
        <label for="">Admin:</label><br>
        <input type="radio" name="role" value="Engineer">
        <label for="">Engineer:</label><br>
        <input type="radio" name="role" value="Manager">
        <label for="">Manager:</label><br>
        <input type="radio" name="role" value="Guest">
        <label for="">Guest:</label><br>
        <input type="checkbox" id="idMail" name="sign">
        <label for="idMail">Mail</label>
        <input type="checkbox" id="idPayroll" name="sign">
        <label for="idPayroll">Payroll</label>
        <input type="checkbox" id="idService" name="sign">
        <label for="idService">Self-service</label>
    </form>
</body>
</html>