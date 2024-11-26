<?php

echo "masukkan nombor anda =";
$input = trim(fgets(STDIN));

for (
   $i = 1;
   $i<=$input;
   $i = $i + 1
) {

   for (
      $j = 1;
      $j <= $input;
      $j = $j + 1
    ) {
        echo "$j  ";
    }
    echo "".PHP_EOL;
}    