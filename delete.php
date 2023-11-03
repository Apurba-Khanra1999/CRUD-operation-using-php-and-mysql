<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="delete.php" method="post">
        <h2>Delete Record</h2><br>
        <label>Enter Id</label><br>
        <input type="text" name="id">
        <input type="submit" value="Delete">
    </form>
</body>
</html>

<?php
    include 'connection.php';
    
    $delete = new config();
    $id = $_POST['id'];

    $sql = $delete->delete($id);

    if($sql){
        echo "<script>alert('Record deleted successfully');</script>";
    }
    else{
        echo "<script>alert('Something went wrong. Please try again');</script>";
    }
?>