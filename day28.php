<?php
/**
 * Created by PhpStorm.
 * User: YangYu
 * Date: 2019/5/28
 * Time: 8:41
 */
function Find($target, $array){
    $fl=0;
foreach ($array as $va ){
    foreach ($va as $v ){
//        echo $v;
        if ($target==$v){
            $fl=1;
        }
    }
 }
    if ($fl==1){
        return true;
    }else{
        return false;
    }
}
$target = 7 ;
$array=[
    [1,2,8,9],
    [2,4,9,12],
    [4,7,10,13],
    [6,8,11,15]
];
var_dump(Find($target,$array)) ;
