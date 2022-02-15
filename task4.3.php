<?php
/*Написать функцию которая проверяет является ли число простым или нет(продвинутый уровень - использовтаь рекурсию)*/
function number(int $num)
{
    if ($num / $num && $num > 1) {
        echo "True";

    } else {
        echo "False";
    }
}

number(100);
