<?php

function number(int $num)
{
    if ($num / $num && $num > 1) {
        echo "True";

    } else {
        echo "False";
    }
}

number(100);
