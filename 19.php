<p>19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
    текущий день выведите курсивом. Текущий день должен храниться в переменной $day.</p>

<?php
/**
 * Created by PhpStorm.
 * User: AIR
 * Date: 18.06.2016
 * Time: 15:19
 */
$days=['понеділок','вівторок','середа','четвер','п\'ятниця','субота','неділя'];
$day='субота';

foreach ($days as $d)
{
    if ($d==$day)
    {
        echo "<i> $d </i></br>";
    }
    else
    {
        echo "$d </br>";
    }

}