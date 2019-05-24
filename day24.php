<?php
/**
 * Created by PhpStorm.
 * User: YangYu
 * Date: 2019/5/24
 * Time: 8:43
 */
function Add($n, $m) {
    $count=0;
    for ($i=1;$i<=$n;$i++){
        $count++;
    }
    for ($i=1;$i<=$m;$i++){
        $count++;
    }
    return $count;
}
echo  Add(15,19);