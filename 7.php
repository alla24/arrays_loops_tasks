<p>7. Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if
    выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10.</p>

<?php
/**
 * Created by PhpStorm.
 * User: AIR
 * Date: 18.06.2016
 * Time: 14:24
 */

$arr =[2, 5, 9, 15, 0, 4];

echo '</br>';
foreach ($arr as $i)
{if ($i>3 and $i<10) echo $i."</br>";}