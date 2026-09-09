<?php
#https://edabit.com/challenge/ccv2_b108ee7ce4cee887df35033e

function color_invert($rgb)
{
    return array_map(
        fn($color) =>
        abs($color - 255),
        $rgb
    );
}
