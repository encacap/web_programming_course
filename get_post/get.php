<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET - 1851120020 - Nguyễn Khắc Khánh</title>
</head>
<body>
    <h1>GET</h1>
    <?php if (isset($_GET["name"]) && isset($_GET["age"])) {
        echo "Tên: " . $_GET["name"] . "<br>";
        echo "Tuổi: " . $_GET["age"];
    } ?>
</body>
</html>