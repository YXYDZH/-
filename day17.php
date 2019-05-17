<?php
/**
 * Created by PhpStorm.
 * User: YangYu
 * Date: 2019/5/17
 * Time: 8:37
 */
/*
 *
 */
function GetUglyNumber_Solution($index){
    /*
     * 重新定义
     */
    $s=$index;
    /*
     * 循环除以2直到不能整除
     */
    while ($s%2==0){
        $s/=2;
    }
    /*
     * 接着循环除以3直到不能整除
     */
    while ($s%3==0){
        $s/=3;
    }
    /*
     * 接着循环除以5直到不能整除
     */
    while ($s%5==0){
        $s/=5;
    }
    /*
     * 判断商是否为一
     */
    if ($s==1){
        return $index."：是丑数";
    }else{
        return $index."：不是丑数";
    }

}
echo GetUglyNumber_Solution(24);