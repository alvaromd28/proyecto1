<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "icsitter";

    function dbConnect ($servername, $username, $password, $dbname){
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
           return false;
        }
        return $conn;
    }

    function insert ($userName, $msg){
        $val = "'$userName', '$msg'";
        $sql = "INSERT INTO information (userName, msg) VALUES (".$val.")";
        $conn = dbConnect("localhost","root","","icsitter");
        $conn->query($sql);
    }

    function get_msg (){
        $sql = "SELECT userName, msg FROM information ORDER BY id DESC LIMIT 20";
        $conn = dbConnect("localhost","root","","icsitter");
        $result = $conn->query($sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo $row["userName"]. ": " . $row["msg"]. "<br>";
            }
        } else {
            echo "0 results";
        }
    }
?>
   
