<?php
$servername = "localhost";
$username = "root";
$password = "";
try {
$conn = new PDO("mysql:host=$servername", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "CREATE DATABASE IF NOT EXISTS algorythm";
// use exec() because no results are returned
$conn->exec($sql);
$sql = "use algorythm";
$conn->exec($sql);
// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS alTable (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
mail VARCHAR(30) NOT NULL,
name VARCHAR(30) NOT NULL,
comment VARCHAR(50)
)";
$conn->exec($sql);
echo "Database created successfully<br>";
echo "Table created successfully";
}
catch(PDOException $e)
{
echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>