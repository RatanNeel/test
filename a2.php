<?php

$fruits = ["Mango", "Apple" , "Orange" , "Lichi" , "Graphs"];
$length = count($fruits);
echo $length ."\n";
        for($i = 0; $i<5; $i++){     // $i<$length;
 echo $fruits[$i]."\n";      // echo PHP_EOL;
}

print_r($fruits);