<p>15. Дан массив $arr. С помощью цикла foreach и переменной $count подсчитайте количество
    элементов этого массива. Проверьте работу скрипта на примере массива с элементами 4, 2,
    5, 19, 13, 0, 10.</p>

<?php
/**
 * Created by PhpStorm.
 * User: AIR
 * Date: 18.06.2016
 * Time: 15:01
 */
$arr=[4, 2, 5, 19, 13, 0, 10];
$count=0;
foreach ($arr as $i)
{
    $count++;
}
echo "There are $count numbers in this array";
