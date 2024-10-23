<?php

// For PHP Browser Line Break Tag Is <br/>
// PHP Variable ( Elements)
/*
1 ) Integer/Int. 
2 ) Double/flout (For Full digit)
3 ) Boolean
4 ) Null ( not empty)
5 ) String ( Under '' ,"")
6 ) Array
7 ) Object
8 ) Resources

*/

/*// Boolean

$result=true;
var_dump($result);

// null

$weight=null;
var_dump($weight);


// Zero (0)

$mark='';
var_dump($mark);



// echo "Helow";
// echo "\n";
// echo "World";
// echo "\n";
// echo 777

// 
// $age=12;
// var_dump($age);
// echo "\n";
// $name="Planet";
// var_dump($name);
// $weight=50.667;
// var_dump($weight);
// echo "\n";
*/

// Using Printf

$fname="Isaac";
$lname="Newton";
printf ("His Name Is %s %s", $fname,$lname);
echo "\n";
printf("His %s Name Is %s %s" ,"Full" ,$fname, $lname);

echo "\n";
echo "My
Nmae
Is\n
Isaac
Newton Mandai";

echo "\n";
echo "\n";
echo "My Name Is {$fname} {$lname}";

echo "\n";

$planet1="Murcurry";
$planet2="Jupiter";

echo "The Smallest Planet Name Is ".$planet1." And The Biggest Planet Name Is ".$planet2."\n";
echo "The Smallest Planet Name Is {$planet1} And The Biggest Planet Name Is {$planet2}\n";
printf ("The Smallest Planet Name Is %s And The Biggest Planet Name Is %s\n", ($planet1),($planet2));
printf ("The Smallest Planet Name Is %s And The Biggest Planet Name Is %s\n", strtoupper($planet1),strrev($planet2));


?>