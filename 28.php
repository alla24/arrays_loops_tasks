<p>28. Вывести таблицу умножения с помощью двух циклов for.</p>

<?php
/**
 * Created by PhpStorm.
 * User: AIR
 * Date: 20.06.2016
 * Time: 18:03
 */

for ($i=1;$i<10;$i++)
{for ($j=1;$j<10;$j++)
{
    $res=$i*$j;
    echo "$i x $j = $res</br>";
}
    echo '</br>';
}