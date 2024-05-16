<?php
$a = 5;
$b = $a;
$a = 6;

echo 'A je '. $b. ', B je '. $b . '<br><br>';

$a = 5;
$b = &$a;
$a = 6;

echo 'A je '. $b. ', B je '. $b. '<br><br>';