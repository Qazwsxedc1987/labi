<!DOCTYPE html>
<html>

<head>
    <title>Задание 1</title>
    <meta charset="UTF-8">
</head>

<body>

    <table border="1" style="width:90%">
        <caption>
            <h1>Таблица умножения</h1>
        </caption>
        <thead>
            <tr>
                <td>
                    <?php
                    for ($i = 7; $i <= 7; $i++) {
                        for ($j = 1; $j <= 9; $j++) {
                            echo $i . " * " . $j . " = " . $i * $j . "<br>";
                        }
                    }
                    ?>
                </td>
                <td>
                    <?php
                    for ($i = 9; $i <= 9; $i++) {
                        for ($j = 1; $j <= 9; $j++) {
                            echo $i . " * " . $j . " = " . $i * $j . "<br>";
                        }
                    }
                    ?>
                </td>
            </tr>
        </thead>
</body>

</html>