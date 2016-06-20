<p>13. Вывести таблицу умножения</p>

<?php
/**
 * Created by PhpStorm.
 * User: AIR
 * Date: 18.06.2016
 * Time: 14:45
 */

for ($i=1;$i<10;$i++)
{for ($j=1;$j<10;$j++)
{
    $res=$i*$j;
    echo "$i x $j = $res</br>";
}
    echo '</br>';
}