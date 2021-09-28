<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <title>1851120020 - Nguyễn Khắc Khánh</title>
</head>

<body>
    <?php
    $a = 0;
    $b = 0;
    $c = 0;
    $x = false;
    $x1 = false;
    $x2 = false;
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (!empty($_POST["a"])) {
            $a = $_POST["a"];
        }
        if (!empty($_POST["b"])) {
            $b = $_POST["b"];
        }
        if (!empty($_POST["c"])) {
            $c = $_POST["c"];
        }
    }
    ?>
    <form action="" method="POST">
        <div class="form-title">
            <div>1851120020</div>
            <div>Nguyễn Khắc Khánh</div>
        </div>
        <div class="line"></div>
        <input type="number" name="a" placeholder="a" value="<?php if (
            $a !== 0
        ) {
            echo $a;
        } ?>" />
        x<sup>2</sup> + 
        <input type="number" name="b" placeholder="b" value="<?php if (
            $b !== 0
        ) {
            echo $b;
        } ?>" />
        x +
        <input type="number" name="c" placeholder="c" value="<?php if (
            $c !== 0
        ) {
            echo $c;
        } ?>" />
        = 0
        <br />
        
            <?php if ($_SERVER["REQUEST_METHOD"] === "POST") {
                if ($a !== 0) {
                    echo '<div class="resolver">';
                    $delta = $b * $b - 4 * $a * $c;
                    if ($delta < 0) {
                        echo "Phương trình vô nghiệm";
                    } elseif ($delta == 0) {
                        $x = -$b / (2 * $a);
                        echo "Phương trình có nghiệm kép: <br /> x1 = x2 = " .
                            $x;
                    } else {
                        $x1 = (-$b + sqrt($delta)) / (2 * $a);
                        $x2 = (-$b - sqrt($delta)) / (2 * $a);
                        echo "Phương trình có 2 nghiệm phân biệt x1 = " .
                            $x1 .
                            "<br /> x2 = " .
                            $x2;
                    }
                    echo "</div>";
                }
            } ?>
        
        <button type="submit">Giải</button>
    </form>

</body>

</html>