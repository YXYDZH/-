<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2019/4/13
 * Time: 10:02
 */
/*
 *实现100以内的相加
 */
// 方法一
$sum=0;
for($i=1;$i<=80;$i++)
{
    $sum+=$i;
}
echo $sum;
// 方法二
$sum=$i=0;
while($i<=100)
{
    $sum+=($i++);
}
echo $sum;
// 方法三
function get_sum($n)
{
    return $n==1?1:$n+get_sum($n-1);
}
echo get_sum(100);
// 方法四
echo array_sum(range(1,100))."<br>"  ;
//方法五
$n=80;
echo (1+$n)*($n/2);
/*
 * 阶乘
 */
//方法一
function demo($a)
{
    if($a > 1)
    {
        $r=$a*demo($a-1);
    }else
    {
        $r=$a;
    }

    return $r;
}
$a=4;
echo $a."的阶乘的值".demo($a);
//方法二
function f($n)
{
    $out = -1;
    if($n<0)
        echo "输入不能是负数";
    elseif($n==0||$n==1)
        $out=1;
    else $out=f($n-1)*$n;
    return $out;
}
echo f(4);
//方法三
$result = 1;
for ($i=10; $i >0 ; $i--) {
    $result *= $i;
}
echo '10的阶乘：'.$result;
/*
 * 回文
 */
//方法一
function ishuiwen($str){
    $len=strlen($str);
    $k=intval($len/2)+1;
    for($j=0;$j<$k;$j++){
        if (substr($str,$j,1)!=substr($str,$len-$j-1,1))
        {
          return 0;
        }else{
            return 1;
        }
    }
}
$str=12321;
echo ishuiwen($str);