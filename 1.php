<b>Работа с foreach</b>
<p>1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'.
    С помощью цикла foreach выведите эти слова в столбик.</p>
<?php
/**
 * Created by PhpStorm.
 * User: AIR
 * Date: 18.06.2016
 * Time: 13:40
 */
$myArr = ['html', 'css', 'php', 'js', 'jq'];

foreach ($myArr as $i)
{echo $i.'</br>';}