<p>22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
    xx<br>
    xxxx<br>
    xxxxxx<br>
    xxxxxxxx<br>
    xxxxxxxxxx</p>

<?php
/**
 * Created by PhpStorm.
 * User: AIR
 * Date: 18.06.2016
 * Time: 15:25
 */

$i=1;
while ($i<=5)
{
    for ($j=1;$j<=$i;$j++)
    {
        echo "xx";
    }
    echo '</br>';
    $i++;
}