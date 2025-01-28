<!-- 1ª Digitação (Aqui) -->
<?php
<<<<<<< HEAD
$servername = "localhost";
=======
$servername = "localhost:3306";
>>>>>>> a25f862c2cf7b374c0dcfbbaf1fdaabe26ac5c45
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>