<?php
//https://edabit.com/challenge/ccv2_8d5168d2a717493df3f4484c

function weight($radius, $height)
{
    return round((((pi() * ($radius ** 2) * $height) / 1000)), 2);
}
