<?php
         include 'connection.php';

    class crud{
        
        function selectAll(){
            $config = new config();
            $config -> fetchdata();
        }
        
        }

    $select = new crud();
    $select -> selectAll();

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br>
    <input type="button" value="Get By Id" id="btnGetByid" onclick="Javascript:window.location.href = 'http://localhost/websites/advanced/getbyid.php';">
    <input type="button" value="Update" id="btnUpdate" onclick="Javascript:window.location.href = 'http://localhost/websites/advanced/update.php';">
    <input type="button" value="Delete" id="btnDelete" onclick="Javascript:window.location.href = 'http://localhost/websites/advanced/delete.php';">
    <input type="button" value="Insert" id="btnInsert" onclick="Javascript:window.location.href = 'http://localhost/websites/advanced/insert.php';">
</body>
</html>