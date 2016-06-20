
<p>6. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а
    русские — в массив $ru.
    $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
    $en = array('green', 'red','blue');
    $ru = array('зеленый', 'красный', 'голубой');</p>

<?php
/**
 * Created by PhpStorm.
 * User: AIR
 * Date: 18.06.2016
 * Time: 14:00
 */
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en=[];
$ru=[];

foreach ($arr as $key=>$value)
{array_push($en,$key);
array_push($ru,$value);}

echo '</br>английские названия:';
print_r ($en);
echo '</br>русские названия:';
print_r ($ru);