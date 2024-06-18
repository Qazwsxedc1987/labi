<?php
// Создаем пустой массив
$numbers = array();

// Заполняем массив числами от 99 до 199
for ($i = 99; $i <= 199; $i++) {
    array_push($numbers, $i);
} // Находим произведение всех четных чисел в массиве
$product = 1;
foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        $product *= $number;
    }
}
// Выводим результат на экран 
echo "Произведение всех четных чисел в массиве: " . $product;
