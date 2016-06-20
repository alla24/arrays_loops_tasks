<p>8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку
    '­1­2­3­4­5­6­7­8­9­'.

<?php
/**
 * Created by PhpStorm.
 * User: AIR
 * Date: 18.06.2016
 * Time: 14:27
 */

$arr =[1, 2, 3, 4, 5, 6, 7, 8, 9];
$myStr="-";
echo '</br>';
foreach ($arr as $i)
{$myStr.="{$i}-";}
echo $myStr;