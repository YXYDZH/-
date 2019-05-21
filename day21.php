<?php
/**
 * Created by PhpStorm.
 * User: YangYu
 * Date: 2019/5/21
 * Time: 8:40
 */
function FindNumsAppearOnce($array){
    $str='';
    foreach ($array as $v){
        $str.=$v;
    }
    $len=strlen($str);
    $arr=[];
    for ($i=0;$i<$len;$i++){
//        echo $str[$i];
       $count= substr_count($str,$str[$i]);
       if ($count==1){
           $arr[]=$str[$i];
       }
    }
return $arr;
}
$array = [2,4,3,6,3,2,5,5];
print_r(FindNumsAppearOnce($array));