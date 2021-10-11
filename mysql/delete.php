<?php
$server = "localhost";
$user = "encacap";
$password = "encacap";
$database = "web_programming";

$connect = new mysqli($server, $user, $password, $database);
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $query = "DELETE FROM `News` WHERE `id` = $id";
    $result = mysqli_query($connect, $query);
    if ($result) {
        header("Location: ./view.php?delete=true");
    } else {
        echo "Delete failed!";
    }
}
?>
