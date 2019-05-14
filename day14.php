<?php
/**
 * Created by PhpStorm.
 * User: YangYu
 * Date: 2019/5/14
 * Time: 8:39
 */

function calSteps($n){
    if ($n==1){
        return 1;
    }elseif($n==2){
        return 2;
    }elseif ($n>=3){
        return calSteps($n-1)+calSteps($n-2);
    }
}
echo calSteps(6);