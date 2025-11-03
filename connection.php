
<?php 
    $username = "root";
    $servername = "localhost";
    $password = ""; 
    $db_name = "trekation";
    $port = "3306";
    $conn = mysqli_connect($servername, $username, $password, $db_name);
    if (!$conn) {
        echo "Error: Unable to connect to MySQL.";
        die("Connection failed: " . mysqli_connect_error());
    }   
    echo "<script type='text/javascript'>console.log('Connection succesful. ');</script>";
?>