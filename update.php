<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="post">
        <h2>Update by Id</h2>
        <label>ID</label><br>
        <input type="number" name="id"><br>
        <label>Name</label><br>
        <input type="text" name="name"><br>
        <label>Address</label><br>
        <input type="text" name="address"><br>
        <label>Phone</label><br>
        <input type="number" name="phone"><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>

<?php
    include 'connection.php';
    $update = new config();
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    echo " Id = {$id} Name = {$name} Address = {$address} Phone = {$phone}";

    $sql = $update->update($id,$name,$address,$phone);

    if($sql){
        echo "<script>alert('Record updated successfully');</script>";
    }
    else{
        echo "<script>alert('Something went wrong. Please try again');</script>";
    }
?>