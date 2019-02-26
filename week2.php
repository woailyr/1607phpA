<?php
/**
 * Created by PhpStorm.
 * User: 郭彪
 * Date: 2019/2/26
 * Time: 8:45
 */

function shan($n,$m){
    $num = range(1,$n);
    $len = count($num);
    $q = 0;
    $w = 0;
    $arr = [];
    while ($len>1){
        if (!isset($num[$q])){
            $num = $arr;
            $arr = [];
            $q = 0;
        }
        $w++;
        if ($w==$m){
            unset($num[$q]);
            $w = 0;
        }else{
            $arr[] = $num[$q];
        }
        $q++;
    }
    return $num;
}
//print_r(shan(6,3));
function two($str){
    rsort($str);
    $arr = [[array_shift($str)], [array_shift($str)], [array_shift($str)],];

    for ($i = 0;$i <count($str);$i++){
        $arr[2][] =$str[$i];
        $sum = array_sum($arr[2]);
        if ($sum>array_sum($arr[0])){
            $arr = [$arr[2],$arr[0],$arr[1]];
        }elseif ($sum = array_sum($arr[1])){
            $arr = [$arr[0],$arr[2],$arr[1]];
        }
    }
    print_r($arr);
}
//print_r(two([45,178,323,65,589,123,465]));