<?php
/**
 * Created by PhpStorm.
 * User: YangYu
 * Date: 2019/5/30
 * Time: 8:39
 */

function NumberOf1($n){
    $count=0;
 while ($n>0){
//     echo $n;
     if ($n%2==1){
         $count++;
     }
     $n=$n/2;
 }
 return $count;
}
echo NumberOf1(100);