<?php
// Making Array From String...

$Sentance = "Quick Brown Fox Jump Over The Lazy Dog";
$Words = explode(" " , $Sentance);
print_r($Words) ."/n";

// Searching Index Position Of Elements From Array

$fruits = ["Mango" , "Apple" , "Lichi" , "Orange" , "Pineapple" , "grape" , "Banana"];

$position_of_Orange = array_search("Orange" , $fruits);

//echo $position_of_Orange;

if($position_of_Orange){
    echo "Orange Is Found At Position $position_of_Orange";
}else{
    echo "Orange Not Found";
}

echo PHP_EOL;

// If The Position Of Elements At 0 , Then Use Like Below Option To Search

$fruits = ["Orange" , "Mango" , "Apple" , "Lichi" , "Pineapple" , "grape" , "Banana"];

$position_of_Orange = array_search("Orange" , $fruits);

echo $position_of_Orange ."\n";

if($position_of_Orange !== false){
    echo "Orange Is Found At $position_of_Orange";
}else {
    echo "Orange Is Not Found";
}

echo PHP_EOL;

// Search From Associative Array ....

$fruits = [  
    "Apple"=>"আপেল", 
    "Orange"=>"কমলা" , 
    "Banana"=>"কলা"
    ];
    
    print_r($fruits);

    echo array_search("কলা" , $fruits) ."\n";  // Value Search
    echo array_key_exists("Orange" , $fruits);  // Key Search
    echo PHP_EOL;

    /// Making Array From Associative Array 
    // With "Array KEY "

    $Key = array_keys($fruits);
    print_r($Key);
    echo PHP_EOL;

    $Value = array_values($fruits);
    print_r($Value);
    echo PHP_EOL;

    // Array Making Opposite Value And Key

    $new_fruits = array_flip($fruits);
    print_r($new_fruits);

