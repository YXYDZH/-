<?php
/**
 * Created by PhpStorm.
 * User: YangYu
 * Date: 2019/5/15
 * Time: 8:39
 */
function arr_mr($arr){
    $qi=[];
    $ou=[];
    foreach ($arr as $v){
        if ($v%2==0){
            $ou[]=$v;
        }else{
            $qi[]=$v;
        }
    }
    return array_merge($qi,$ou);
}
$arr=[1,2,3,4,5,6];
print_r(arr_mr($arr));