<?php

echo "masukkan nombor anda =";
$input = trim(fgets(STDIN));
for (
    $i= 0;
    $i< $input+1;
    $i=$i + 1
) {
    echo $i;
}  

for (
    $i= $input;
    $i> 0;
    $i=$i - 1
) {
    echo $i;
}  