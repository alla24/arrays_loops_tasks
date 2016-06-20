<p>25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
    найти максимальное и минимальное значение и поменять их местами.</p>
</br>
<?php
/**
 * Created by PhpStorm.
 * User: AIR
 * Date: 19.06.2016
 * Time: 22:11
 */

$arrSize=rand(0,20);
$arr= [];
//populate array
foreach (range(0, $arrSize) as $number) {
    array_push($arr,rand());
}
echo "</br> Initial array is: </br>";
print_r($arr);

//find min, max and remember their positions

$min=getrandmax();
$minPosition=0;
$max=0;
$maxPosition=0;
for($i=0;$i<sizeof($arr);$i++)
{
    if ($arr[$i]<$min){
        $min=$arr[$i];
        $minPosition=$i;
    }
    if ($arr[$i]>$max){
        $max=$arr[$i];
        $maxPosition=$i;
    }

}
//change positions of min and max
$arr[$minPosition]=$max;
$arr[$maxPosition]=$min;

echo "</br> Min is: $min at position $minPosition</br>";
echo "</br> Max is: $max at position $maxPosition</br>";

echo "</br> New array is: </br>";
print_r($arr);
