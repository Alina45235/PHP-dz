<?php
// Задача 1
$i = 0;
while ($i <= 100) {
    if($i % 3  === 0) {
        echo($i .PHP_EOL);
    }   
    $i++;

}

// Задача 2
do {
    $age = (int)readline("Введите Ваш возраст: ");
    if ($age < 0 || $age > 100) {
        echo "\033[31mОшибка! Возраст должен быть от 0 до 100 лет!\033[0m" . PHP_EOL;
    }
} while ($age < 0 || $age > 100);

echo "Ваш возраст: $age" . PHP_EOL;

// Задача 3
$n = 15; 
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Таблица с разным фоном строк</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
            text-align: center;
        }
        table {
            width: 60%;
            margin: 20px auto;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>N</th>
            <th>Значение</th>
        </tr>
        
        <?php for ($i = 1; $i <= $n; $i++): ?>
            <?php 
            $bgColor = ($i & 1) ? '#ffffff' : '#e0e0e0';
            ?>
            <tr style="background-color: <?= $bgColor ?>;">
                <td><?= $i ?></td>
                <td>Строка номер <?= $i ?></td>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>

// Задача 4
<?php
$n = 11; 

switch ($n) {
    case 0:
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
    case 6:
    case 7:
    case 8:
    case 9:
    case 10:
    case 11:
    case 12:
    case 13:
    case 14:
    case 15:
        for ($i = $n; $i <= 15; $i++) {
            echo $i . " ";
        }
        break;
    default:
        echo "Ошибка: n должно быть от 0 до 15";
}

// или с циклом:
$n = 10; 

if ($n >= 0 && $n <= 15) {
    for ($i = $n; $i <= 15; $i++) {
        echo ($i . " ");
    }
} else {
    echo "Ошибка: n должно быть от 0 до 15";
}

// Задача 5
$question = "Какой оператор строгого сравнения в PHP?";
$options = [1 => "==", 2 => "=", 3 => "===", 4 => "!=="];
$correct = 3;

do {
    echo "\n$question\n1.{$options[1]} 2.{$options[2]} 3.{$options[3]} 4.{$options[4]}\n> ";
    $answer = trim(readline());
} while (!ctype_digit($answer) || $answer < 1 || $answer > 4);

echo $answer == $correct ? "\n Правильно!" : "\n Неверно! Правильно: {$options[$correct]}";
