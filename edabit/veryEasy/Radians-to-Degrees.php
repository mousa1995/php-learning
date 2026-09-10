<?php
function radians_to_degrees($radians)
{
    return round($radians * 180 / pi(), 1);
}


echo radians_to_degrees(1); //➞ 57.3 
echo radians_to_degrees(20); // ➞ 1145.9
echo radians_to_degrees(50);//  ➞ 2864.8
