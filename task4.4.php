<?php
/*Написать функцию которая рекурсивно выводит все делители переданого числа(для 21 это 7 и 3)*/
function del($d , $i){
    if($d >= $i && $d % $i==0 ){

        echo "$i". PHP_EOL;


    }

    del($d, ++$i);


}
del(27,1);
