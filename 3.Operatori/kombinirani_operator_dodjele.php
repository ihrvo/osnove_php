<?php

$a = 1;
$b = 2;

echo $a += $b.'<br>'; // Ekvivalent $a = $a + $b
echo $a -= $b.'<br>'; // Ekvivalent $a = $a - $b
echo $a *= $b.'<br>'; // Ekvivalent $a = $a * $b
echo $a /= $b.'<br>'; // Ekvivalent $a = $a / $b
echo $a %= $b.'<br>'; // Ekvivalent $a = $a % $b
echo $a .= $b.'<br>'; // Ekvivalent $a = $a . $b

// $print = print $a .= $b; // print može u funkciju

echo $a .= $b.'<br>';
echo 'Novi redak<br><br>';

var_dump($a . $b);