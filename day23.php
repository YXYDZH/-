<?php
/**
 * Created by PhpStorm.
 * User: YangYu
 * Date: 2019/5/23
 * Time: 8:40
 */
function Sum_Solution($n) {
    $n &&($n+=Sum_Solution($n-1));
    return $n;
}
echo Sum_Solution(10);