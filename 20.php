<p>20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20
    рядов, а не 5.<br><br>
    x<br>
    xx<br>
    xxx<br>
    xxxx<br>
    xxxxx</p>

<?php
/**
 * Created by PhpStorm.
 * User: AIR
 * Date: 18.06.2016
 * Time: 15:21
 */

for ($i=1;$i<=20;$i++)
{
    for ($j=1;$j<=$i;$j++)
    {
        echo "x";
    }
    echo '</br>';
}