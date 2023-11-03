<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="post">
        <h2>Insert data</h2>
        <label>Name</label>
        <input type="text" name="name"><br>
        <label>Address</label>
        <input type="text" name="address"><br>
        <label>Phone</label>
        <input type="number" name="phone"><br>
        <input type="submit" value="Insert">
    </form>
</body>
</html>

<?php
    include 'connection.php';
    
    $insertData = new config();

    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $sql = $insertData->insertdata($name,$address,$phone);

    if($sql){
        echo "<script>alert('Record inserted successfully');</script>";
    }
    else{
        echo "<script>alert('Something went wrong. Please try again');</script>";
    }
?>