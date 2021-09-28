<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <title>1851120020 - Nguyễn Khắc Khánh</title>
</head>
<body>
<?php for ($first_factor = 1; $first_factor <= 10; $first_factor++) {
    echo "<div>";
    for ($second_fator = 1; $second_fator <= 10; $second_fator++) {
        echo $first_factor .
            " * " .
            $second_fator .
            " = " .
            $first_factor * $second_fator .
            "<br>";
    }
    echo "</div>";
} ?>
</body>
</html>
