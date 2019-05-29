<?php
/**
 * Created by PhpStorm.
 * User: YangYu
 * Date: 2019/5/29
 * Time: 8:43
 */
function Combine($arr_A, $arr_B){
    $arr_C=[];
    foreach ($arr_A as $v){
        $arr_C[]=$v;
    }
    foreach ($arr_B as $v){
        $arr_C[]=$v;
    }
    for ($i=0;$i<count($arr_C);$i++){
        for ($j=0;$j<count($arr_C);$j++)
        if ($arr_C[$i]<$arr_C[$j]){
            $new=$arr_C[$i];
            $arr_C[$i]=$arr_C[$j];
            $arr_C[$j]=$new;
        }
    }
    return $arr_C;
}
$arr_A=[1,3,6,9,21];
$arr_B=[2,4,5,8,20];
print_r(Combine($arr_A, $arr_B));