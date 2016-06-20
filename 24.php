<p>24. Вам нужно разработать программу, которая считала бы количество вхождений
    какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
    442158755745 встречается 4 раза.</p>
</br>
<?php
/**
 * Created by PhpStorm.
 * User: AIR
 * Date: 19.06.2016
 * Time: 14:44
 */

$number=442158755745;
$digit=5;
$sum=0;
for ($i=0;$i<strlen((string)$number);$i++)
{
    $numberStr = (string)$number;
    $numbToCheck=$numberStr[$i];
    if ($numbToCheck==$digit) {$sum+=1;}

}
echo "Цифра $digit зустрічається в числі $number - $sum раз!";
