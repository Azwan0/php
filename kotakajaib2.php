<?php

echo "masukkan nombor anda =";
$input = trim(fgets(STDIN));
for (
    $i= $input;
    $i> 0;
    $i=$i - 1
) {
    echo $i.PHP_EOL;
}  