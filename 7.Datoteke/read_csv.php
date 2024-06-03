<?php

const USERS_CSV = __DIR__ . '/podaci/users.csv';

if(($handle = fopen(USERS_CSV, 'r')) !== false) {
    // $handle = fopen(USERS_CSV, 'r');
    
    $data = [];
    while(fgetcsv($handle) !== false) {
    // while(($row = fgetcsv($handle)) !== false) {
        $data[] = fgetcsv($handle);
        // $data[] = $row;
    }
} else {
    echo 'Unable to open the file.';
}
echo '<pre>';
var_dump($data);