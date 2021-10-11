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

    $id = $title = $description = $date = $content = $category = "";
    if (!empty($_GET["id"])) {
        $id = $_GET["id"];
        $sql = "SELECT * FROM news WHERE id = $id";
        $result = $connect->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $title = $row["title"];
            $description = $row["description"];
            $date = $row["createDate"];
            $content = $row["content"];
        }
    }
    if (
        !empty($_POST["title"]) &&
        !empty($_POST["description"]) &&
        !empty($_POST["date"]) &&
        !empty($_POST["content"])
    ) {
        if (empty($_GET["id"])) {
            $query =
                "INSERT INTO news (title, description, createDate, content) VALUES ('" .
                $_POST["title"] .
                "', '" .
                $_POST["description"] .
                "', '" .
                $_POST["date"] .
                "', '" .
                $_POST["content"] .
                "')";

            if ($connect->query($query) === true) {
                Header("Location: ./view.php?insert=true");
            } else {
                echo "Error: " . $query . "<br />" . $connect->error;
            }
        } else {
            $query =
                "UPDATE news SET title = '" .
                $_POST["title"] .
                "', description = '" .
                $_POST["description"] .
                "', createDate = '" .
                $_POST["date"] .
                "', content = '" .
                $_POST["content"] .
                "' WHERE id = $id";

            if ($connect->query($query) === true) {
                Header("Location: ./view.php?update=true");
            } else {
                echo "Error: " . $query . "<br />" . $connect->error;
            }
        }
    }
    $connect->close();
    ?>
    <form action="" method="POST">
        <div>
            <label for="title">Tiêu đề:</label>
            <input type="text" name="title" id="title" value="<?php echo $title; ?>" />
        </div>
        <div>
            <label for="date">Ngày:</label>
            <input type="date" name="date" id="date" value="<?php echo $date; ?>" />
        </div>
        <div>
            <label for="description">Mô tả:</label>
            <input type="text" name="description" id="description" value="<?php echo $description; ?>" />
        </div>
        <div>
            <label for="content">Nội dung:</label>
            <textarea type="text" name="content" id="content"><?php echo $content; ?></textarea>
        </div>
        <?php if (!$id) {
            echo '<button type="submit">Thêm</button>';
        } else {
            echo '<button type="submit">Cập nhật</button>';
        } ?>
    </form>
</body>
</html>