<b>Работа с ключами</b>

<p>4. Дан массив $arr.
    С помощью первого цикла foreach выведите на экран столбец ключей,
    с помощью второго — столбец элементов.</p>


<?php
/**
 * Created by PhpStorm.
 * User: AIR
 * Date: 18.06.2016
 * Time: 13:54
 */
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

echo '</br>';
echo "столбец ключей: </br>";
foreach ($arr as $key=>$value)
    {echo $key.'</br>';}

echo '</br>';

echo "столбец элементов: </br>";
foreach ($arr as $key=>$value)
    {echo $value.'</br>';}