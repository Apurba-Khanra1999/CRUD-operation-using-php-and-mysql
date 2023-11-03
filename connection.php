<?php
    //session_start();

    class config{
        public $conn;

        function __construct(){
            $serverName = "localhost";
            $username = "root";
            $password = "";

            $dbname = "students";

            $this->conn = new mysqli($serverName,$username,$password,$dbname);
            if($this->conn -> connect_error){
                die("Connection failed: ". $this->conn->connect_error);
            }
        
            echo "Database connected successfully";
        }

        function fetchdata()
        {
            echo "<h2>All Records</h2>";
            $result=mysqli_query($this->conn,"select * from user");
            if ($result-> num_rows > 0){
                echo " <table><tr><th>Id</th><th>Name</th><th>Address</th><th>Phone</th></tr>";
                while ($row = $result -> fetch_assoc()){
                   
                    //echo "id" . $row['id'] . "<br>";
                    echo "<tr><td>" .$row['id'] . "</td> <td>" .$row['name'] . "</td> <td>" .$row['address'] . "</td> <td>" .$row['phone'] . "</td></tr> <br>";
            }
            echo "</table>";
            }
            
        }

        function fetchonerecord($id)
        {
            $result=mysqli_query($this->conn,"select * from user where id=$id");
            if ($result-> num_rows > 0){
                echo " <table><tr><th>Id</th><th>Name</th><th>Address</th><th>Phone</th></tr>";
                while ($row = $result -> fetch_assoc()){
                   
                    //echo "id" . $row['id'] . "<br>";
                    echo "<tr><td>" .$row['id'] . "</td> <td>" .$row['name'] . "</td> <td>" .$row['address'] . "</td> <td>" .$row['phone'] . "</td></tr> <br>";
            }
            echo "</table>";
            echo "<script>alert('One Record fetched');</script>";
            }
        }

        function insertdata($name, $address, $phone){
            $result = mysqli_query($this->conn,"insert into user(name,address,phone) values('$name','$address',$phone);");
            return $result;
        }

        function delete($id)
        {
            $deleterecord=mysqli_query($this->conn,"delete from user where id=$id");
            return $deleterecord;
        }

        function update($id,$name,$address,$phone){
            $update = mysqli_query($this->conn,"update user set name ='{$name}',address = '{$address}',phone = {$phone} where id = {$id};");
            
            return $update;
        }
    }


    

?>