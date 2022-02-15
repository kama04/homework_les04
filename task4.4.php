<?php

$del=[];

function divider(int $d){
    for($i=1; $i<=$d; $i++){
        if($d%1==0){

            array_push($del , $i);
        }
    }
    foreach (int $item in $del){
        echo $item;
    }
}