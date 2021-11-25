<?php
$index = 999;
$num = 0;
do
{
    if ($index % 3 == 0 OR $index % 5 == 0) {
        $num += $index;
    }
    $index --;
}
while ($index > 0);
echo "Сумма чисел кратных 3 или 5, при этом меньше 1000, равна: $num";
