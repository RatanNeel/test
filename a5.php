<?php
// Associative / Dictionary Array Details 

// $fruits = ["Apple", "Orange" , "Banana"];
// print_r($fruits);
// echo PHP_EOL;

// $fruits = [  
// "Apple"=>"আপেল", 
// "Orange"=>"কমলা" , 
// "Banana"=>"কলা"
// ]; // Key => Value 

// print_r($fruits);

// Adding Elements Into Last Of The associate Array

$fruits = [
"Banana"=>"কলা" ,
"Pear"=>"নাশপাতি",
"Coconut"=>"নারিকেল/পয়োধর"
];
print_r($fruits);
echo PHP_EOL;


// $fruits["Date"]="খেজুর"; // Adding Elements Like This Way At Associate Array ....
// $fruits["Banana"]="Amm"; // Modifying Elements Of Value Like This Into Associate Array 
// print_r($fruits);

// echo PHP_EOL;

// Using "Loop" For Associate Array....Only Use (foreach)

$fruits = [
    "Banana"=>"কলা" ,
    "Pear"=>"নাশপাতি",
    "Coconut"=>"নারিকেল/পয়োধর"
    ];
foreach($fruits as $key=>$value){    //"LOOP"
    echo "The Translation Of {$key} Is {$value} \n";

}
// Removing Elements From Associate Array...
$fruits = [
    "Banana"=>"কলা" ,
    "Mango"=>"আম",
    "Lichi"=>"লিচু"
];

unset($fruits['Banana']);
print_r($fruits);
