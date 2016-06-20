<p>17.Составьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
    месяц выведите жирным. Текущий месяц должен храниться в переменной $month.</p>


<?php
/**
 * Created by PhpStorm.
 * User: AIR
 * Date: 18.06.2016
 * Time: 15:06
 */
$months=['January','February','March','April','May','June',
    'July','August','September','October','November','December'];
$month="June";

foreach ($months as $m)
{
    if ($m==$month)
    {
        echo "<b> $m </b></br>";
    }
    else
    {
        echo "$m </br>";
    }
}