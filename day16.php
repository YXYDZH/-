<?php
/**
 * Created by PhpStorm.
 * User: YangYu
 * Date: 2019/5/16
 * Time: 8:39
 */
function calFn($n,$m){
    $count=0;
    for ($i=$n;$i<=$m;$i++){
         $len=strlen($i);
//        echo $i;
        for ($j=$len;$j>=0;$j--){
//           echo $i[$j];
            if (floor($i/pow(10,$j-1)%10)==1){
                $count++;
            }
        }
    }
    return $count;
}
echo calFn(9,13);