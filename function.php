<?php

/**
 * Выбирает из указанных правильное обозначение относительно заданного числа
 * @param int $number
 * @param string $form1 Вариант обозначения для чисел, где последняя цифра равняется 1.
 * @param string $form2 Вариант обозначения для чисел, где последня цифра принаджежит отрезку [2,4].
 * @param string $form3 Вариант обозначения, где последние цифры принаджежат [11,14],
 * либо последня цифра принадлежит [5,9] или равняется
 * @return string Строка c числом и подходящей формой, например: '3 дня'.
 */
function getIntWord(int $number, string $form1, string $form2, string $form3): string
{
    $lastTwoDigits = abs($number % 100);

    if (11 <= $lastTwoDigits && $lastTwoDigits <= 14) {
        return $number . ' ' . $form3;
    }

    $lastDigit = abs($number % 10);

    if (5 <= $lastDigit && $lastDigit <= 9) {
        return $number . ' ' . $form3;
    }
    if (2 <= $lastDigit && $lastDigit <= 4) {
        return $number . ' ' . $form2;
    }
    if ($lastDigit == 0) {
        return $number . ' ' . $form3;
    }
    if ($lastDigit == 1) {
        return $number . ' ' . $form1;
    }
}