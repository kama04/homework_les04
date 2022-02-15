<?php
/*Написать функцию которая проверяет является ли число простым или нет(продвинутый уровень - использовтаь рекурсию)*/
function number ($num)
{
    
    for($i=2; $i <= $num; $i++) {
        if($num % $i == 0) {
            return false;
            break;
        }
        return true;
         
    
    }
    
}

var_dump(number(43));
