<?php
// Функция для нахождения максимального значения в индексном массиве
function findMaxValue($arr)
{
    $max_value = $arr[0]; // Предполагаем, что первый элемент является максимальным
    $length = count($arr);

    for ($i = 1; $i < $length; $i++) {
        if ($arr[$i] > $max_value) {
            $max_value = $arr[$i]; // Обновляем максимальное значение, если найден более большой элемент
        }
    }

    return $max_value;
}

// Создаем индексный массив с целыми числами
$numbers = [10, 25, 3, 48, 15];

// Вызываем функцию и выводим результат
echo "Максимальное значение в массиве: " . findMaxValue($numbers);