<?php
/**
 * Created by PhpStorm.
 * User: YangYu
 * Date: 2019/5/22
 * Time: 8:39
 */
function ReverseSentence($str){
//        分割为数字
       $arr= explode(' ',$str);
//       根据键名排序
       krsort($arr);
//       print_r($arr);
//    链接为字符串
      $str= implode($arr,' ');
//      返回字符串
      return $str;
}
$str ='student. a am I';
echo ReverseSentence($str);