<?php
$server = "localhost";
$user = "encacap";
$password = "encacap";
$database = "web_programming";

$connect = new mysqli($server, $user, $password, $database);
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

$query = "CREATE TABLE IF NOT EXISTS News(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(30) NOT NULL,
    description TEXT NOT NULL,
    content TEXT NOT NULL,
    createDate DATE NOT NULL
)";

if ($connect->query($query) === true) {
    echo "Table News created successfully";
} else {
    echo "Error creating table: " . $connect->error;
}
?>
