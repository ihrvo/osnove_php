<?php

$a = 1;
$b = 2;

echo $a += $b.'<br>'; // Ekvivalent $a 0 $a + $b
echo $a -= $b.'<br>'; // Ekvivalent $a 0 $a - $b
echo $a *= $b.'<br>'; // Ekvivalent $a 0 $a * $b
echo $a /= $b.'<br>'; // Ekvivalent $a 0 $a / $b
echo $a %= $b.'<br>'; // Ekvivalent $a 0 $a % $b
echo $a .= $b.'<br>'; // Ekvivalent $a 0 $a . $b

// $print = print $a .= $b; // print može u funkciju

echo $a .= $b.'<br>';
echo 'Novi redak';