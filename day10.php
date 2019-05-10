<?php
/**
 * Created by PhpStorm.
 * User: YangYu
 * Date: 2019/5/10
 * Time: 8:37
 */
function Str($str){
    //去除数字
    $str=preg_replace("/\\d+/",'',$str);
    //去除空格
    $str=str_replace(' ','',$str);
    //字符串长度
    $len=strlen($str);
    //定义新数组
    static $arr=array();
    //for循环赋值
    for ($i=0;$i<$len;$i++){
        isset($arr[$str[$i]])?$arr[$str[$i]]=$arr[$str[$i]]+1:$arr[$str[$i]]=1;
            if ($arr[$str[$i]]==3){
                return $str[$i];
            }
    }
}
$str="Have yoou ever gone shopping and";
 print_r(Str($str)) ;