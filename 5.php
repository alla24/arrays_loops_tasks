<p>5. Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' с элементами '200', '300', '400'. С помощью
    цикла foreach выведите на экран столбец строк такого формата: 'Коля — зарплата 200
    долларов.'.</p>

<?php
/**
 * Created by PhpStorm.
 * User: AIR
 * Date: 18.06.2016
 * Time: 14:00
 */
$arr =['Коля'=>'200', 'Вася'=>'300','Петя'=>'400'];

echo '</br>';
foreach ($arr as $key=>$value)
    {echo "{$key} — зарплата {$value} долларов.</br>";}