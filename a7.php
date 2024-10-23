<?php
//  Marge Array ...


$fruits = ["Mango" , "Jackfruit" ,"Watermelon"];
print_r($fruits);

$new_fruit = ["Dragon" ,"Pear" , "Strawberry" , "Mango"];
print_r($new_fruit);

$all_fruits = array_merge($fruits,$new_fruit);
print_r($all_fruits);

echo PHP_EOL;

// Array Data Segregation 

// 1 ) Finding Common Items ...

$class6 = ["A" , "B" , "E" , "S" , "R" , "F"];
$class7 = ["R" , "T" , "Z" , "A", "F"];

$common_items = array_intersect($class6 , $class7);
print_r($common_items);

echo PHP_EOL;

$class6 = ["A" , "B" , "E" , "S" , "R" , "F" ,"E" , "S" , "A"];
$class7 = ["R" , "T" , "Z" , "A", "F"];

$class7_items = array_diff($class6,$class7);
print_r($class7_items);

$unique_names = array_unique($class6);
print_r($unique_names);

