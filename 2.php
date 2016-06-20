<b>Работа с foreach</b>
<p>2. Дан массив с элементами 1, 20, 15, 17, 24, 35.
    С помощью цикла foreach найдите сумму элементов этого массива.
Запишите ее в переменную $result.</p>

<?php
/**
 * Created by PhpStorm.
 * User: AIR
 * Date: 18.06.2016
 * Time: 13:40
 */
$myArr = [1, 20, 15, 17, 24, 35];
$result=0;

foreach ($myArr as $i)
{$result+=$i;}

echo 'Cуммf элементов этого массива - '.$result;