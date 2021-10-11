<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD MySQL - 1851120020 - Nguyễn Khắc Khánh</title>
</head>
<body>
    <?php
    $server = "localhost";
    $user = "encacap";
    $password = "encacap";
    $database = "web_programming";

    $connect = new mysqli($server, $user, $password, $database);
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }

    if (!empty($_GET["insert"])) {
        echo "<h3>Đã thêm tin tức thành công</h3>";
    } elseif (!empty($_GET["update"])) {
        echo "<h3>Đã cập nhật tin tức thành công</h3>";
    } elseif (!empty($_GET["delete"])) {
        echo "<h3>Đã xoá tin tức thành công</h3>";
    }

    $sql = "SELECT * FROM News";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<b>ID:</b> " .
                $row["id"] .
                "<b> - Title: </b>" .
                $row["title"] .
                "<b> - Description: </b>" .
                $row["description"] .
                "<b> - Content: </b>" .
                $row["content"] .
                " <a href='./index.php?id=" .
                $row["id"] .
                "'>Sửa</a>" .
                " <a href='./delete.php?id=" .
                $row["id"] .
                "'>Xoá</a><br>";
        }
    } else {
        echo "0 results";
    }

    $connect->close();
    ?>
</body>
</html>