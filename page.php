<?php

// Задание 1

function number_1($name, $age): string
{
    return 'Меня зовут ' . $name . '<br>'. 'Мне ' . $age . ' лет.';
}
echo number_1 ('Петя', '18');


echo '<br>';

// Задание 1.5

echo('"!|/’"\\');


echo '<br>';

// Задание 2
const TOTAL = 80;
const PEN = 23;
const PENCIL = 40;
const result = TOTAL - (PEN + PENCIL);
echo result;

echo '<br>';

// Задание 3

$age = 33;
if ($age <= 65 && $age >= 18) {
    echo 'Вам ещё работать и работать';
}elseif ($age > 65) {
    echo 'Вам пора на пенсию';
}elseif ($age >= 1 && $age <= 17) {
    echo 'Вам ещё рано работать';
} else {
    echo 'Неизвестный возраст';
}


echo '<br>';

// Задание 4

$day = 0;
switch ($day) {
    case ($day <= 5 && $day >= 1):
        echo 'Это рабочий день';
    break;
    case($day == 6 || $day == 7):
        echo 'Это выходной день';
    break;
    default:
        echo 'Неизвестный день';
}

echo '<br>';

// Задание 5

$car = array(
    array(
        ' BMW X5',
        ' TOYOTA camry',
        ' Opel Frontera'
    ),
    array( //speed
        ' 120 km/h |',
        ' 150 km/h |'
    ),
    array( //doors
        ' 5 doors |',
        ' 3 doors |'
    ),
    array( //year
        ' 2015 year |',
        ' 2020 year |',
        ' 2018 year |'
    )
);

$auto = 'opel'; // ТУТ ВВОДИТЬ КАКУЮ ТАЧКУ ПОСМОТРЕТЬ ХОЧЕШЬ

if ($auto == 'bmw') {
    echo 'Car' . $car[0][0] . '<br>';
    echo $car[1][1];
    echo $car[2][0];
    echo $car[3][2];
} elseif ($auto == 'toyota') {
    echo 'Car' . $car[0][1] . '<br>';
    echo $car[1][1];
    echo $car[2][0];
    echo $car[3][1];
} elseif ($auto == 'opel') {
    echo 'Car' . $car[0][2] . '<br>';
    echo $car[1][1];
    echo $car[2][1];
    echo $car[3][0];
} else {
    echo 'Неизвестный транспорт';
}

// Задание 6

echo '<table border="1">';
for ($c = 1; $c <= 10; $c++) {
    echo '<tr>';
    for ($k = 1; $k <= 10; $k++) {
        $result = $c * $k;

        echo '<td>';
        if ($c % 2 == 0 && $k % 2 == 0) {
            echo "($result)";
        } elseif ($c % 2 !== 0 && $k % 2 !== 0) {
            echo "[$result]";
        } else {
            echo $result;
        }
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
