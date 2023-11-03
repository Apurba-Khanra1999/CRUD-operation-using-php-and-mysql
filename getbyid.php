<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="getbyid.php" method="post">
        <h2>Get user details by ID</h2>  
        <label>Enter id</label>
        <input type="number" name="id"><br>
        <input type="submit" value="Get Details">
    </form>
</body>
</html>

<?php

    include 'connection.php';

    $getbyid = new config();
    $id = $_POST['id'];

    $sql = $getbyid->fetchonerecord($id);

    if($sql){
        echo "<script>alert('Record Fetched successfully');</script>";
    }
    else{
        echo "<script>alert('Something went wrong. Please try again');</script>";
    }

?>