<?php

function squarearea($base, $height)
{
  return $base * $height;
} 

function trianglearea($base, $height)
{
   return $base * $height / 2;
}

function trapezoidarea($topbase, $bottombase, $height)
{
    return ($topbase + $bottombase) * $height / 2;
}
echo squarearea(5, 3) . "\n";
echo trianglearea(7, 5) . "\n";
echo trapezoidarea(4, 7, 6);
