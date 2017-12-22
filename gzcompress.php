<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gzcompress</title>
</head>
<body>
<?php
$string =

    "Lorem ipsum dolor sit amet, consectetur

adipiscing elit. Nunc ut elit id mi ultricies

adipiscing. Nulla facilisi. Praesent pulvinar,

sapien vel feugiat vestibulum, nulla dui pretium orci,

non ultricies elit lacus quis ante. Lorem ipsum dolor

sit amet, consectetur adipiscing elit. Aliquam

pretium ullamcorper urna quis iaculis. Etiam ac massa

sed turpis tempor luctus. Curabitur sed nibh eu elit

mollis congue. Praesent ipsum diam, consectetur vitae

ornare a, aliquam a nunc. In id magna pellentesque

tellus posuere adipiscing. Sed non mi metus, at lacinia

augue. Sed magna nisi, ornare in mollis in, mollis

sed nunc. Etiam at justo in leo congue mollis.

Nullam in neque eget metus hendrerit scelerisque

eu non enim. Ut malesuada lacus eu nulla bibendum

id euismod urna sodales. ";

$compressed = gzcompress($string);

echo 'gzcompress:'.$compressed;
echo '<br />';
echo strlen($compressed);
echo '<br />';
$original = gzuncompress($compressed);
echo 'gzuncompress:'.$original;
echo '<br />';
echo strlen($original);
echo '<br />';
echo '<hr />';

$word = '我来自何方？我来自何方？';
$encoded = gzdeflate($word);
$decoded = gzinflate($encoded);
echo $encoded;
echo '<br />';
echo strlen($encoded);
echo '<br />';
echo $decoded;
echo '<br />';
echo strlen($decoded);
echo '<br />';
echo '<hr />';

//$str1 = '布局 1 介绍 布局，简单来说就是设置元素的大小和位置。 Ext 的布局系统包括组件，布局，容器，容器是一种特殊的组件，可以管理组件的大小和位置。 容器是通过 doLayout 来重新计算布局，并更新 DOM. 2 手工布局是不必要的，框架会为你自动处理。';
$str1 = '我来自偶然　像一颗尘土 有谁看出我的脆弱 我来自何方　我情归何处 谁在下一刻呼唤我 天地虽宽　这条路却难走 我看遍这人间坎坷辛苦 我还有多少爱　我还有多少泪 要苍天知道　我不认输 感恩的心　感谢有你 伴我一生　让我有勇气作我自己 感恩的心　感谢命运 花开花落　我一样会珍惜 ';

$str2 = '!@#$%^&*()QWERTYUIOPSDFGHJKL!@#$%^&*()QWERTYUIOPSDFGHJKL:ZXCVBNMa!@#$%^&*()ERTYUIODFGHJKLXCVBNM@#$%^&*()RTYUIOPD:ZXCVBNM#!@#!@#$%^&*()QWERTYUIOPSDFGHJKL:ZXCVBNM-!@#$%^&*()ERTYUIODFGHJKLXCVBNM@#$%^&*()RTYUIOPD$%^&*()ERTYUIODFGHJ!@#$%^&*()QWERTYUIOPSDFGHJKL:ZXCVBNM]!@#$%^&*()ERTYUIODFGHJKLXCVBNM@#$%^&*()RTYUIOPDKLXCVBNM@#$%^&*()RTYUIOPDFGHJKLCVBNMFGHJTYU%^&RFGHJ4d56g7h8ui7h8ujirqwerqh8';

echo '<b>压缩中文比较</b><br><br>';
compress_comp($str1, 1000); // 压缩1000次 与 解压缩1000次比较

echo '<b>压缩英文数字比较</b><br><br>';
compress_comp($str2, 1000); // 压缩1000次 与 解压缩1000次比较

/* 压缩 */
function compress_comp($str, $num){

    $func_compress = array('gzcompress', 'gzencode', 'gzdeflate', 'bzcompress');

    echo '原文:'.$str.'<br><br>';
    echo '原文大小:'.strlen($str).'<br><br>';

    for($i=0,$length=count($func_compress); $i<$length; $i++){

        $starttime = get_microtime();
        for($j=0; $j<$num; $j++){
            switch($func_compress[$i]){
                case 'gzcompress':
                    $mstr = gzcompress($str, 9); // 解压方法：gzuncompress
                    break;
                case 'gzencode':
                    $mstr = gzencode($str, 9); // 解压方法：gzdecode php>=5.4
                    break;
                case 'gzdeflate':
                    $mstr = gzdeflate($str, 9); // 解压方法：gzinflate
                    break;
                case 'bzcompress':
                    $mstr = bzcompress($str, 9); // 解压方法：bzdecompress
                    break;
            }
        }
        $endtime = get_microtime();
        echo $func_compress[$i].' 压缩后大小:'.strlen($mstr).' 耗时:'.round(($endtime-$starttime)*1000,5).'ms<br><br>';
    }
}


/* 获取 microtime */
function get_microtime(){
    list($usec, $sec) = explode(' ', microtime(true));
    return $usec+$sec;
}

?>
</body>
</html>