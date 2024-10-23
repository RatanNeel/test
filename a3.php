<?php

// Adding And Removing New Elements / Index In A Array....

$fruits = ["Mango" , "Watermelon" , "Coconut" , "Banana" , "Jackfruit"];
//print_r($fruits);


// Used For Added As Last element Of The Array.


// $fruits[] = "Pineapple"; // Used For Added As Last element Of The Array.
// $fruits[] = "Olive";      // This Is Called "PUSH" (array push)
// /// OR ///
// //print_r($fruits)."\n";

// array_push($fruits, "Orange");  // Used For Added As Last element Of The Array. 

// print_r($fruits);


//Removing Last Elements / Index In A Array...

// array_pop($fruits);
// print_r($fruits) ."\n";

// $last_item = array_pop($fruits); // POP Benefits (Return The Elements) 
// echo $last_item;

echo PHP_EOL;

// Element Removing From First Of Array...

array_shift($fruits);
print_r($fruits);

// Element adding Into First Of Array...

echo PHP_EOL;

array_unshift($fruits,"Apple");
print_r($fruits);


echo PHP_EOL;

// Adding Elements Into Middle Of The Array...

$fruits = ["Banana" , "Apple" ,"Mango" , "grape"];
print_r($fruits);

array_splice($fruits,0,0,"Lichi"); // ADDING Elements
print_r($fruits);
echo PHP_EOL;

array_splice($fruits,0,1,"Orange"); // Replacing Elements
print_r($fruits);
echo PHP_EOL;

array_splice($fruits,4,1); // Removing Elements From Array...
print_r($fruits);
