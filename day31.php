<?php
/**
 * Created by PhpStorm.
 * User: YangYu
 * Date: 2019/5/31
 * Time: 8:41
 */
$arr=[1,2,3,4,5,6,7,8,9];
function F_Key($arr,$n){
    foreach ($arr as $k=>$v){
        if ($v==$n){
            return $k;
        }
    }
}
echo F_Key($arr,5);
function D_Key($arr,$n,$i=0){

    if ($arr[$i]!=$n){
        return   $i= D_Key($arr,$n,$i+1);
    }else{
        return $i;
    }
}
echo D_Key($arr,9);